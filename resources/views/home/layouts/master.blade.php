<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Matrichaya</title>
  <link rel="stylesheet" href="	{{asset('/home/css/style.css')}}"/>
  <link rel="stylesheet" href="{{asset('/home/css/hamburger.css')}}
" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
            screens: {
            'xs': '350px',
            // => @media (min-width: 350px) { ... }
            },
        }
      }
    }
  </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
	@stack('styles')
</head>

<body>
  <header class="flex border-b bg-white min-h-[70px] tracking-wide relative z-100 lg:px-2">
    <div
      class="flex flex-wrap items-center justify-between px-5 sm:px-6 md:pl-8 md:pr-4 py-1 sm:py-2 md:py-3 gap-1 md:gap-2 w-full bg-white">
      <a href="/"><img src="{{asset('/home/images/logo.jpg')}}
" alt="logo" class="w-14" />
      </a>
      <div
        class="w-[48%] max-w-[300px] bg-white px-1 py-1 rounded-full border border-[#1B266B] overflow-hidden mx-auto hidden md:flex">
        <input type="email" placeholder="পন্যের নাম" class="w-full outline-none bg-white pl-4 text-sm" />
        <button type="button"
          class="bg-[#1B266B] hover:bg-[#F1CC18] transition-all text-white text-xs rounded-full px-5 py-1.5">
          খুঁজুন
        </button>
      </div>

      <div id="collapseMenu"
        class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
        <button id="toggleClose" class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </button>

        <ul
          class="lg:flex lg:gap-x-8 max-lg:space-y-1 max-lg:fixed max-lg:bg-white max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50 md:mr-6 text-[#1B266B]">
          <!-- Logo -->
          <li class="mb-6 hidden max-lg:block">
            <a href="/">
              <img src="{{asset('/home/images/logo.jpg')}}
