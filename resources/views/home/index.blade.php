@extends('home.layouts.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/home/css/slider.css')}}" />
@endpush

@section('content')
<section class="hero-slider hero-style w-full sm:w-[98%] md:w-[95%] mx-auto">
	<div class="swiper-container">
	  <div class="swiper-wrapper">
		<div class="swiper-slide">
		  <div class="slide-inner slide-bg-image" data-background="	{{asset('/home/images/slide-1.png')}}
">
			<div class="container">
			  <div data-swiper-parallax="300" class="slide-title">
				<div class="flex items-center bg-[#1B266B] w-fit px-2 py-1">
				  <p class="text-[#F1CC18] md:text-[30px]">বায়োনিল ওয়েল স্প্রে</p>
				</div>
			  </div>
			  <div data-swiper-parallax="400" class="slide-text mt-1">
				<p class="text-[14px] md:text-[20px] bg-[red] px-1 text-[#F9F1BF] w-fit">বাজারের সেরা, খামারিদের ভরসা
				  পোকা-মাকড়, মশা-মাছি, তেলাপোকা নিধনে ১০০% কার্যকরী </p>
			  </div>
			  <div class="clearfix"></div>
			  <div data-swiper-parallax="500" class="slide-btns">
				<a href="#" class="theme-btn-s2 bg-gr2 px-4 py-1">এখনই কিনুন</a>
				<a href="#" class="theme-btn-s3 text-[red] font-semibold"><i
					class="fas fa-chevron-circle-right"></i>বিস্তারিত</a>
			  </div>
			</div>
		  </div>
		  <!-- end slide-inner -->
		</div>
		<!-- end swiper-slide -->

		<div class="swiper-slide">
		  <div class="slide-inner slide-bg-image" data-background="	{{asset('/home/images/slide-2.png')}}
">
			<div class="container">
			  <div data-swiper-parallax="300" class="slide-title">
				<div class="flex items-center bg-[#1B266B] w-fit px-2 py-1">
				  <p class="text-[#F1CC18] text-[15px] md:text-[30px]">বায়োনিল ওয়েল স্প্রে ব্যবহার করি, মশা-মাছি নিধন
					করি</p>
				</div>
			  </div>
			  <div data-swiper-parallax="400" class="slide-text mt-1">
				<p class="text-[14px] md:text-[20px] bg-[red] px-1 text-[#F9F1BF] w-fit">
				  রোগমুক্ত খামার গড়ায় বায়োনিল ওয়েল স্প্রে বিশ্বস্ততার প্রতীক
				</p>
			  </div>
			  <div class="clearfix"></div>
			  <div data-swiper-parallax="500" class="slide-btns font-shishir">
				<a href="#" class="theme-btn-s2 bg-gr2 px-4 py-1">এখনই কিনুন</a>
				<a href="#" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i>বিস্তারিত</a>
			  </div>
			</div>
		  </div>
		  <!-- end slide-inner -->
		</div>
		<!-- end swiper-slide -->
	  </div>
	  <!-- end swiper-wrapper -->

	  <!-- swipper controls -->
	  <div class="swiper-pagination"></div>
	  <div class="swiper-button-next"></div>
	  <div class="swiper-button-prev"></div>
	</div>
  </section>




  <!-- Product Cards -->
  <!-- <div id="gtid-present" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 place-items-center">
