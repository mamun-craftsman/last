@extends('home.layouts.master')
@push('styles')
<link rel="stylesheet" href="{{asset('/home/css/timeline.css')}} " />
@endpush
@section('content')
	<section class="mb-6 sm:mb-8 md:mb-10">
		<div class="relative w-full h-[200px] sm:h-[300px] md:h[350px] lg:h[400px] xl:h[430px] overflow-hidden">
		<img src="{{asset('/home/images/abus.jpg')}}" alt="Image" class="w-full h-full object-cover">
		<!-- Dark overlay -->
		<!-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> -->
		<!-- About Us text -->
		<div
			class="absolute bottom-4 left-4 text-white text-base sm:text-md md:text-lg font-semibold bg-gray-300 bg-opacity-50 p-2 rounded-lg">
			আমাদের সম্পর্কে জানুন
		</div>
		</div>

		<section>
			<div class="relative w-full h-[200px] sm:h-[300px] md:h[350px] lg:h[400px] xl:h[430px] overflow-hidden">
			  <img src="images/abus.jpg" alt="Image" class="w-full h-full object-cover">
			  <!-- Dark overlay -->
			  <!-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> -->
			  <!-- About Us text -->
			  <div
				class="absolute bottom-4 left-4 text-white text-base sm:text-md md:text-lg font-semibold bg-gray-300 bg-opacity-50 p-2 rounded-lg">
				আমাদের সম্পর্কে জানুন
			  </div>
			</div>
	  
	  
	  
		  </section>
	  
	  
		  <section class="container relative mx-auto py-16 px-4">
			<h2
			  class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">
	  
			  <span class="text-transparent bg-clip-text bg-gr2">
				আমাদের গল্প
	  
			  </span>
			</h2>
	  
			<div class="absolute top-[120px] left-1 bg-gr2 w-[240px] md:w-[260px] h-[5px] rounded-full"></div>
			<div class="absolute top-[120px] left-[246px] md:left-[267px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
			<div class="absolute top-[120px] left-[255px] md:left-[275px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
			<div class="absolute top-[120px] left-[265px] md:left-[283px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
	  
			<div class="flex flex-col-reverse justify-between item-center gap-10">
			  <p class="text-center text-[#1B266B] max-w-4xl mx-auto text-justify ">
				আমাদের যাত্রা একটি সাধারণ দৃষ্টিভঙ্গির সাথে শুরু হয়, যা আমাদের গ্রাহকদের জন্য মানসম্মত সেবা এবং
				উদ্ভাবনী সমাধান নিয়ে আসতে চায়। আমরা বড় স্বপ্ন নিয়ে একটি ছোট টিম হিসেবে শুরু করেছিলাম, এবং আজ
				আমরা গর্বিত যে আমরা একটি সম্প্রদায়-ভিত্তিক কোম্পানিতে পরিণত হয়েছি যা আমাদের মৌলিক মূল্যের প্রতি সত্য
				থাকে।
				<br><br>
				সময়ের সাথে, আমরা শুধুমাত্র প্রযুক্তিগত উৎকর্ষতার উপর গুরুত্বারোপ করিনি, বরং আমাদের গ্রাহকদের
				সন্তুষ্টি এবং তাদের প্রয়োজনীয়তাগুলো পূরণের চেষ্টা করে গেছি। আমাদের লক্ষ্য ছিল প্রতিটি সমস্যার
				জন্য এমন সমাধান তৈরি করা যা সহজ, কার্যকর এবং টেকসই। এই প্রচেষ্টার অংশ হিসেবে, আমরা ক্রমাগত নতুন
				প্রযুক্তি এবং উদ্ভাবনী চিন্তাধারার সাথে নিজেদের আপডেট করেছি। <br><br>
				আমরা বিশ্বাস করি যে, আমাদের প্রতিষ্ঠান শুধু একটি ব্যবসা নয় বরং এটি আমাদের একটি পরিবারের মত, যেখানে
				প্রতিটি সদস্য তাদের নিজ নিজ ভূমিকা পালন করছে। ভবিষ্যতে, আমরা আরও অনেক সাফল্য অর্জন করতে চাই, এবং
				আমাদের গ্রাহকদের সাথে আমাদের এই যাত্রা অব্যাহত রাখতে চাই। আমাদের লক্ষ্য এই বন্ধনকে আরও শক্তিশালী করা
				এবং একটি উজ্জ্বল ভবিষ্যৎ গড়ে তোলা।
			  </p>
	  
			  <div class="mx-auto w-full max-w-3xl">
				<div class="relative pb-[56.25%] overflow-hidden rounded-lg">
				  <iframe class="absolute top-0 left-0 w-full h-full"
					src="https://www.youtube.com/embed/uGIfcTqIlfY?si=qvhEeMZDJZOhDwcv" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				</div>
			  </div>
			</div>
		  </section>

	</section>
	   <!-- Core Values Section -->
	   <section class="container mx-auto py-4 px-4 ">
		<!-- <h2 class=" text-3xl font-bold text-center mb-6">আমাদের মৌলিক মূল্যবোধ</h2> -->
		<div class="tits relative w-full px-4">
		  <h2
			class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">
  
			<span class="text-transparent bg-clip-text bg-gr2">
			  আমাদের মূল্যবোধ
  
			</span>
		  </h2>
  
		  <div class="absolute top-[55px] left-1 bg-gr2 w-[240px] md:w-[270px] h-[5px] rounded-full"></div>
		  <div class="absolute top-[55px] left-[246px] md:left-[280px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		  <div class="absolute top-[55px] left-[255px] md:left-[288px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		  <div class="absolute top-[55px] left-[265px] md:left-[296px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-1 xl:ml-20 my-6">
		  <div class="bg-[tomato] p-6 rounded-lg shadow-md">
			<h3 class="text-2xl text-white mb-2 font-extrabold">অখণ্ডতা</h3>
			<p class="text-white">আমরা প্রতিটি কর্মকাণ্ডে স্বচ্ছ, সৎ এবং শক্তিশালী নৈতিক নীতিগুলি বজায় রাখতে
			  বিশ্বাস করি।</p>
		  </div>
		  <div class="bg-[#1B266B] p-6 rounded-lg shadow-md text-white">
			<h3 class="text-2xl font-semibold mb-2">উদ্ভাবন</h3>
			<p class="text-white">উদ্ভাবন আমাদের গ্রাহকদের সেবা করার নতুন উপায় খুঁজে বের করতে উৎসাহিত করে,
			  যা নিশ্চিত করে আমরা দ্রুত পরিবর্তনশীল বিশ্বে এগিয়ে থাকি।</p>
		  </div>
		  <div class="bg-[#F1CC18] p-6 rounded-lg shadow-md">
			<h3 class="text-2xl font-semibold mb-2">সম্প্রদায়</h3>
			<p class="text-gray-700">আমরা আমাদের সম্প্রদায়ের প্রতি প্রতিদান দেওয়ার জন্য অগ্রাধিকার দিই এবং
			  একটি শক্তিশালী নেটওয়ার্ক তৈরি করি যা সবার উপকারে আসে।</p>
		  </div>
		</div>
	  </section>
  
	  <div class="bg-gray-100 px-6 py-12  max-w-full">
		<div class="lg:max-w-7xl max-w-lg mx-auto px-6 py-8 rounded-lg shadow-md">
		  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
			<div class="text-[#1B266B] bg-[#F1CC18]">
			  <img src="{{asset('/home/images/ceo.png')}}" alt="Image"
				class="bg-[#1B266B] rounded-md object-cover object-top w-[320px] h-[350px]" />
			  <div class="info h-auto bg-[#F1CC18] max-w-full w-[320px] px-6 py-4">
				<p class="font-bold">Dr. Mohammad Yunus</p>
				<p class="text-sm italic">CEO, Matrichaya</p>
			  </div>
			</div>
  
			<div class="text-[#1B266B]">
			  <h2 class="text-3xl font-extrabold  mb-4">স্বপ্ন ও বাস্তবতার মেলবন্ধনকারী</h2>
			  <p class="text-gray-600 text-sm leading-6">
				ড. মোহাম্মদ ইউনুস, বাংলাদেশের প্রথম নোবেল বিজয়ী যিনি মাইক্রোফাইন্যান্স ব্যবস্থা আবিষ্কারের জন্য খ্যাতি
				অর্জন করেছেন সারা বিশ্বে। বাংলাদেশে গ্রামীনব্যাংক এই ব্যবস্থায় ক্ষুদ্র ঋণ দিয়ে প্রান্তিক জনগোষ্ঠীর ভাগ্যের
				চাকা ঘুরিয়ে দিয়েছে। দারিদ্রতার কষাঘাতে জীর্ণ মানুষ বিশেষ করে নারীরা দেখছে স্বচ্ছলতার স্বপ্ন। গ্রামীনব্যাংক
				সাধারণত যে সব স্কিমে ঋণ দিয়ে থাকেঃ
			  </p>
			  <ul class="list-disc text-sm space-y-2 pl-4 mt-6">
				<li>পশু পালন কিংবা হাস মুরগীর জন্য ঋণ</li>
				<li>ক্ষুদ্র ব্যবসার জন্য</li>
				<li>কুটির শিল্পের বিকাশের জন্য</li>
				<li>দারিদ্রতা হ্রাসে যেকোন উদোগের অর্থনৈতিক সাহায্য</li>
			  </ul>
			  <blockquote class="p-4 my-4 border-s-4 border-[#F1CC18] bg-[#1B266B] ">
				<p class="text-xl italic font-medium leading-relaxed text-gray-900 dark:text-white">"গণতন্ত্র শুধু মুখে
				  বললেই হবে না। আমি যদি ভোটটা দিতে পারতাম, তাহলে তো আমি বলতে পারতাম এটাই ঠিক। আমাকে তো কাউকে পাশ করার জন্য
				  চয়েজ দেয়া হয় নি। তাহলে এটা কীসের গণতন্ত্র?"</p>
			  </blockquote>
			</div>
		  </div>
		</div>
	  </div>
  
  
  
	  <section class=" text-[#1B266B] container relative mx-auto py-8 px-4">
		<div class="tits relative w-full px-4">
		  <h2
			class="text-3xl md:text-4xl font-extrabold  mb-12 text-transparent bg-clip-text bg-gradient-to-r from-yellow-500 to-green-600">
  
			<span class="text-transparent bg-clip-text bg-gr2">
			  কোম্পানির যাত্রাপথ
  
			</span>
		  </h2>
  
		  <div class="absolute top-[55px] left-1 bg-gr2 w-[240px] md:w-[270px] h-[5px] rounded-full"></div>
		  <div class="absolute top-[55px] left-[246px] md:left-[280px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		  <div class="absolute top-[55px] left-[255px] md:left-[288px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		  <div class="absolute top-[55px] left-[265px] md:left-[296px] rotate-45 bg-[#2D2A32] w-[5px] h-[5px]"></div>
		</div>
  
		<ul id="timeline" class="mx-auto mt-10">
		  <li style="--accent-color:#41516C">
			<div class="date">2002</div>
			<div class="title sm:px-2 md:px-4 lg:px-6 text-md sm:text-lg md:text-xl text-[tomato]">আমাদের দীর্ঘ যাত্রার শুরু</div>
			<div class="descr text-sm sm:text-md md:text-base sm:px-2 md:px-4 lg:px-6 text-[#1B266B]">মাতৃছায়া ট্রেড কর্পোরেশন ২০০২ সালে প্রতিষ্ঠিত হয় একটি ছোট, কিন্তু দৃঢ় প্রতিজ্ঞা নিয়ে। আমাদের যাত্রার শুরু ছিল চ্যালেঞ্জে ভরা, তবে একাধিক বাধা পেরিয়ে আমাদের স্বপ্ন পূরণের প্রথম পদক্ষেপে আমরা পৌঁছাই। তখন থেকে শুরু হওয়া আমাদের পথচলা আজকের সফলতার দিকে এগিয়ে গেছে। কঠোর পরিশ্রম, সততা এবং উদ্ভাবনী চিন্তাভাবনার মাধ্যমে আমরা ধীরে ধীরে বাজারে আমাদের অবস্থান শক্তিশালী করেছি। ২০০২ সালের সেই প্রথম দিন থেকে আজ পর্যন্ত, মাতৃছায়া ট্রেড কর্পোরেশন তার গুণমান এবং বিশ্বাসযোগ্যতার জন্য সুপরিচিত।</div>
		  </li>
		  <li style="--accent-color:#FBCA3E">
			<div class="date">2007</div>
			<div class="title">Title 2</div>
			<div class="descr">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos adipisci nobis
			  nostrum vero nihil veniam.</div>
		  </li>
		  <li style="--accent-color:#E24A68">
			<div class="date">2012</div>
			<div class="title">Title 3</div>
			<div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga minima consequuntur
			  soluta placeat iure totam commodi repellendus ea delectus, libero fugit quod reprehenderit,
			  sequi quo, et dolorum saepe nulla hic.</div>
		  </li>
		  <li style="--accent-color:#1B5F8C">
			<div class="date">2017</div>
			<div class="title">Title 4</div>
			<div class="descr">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit, cumque.</div>
		  </li>
		  <li style="--accent-color:#4CADAD">
			<div class="date">2022</div>
			<div class="title">Title 5</div>
			<div class="descr">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, non.</div>
		  </li>
		</ul>
		<div class="credits"><a target="_blank"
			href="https://www.freepik.com/free-vector/infographic-template-with-yearly-info_1252895.htm">
		  </a></div>
	  </section>
  
  
  
	  <style>
		.cont {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  height: auto;
		  min-height: 50vh;
		  gap: 3rem;
		  flex-flow: column;
		  position: relative;
		}
  
		.carousel {
		  display: grid;
		  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
		  /* Grid layout for responsiveness */
		  gap: 1rem;
		  max-width: 90%;
		  /* Limit the width to 90% of the container */
		  margin: 0 auto;
		  transition: 0.5s ease;
		}
  
		.carousel .item {
		  width: 100%;
		  height: 420px;
		  object-fit: cover;
		  transition: 0.5s ease;
		  filter: brightness(1);
		  transform: perspective(1000px) rotateY(0deg);
		}
  
		/* Hover effects with more rotation */
		.carousel .item:hover {
		  filter: brightness(1);
		  transform: translateZ(30px) rotateY(25deg);
		  /* Increased rotation on hover */
		}
  
		.carousel .item:hover+* {
		  filter: brightness(0.6);
		  transform: translateZ(20px) rotateY(15deg);
		  /* Slight rotation for the next item */
		}
  
		.carousel .item:hover+*+* {
		  filter: brightness(0.4);
		  transform: translateZ(10px) rotateY(5deg);
		  /* Slight rotation for the next-next item */
		}
  
		/* More dramatic rotation for the previous item */
		.carousel .item:has(+ *:hover) {
		  filter: brightness(0.6);
		  transform: translateZ(20px) rotateY(-25deg);
		  /* Rotate the item to the opposite direction */
		}
  
		.carousel .item:has(+ * + *:hover) {
		  filter: brightness(0.4);
		  transform: translateZ(10px) rotateY(-15deg);
		  /* More rotation for the item before */
		}
  
  
		#image-modal {
		  display: none;
		  /* Initially hidden */
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  background: #1b266bda;
		  backdrop-filter: blur(4px);
		  align-items: center;
		  justify-content: center;
		  transition: opacity 0.3s ease;
		  z-index: 9999;
		}
  
		.modal-content {
		  position: relative;
		  background: white;
  
		  max-width: 100%;
		  max-height: 90%;
		  border-radius: 10px;
		  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
		  opacity: 0;
		  transform: translateY(20px);
		  transition: transform 0.3s ease, opacity 0.3s ease;
		}
  
		.modal-content img {
		  width: 100%;
		}
  
		.modal-caption {
		  font-style: italic;
		  text-align: center;
		  padding: 10px;
		  background: linear-gradient(to top, rgba(192, 192, 192, 0.8), rgba(255, 255, 255, 0));
		  color: tomato;
		}
  
		.close-btn {
		  position: absolute;
		  top: 19px;
		  right: 10px;
		  background: rgb(149, 11, 11);
		  border: none;
		  padding: 10px;
		  color: white;
		  cursor: pointer;
		  width: 38px;
		  height: 38px;
		  border-radius: 100%;
		  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
		  text-align: center;
		}
  
		.close-btn:hover {
		  background: red;
		}
	  </style>
  
	  <div class="cont py-8 sm:py-10 md:py-16 bg-[#F9F1BF]">
		<h2
		  class=" text-center  font-extrabold mt-8 mb-6  text-transparent text-4xl font-bold text-center ">
		  <span class="text-transparent bg-gr2 bg-clip-text">
			ছবিঘরে আমরা
		</h2>
		<div class="carousel">
		  <img class="item"
			src="https://images.pexels.com/photos/1173777/pexels-photo-1173777.jpeg?auto=compress&cs=tinysrgb&w=600"
			alt="" data-caption="A serene sunset over the mountains" />
		  <img class="item"
			src="https://images.pexels.com/photos/775201/pexels-photo-775201.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""
			data-caption="Peaceful morning in the forest" />
		  <img class="item"
			src="https://images.pexels.com/photos/1598073/pexels-photo-1598073.jpeg?auto=compress&cs=tinysrgb&w=600"
			alt="" data-caption="An adventure by the lakeside" />
		  <img class="item"
			src="https://images.pexels.com/photos/70365/forest-sunbeams-trees-sunlight-70365.jpeg?auto=compress&cs=tinysrgb&w=600"
			alt="" data-caption="Sunbeams breaking through the trees" />
		  <img class="item"
			src="https://images.pexels.com/photos/1658967/pexels-photo-1658967.jpeg?auto=compress&cs=tinysrgb&w=600"
			alt="" data-caption="Glistening snow in the mountain peaks" />
		</div>
	  </div>
  
	  <div id="image-modal">
		<div class="modal-content overflow-auto px-1 sm:px-2 py-2 relative">
		  <div id="modal-caption" class="modal-caption"></div>
		  <img id="modal-image" src="" alt="" />
		</div>
		<button class="close-btn flex items-center justify-center sticky top-0">&times;</button>
	  </div>
  
  
	  <script>
  
		document.addEventListener('DOMContentLoaded', function () {
		  // Get the modal and close button elements
		  const modal = document.getElementById("image-modal");
		  const closeBtn = document.querySelector(".close-btn");
		  const modalImage = document.getElementById("modal-image");
		  const modalCaption = document.getElementById("modal-caption");
  
		  // Add event listeners for all image items in the carousel
		  const images = document.querySelectorAll(".carousel .item");
		  images.forEach(function (image) {
			image.addEventListener("click", function () {
			  // Get the image src and caption from the clicked image
			  const imgSrc = image.src;
			  const captionText = image.getAttribute("data-caption");
  
			  // Set the modal image and caption
			  modalImage.src = imgSrc;
			  modalCaption.textContent = captionText;
  
			  // Show the modal with animation
			  modal.style.display = "flex"; // Display the modal
			  setTimeout(() => {
				document.querySelector(".modal-content").style.transform = "translateY(0)";
				document.querySelector(".modal-content").style.opacity = "1";
			  }, 10);
			});
		  });
  
		  // Close the modal when the close button is clicked
		  closeBtn.addEventListener("click", function () {
			closeModal();
		  });
  
		  // Close the modal when clicking outside the modal content
		  modal.addEventListener("click", function (event) {
			if (!event.target.closest(".modal-content")) {
			  closeModal();
			}
		  });
  
		  // Function to close the modal
		  function closeModal() {
			modal.style.display = "none";
			document.querySelector(".modal-content").style.transform = "translateY(20px)";
			document.querySelector(".modal-content").style.opacity = "0";
		  }
		});
  
	  </script>
  
@endsection