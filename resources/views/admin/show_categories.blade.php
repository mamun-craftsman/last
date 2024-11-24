@extends('admin.layouts.master')

@section('content')
<section class="bg-[#F9F1BF] min-h-screen p-6">
    <div class="max-w-6xl mx-auto bg-white shadow-md rounded-lg p-6">
        <h2 class="text-[#1B266B] text-2xl font-bold mb-4">Categories</h2>
        <div class="mb-4 flex justify-end">
            <a 
                href="{{ route('admin.create_category') }}" 
                class="bg-[#33C659] text-white px-4 py-2 rounded-lg hover:bg-holud transition duration-300"
            >
                Add Category
            </a>
        </div>
        <table class="table-auto w-full border-collapse border border-holud">
            <thead class="bg-[tomato] text-[white]">
                <tr>
                    <th class="border border-holud px-4 py-2">ID</th>
                    <th class="border border-holud px-4 py-2">Name</th>
                    <th class="border border-holud px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                <tr class="bg-[#F9F1BF]">
                    <td class="border border-holud px-4 py-2 text-neel">{{ $category->id }}</td>
                    <td class="border border-holud px-4 py-2 text-neel">{{ $category->name }}</td>
                    <td class="border border-holud px-4 py-2">
                        <div class="flex space-x-2 justify-center">
                            <a 
                                href="{{ route('admin.edit_category', $category->id) }}" 
                                class="bg-[#33C659] text-white px-3 py-1 rounded-lg hover:bg-[#1B266B] transition duration-300"
                            >
                                Edit
                            </a>
                            <form action="{{ route('admin.delete_category', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
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
                    <td colspan="3" class="border border-holud px-4 py-2 text-center text-neel">No categories found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>

<!-- Tailwind Colors -->
<style>
    :root {
        --sada: #F9F1BF;
        --green: #33C659;
        --holud: #F1CC18;
        --neel: #1B266B;
    }

    .bg-sada { background-color: var(--sada); }
    .text-neel { color: var(--neel); }
    .border-holud { border-color: var(--holud); }
    .bg-green { background-color: var(--green); }
    .hover\:bg-holud:hover { background-color: var(--holud); }
</style>
@endsection