</div> -->



  <!-- Modal Overlay -->
  <div id="productModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
	<!-- Modal Content -->
	<div
	  class="bg-white p-6 rounded-lg shadow-lg relative -translate-y-1 w-[330px] sm:w-[460px] md:w-[530px] max-w-full h-[500px] md:h-[490px] overflow-y-auto">
	  <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-2xl font-bold">
		&times;
	  </button>
	  <img id="modalImage" class="w-full h-[150px] object-contain rounded-lg mb-4" src="" alt="Product Image">
	  <h3 id="modalTitle" class="text-lg font-bold mb-2"></h3>
	  <p id="modalDescription" class="text-lg text-gray-600 mb-4"></p>
	  <p id="modalPrice" class="text-xl font-semibold text-green-600 hidden"></p>
	  <div class="flex gap-5">
		<button id="buyNowButton"
		  class="inline-flex flex-1 w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset]  hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
		  role="button">
		  এখনই কিনুন </button>
		<a  class="flex-1" id="detailsButton">
		  <button
			class="inline-flex w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-blue-500 to-green-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset]  hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
			role="button">
			বিস্তারিত
		  </button>
		</a>
	  </div>
	</div>
  </div>



  <!--products-->
  <section class="px-2 md:px-12">
	<div class=" mx-auto  md:max-w-3xl sm:max-w-full lg:max-w-[100vw] relative mt-8 lg:my-16">
	  <h2
		class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">

		<span class="text-transparent bg-clip-text bg-gr2">
		  সেরা প্রোডাক্টসমূহ

		</span>
	  </h2>

	  <div class="absolute top-[40px] left-0 bg-gr2 w-[240px] md:w-[260px] h-[5px] rounded-full"></div>
	  <div class="absolute top-[40px] left-[245px] md:left-[262px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  <div class="absolute top-[40px] left-[255px] md:left-[270px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  <div class="absolute top-[40px] left-[265px] md:left-[278px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  <div id="gtid-present" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5 items-center">
	  </div>
	</div>


  </section>

  <div class="bg-gray-800 text-white mt-16 lg:mt-24 py-3 px-6">
	<div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-y-4 gap-x-8">
	  
	  <!-- Text Section -->
	  <div class="text-center md:text-left">
		<h2 class="text-xl font-medium">
		  ডিলার/ডিপো নিয়োগ করতে ক্লিক করুন 
		  <a href="#" class="text-yellow-400 underline hover:text-yellow-500 transition">
			এখানে
		  </a>
		</h2>
	  </div>
  
	  <!-- Button Section -->
	  <div class="md:w-1/2 flex justify-center">
		<a href="#"
		   class="bg-yellow-400 text-gray-800 py-2 px-6 text-sm font-medium rounded-full hover:bg-yellow-500 transition">
		  নিয়োগ আবেদন
		</a>
	  </div>
  
	</div>
  </div>
  
  

  <div class="bg-gr2 text-white py-4 sm:py-6 md:py-8 px-2 sm:px-4 md:px-6">
	<div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-y-8 gap-x-12">
	  
	  <!-- Contact Info Section -->
	  <div class="md:w-1/2 text-center md:text-left">
		<h2 class="text-2xl font-semibold mb-3">আমাদের সাথে যোগাযোগ করুন</h2>
		<p class="text-sm text-gray-300 mb-4">
		  যেকোন প্রয়োজনে আমাদের সাথে যোগাযোগ করতে পারেন নিচের মাধ্যমগুলোতে।
		</p>
		<div class="flex flex-col gap-3">
		  
		  <!-- WhatsApp -->
		  <div class="flex items-center gap-2">
			<img src="https://img.icons8.com/color/24/whatsapp.png" alt="WhatsApp Icon" class="w-5 h-5">
			<span class="text-sm text-gray-300">WhatsApp: <a href="https://wa.me/880123456789" class="text-yellow-400 hover:underline">+880123456789</a></span>
		  </div>
		  
		  <!-- Facebook -->
		  <div class="flex items-center gap-2">
			<img src="https://img.icons8.com/color/24/facebook.png" alt="Facebook Icon" class="w-5 h-5">
			<span class="text-sm text-gray-300">Facebook: <a href="https://facebook.com/yourpage" class="text-yellow-400 hover:underline">facebook.com/yourpage</a></span>
		  </div>
		  
		  <!-- Email -->
		  <div class="flex items-center gap-2">
			<img src="https://img.icons8.com/color/24/email.png" alt="Email Icon" class="w-5 h-5">
			<span class="text-sm text-gray-300">Email: <a href="mailto:info@mtcofficial.com" class="text-yellow-400 hover:underline">info@mtcofficial.com</a></span>
		  </div>
		</div>
	  </div>
  
	  <!-- Call to Action Button -->
	  <div class="md:w-1/2 flex justify-center">
		<a href="tel:+8801958480400" class="bg-yellow-400 text-gray-800 py-2 px-5 text-sm font-medium rounded hover:bg-yellow-500 transition">
		  কল করতে ক্লিক করুন
		</a>
	  </div>
  
	</div>
  </div>
  
  

  <!-- Blog  -->
  <section class="px-2 md:px-12 lg:my-24 my-10">
	<div class=" mx-auto  md:max-w-3xl sm:max-w-full lg:max-w-[100vw] relative my-16">
	  <h2
		class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">

		<span class="text-transparent bg-clip-text bg-gr2">
		  জনপ্রিয় ব্লগসমূহ

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
@push('scripts')
<script src="{{asset('/home/js/sliderCustom.js')}}"></script>
@endpush