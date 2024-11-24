@extends('admin.layouts.master')

@section('content')
<section class="bg-[#F9F1BF] min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <h2 class="text-neel text-2xl font-bold mb-4">Create Category</h2>
        <form action="{{ route('admin.store_category') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-neel font-semibold">Category Name</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name" 
                    class="w-full px-3 py-2 border border-holud rounded-lg focus:outline-none focus:ring focus:ring-holud focus:border-holud"
                    placeholder="Enter category name"
                    required
                >
            </div>
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="bg-[#33C659] text-[#1B266B] px-4 py-2 rounded-lg hover:bg-[#F9F1BF] transition duration-300"
                >
                    Save
                </button>
            </div>
        </form>
    </div>
</section>


@endsection
