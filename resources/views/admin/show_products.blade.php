@extends('admin.layouts.master')

@section('content')
        <section class="bg-[#F9F1BF] min-h-screen p-6">
            <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6">
                @if (session('success'))
                <script>
                    toastr.success("{{ session('success') }}");
                </script>
            @endif
            

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-[#1B266B] text-2xl font-bold">Products</h2>
            <a 
                href="{{ route('admin.create_product') }}" 
                class="bg-[#33C659] text-[#1B266B] px-4 py-2 rounded-lg hover:bg-[#F1CC18] transition duration-300"
            >
                Add Product
            </a>
        </div>
        <form action="{{ route('admin.search_products') }}" method="GET" class="mb-4">
            <div class="flex items-center">
                <input 
                    type="text" 
                    name="query" 
                    placeholder="Search products..." 
                    class="flex-grow px-3 py-2 border border-[#F1CC18] rounded-lg focus:outline-none focus:ring focus:ring-[#F1CC18] focus:border-[#F1CC18]"
                >
                <button 
                    type="submit" 
                    class="ml-2 bg-[#1B266B] text-white px-4 py-2 rounded-lg hover:bg-[#33C659] transition duration-300"
                >
                    Search
                </button>
            </div>
        </form>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-[#F1CC18]">
                <thead class="bg-[#F1CC18] text-white">
                    <tr>
                        <th class="border border-[#F1CC18] px-4 py-2">ID</th>
                        <th class="border border-[#F1CC18] px-4 py-2">Image</th>
                        <th class="border border-[#F1CC18] px-4 py-2">Title</th>
                        <th class="border border-[#F1CC18] px-4 py-2">Price</th>
                        <th class="border border-[#F1CC18] px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr class="odd:bg-[#F9F1BF] even:bg-white hover:bg-[#33C659]/10">
                        <td class="border border-[#F1CC18] px-4 py-2 text-[#1B266B]">{{ $product->id }}</td>
                        <td class="border border-[#F1CC18] px-4 py-2">
                            <img 
                            
                                src="{{ asset('/'.$product->imageUrl) }}" 
                                alt="{{ $product->title }}" 
                                class="w-16 h-16 object-contain rounded-lg"
                            >
                        </td>
                        <td class="border border-[#F1CC18] px-4 py-2 text-[#1B266B] truncate max-w-[200px]">
                            {{ $product->title }}
                        </td>
                        <td class="border border-[#F1CC18] px-4 py-2 text-[#1B266B]">৳{{ $product->price }}</td>
                        <td class="border border-[#F1CC18] px-4 py-2">
                            <div class="flex space-x-2">
                                <a 
                                    href="{{ route('admin.edit_product', $product->id) }}" 
                                    class="bg-[#1B266B] text-white px-3 py-1 rounded-lg hover:bg-[#33C659] transition duration-300"
                                >
                                    Edit
                                </a>
                                <form action="{{ route('admin.delete_product', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button 
                                        type="submit" 
                                        class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-800 transition duration-300"
                                    >
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="border border-[#F1CC18] px-4 py-2 text-center text-[#1B266B]">No products found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
