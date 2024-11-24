@extends('home.layouts.master')
@section('content')
<script>
	// Render cart
	 cartArray = JSON.parse(localStorage.getItem('cart')) || [];  // Load cart from localStorage on page load

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
		const product = products.find(p => p.id === productId);
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
<section>
	<div class="relative w-full h-[150px] sm:h-[180px] md:h[200px] lg:h[220px] xl:h[250px] overflow-hidden">
	  <img src="{{asset('/home/images/abus.jpg')}}" alt="Image" class="w-full h-full object-cover">
	  <!-- Dark overlay -->
	  <!-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> -->
	  <!-- About Us text -->
	  <div
		class="absolute bottom-4 left-4 text-white text-base sm:text-md md:text-lg font-semibold bg-gray-300 bg-opacity-50 p-2 rounded-lg">
		শপ পেইজ
	  </div>
	</div>
</section
  </section>
    <div class="bg-[#F9F1BF] w-full">

        <div class="max-w-full mx-auto bg-white px-1 sm:px-2 md:px-4 py-4 sm:py-6 rounded-lg shadow-md">
            <h1 class="text-base sm:text-xl md:text-2xl font-bold mb-2 sm:mb-3 lg:mb-4">প্রোডাক্ট খুঁজুন</h1>

            <!-- Search Input -->
            <input id="searchInput" type="text" placeholder="প্রোডাক্টের নাম..."
                class="w-full text-base mb-4 px-1 sm:px-2 py-1 border border-gray-300 rounded-lg focus:outline-none" />

            <!-- Category Dropdown -->
            <select id="categoryDropdown"
                class="w-full text-base mb-4 px-1 sm:px-2 py-1 border border-gray-300 rounded-lg focus:outline-none">
                <option value="">ক্যাটাগরি নির্বাচন করুন</option>
                <option value="Spray">স্প্রে</option>
                <option value="Cleaner">ক্লিনার</option>
                <option value="Dish Wash">ডিশ ওয়াশ</option>
                <option value="Vinegar">ভিনেগার</option>
                <option value="Washing Powder">ওয়াশিং পাউডার</option>
                <option value="Hand Wash">হ্যান্ড ওয়াশ</option>
            </select>

            <!-- All Products Button -->
            <button id="allProductsButton"
                class="bg-blue-500 text-sm sm:text-base text-white py-1 px-4 rounded-full mb-4 hover:bg-blue-600">
                সব প্রোডাক্ট
            </button>

            <!-- Products Container -->
            <div id="productContainer" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 place-items-center">
            </div>
        </div>

        <!-- Modal Overlay -->
        <div id="productModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <!-- Modal Content -->
            <div
                class="bg-white p-6 rounded-lg shadow-lg relative -translate-y-1 w-[330px] sm:w-[460px] md:w-[530px] max-w-full h-[500px] md:h-[490px] overflow-y-auto">
                <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-2xl font-bold">
                    &times;
                </button>
                <img id="modalImage" class="w-full h-[150px] object-contain rounded-lg mb-4" src=""
                    alt="Product Image">
                <h3 id="modalTitle" class="text-lg font-bold mb-2"></h3>
                <p id="modalDescription" class="text-lg text-gray-600 mb-4"></p>
                <p id="modalPrice" class="text-xl font-semibold text-green-600 hidden"></p>
                <div class="flex gap-5">
                    <button id="buyNowButton"
                        class="inline-flex flex-1 w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset]  hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
                        role="button">
                        এখনই কিনুন </button>
                    <a href="/product-details.html" class="flex-1">
                        <button
                            class="inline-flex w-full mt-10 items-center justify-center h-12 px-4 text-lg font-medium text-white font-nakkh transition-transform transform bg-gradient-to-br from-blue-500 to-green-500 rounded-lg shadow-[rgba(45,35,66,0.4)_0px_2px_4px,rgba(45,35,66,0.3)_0px_7px_13px_-3px,rgba(58,65,111,0.5)_0px_-3px_0px_inset]  hover:shadow-[rgba(45,35,66,0.4)_0px_0px_0px,rgba(45,35,66,0.3)_0px_1px_1px_-3px,#3c4fe0_0px_-2px_0px_inset] hover:-translate-y-0.5 active:shadow-[#3c4fe0_0px_3px_7px_inset] active:translate-y-0.5"
                            role="button">
                            বিস্তারিত
                        </button>
                    </a>
                </div>
            </div>
        </div>


        <script>
            // Product Data
            // const products = [{
            //         id: 1,
            //         title: "বায়োনিল ওয়েল স্প্রে (৪00 মিলি)",
            //         imageUrl: "images/oilspray2.png",
            //         price: 240,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Spray"
            //     },
            //     {
            //         id: 2,
            //         title: "বায়োনিল ওয়েল স্প্রে (৫লিটার)",
            //         imageUrl: "images/oil_sprayb.png",
            //         price: 2200,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Spray"
            //     },
            //     {
            //         id: 3,
            //         title: "বায়োনিল টয়লেট ক্লিনার",
            //         imageUrl: "images/toilet-cl.png",
            //         price: 0,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Cleaner"
            //     },
            //     {
            //         id: 4,
            //         title: "র‍্যাপিড অ্যাকশন এক্সপ্রেস সিস্টেম",
            //         imageUrl: "images/rapidaction.png",
            //         price: 70,
            //         description: "মশা মারার জন্য কার্যকরী",
            //         category: "Spray"
            //     },
            //     {
            //         id: 5,
            //         title: "বায়োনিল লিকুইড ডিশ ওয়াশ",
            //         imageUrl: "images/dishwash.png", 
            //         price: 75,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Dish Wash"
            //     },
            //     {
            //         id: 6,
            //         title: "বায়োনিল হোয়াইট ভিনেগার",
            //         imageUrl: "images/whiteVinegar.png",
            //         price: 90,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Vinegar"
            //     },
            //     {
            //         id: 7,
            //         title: "বায়োনিল ওয়াশিং পাউডার",
            //         imageUrl: "images/washigPowder.png",
            //         price: 150,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Washing Powder"
            //     },
            //     {
            //         id: 8,
            //         title: "বায়োনিল হ্যান্ডওয়াশ লিকুইড",
            //         imageUrl: "images/handwash.png",
            //         price: 170,
            //         description: "ছারপোকা হচ্ছে সাইমেক্স গণের অন্তর্ভুক্ত এক জাতের পোকা যারা",
            //         category: "Hand Wash"
            //     }
            // ];
            
            const products=[];
            fetch('/api/products')  // Use the correct URL where your API is exposed
            .then(response => response.json())  // Parse the JSON response
            .then(data => {
              // Assign the fetched data to profiles
              products.push(...data); // Using push to add multiple products to the profiles array
              
            })
            .catch(error => {
              console.error('Error fetching products:', error);
            });
            console.log(products);
             cart = JSON.parse(localStorage.getItem('cart')) || []; // Load cart from localStorage on page load

            // DOM Elements
            const searchInput = document.getElementById('searchInput');
            const categoryDropdown = document.getElementById('categoryDropdown');
            const allProductsButton = document.getElementById('allProductsButton');
            const productContainer = document.getElementById('productContainer');



            // Function to Render Products
            function renderProducts(products) {
                const productContainer = document.querySelector(
                '#productContainer'); // Ensure you have a container with this ID in your HTML
                productContainer.innerHTML = ''; // Clear existing content

                products.forEach(product => {
                    const productCard = document.createElement('div');
                    productCard.className =
                        'bg-white rounded-xl overflow-hidden shadow-w cursor-pointer relative mx-auto product-card w-[300px] max-w-[285px] sm:max-w-[300px]';
                    productCard.setAttribute('data-target', '#productModal2');
                    productCard.setAttribute('data-title', product.title);
                    productCard.setAttribute('data-price', product.price);
                    productCard.setAttribute('data-image', product.imageUrl);
                    productCard.setAttribute('data-description', product.description);

                    productCard.innerHTML = `
      <div class="relative-full border-b-8 border-b-[#222E78]">
        <img
          onclick="showModal(${product.id})"
          src="${product.imageUrl}"
          alt="${product.title}"
          class="h-[300px] w-full object-contain max-w-[285px] sm:max-w-[300px]"
        />
        <div class="absolute top-[276px] sm:bottom-[96px] left-[64px]">
          <button
            onclick="addToCartAndRedirect(${product.id})"
            class="group relative h-12 w-[170px] rounded-full bg-gradient-to-r dark:from-[#070e41] dark:to-[#263381] from-[#f7f8ff] to-[#ffffff] px-5 dark:text-white text-neutral-950"
          >
            <span class="relative inline-flex overflow-hidden">
              <div
                class="translate-y-0 skew-y-0 transition duration-500 group-hover:-translate-y-[120%] group-hover:skew-y-12"
              >
                অর্ডার করুন
              </div>
              <div
                class="absolute translate-y-[114%] skew-y-12 transition duration-500 group-hover:translate-y-0 group-hover:skew-y-0"
              >
                অর্ডার করুন
              </div>
            </span>
          </button>
        </div>
      </div>
      <!-- Price Tag -->
      <div
        class="absolute top-[3px] right-[3px] bg-green-500 text-white text-lg font-bold px-6 py-1 rounded-lg shadow-lg clip-leftpoint"
      >
        <span><i class="fa-solid fa-bangladeshi-taka-sign pr-1"></i>${product.price}</span>
      </div>
      <div class="p-4">
        <a href="../product-details.html">
          <h3 class="text-md sm:text:base md:text-lg font-bold text-[#2D2A32] hover:text-[#33C659] transition duration-300">
            ${product.title}
          </h3>
        </a>
        <div class="mt-2 flex items-center flex-wrap gap-2">
          <div
            class="mx-auto bg-gradient-to-r from-sky-500 to-indigo-500 rounded-full shadow-lg shadow-purple-200 flex items-center justify-center text-lg sm:text-xl px-4 py-2 cursor-pointer hover:outline-none active:outline-none whitespace-nowrap select-none touch-manipulation min-w-[100px] sm:min-w-[150px] max-w-full hover:-translate-y-1 transition duration-100"
          >
            <i class="fa-solid fa-bag-shopping text-white mr-1"></i>
            <span
              id="addToCardId"
              onclick="addToCart(${product.id})"
              class="text-white font-bold">ব্যাগে রাখুন</span>
          </div>
        </div>
      </div>
    `;

                    productContainer.appendChild(productCard);
                });
            }


            // buy now button
             addToCartAndRedirect = (productId) => {
                const product = products.find(p => p.id === productId);
                const existingProduct = cart.find(p => p.id === productId);

                if (existingProduct) {
                    existingProduct.quantity++;
                } else {
                    cart.push({
                        ...product,
                        quantity: 1
                    });
                }

                localStorage.setItem('cart', JSON.stringify(cart));

                // Redirect to another page
                window.location.href = '/orderPage.html'; // Replace '/another-page' with your target URL
            };


            // Filter and Display Products Based on Search and Category
            function filterProducts() {
                const searchQuery = searchInput.value.toLowerCase();
                const selectedCategory = categoryDropdown.value;

                const filteredProducts = products.filter(product => {
                    const matchesTitle = product.title.toLowerCase().includes(searchQuery);
                    const matchesCategory = selectedCategory ? product.category === selectedCategory : true;
                    return matchesTitle && matchesCategory;
                });

                renderProducts(filteredProducts);
            }

            // Show All Products
            function showAllProducts() {
                searchInput.value = '';
                categoryDropdown.value = '';
                renderProducts(products);
            }

            // Event Listeners
            searchInput.addEventListener('input', filterProducts);
            categoryDropdown.addEventListener('change', filterProducts);
            allProductsButton.addEventListener('click', showAllProducts);

            // Initial Display of All Products
            showAllProducts();




            // Show modal with profile data
            function showModal(id) {
                const profile = products.find(p => p.id === id);
                if (profile) {
                    document.getElementById('modalImage').src = profile.imageUrl;
                    document.getElementById('modalTitle').textContent = profile.title;
                    document.getElementById('modalDescription').innerHTML = profile.description;
                    document.getElementById('modalPrice').textContent = profile.price;
                    document.getElementById('productModal').classList.remove('hidden');

                    // Dynamically set the onclick event for the Buy Now button
                    const buyNowButton = document.getElementById('buyNowButton');
                    buyNowButton.onclick = () => addToCartAndRedirect(id);

                    document.getElementById('productModal').classList.remove('hidden');


                }
            }

            // Hide modal
            document.getElementById('closeModal').addEventListener('click', () => {
                document.getElementById('productModal').classList.add('hidden');
            });

            // Hide modal when clicking outside
            document.getElementById('productModal').addEventListener('click', (e) => {
                if (e.target === document.getElementById('productModal')) {
                    document.getElementById('productModal').classList.add('hidden');
                }
            });
        </script>
    </div>
</section>
@endsection