" alt="logo" class="w-14" />
            </a>
          </li>

          <!-- Home -->
          <li class="max-lg:border-b max-lg:py-3">
            <a href="{{route('home')}}" class="hover:text-[#33C659] text-[15px] font-bold block">হোম</a>
          </li>

          <!-- Shop  -->
          <li class="max-lg:border-b max-lg:py-3">
            <a href="{{route('shop')}}" class="hover:text-[#33C659] text-[15px] font-bold block">শপ</a>
          </li>
		  <li class="max-lg:border-b max-lg:py-3">
			  <a href="{{route('blog')}}" class="hover:text-[#33C659] text-[15px] font-bold block">ব্লগসমূহ</a>
			</li>
		<li class="max-lg:border-b max-lg:py-3">
			<a href="{{route('storeloc')}}" class="hover:text-[#33C659] text-[15px] font-bold block">স্টোর লোকেশন</a>
		</li>
		<li class="max-lg:border-b max-lg:py-3">
            <a href="{{route('depo')}}"
              class="hover:text-[#33C659] text-[15px] font-bold block">ডিলার নিবন্ধন</a>
          </li>

          <!-- Pages Dropdown -->
          <li class="group max-lg:border-b max-lg:py-3 relative">
            <!-- Hidden Checkbox for Toggle -->
            <input type="checkbox" id="pages-toggle" class="hidden peer" />
            <label for="pages-toggle"
              class="hover:text-[#33C659] text-[15px] font-bold lg:hover:fill-[#33C659] block cursor-pointer">
              তথ্যাদি
              <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="ml-1 inline-block"
                viewBox="0 0 24 24">
                <path
                  d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z" />
              </svg>
            </label>
            <ul
              class="absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[180px] z-50 max-h-0 overflow-hidden peer-checked:max-h-[700px] px-6 peer-checked:pb-4 peer-checked:pt-6 transition-all duration-500">
              <li class="border-b py-2">
                <a href="{{route('about')}}" class="hover:text-[#33C659]  text-[15px] font-bold block">আমাদের কোম্পানি</a>
              </li>
              <li class="border-b py-2">
                <a href="{{route('privacy')}}" class="hover:text-[#33C659]  text-[15px] font-bold block">প্রাইভেসী পলিসি</a>
              </li>
              <li class="border-b py-2">
                <a href="{{route('policy')}}" class="hover:text-[#33C659]  text-[15px] font-bold block">টার্মস এবং শর্তাবলী</a>
              </li>
            </ul>
          </li>



          
        </ul>
      </div>
      <!--cart-->
      <div class="flex item-center">
        <span class="mr-2 relative md:hidden" onclick="toggleSearchOverlay()">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48">
            <path
              d="M 20.5 6 C 12.509634 6 6 12.50964 6 20.5 C 6 28.49036 12.509634 35 20.5 35 C 23.956359 35 27.133709 33.779044 29.628906 31.75 L 39.439453 41.560547 A 1.50015 1.50015 0 1 0 41.560547 39.439453 L 31.75 29.628906 C 33.779044 27.133709 35 23.956357 35 20.5 C 35 12.50964 28.490366 6 20.5 6 z M 20.5 9 C 26.869047 9 32 14.130957 32 20.5 C 32 23.602612 30.776198 26.405717 28.791016 28.470703 A 1.50015 1.50015 0 0 0 28.470703 28.791016 C 26.405717 30.776199 23.602614 32 20.5 32 C 14.130953 32 9 26.869043 9 20.5 C 9 14.130957 14.130953 9 20.5 9 z">
            </path>
          </svg>
        </span>
        <span class="relative mr-4">

          <svg id="hamburger" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
            class="cursor-pointer fill-[#333] hover:fill-[#33C659] inline h-auto " viewBox="0 0 512 512">
            <path
              d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
              data-original="#000000"></path>
          </svg>
          <span id="cardCount"
            class="absolute left-auto -ml-1 top-0 rounded-full bg-black px-1 py-0 text-xs text-white">0</span>
        </span>

        <button id="toggleOpen" class="lg:hidden">
          <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>
  
  <div id="searchOverlay" style="backdrop-filter: blur(3px);"
    class="fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center hidden z-20">
    <div class="relative w-full max-w-sm  px-2 py-3">
      <button
        class="absolute flex items-center font-bold justify-center top-[-6.5px] right-[9.3px] text-2xl text-[#1B266B] w-[30px] h-[30px] bg-[white] rounded-full"
        onclick="toggleSearchOverlay()">&times;</button>
      <form action="#" method="post" class="flex flex-col item-center">
        <input type="text" name="search" placeholder="কোন প্রোডাক্ট?"
          class="w-full px-4 py-2 border  focus:outline-none border border-2 border-[#1B266B]">
        <button type="submit" class="mt-4 w-[100px] bg-gr2 text-white py-2 rounded-full mx-auto text-sm">খুঁজুন</button>
      </form>
    </div>
  </div>

  <!-- Cart Slider -->
  <div id="sidebar"
    class="fixed top-0 right-0 h-screen  bg-white shadow-lg hidden-slider  slider  w-[300px] md:w-[320px] lg:w-[380px] z-50 flex flex-col justify-between">
    <div class="p-4">
      <div class="flex justify-between items-center">
        <h2 class="text-lg font-shishir text-[#1B266B] font-semibold">আপনার ব্যাগে আছে</h2>
        <button id="close-btn"
          class="flex items-center justify-center w-[38px] h-[38px] border border-2 border-red-700  font-semibold text-gray-800 rounded-full  px-[10px]">&times;</button>
      </div>
    </div>

    <!-- Cart items list starts after the top section -->
    <div id="cart-items" class="p-4 text-white flex-grow overflow-y-auto bg-gradient-to-br from-green-500 to-yellow-500
    ">
      <!-- Cart items will be dynamically rendered here -->
    </div>

    <!-- Proceed to Checkout Button at the bottom -->
    <div class="p-0">
      <a href="orderPage.html">
        <button id="checkout-btn" class="w-full p-3 font-shishir bg-[#1B266B] text-white  hover:bg-[green]">
          অর্ডার কনফার্ম করুন
        </button>
      </a>
    </div>
  </div>


  <script>
	// Render cart
	let cartArray = JSON.parse(localStorage.getItem('cart')) || [];  // Load cart from localStorage on page load

	// Render cart
	function renderCart() {
		const cartContainer = document.getElementById('cart-items');
		cartContainer.innerHTML = ''; // Clear previous cart items


		if (cartArray.length === 0) {
			// Show message if cart is empty
			cartContainer.innerHTML = `<p class="text-center p-4"> আপনার ব্যাগ খালি!</p>`;
		} else {
			cartArray.forEach(item => {
				const cartItem = `
	  <div class="flex justify-between items-center border-b p-4">
		<div class="flex flex-col text-sm">
		  <h3 class="text-lg">${item.title}</h3>
		  <p><span class="font-bold pr-1">মূল্যঃ</span> ${item.price} টাকা</p>
		  <p class="flex gap-2 items-center" id="quantity">
			<span class="font-bold pr-1">পরিমাণঃ</span>
			<span style="border: 1px solid green; border-radius:20px;" class="w-[60px] flex items-center justify-evenly">
			  <button id="decrease-${item.id}" class="text-sm text-red-600 font-extrabold" onclick="updateQuantity(${item.id}, 'decrease')"> &#8722;</button>
			  <span class="flex">${item.quantity}</span>
			  <button id="increase-${item.id}" class="text-sm text-green-600 font-extrabold" onclick="updateQuantity(${item.id}, 'increase')">+</button>
			</span>
		  </p>
		</div>
		<div class="flex items-center gap-4">
		  <img src="${item.imageUrl}" alt="${item.title}" class="w-16 h-16 object-contain rounded">
		  <button id="delete-${item.id}" onclick="deleteFromCart(${item.id})" class="text-xl text-red-600">
			<i id="delete-icon" class="fas fa-trash"></i>
		  </button>
		</div>
	  </div>
	`;
				cartContainer.innerHTML += cartItem;
			});
		}
	}

	// Call renderCart to display the cart contents on page load
	renderCart();

	function updateCartCount() {
		document.getElementById('cardCount').innerHTML = cartArray.length;
		if (cartArray.length > 0) {
			localStorage.setItem('cart', JSON.stringify(cartArray));
		}
	}
	updateCartCount();

	// Add product to cart
	function addToCart(productId) {
		const product = profiles.find(p => p.id === productId);
		const existingProduct = cartArray.find(p => p.id === productId);
		if (existingProduct) {
			existingProduct.quantity++;
		} else {
			cartArray.push({ ...product, quantity: 1 });
		}
		renderCart();
		openSlider();
		updateCartCount();
		localStorage.setItem('cart', JSON.stringify(cartArray));
	}


	// Delete item from cart
	function deleteFromCart(productId) {
		cartArray = cartArray.filter(p => p.id !== productId); // Remove the product from cartArray
		renderCart(); // Re-render the cart after deleting the item
		localStorage.setItem('cart', JSON.stringify(cartArray));
	}

	// Update quantity in cart
	function updateQuantity(productId, action) {
		const productIndex = cartArray.findIndex(p => p.id === productId);
		if (action === 'increase') {
			cartArray[productIndex].quantity++;
		} else if (action === 'decrease') {
			cartArray[productIndex].quantity--;
			// If quantity is zero, remove the product from cartArray
			if (cartArray[productIndex].quantity === 0) {
				cartArray = cartArray.filter(p => p.id !== productId); // Remove product from cartArray
			}
		}
		localStorage.setItem('cart', JSON.stringify(cartArray));
		renderCart(); // Re-render the cart after updating quantity
		updateCartCount();
	}
