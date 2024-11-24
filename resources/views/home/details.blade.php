@extends('home.layouts.master')

@section('content')
<section class="container mx-auto ">
    <div class="p-5 grid grid-cols-1 md:grid-cols-3 gap-5 mb-3 md:mb-6">
        <div class="col-span-1 items-center mb-3">
            <img src="{{asset('/').$product->imageUrl}}" alt="" class=" mx-auto max-h-[300px] w-[250px] object-contain ">
        
    
        </div>
            <div class="col-span-2">
              <!-- Product Title -->
                <h1 class="font-semibold font-shishir text-2xl md:text-4xl mb-5 text-[#33C659]">{{$product->title}}</h1>
                
                <h2 class="italic text-[#1B266B] mb-6">মূল্যঃ <span class="font-bold">{{$product->price}}</span> টাকা</h2>
                <!-- Product Details -->
                <p class="text=[#1B266B] font-semibold">
					{!! $product->description !!}
				</p>
<div class="flex gap-5">
  <button onclick="addToCartAndRedirect(2)"
class="inline-flex w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-violet-500 to-fuchsia-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset] font-[JetBrains_Mono] hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
role="button"
>
এখনই কিনুন <i class="fa-solid fa-cart-shopping ml-3"></i>
</button>
  <button
  <button id="addToCardId" onclick="addToCart(2)"
class="inline-flex w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-sky-500 to-indigo-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset] font-[JetBrains_Mono] hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
role="button"
>
ব্যাগে রাখুন<i class="fa-solid fa-bag-shopping ml-3"></i>
</button>
</button>

  </div>
                </div>
        </div>

        <div class="flex border-b border-gray-200">
            <button
                id="tab1"
                class="w-1/2 py-2 text-center text-gray-700 border-t-2 font-medium hover:text-blue-600 focus:outline-none font-shishir"
                onclick="openTab('content1')"
            >
                উপকরন
            </button>
            <button
                id="tab2"
                class="w-1/2 py-2 text-center text-gray-500 border-t-2 font-medium hover:text-blue-600 focus:outline-none font-shishir"
                onclick="openTab('content2')"
            >
                ব্যবহারবিধি
            </button>
        </div>

        <!-- Tab Content -->
        <div id="content1" class="p-4 bg-gr1 mb-12 text-white">
			{!! $product->material !!}
        </div>
        <div id="content2" class="p-4 bg-gr1 mb-12 hidden text-white">
          {!! $product->usage !!}

        </div>
    </section>
@endsection

@push('scripts')
	<script src="{{asset('/home/js/tab.js')}}"></script>
@endpush