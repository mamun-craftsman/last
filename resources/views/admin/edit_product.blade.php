@extends('admin.layouts.master')

@section('content')
<section class="bg-[#F9F1BF] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-7xl bg-white shadow-md rounded-lg px-2 sm:px-4 py-2">
        <h2 class="text-[#1B266B] text-2xl font-bold mb-4">Edit Product</h2>

        <!-- Form to Edit Product -->
        <form action="{{ route('admin.update_product', $product->id) }}" method="POST" id="editProductForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 sm:gap-3 md:gap-4 text-base">
                <div class="mb-4">
                    <label for="category_id" class="block text-[#1B266B] font-semibold">Category</label>
                    <select name="category_id" id="category_id" class="w-full px-3 py-2 border border-[#F1CC18] rounded-lg">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label for="title" class="block text-[#1B266B] font-semibold">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        class="w-full px-3 py-2 border border-[#F1CC18] rounded-lg" 
                        value="{{ old('title', $product->title) }}" 
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-[#1B266B] font-semibold">Image</label>
                    <input 
                        type="file" 
                        name="image" 
                        id="image" 
                        class="w-full px-3 py-2 border border-[#F1CC18] rounded-lg" 
                        accept="image/*"
                    >
                    <!-- Display existing image -->
                    <div class="mt-2">
                        @if ($product->imageUrl)
                            <img src="{{ asset('/' . $product->imageUrl) }}" alt="Product Image" class="w-32 h-32 object-contain">
                        @else
                            <span>No image available</span>
                        @endif
                    </div>
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-[#1B266B] font-semibold">Price</label>
                    <input 
                        type="number" 
                        name="price" 
                        id="price" 
                        class="w-full px-3 py-2 border border-[#F1CC18] rounded-lg" 
                        value="{{ old('price', $product->price) }}" 
                        required
                    >
                </div>
            </div>

            <!-- Quill editor fields for Description, Usage, and Material -->
            <div class="mb-4">
                <label for="description" class="block text-[#1B266B] font-semibold">Description</label>
                <div id="description" class="quill-editor min-h-[150px]">{!! old('description', $product->description) !!}</div>
                <input type="hidden" name="description" id="descriptionInput" class="min-h-[300px]">
            </div>

            <div class="mb-4">
                <label for="usage" class="block text-[#1B266B] font-semibold">Usage</label>
                <div id="usage" class="quill-editor min-h-[150px]">{!! old('usage', $product->usage) !!}</div>
                <input type="hidden" name="usage" id="usageInput">
            </div>

            <div class="mb-4">
                <label for="material" class="block text-[#1B266B] font-semibold">Material</label>
                <div id="material" class="quill-editor min-h-[150px]">{!! old('material', $product->material) !!}</div>
                <input type="hidden" name="material" id="materialInput">
            </div>

            <div class="mb-4">
                <label for="is_featured" class="block text-[#1B266B] font-semibold">Feature product?</label>
                <div class="flex items-center space-x-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_featured" value="1" class="form-radio text-[#F1CC18]" {{ $product->is_featured == 1 ? 'checked' : '' }}> 
                        <span class="ml-2 text-[#1B266B]">Yes</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="is_featured" value="0" class="form-radio text-[#F1CC18]" {{ $product->is_featured == 0 ? 'checked' : '' }} >
                        <span class="ml-2 text-[#1B266B]">No</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-[#33C659] text-[#1B266B] px-4 py-2 rounded-lg hover:bg-[#F1CC18] transition duration-300"
                >
                    Update
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Quill JS and CSS CDN -->
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script>
    // Initialize Quill editor for description
    var quillDescription = new Quill('#description', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                [{ 'align': [] }],
                ['link']
            ]
        }
    });

    // Initialize Quill editor for usage
    var quillUsage = new Quill('#usage', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                [{ 'align': [] }],
                ['link']
            ]
        }
    });

    // Initialize Quill editor for material
    var quillMaterial = new Quill('#material', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                [{ 'align': [] }],
                ['link']
            ]
        }
    });

    // Before the form is submitted, get the content from Quill editors and assign to hidden fields
    document.querySelector('form').onsubmit = function() {
        document.querySelector('#descriptionInput').value = quillDescription.root.innerHTML;
        document.querySelector('#usageInput').value = quillUsage.root.innerHTML;
        document.querySelector('#materialInput').value = quillMaterial.root.innerHTML;
    }
    
</script>

@endsection