</script>

  <main id="content" class="min-h-[calc(100vh-324px)] mt-[1px]">
	@yield('content')
   

  </main>



  <footer class="bg-gr2 py-10 px-10 tracking-wide text-[#F9F1BF]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 max-w-screen-xl mx-auto">
      <div>
        <!-- <a href='javascript:void(0)'><img src="images/logo.jpg" alt="logo" class='w-28' /></a> -->


        <ul class="mt-10 space-y-6">
          <li class="flex items-center">
            <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                viewBox="0 0 482.6 482.6">
                <path
                  d="M98.339 320.8c47.6 56.9 104.9 101.7 170.3 133.4 24.9 11.8 58.2 25.8 95.3 28.2 2.3.1 4.5.2 6.8.2 24.9 0 44.9-8.6 61.2-26.3.1-.1.3-.3.4-.5 5.8-7 12.4-13.3 19.3-20 4.7-4.5 9.5-9.2 14.1-14 21.3-22.2 21.3-50.4-.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2-12.8 0-25.1 5.6-35.6 16.1l-35.8 35.8c-3.3-1.9-6.7-3.6-9.9-5.2-4-2-7.7-3.9-11-6-32.6-20.7-62.2-47.7-90.5-82.4-14.3-18.1-23.9-33.3-30.6-48.8 9.4-8.5 18.2-17.4 26.7-26.1 3-3.1 6.1-6.2 9.2-9.3 10.8-10.8 16.6-23.3 16.6-36s-5.7-25.2-16.6-36l-29.8-29.8c-3.5-3.5-6.8-6.9-10.2-10.4-6.6-6.8-13.5-13.8-20.3-20.1-10.3-10.1-22.4-15.4-35.2-15.4-12.7 0-24.9 5.3-35.6 15.5l-37.4 37.4c-13.6 13.6-21.3 30.1-22.9 49.2-1.9 23.9 2.5 49.3 13.9 80 17.5 47.5 43.9 91.6 83.1 138.7zm-72.6-216.6c1.2-13.3 6.3-24.4 15.9-34l37.2-37.2c5.8-5.6 12.2-8.5 18.4-8.5 6.1 0 12.3 2.9 18 8.7 6.7 6.2 13 12.7 19.8 19.6 3.4 3.5 6.9 7 10.4 10.6l29.8 29.8c6.2 6.2 9.4 12.5 9.4 18.7s-3.2 12.5-9.4 18.7c-3.1 3.1-6.2 6.3-9.3 9.4-9.3 9.4-18 18.3-27.6 26.8l-.5.5c-8.3 8.3-7 16.2-5 22.2.1.3.2.5.3.8 7.7 18.5 18.4 36.1 35.1 57.1 30 37 61.6 65.7 96.4 87.8 4.3 2.8 8.9 5 13.2 7.2 4 2 7.7 3.9 11 6 .4.2.7.4 1.1.6 3.3 1.7 6.5 2.5 9.7 2.5 8 0 13.2-5.1 14.9-6.8l37.4-37.4c5.8-5.8 12.1-8.9 18.3-8.9 7.6 0 13.8 4.7 17.7 8.9l60.3 60.2c12 12 11.9 25-.3 37.7-4.2 4.5-8.6 8.8-13.3 13.3-7 6.8-14.3 13.8-20.9 21.7-11.5 12.4-25.2 18.2-42.9 18.2-1.7 0-3.5-.1-5.2-.2-32.8-2.1-63.3-14.9-86.2-25.8-62.2-30.1-116.8-72.8-162.1-127-37.3-44.9-62.4-86.7-79-131.5-10.3-27.5-14.2-49.6-12.6-69.7z"
                  data-original="#000000" />
              </svg>
            </div>
            <a href="javascript:void(0)" class="text-white text-sm ml-3">
              <small class="block">মোবাইল</small>
              <strong>০১৭৬১-০৭৮৬২৩৪</strong>
            </a>
          </li>
          <li class="flex items-center">
            <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                viewBox="0 0 479.058 479.058">
                <path
                  d="M434.146 59.882H44.912C20.146 59.882 0 80.028 0 104.794v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159L239.529 264.631 39.173 90.982a14.902 14.902 0 0 1 5.738-1.159zm0 299.411H44.912c-8.26 0-14.971-6.71-14.971-14.971V122.615l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"
                  data-original="#000000" />
              </svg>
            </div>
            <a href="javascript:void(0)" class="text-white text-sm ml-3">
              <small class="block">ইমেইল</small>
              <strong>info@example.com</strong>
            </a>
          </li>
          <li class="flex items-center">
            <div class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                viewBox="0 0 368.16 368.16">
                <path
                  d="M184.08 0c-74.992 0-136 61.008-136 136 0 24.688 11.072 51.24 11.536 52.36 3.576 8.488 10.632 21.672 15.72 29.4l93.248 141.288c3.816 5.792 9.464 9.112 15.496 9.112s11.68-3.32 15.496-9.104l93.256-141.296c5.096-7.728 12.144-20.912 15.72-29.4.464-1.112 11.528-27.664 11.528-52.36 0-74.992-61.008-136-136-136zM293.8 182.152c-3.192 7.608-9.76 19.872-14.328 26.8l-93.256 141.296c-1.84 2.792-2.424 2.792-4.264 0L88.696 208.952c-4.568-6.928-11.136-19.2-14.328-26.808-.136-.328-10.288-24.768-10.288-46.144 0-66.168 53.832-120 120-120s120 53.832 120 120c0 21.408-10.176 45.912-10.28 46.152z"
                  data-original="#000000" />
                <path
                  d="M184.08 64.008c-39.704 0-72 32.304-72 72s32.296 72 72 72 72-32.304 72-72-32.296-72-72-72zm0 128c-30.872 0-56-25.12-56-56s25.128-56 56-56 56 25.12 56 56-25.128 56-56 56z"
                  data-original="#000000" />
              </svg>
            </div>
            <a href="javascript:void(0)" class="text-white text-sm ml-3">
              <small class="block">ঠিকানা</small>
              <strong>মাতৃছায়া ট্রেড কর্পোরেশন, হোল্ডিং নং-২৮৬, আয়ুব আলী রোড, দৌলতপুর, খুলনা।</strong>
            </a>
          </li>
          <li class="flex items-center">
            <div>
              <h4 class="text-[white] font-bold text-lg">সোস্যাল মিডিয়া</h4>
              <p class="text-sm text-white mt-2">সর্বশেষ অফার এবং যোগাযোগের জন্য ফলো করুন</p>
              <ul class="flex items-center mt-6 space-x-4">
                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <a href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                      viewBox="0 0 24 24">
                      <path
                        d="M6.812 13.937H9.33v9.312c0 .414.335.75.75.75l4.007.001a.75.75 0 0 0 .75-.75v-9.312h2.387a.75.75 0 0 0 .744-.657l.498-4a.75.75 0 0 0-.744-.843h-2.885c.113-2.471-.435-3.202 1.172-3.202 1.088-.13 2.804.421 2.804-.75V.909a.75.75 0 0 0-.648-.743A26.926 26.926 0 0 0 15.071 0c-7.01 0-5.567 7.772-5.74 8.437H6.812a.75.75 0 0 0-.75.75v4c0 .414.336.75.75.75zm.75-3.999h2.518a.75.75 0 0 0 .75-.75V6.037c0-2.883 1.545-4.536 4.24-4.536.878 0 1.686.043 2.242.087v2.149c-.402.205-3.976-.884-3.976 2.697v2.755c0 .414.336.75.75.75h2.786l-.312 2.5h-2.474a.75.75 0 0 0-.75.75V22.5h-2.505v-9.312a.75.75 0 0 0-.75-.75H7.562z"
                        data-original="#000000" />
                    </svg>
                  </a>
                </li>
                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <a href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                      viewBox="0 0 511 512">
                      <path
                        d="M111.898 160.664H15.5c-8.285 0-15 6.719-15 15V497c0 8.285 6.715 15 15 15h96.398c8.286 0 15-6.715 15-15V175.664c0-8.281-6.714-15-15-15zM96.898 482H30.5V190.664h66.398zM63.703 0C28.852 0 .5 28.352.5 63.195c0 34.852 28.352 63.2 63.203 63.2 34.848 0 63.195-28.352 63.195-63.2C126.898 28.352 98.551 0 63.703 0zm0 96.395c-18.308 0-33.203-14.891-33.203-33.2C30.5 44.891 45.395 30 63.703 30c18.305 0 33.195 14.89 33.195 33.195 0 18.309-14.89 33.2-33.195 33.2zm289.207 62.148c-22.8 0-45.273 5.496-65.398 15.777-.684-7.652-7.11-13.656-14.942-13.656h-96.406c-8.281 0-15 6.719-15 15V497c0 8.285 6.719 15 15 15h96.406c8.285 0 15-6.715 15-15V320.266c0-22.735 18.5-41.23 41.235-41.23 22.734 0 41.226 18.495 41.226 41.23V497c0 8.285 6.719 15 15 15h96.403c8.285 0 15-6.715 15-15V302.066c0-79.14-64.383-143.523-143.524-143.523zM466.434 482h-66.399V320.266c0-39.278-31.953-71.23-71.226-71.23-39.282 0-71.239 31.952-71.239 71.23V482h-66.402V190.664h66.402v11.082c0 5.77 3.309 11.027 8.512 13.524a15.01 15.01 0 0 0 15.875-1.82c20.313-16.294 44.852-24.907 70.953-24.907 62.598 0 113.524 50.926 113.524 113.523zm0 0"
                        data-original="#000000" />
                    </svg>
                  </a>
                </li>
                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <a href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                      viewBox="0 0 682.667 682.667">
                      <defs>
                        <clipPath id="a" clipPathUnits="userSpaceOnUse">
                          <path d="M0 512h512V0H0Z" data-original="#33C659" />
                        </clipPath>
                      </defs>
                      <g fill="none" stroke="#33C659" stroke-linecap="round" stroke-linejoin="round"
                        stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)"
                        transform="matrix(1.33 0 0 -1.33 0 682.667)">
                        <path
                          d="M492 255.75c0-39.49-3.501-75.479-7.497-103.698-5.191-36.655-34.801-64.96-71.646-68.567C373.764 79.658 318.529 75.75 256 75.75c-62.529 0-117.764 3.908-156.857 7.735-36.845 3.607-66.455 31.912-71.646 68.567C23.501 180.271 20 216.26 20 255.75c0 39.49 3.501 75.479 7.497 103.698 5.191 36.655 34.801 64.96 71.646 68.567 39.093 3.827 94.328 7.735 156.857 7.735 62.529 0 117.764-3.908 156.857-7.735 36.845-3.607 66.455-31.912 71.646-68.567C488.499 331.229 492 295.24 492 255.75Z"
                          data-original="#000000" />
                        <path
                          d="m245.5 185.291 75.914 45.165c19.448 11.57 19.448 39.518 0 51.088L245.5 326.709c-20.024 11.913-45.5-2.39-45.5-25.544v-90.33c0-23.154 25.476-37.457 45.5-25.544Z"
                          data-original="#000000" />
                      </g>
                    </svg>
                  </a>
                </li>
                <li class="bg-[#e6e6e6cf] h-10 w-10 rounded-full flex items-center justify-center shrink-0">
                  <a href="javascript:void(0)">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill='#33C659'
                      viewBox="0 0 24 24">
                      <path
                        d="M12 9.3a2.7 2.7 0 1 0 0 5.4 2.7 2.7 0 0 0 0-5.4Zm0-1.8a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.85-.225a1.125 1.125 0 1 1-2.25 0 1.125 1.125 0 0 1 2.25 0ZM12 4.8c-2.227 0-2.59.006-3.626.052-.706.034-1.18.128-1.618.299a2.59 2.59 0 0 0-.972.633 2.601 2.601 0 0 0-.634.972c-.17.44-.265.913-.298 1.618C4.805 9.367 4.8 9.714 4.8 12c0 2.227.006 2.59.052 3.626.034.705.128 1.18.298 1.617.153.392.333.674.632.972.303.303.585.484.972.633.445.172.918.267 1.62.3.993.047 1.34.052 3.626.052 2.227 0 2.59-.006 3.626-.052.704-.034 1.178-.128 1.617-.298.39-.152.674-.333.972-.632.304-.303.485-.585.634-.972.171-.444.266-.918.299-1.62.047-.993.052-1.34.052-3.626 0-2.227-.006-2.59-.052-3.626-.034-.704-.128-1.18-.299-1.618a2.619 2.619 0 0 0-.633-.972 2.595 2.595 0 0 0-.972-.634c-.44-.17-.914-.265-1.618-.298-.993-.047-1.34-.052-3.626-.052ZM12 3c2.445 0 2.75.009 3.71.054.958.045 1.61.195 2.185.419A4.388 4.388 0 0 1 19.49 4.51c.457.45.812.994 1.038 1.595.222.573.373 1.227.418 2.185.042.96.054 1.265.054 3.71 0 2.445-.009 2.75-.054 3.71-.045.958-.196 1.61-.419 2.185a4.395 4.395 0 0 1-1.037 1.595 4.44 4.44 0 0 1-1.595 1.038c-.573.222-1.227.373-2.185.418-.96.042-1.265.054-3.71.054-2.445 0-2.75-.009-3.71-.054-.958-.045-1.61-.196-2.185-.419A4.402 4.402 0 0 1 4.51 19.49a4.414 4.414 0 0 1-1.037-1.595c-.224-.573-.374-1.227-.419-2.185C3.012 14.75 3 14.445 3 12c0-2.445.009-2.75.054-3.71s.195-1.61.419-2.185A4.392 4.392 0 0 1 4.51 4.51c.45-.458.994-.812 1.595-1.037.574-.224 1.226-.374 2.185-.419C9.25 3.012 9.555 3 12 3Z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        </ul>
      </div>

      <div class="max-w-md md:ml-auto">
        <h4 class="text-[white] font-bold text-lg">যোগাযোগ করুন</h4>
        <p class="text-sm text-white mt-2">২৪ ঘন্টার মধ্যে আমরা আমরা আপনার সাথে যুক্ত হবো</p>
        <form class="mt-6">
          <input type='text' placeholder='আপনার নাম'
            class="w-full rounded-md h-10 px-6 bg-[#f0f1f2] text-sm mb-3 outline-blue-500" />
          <input type='text' placeholder='ইমেইল (আবশ্যক না)'
            class="w-full rounded-md h-10 px-6 bg-[#f0f1f2] text-sm mb-3 outline-blue-500" />
          <textarea placeholder='আপনার সমস্যা কিংবা পরামর্শ...' rows="6"
            class="w-full rounded-md px-6 bg-[#f0f1f2] text-sm pt-3 outline-blue-500"></textarea>
        </form>
        <a href="/"
          class="group relative flex mt-5 h-11 w-[172px] items-center justify-between border-2 shadow-md rounded-full  bg-[#6a11cd] dark:text-white font-medium dark:text-neutral-200 text-black mx-auto font-nakkh">
          <span class="pl-4 text-sm">ম্যাসেজ পাঠান</span>
          <div class="relative h-9 w-9 overflow-hidden text-white bg-[#0d1799] rounded-full mr-1">
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

    <div class="max-w-screen-xl mx-auto">
      <hr class="my-8 border-blue-300" />

      <div class="lg:flex lg:item-center font-nikosh">
        <ul class="flex flex-wrap gap-4">
          <li>
            <a href='javascript:void(0)' class='text-white text-sm font-semibold hover:underline'>শর্তাবলী</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-white text-sm font-semibold hover:underline'>প্রাইভেসী পলিসি</a>
          </li>
          <li>
            <a href='javascript:void(0)' class='text-white text-sm font-semibold hover:underline'>আমাদের কোম্পানি</a>
          </li>
        </ul>
        <p class='text-sm text-white ml-auto max-lg:mt-4'>© Matrichaya Trade Corporation. All rights reserved.</p>
      </div>
    </div>
  </footer>

