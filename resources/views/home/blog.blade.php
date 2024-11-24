@extends('home.layouts.master')
@section('content')

<section>
	<div class="relative w-full h-[150px] sm:h-[180px] md:h[200px] lg:h[220px] xl:h[250px] overflow-hidden">
	  <img src="{{asset('/home/images/abus.jpg')}}" alt="Image" class="w-full h-full object-cover">
	  <!-- Dark overlay -->
	  <!-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> -->
	  <!-- About Us text -->
	  <div
		class="absolute bottom-4 left-4 text-white text-base sm:text-md md:text-lg font-semibold bg-gray-300 bg-opacity-50 p-2 rounded-lg">
		আমাদের নিয়মিত ব্লগ আপনাকে শেখাবে সেরা টিপস এন্ড ট্রিকস
	  </div>
	</div>

  </section>

  <section class="px-2 md:px-12 lg:my-24 my-10">
	<div class=" mx-auto  md:max-w-3xl sm:max-w-full lg:max-w-[100vw] relative my-16">
	  <h2
		class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">

		<span class="text-transparent bg-clip-text bg-gr2">
		  লেটেস্ট ব্লগ

		</span>
	  </h2>

	  <div class="absolute top-[40px] left-0 bg-gr2 w-[240px] md:w-[260px] h-[5px] rounded-full"></div>
	  <div class="absolute top-[40px] left-[245px] md:left-[262px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  <div class="absolute top-[40px] left-[255px] md:left-[270px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  <div class="absolute top-[40px] left-[265px] md:left-[278px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>


	  <div class="p-5 border-t-2 border-b-2 mt-6">
		<div class="grid md:grid-cols-4 gap-6 md:place-items-center">
		  <div class="md:col-span-1">
			<img src="images/blog1.webp" alt="" class="rounded w-2/3 mx-auto" />
		  </div>
		  <div class="md:col-span-3 flex flex-col justify-center gap-2 text-[#1B266B]">
			<a href="blog-details.html">
			  <h1 class="text-xl md:text-3xl font-shishir text-[#33C659]">
				জেনে নিন ছারপোকার কামড়ে যেসব রোগ হতে পারে !
			  </h1>
			</a>

			<p class="font-nikosh">
			  ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা খাদ্য হিসেবে মানুষের রক্ত গ্রহণ করে। সাধারণত
			  রাতে এই পোকার আক্রমণ বেশি হয়। এই পোকার কামড়ের ফলে ত্বকে ফুসকুড়ি, মানসিক প্রভাব, এবং অ্যালার্জির
			  প্রতিক্রিয়ার মতো লক্ষণ দেখা দিতে পারে।
			</p>
			<div class="flex justify-between items-center">
			  <p
				class="text-center border-green-600 text-xs sm:text-sm text-green-700 hover:text-green-500 hover:border-green-500 p-2 border rounded-full">
				23 October, 2024
			  </p>
			  <a href="blog-details.html"
				class="group relative flex h-11 w-[150px] items-center justify-between border-2 shadow-md rounded-full bg-gradient-to-br from-green-500 to-yellow-500 font-medium dark:text-neutral-200 text-black">
				<span class="pl-4 text-xs sm:text-base">আরো পড়ুন</span>
				<div class="relative h-9 w-9 overflow-hidden text-white bg-[seagreen] rounded-full mr-1">
				  <div
					class="absolute top-[0.7em] left-[-0.1em] grid place-content-center transition-all w-full h-full duration-300 group-hover:-translate-y-6 group-hover:translate-x-4">
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
					  class="h-5 w-5 fill-black">
					  <path
						d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
						fillRule="evenodd" clipRule="evenodd"></path>
					</svg>
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
					  class="h-5 w-5 mb-1 -translate-x-4 fill-black">
					  <path
						d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
						fillRule="evenodd" clipRule="evenodd"></path>
					</svg>
				  </div>
				</div>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="p-5 border-b-2">
		<div class="grid md:grid-cols-4 gap-6 md:place-items-center">
		  <div class="md:col-span-1">
			<img
			  src="https://media.istockphoto.com/photos/computer-code-on-laptop-picture-id929048252?k=6&m=929048252&s=170667a&w=0&h=XZ89TJFKu70PdnaoVk8i9ui2oOhG8PhdsAdoq3ZWdGI="
			  alt="" class="rounded w-2/3 mx-auto" />
		  </div>
		  <div class="md:col-span-3 flex flex-col justify-center gap-2 text-[#1B266B]">
			<h1 class="text-xl md:text-3xl font-shishir text-[#33C659]">
			  তেলাপোকা সম্পূর্ণরূপে নিশ্চিহ্ন করার উপায়
			</h1>
			<p class="font-nikosh ">
			  তেলাপোকা এক প্রকারের ছোট মাছি প্রজাতির পতঙ্গ।থেকে রক্ষায় রাতের খাবার শেষে বাড়তি খাবার খোলা না রেখে
			  ঢাকনা দিয়ে রাখুন Iতেলাপোকা বা আরশোলা হল আর্থোপ্রোডা পর্বের পোকা, যাতে উই পোকারাও আছে। মানুষের
			  বাসস্থানের সাথে সম্পর্কিত আছে এমন তেলাপোকার প্রজাতি রয়েছে ৪৬০০ প্রজাতির মধ্যে প্রায় ৩০টি। প্রায় চারটি
			  প্রজাতিকে ক্ষতিকর হিসেবে ধরা হয়।
			</p>
			<div class="flex justify-between items-center">
			  <p
				class="text-center border-green-600 text-xs sm:text-sm text-green-700 hover:text-green-500 hover:border-green-500 p-2 border rounded-full">
				23 October, 2024
			  </p>
			  <a href="/"
				class="group relative flex h-11 w-[150px] items-center justify-between border-2 shadow-md rounded-full bg-gradient-to-br from-green-500 to-yellow-500 font-medium dark:text-neutral-200 text-black">
				<span class="pl-4 text-xs sm:text-base">আরো পড়ুন</span>
				<div class="relative h-9 w-9 overflow-hidden text-white bg-[seagreen] rounded-full mr-1">
				  <div
					class="absolute top-[0.7em] left-[-0.1em] grid place-content-center transition-all w-full h-full duration-300 group-hover:-translate-y-6 group-hover:translate-x-4">
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
					  class="h-5 w-5 fill-black">
					  <path
						d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
						fillRule="evenodd" clipRule="evenodd"></path>
					</svg>
					<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
					  class="h-5 w-5 mb-1 -translate-x-4 fill-black">
					  <path
						d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
						fillRule="evenodd" clipRule="evenodd"></path>
					</svg>
				  </div>
				</div>
			  </a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
@endsection