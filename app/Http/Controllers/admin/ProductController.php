<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // Show all categories
    public function show_categories()
    {
        $categories = Category::all();
        return view('admin.show_categories', compact('categories'));
    }

    // Show form to edit a category
    public function show_edit_category($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.edit_category', compact('category'));
    }

    // Update a category
    public function update_category(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'product_count' => 'nullable|integer|min:0',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'product_count' => $request->product_count ?? 0,
        ]);

        return redirect()->route('admin.show_categories')->with('success', 'Category updated successfully!');
    }

    // Show form to create a new category
    public function show_create_category()
    {
        return view('admin.create_category');
    }

    // Store a new category
    public function store_category(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
            'product_count' => 0,
        ]);

        return redirect()->route('admin.show_categories')->with('success', 'Category created successfully!');
    }

    // Delete a category
    public function delete_category($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.show_categories')->with('success', 'Category deleted successfully!');
    }



     // Show all products
     public function index()
     {
         $products = Product::with('category')->get();
         return view('admin.show_products', compact('products'));
     }
 
     // Show form to create a product
     public function create()
     {
         $categories = Category::all();
         return view('admin.create_product', compact('categories'));
     }
 
     // Store a new product (AJAX)
     public function store(Request $request)
     {
         $request->validate([
             'category_id' => 'required|exists:categories,id',
             'title' => 'required|string|max:255',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file
             'price' => 'required|numeric',
             'description' => 'required|string',
             'usage' => 'nullable|string',
             'material' => 'nullable|string',
             'is_featured' => 'nullable|boolean', // Validate is_featured
         ]);
     
         // Handle the image upload
         if ($request->hasFile('image')) {
             // Get the file with its original name
             $image = $request->file('image');
             $imageName = time() . '_' . $image->getClientOriginalName(); // Make the image name unique with a timestamp
             $image->move(public_path('images'), $imageName); // Store image in the 'images' folder in public
     
             // Save the image path in the database
             $imageUrl = 'images/' . $imageName;
         } else {
             $imageUrl = null;
         }
     
         $category = Category::find($request->category_id);

         // Create a new product
         $product = new Product();
         $product->category_id = $request->category_id;
         $product->category_name = $category->name;
         $product->title = $request->title;
         $product->imageUrl = $imageUrl;
         $product->price = $request->price;
         $product->description = $request->description;
         $product->usage = $request->usage;
         $product->material = $request->material;
         $product->show_feat = $request->is_featured ?? false; // Default to false if not set
         $product->save();
     
         return response()->json([
            'status' => 'success',
            'message' => 'Product created successfully!',
        ]);
    }
     
 
     // Show form to edit a product
     public function edit($id)
     {
         $product = Product::findOrFail($id);
         $categories = Category::all();
         return view('admin.edit_product', compact('product', 'categories'));
     }
 
     // Update a product
  public function update(Request $request, $id)
    {
        // Find the category
        $category = Category::find($request->category_id);
        
        // Validate the request
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image is optional during update
            'price' => 'required|numeric',
            'description' => 'nullable|string', // Allow null for description
            'usage' => 'nullable|string',
            'material' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
        ]);
        
        // Find the product
        $product = Product::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->imageUrl && file_exists(public_path($product->imageUrl))) {
                unlink(public_path($product->imageUrl)); // Delete the old image
            }

            // Get the new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Make the image name unique
            $image->move(public_path('images'), $imageName); // Store the image in 'images' folder

            // Save the new image path in the database
            $product->imageUrl = 'images/' . $imageName;
        }

        // Update fields, only set fields if the user has provided new values
        $product->category_id = $request->category_id;
        $product->category_name = $category->name; // Assuming category name needs to be updated
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->filled('description') ? $request->description : $product->description; // Keep old value if not provided
        $product->usage = $request->filled('usage') ? $request->usage : $product->usage; // Keep old value if not provided
        $product->material = $request->filled('material') ? $request->material : $product->material; // Keep old value if not provided
        $product->show_feat = $request->is_featured ?? false; // Default to false if not set
        // Save the product
        $product->save();

        // Redirect back with a success message
        return redirect()->route('admin.show_products')->with('success', 'Product Updated Successfully');
    }


 
     // Delete a product
     public function destroy($id)
    {
        // Find the product
        $product = Product::findOrFail($id);

        // Delete the image associated with the product if it exists
        if ($product->imageUrl && file_exists(public_path($product->imageUrl))) {
            unlink(public_path($product->imageUrl)); // Delete the image from the public folder
        }

        // Delete the product record
        $product->delete();

        return redirect()->route('admin.show_products')->with('success', 'Product Deleted Successfully');
    }

 
     // Search products
     public function search(Request $request)
     {
         $query = $request->input('query');
         $products = Product::where('title', 'like', "%{$query}%")->get();
 
         return view('admin.show_products', compact('products'));
     }

     public function getProducts()
     {
        // Retrieve all products
        $products = Product::all();

        // Return the products as a JSON response
        return response()->json($products);
     }
     
}