<!-- Common Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{asset('/home/js/script.js')}}"></script>

<!-- Stack for additional scripts in specific sections -->
@stack('scripts')

  <script>
	// Toggle Search Overlay
	function toggleSearchOverlay() {
	  const overlay = document.getElementById('searchOverlay');
	  overlay.classList.toggle('hidden');
	}
  
	// Hamburger Menu
	const hamburger = document.getElementById('hamburger');
	const sidebar = document.getElementById('sidebar');
	const closeBtn = document.getElementById('close-btn');
  
	hamburger.addEventListener('click', () => {
	  openSlider();
	});
  
	const openSlider = () => {
	  if (!sidebar.classList.contains('visible-slider')) {
		// Only open the slider if it is not already open
		sidebar.classList.remove('hidden-slider');
		sidebar.classList.add('visible-slider');
	  }
	}
  
	closeBtn.addEventListener('click', () => {
	  sidebar.classList.toggle('hidden-slider');
	  sidebar.classList.toggle('visible-slider');
	});
  
	// Close slider on outside click for large screens
	document.addEventListener('click', (e) => {
	  const isClickInsideSlider = sidebar.contains(e.target);
	  const isHamburger = e.target.id === 'hamburger';
	  const isAddToCartButton = e.target.id === 'addToCardId';
  
	  // Check if the clicked element is a quantity button or delete button
	  const isQuantityButton = e.target.id.startsWith('increase-') || e.target.id.startsWith('decrease-');
	  const isDeleteButton = e.target.id.startsWith('delete-');
  
	  if (!isClickInsideSlider && !isHamburger && !isAddToCartButton && !isQuantityButton && !isDeleteButton) {
		sidebar.classList.remove('visible-slider');
		sidebar.classList.add('hidden-slider');
	  }
	});
  </script>
  
</body>

</html>