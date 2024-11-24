@push('styles')
<link rel="stylesheet" href="{{asset('/home/css/orderPage.css')}}" />
@endpush
@push('scripts')
<script src="{{asset('/home/js/order.js')}}"></script>
@endpush
@extends('home.layouts.master')
@section('content')
<section class="mx-1 md:mx-10 lg:mx-20">
	<div class="cart mt-24">
	  <div class="cart-items">
		<div class=" grid grid-cols-6 gap-2 sm:gap-4 text-xs sm:text-sm md:text-base text-center">
			<p>ছবি</p>
			<p class="col-span-2">নাম</p>
			<p>মূল্য</p>
			<p>পরিমাণ</p>
			<p>কিনব না</p>
		  </div>
		<hr class="my-2 border-t border-gray-300" />

		<!-- Cart items will be dynamically added here -->
		<div id="cartItemsContainer"></div>

		<hr class="my-2 border-t border-gray-300" />
	  </div>


	</div>
  </section>

  <section class="px-1 py-6 sm:px-2 md:px-4 lg:px-6 shadow-md mb-1 max-w-full">
	<form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
	  <fieldset class="grid grid-cols-4 gap-6 rounded-md shadow-sm">
		<div class="space-y-2 col-span-full lg:col-span-1">
		  <p class="font-medium">অর্ডার করতে সঠিকভাবে পূরণ করুন</p>
		  <p class="text-xs">অথবা কোনো কিছু না বুঝলে আমাদের কল করতে ভুলবেন না। আপনার যেকোন অভিযোগ,পরামর্শ আমরা সাদরে গ্রহণ করব</p>
		  <a href="tel:01707695177" class="text-xs"><span class="font-bold">মোবাইলঃ</span> ০১৭৩৬৪৯৮৫৬৩ </a>
		</div>
		<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
		  <div class="col-span-full sm:col-span-2">
			<label for="name" class="text-sm">পুরো নাম</label>
			<input id="name" type="text" placeholder="আপনার নাম লিখুন"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2">
		  </div>
	   
		  <div class="col-span-full sm:col-span-2">
			<label for="email" class="text-sm">ইমেইল</label>
			<input id="email" type="email" placeholder="আপনার ইমেইল (না দিলেও চলবে)"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2">
		  </div>
		  <div class="col-span-full sm:col-span-2">
			<label for="phone" class="text-sm">মোবাইল নাম্বার *</label>
			<input id="phone" type="tel" placeholder="+880"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2"
			  value="+880" maxlength="14" oninput="enforcePhoneFormat(this)">
		  </div>
		  <div class="col-span-full">
			<label for="address" class="text-sm">শিপমেন্ট/কুরিয়ার ঠিকানা</label>
			<input id="address" type="text" placeholder="যেখানে ডেলিভারি নিতে চান তার পুরো ঠিকানা"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2">
		  </div>
		  
		  <div class="col-span-full sm:col-span-2">
			<label for="state" class="text-sm">বিভাগ</label>
			<input id="state" type="text" placeholder="বিভাগ"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2">
		  </div>
		  <div class="col-span-full sm:col-span-2">
			<label for="city" class="text-sm">জেলা</label>
			<input id="city" type="text" placeholder="জেলা"
			  class="w-full rounded-md  px-1 py-1 sm:py-2 text-sm md:text-base border-2">
		  </div>
		
		</div>
	  </fieldset>
	</form>
  </section>

  <script>
	function enforcePhoneFormat(input) {
	  // If the input value does not start with "+880", reset it to "+880"
	  if (!input.value.startsWith("+880")) {
		input.value = "+880";
	  }
	
	  // Remove any non-numeric characters except for "+880" prefix
	  input.value = input.value.replace(/(?!^\+880)\D/g, "");
	
	  // Limit to 14 characters in total (+880 + 10 digits)
	  if (input.value.length > 14) {
		input.value = input.value.slice(0, 14);
	  }
	}
	</script>
  <section class="px-6 sm:px-8 md:px-10 py-7 bg-[#F9F1BF]">
	<div class="mx-auto flex justify-between ">
	  <div class="cart-total w-full flex flex-col gap-5">
		<h2 class="text-xl font-bold">খরচের বিবরণঃ</h2>
		<div class="text-base lg:text-lg">
		  <div class="cart-total-details flex justify-between text-gray-600">
			<p>প্রোডাক্টের দাম</p>
			<p id="subtotal">$0</p>
		  </div>
		  <hr class="my-2 border-t border-gray-300" />
		  <div class="cart-total-details flex justify-between text-gray-600">
			<p>ডেলিভারি ফি</p>
			<p>$2</p>
		  </div>
		  <hr class="my-2 border-t border-gray-300" />
		  <div class="cart-total-details flex justify-between text-gray-600">
			<b>সর্বমোট</b>
			<b id="total">$2</b>
		  </div>
		</div>
		<button class="bg-tomato text-white mb-14 rounded-lg uppercase w-full text-md">অর্ডার নিশ্চিত করতে ক্লিক করুন</button>
	  </div>
	</div>
  </section>
  <script>


    // ###################### 


    // Render cart
     cart = JSON.parse(localStorage.getItem('cart')) || [];  // Load cart from localStorage on page load
    // console.log(cart); // Check initial cart contents

    // Product Profile array
 profiles = [
  { id: 1, title: "বায়োনিল ওয়েল স্প্রে (৪00 মিলি)", imageUrl: "images/oilspray2.png", price: 240, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Spray" },

  { id: 2, title: "বায়োনিল ওয়েল স্প্রে (৫লিটার)", imageUrl: "images/oil_sprayb.png", price: 2200, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Spray" },

  { id: 3, title: "বায়োনিল টয়লেট ক্লিনার", imageUrl: "images/toilet-cl.png", price: 0, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Cleaner" },

  { id: 4, title: "র‍্যাপিড অ্যাকশন এক্সপ্রেস সিস্টেম", imageUrl: "images/rapidaction.png", price: 70, description: "মশা মারার জন্য কার্যকরী", category: "Spray" },

  { id: 5, title: "বায়োনিল লিকুইড ডিশ ওয়াশ", imageUrl: "images/dishwash.png", price: 75, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Dish Wash" },

  { id: 6, title: "বায়োনিল হোয়াইট ভিনেগার", imageUrl: "images/whiteVinegar.png", price: 90, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Vinegar" },

  { id: 7, title: "বায়োনিল ওয়াশিং পাউডার", imageUrl: "images/washigPowder.png", price: 150, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Washing Powder" },

  { id: 8, title: "বায়োনিল হ্যান্ডওয়াশ লিকুইড", imageUrl: "images/handwash.png", price: 170, description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা", category: "Hand Wash" }
];

    // ব্যাগের সামগ্রী প্রদর্শন করুন
    function displayCartItems() {
      const cartContainer = document.getElementById('cart-items');
      cartContainer.innerHTML = ''; // পূর্বের ব্যাগের সামগ্রী পরিষ্কার করুন

      // console.log(cart); // এখানে ব্যাগের কনটেন্ট চেক করুন

      if (cart.length === 0) {
        // ব্যাগ খালি হলে বার্তা দেখান
        cartContainer.innerHTML = `<p class="text-center p-4"> আপনার ব্যাগ খালি!</p>`;
      } else {
        cart.forEach(item => {
          const cartItem = `
                <div class="flex justify-between items-center border-b p-4">
                    <div class="flex flex-col text-sm">
                        <h3 class="text-lg">${item.title}</h3>
                        <p><span class="font-bold pr-1">মূল্যঃ</span> ${item.price} টাকা</p>
                        <p class="flex gap-2 items-center" id="quantity">
                            <span class="font-bold pr-1">পরিমাণঃ</span>
                            <span style="border: 1px solid green; border-radius:20px;" class="w-[60px] flex items-center justify-evenly">
                                <button id="decrease-${item.id}" class="text-sm text-red-600 font-extrabold" onclick="modifyQuantity(${item.id}, 'decrease')"> &#8722;</button>
                                <span class="flex">${item.quantity}</span>
                                <button id="increase-${item.id}" class="text-sm text-green-600 font-extrabold" onclick="modifyQuantity(${item.id}, 'increase')">+</button>
                            </span>
                        </p>
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="${item.imageUrl}" alt="${item.title}" class="w-16 h-16 object-contain rounded">
                        <button id="delete-${item.id}" onclick="removeFromCart(${item.id})" class="text-xl text-red-600">
                            <i id="delete-icon" class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;
          cartContainer.innerHTML += cartItem;
        });
      }
    }

    // পৃষ্ঠাটি লোড হলে ব্যাগের সামগ্রী প্রদর্শন করুন
    displayCartItems();

    // ব্যাগের আইটেম সংখ্যা আপডেট করুন
    function updateCartItemCount() {
      document.getElementById('cardCount').innerHTML = cart.length;
      if (cart.length > 0) {
        localStorage.setItem('cart', JSON.stringify(cart));
      }
      updateLocalStorage();
          updateCartCount();
    }
    updateCartItemCount();

    // ব্যাগে পণ্য যোগ করুন
    function addProductToCart(productId) {
      const product = profiles.find(p => p.id === productId);
      const existingProduct = cart.find(p => p.id === productId);
      if (existingProduct) {
        existingProduct.quantity++;
      } else {
        cart.push({ ...product, quantity: 1 });
      }
      displayCartItems();
      openSlider();
      updateCartItemCount();
      updateLocalStorage();
          updateCartCount();
    }

    // ব্যাগ থেকে আইটেম মুছুন
    function removeFromCart(productId) {
      cart = cart.filter(p => p.id !== productId); // ব্যাগ থেকে পণ্য সরান
      displayCartItems(); // আইটেম মুছে ফেলার পরে ব্যাগ পুনরায় প্রদর্শন করুন
      localStorage.setItem('cart', JSON.stringify(cart));
      updateCartItemCount();
      updateLocalStorage();
          updateCartCount();
    }

    // ব্যাগে পরিমাণ আপডেট করুন
    function modifyQuantity(productId, action) {
      const productIndex = cart.findIndex(p => p.id === productId);
      if (action === 'increase') {
        cart[productIndex].quantity++;
      } else if (action === 'decrease') {
        cart[productIndex].quantity--;
        // যদি পরিমাণ শূন্য হয়, তাহলে ব্যাগ থেকে পণ্য সরান
        if (cart[productIndex].quantity === 0) {
          cart = cart.filter(p => p.id !== productId);
        }
      }
      localStorage.setItem('cart', JSON.stringify(cart));
      displayCartItems(); // পরিমাণ আপডেট করার পরে ব্যাগ পুনরায় প্রদর্শন করুন
      updateCartItemCount();
      updateLocalStorage();
      updateCartCount();
    }

    function updateCartCount() {
      document.getElementById('cardCount').innerHTML = cart.length;
      renderCart();
    }


    function renderCart() {
  const cartItemsContainer = document.getElementById('cartItemsContainer');
  cartItemsContainer.innerHTML = ''; // Clear the container before rendering new content

  if (cart.length === 0) {
    // If the cart is empty, show the empty message
    cartItemsContainer.innerHTML = '<p class="text-center p-4">আপনার ব্যাগ খালি!</p>';
    return; // Exit the function early since no cart items to render
  }

  let subtotal = 0;

  cart.forEach((item) => {
    const price = parseFloat(item.price) || 0; // Ensure price is a valid number
    const quantity = parseInt(item.quantity, 10) || 0; // Ensure quantity is a valid number
    const totalPrice = price * quantity; // Calculate the total price for this item
    subtotal += totalPrice;

    const itemElement = `
     <div class="cart-items-title grid grid-cols-6 items-center gap-2 my-4">
		<!-- Image -->
		<img src="${item.imageUrl}" class="w-10 h-10 rounded-lg cursor-pointer col-span-1" alt="${item.title}" />

		<!-- Title (col-span-2) -->
		<p class="md:text-base col-span-2">${item.title}</p>

		<!-- Price -->
		<p class="col-span-1 text-center">$${Number(item.price).toFixed(2)}</p>

		<!-- Quantity -->
		<div class="quantity flex items-center justify-center col-span-1">
			<p class="quantity-input">${quantity}</p>
		</div>

		<!-- Delete Button -->
		<button id="delete-${item.id}" onclick="removeFromCart(${item.id})" class="text-lg text-red-600 col-span-1">
			<i id="delete-icon" class="fas fa-trash"></i>
		</button>
		</div>

    `;
    cartItemsContainer.innerHTML += itemElement;
  });

  document.getElementById('subtotal').textContent = `$ ${subtotal.toFixed(2)}`;
  document.getElementById('total').textContent = `$ ${(subtotal + 2).toFixed(2)}`;
}

    function addToCart(id) {
      const product = productProfile.find(p => p.id === id);
      const existingProduct = cartForOrder.find(p => p.id === id);

      if (existingProduct) {
        existingProduct.quantity++;
      } else {
        cartForOrder.push({ ...product, quantity: 1 });
      }

      updateLocalStorage();
      updateCartCount();
      renderCart();
    }

    function deleteFromCart(productId) {
      console.log("Attempting to delete item with ID:", productId);
      cartForOrder = cartForOrder.filter(p => p.id !== productId);
      renderCart();
      localStorage.setItem('cart', JSON.stringify(cartForOrder));
      updateCartCount();
      console.log("Item deleted, updated cart:", cartForOrder);
    }

    function updateQuantity(productId, action) {
      const productIndex = cart.findIndex(p => p.id === productId);

      if (action === 'increase') {
        cart[productIndex].quantity++;
      } else if (action === 'decrease') {
        cart[productIndex].quantity--;

        if (cart[productIndex].quantity === 0) {
          cart = cart.filter(p => p.id !== productId);
        }
      }

      updateLocalStorage();
      updateCartCount();
      renderCart();
    }

    function updateLocalStorage() {
      localStorage.setItem('cart', JSON.stringify(cart));  // Save cart to 'cart' in localStorage
      displayCartItems();
    }
    renderCart();
    updateCartCount();



  </script>
@endsection