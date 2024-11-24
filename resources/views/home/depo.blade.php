@extends('home.layouts.master')
@section('content')
<section class="px-1 py-2 sm:px-2 md:px-4">
	<div class="border border-gray-300 rounded-md p-4 mb-4 bg-yellow-100">
		<h2 class="text-lg font-semibold text-center mb-4">ডিপো পলিসি</h2>
		<ul class="list-disc pl-6 text-base space-y-2">
		  <li>৩০,০০,০০০/- (ত্রিশ লক্ষ) টাকা ইনভেস্টমেন্ট এ ৫% কমিশন হারে পন্য যাবে।</li>
		  <li>কমপক্ষে ৬০% পন্য পয়েন্টে থাকতে হবে।</li>
		  <li>ডেলিভারি খরচ ডিপো বহন করবে।</li>
		  <li>ডিপো যদি নিজ এড়িয়ায়, নিজে মার্কেট করে এবং মাতৃছায়া ট্রেড কর্পোরেশনের কাছ থেকে কিস্তি বা নগদে গাড়ি নেয় তাহলে আলোচনা সাপেক্ষে ড্রাইভারের খরচ কোম্পানি বহন করবে</li>
		  <li>কোম্পানি দ্বারা নিযুক্ত সেলস অফিসার থাকবে।</li>
		  <li>ডিপোতে সাথে আলোচনার সাপেক্ষে গাড়ির ব্যবস্থা করা হবে।</li>
		</ul>
	  </div>
	  
	  <div class="border border-gray-300 rounded-md p-4 mb-4 bg-yellow-100">
		<h2 class="text-lg font-semibold text-center mb-4">পরিবেশক পলিসি</h2>
		<ul class="list-disc pl-6 text-base space-y-2">
		  <li>১০,০০,০০০/- (দশ লক্ষ) টাকা ইনভেস্টমেন্ট এ ৮% কমিশন দিয়ে পন্য যাবে।</li>
		  <li>ডেলিভারি খরচ ডিলার বহন করবে।</li>
		  <li>কোম্পানি দ্বারা নিযুক্ত সেলস অফিসার থাকবে।</li>
		  <li>ডিপো যদি নিজ এড়িয়ায়, নিজে মার্কেট করে এবং মাতৃছায়া ট্রেড কর্পোরেশনের কাছ থেকে কিস্তি বা নগদে গাড়ি নেয় তাহলে আলোচনা সাপেক্ষে ড্রাইভারের খরচ কোম্পানি বহন করবে</li>
		</ul>
	  </div>
	  <p class="text-sm italic">* ডিপো ও পরিবেশক, অবশ্যই  কোম্পানির পলিসি অনুযায়ী পণ্য মজুদ করতে বাধ্য থাকবে। কোম্পানির পলিসি অনুযায়ী পণ্য মজুদে ব্যার্থ হলে কোম্পানির সিদ্ধান্ত চূড়ান্ত বলে গণ্য হবে</p>
	  <p class="text-sm italic">* অনুমদিত এলাকার সকল প্রান্তে পণ্য সরবরাহ নিশ্চিত করতে হবে; ব্যার্থ হলে কোম্পানির সিদ্ধান্ত চূড়ান্ত বলে গণ্য হবে</p>
	  <p class="text-sm italic mb-2">* যেসকল একালায় কুরিয়ারে পণ্য সরবরাহ করা হয়, ডিলার বা ডিপো, কুরিয়ার থেকে নিজ খরচে নিজ স্থানে নিতে বাধ্য থাকবে</p>

	  <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 text-sm ms:text-base my-6 items-center justify-center">
		<!-- First Button -->
		<a 
		  href="path-to-policy.pdf" 
		  download="ডিপো_পরিবেশক_পলিসি.pdf" 
		  class="flex items-center px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 font-medium w-[275px]"
		>
		  <span class="mr-2 bg-white text-red-500 px-2 py-1 rounded text-sm font-bold">PDF</span>
		  ডিপো/পরিবেশক পলিসি
		</a>
	  
		<!-- Second Button -->
		<a 
		  href="path-to-application.pdf" 
		  download="ডিপো_পরিবেশক_নিয়োগ_আবেদনপত্র.pdf" 
		  class="flex items-center px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 font-medium w-[275px]"
		>
		  <span class="mr-2 bg-white text-green-500 px-2 py-1 rounded text-sm font-bold">PDF</span>
		  ডিপো/পরিবেশক নিয়োগ আবেদনপত্র
		</a>
	  </div>
	  
	  
	  
	<form method="POST" action="#" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 pb-4 border border-black rounded-lg px-2">
		@csrf
		<p class="col-span-4  my-4 text-lg text-center font-bold">ডিপো/পরিবেশক নিয়োগ আবেদন পত্র</p>
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">প্রতিষ্ঠানের নাম</legend>
		
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-base">
				<!-- প্রতিষ্ঠানের নাম (বাংলায়) -->
				<div>
					<label for="company_name_bn" class="block mb-2">প্রতিষ্ঠানের নাম (বাংলায়)</label>
					<input type="text" name="company_name_bn" id="company_name_bn" class="w-full border border-gray-300 rounded-md" required>
				</div>
		
				<!-- প্রতিষ্ঠানের নাম (ইংরেজিতে) -->
				<div>
					<label for="company_name_en" class="block mb-2">প্রতিষ্ঠানের নাম (ইংরেজিতে)</label>
					<input type="text" name="company_name_en" id="company_name_en" class="w-full border border-gray-300 rounded-md" required>
				</div>
			</div>
		</fieldset>
		
	
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">প্রতিষ্ঠানের পূর্ণ ঠিকানা</legend>
		
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
		
				<!-- পৌরসভা/সিটি/কর্পোরেশন/পোস্টঃ -->
				<div>
					<label for="city" class="block mb-2">পৌরসভা/সিটি/কর্পোরেশন/পোস্টঃ</label>
					<input type="text" name="city" id="city" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- থানাঃ -->
				<div>
					<label for="thana" class="block mb-2">থানাঃ</label>
					<input type="text" name="thana" id="thana" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- জেলাঃ -->
				<div>
					<label for="district" class="block mb-2">জেলাঃ</label>
					<input type="text" name="district" id="district" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- মোবাইলঃ -->
				<div>
					<label for="mobile" class="block mb-2">মোবাইলঃ</label>
					<input type="tel" name="mobile" id="mobile" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- ফোনঃ -->
				<div>
					<label for="phone" class="block mb-2">ফোনঃ</label>
					<input type="tel" name="phone" id="phone" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- ফ্যাক্সঃ -->
				<div>
					<label for="fax" class="block mb-2">ফ্যাক্সঃ</label>
					<input type="text" name="fax" id="fax" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		
	
		<!-- পরিবেশকের নাম -->
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">পরিবেশকের তথ্য</legend>
		
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
				<!-- পরিবেশকের নাম (বাংলায়) -->
				<div>
					<label for="representative_name_bn" class="block mb-2"> নাম (বাংলায়)</label>
					<input type="text" name="representative_name_bn" id="representative_name_bn" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- পরিবেশকের নাম (ইংরেজি) -->
				<div>
					<label for="representative_name_en" class="block mb-2"> নাম (ইংরেজি)</label>
					<input type="text" name="representative_name_en" id="representative_name_en" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="representative_name_dad" class="block mb-2">পিতা/স্বামীর নাম</label>
					<input type="text" name="representative_name_dad" id="representative_name_dad" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- পরিবেশকের মোবাইল -->
				<div>
					<label for="representative_mobile" class="block mb-2">পরিবেশকের মোবাইল</label>
					<input type="tel" name="representative_mobile" id="representative_mobile" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		
		
	
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">মালিকানার ধরণঃ</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-base">
				<!-- Ownership type radio buttons -->
				<div>
					<label>
						<input type="radio" name="ownership_type" value="individual" class="mr-2" onclick="togglePartners(false)"> ব্যক্তি মালিকানা
					</label>
				</div>
				<div>
					<label>
						<input type="radio" name="ownership_type" value="partnership" class="mr-2" onclick="togglePartners(true)"> অংশীদারী
					</label>
				</div>
			</div>
		</fieldset>
		
		<!-- Hidden fields for partners -->
		<fieldset id="partnerFields" class="col-span-4 border border-gray-300 rounded-md p-4 hidden">
			<legend class="text-lg font-semibold px-2">অংশীদারের তথ্য</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2  gap-4 text-base">
				<!-- Partner 1 -->
				<div>
					<label for="partner1_name" class="block mb-2">১ম অংশীদারের নামঃ</label>
					<input type="text" name="partner1_name" id="partner1_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="partner1_mobile" class="block mb-2">মোবাইল নাম্বারঃ</label>
					<input type="tel" name="partner1_mobile" id="partner1_mobile" class="w-full border border-gray-300 rounded-md">
				</div>
				<!-- Partner 2 -->
				<div>
					<label for="partner2_name" class="block mb-2">২য় অংশীদারের নামঃ</label>
					<input type="text" name="partner2_name" id="partner2_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="partner2_mobile" class="block mb-2">মোবাইল নাম্বারঃ</label>
					<input type="tel" name="partner2_mobile" id="partner2_mobile" class="w-full border border-gray-300 rounded-md">
				</div>
				<!-- Partner 3 -->
				<div>
					<label for="partner3_name" class="block mb-2">৩য় অংশীদারের নামঃ</label>
					<input type="text" name="partner3_name" id="partner3_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="partner3_mobile" class="block mb-2">মোবাইল নাম্বারঃ</label>
					<input type="tel" name="partner3_mobile" id="partner3_mobile" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		
		<script>
			function togglePartners(show) {
				const partnerFields = document.getElementById('partnerFields');
				if (show) {
					partnerFields.classList.remove('hidden');
				} else {
					partnerFields.classList.add('hidden');
				}
			}
		</script>
		
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">প্রাতিষ্ঠানিক তথ্য</legend>
		
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
				<!-- ট্রেড লাইসেন্স নংঃ -->
				<div>
					<label for="trade_license" class="block mb-2">ট্রেড লাইসেন্স নংঃ</label>
					<input type="text" name="trade_license" id="trade_license" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- টিআইএন নংঃ -->
				<div>
					<label for="tin_number" class="block mb-2">টিআইএন নংঃ</label>
					<input type="text" name="tin_number" id="tin_number" class="w-full border border-gray-300 rounded-md">
				</div>
		
				<!-- ভ্যাট রেজিস্ট্রেশন নংঃ -->
				<div>
					<label for="vat_registration" class="block mb-2">ভ্যাট রেজিস্ট্রেশন নংঃ</label>
					<input type="text" name="vat_registration" id="vat_registration" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		
			<!-- Nested Fieldset for Bank Information -->
			<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mt-4">
				<legend class="text-base font-semibold px-2">যে ব্যাংকে লেনদেন করতে ইচ্ছুক</legend>
				<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-base">
					<!-- ১ম ব্যাংকের তথ্য -->
					<div>
						<label for="bank1_info" class="block mb-2">১ম ব্যাংকের তথ্য</label>
						<input type="text" name="bank1_info" id="bank1_info" class="w-full border border-gray-300 rounded-md">
					</div>
		
					<!-- ২য় ব্যাংকের তথ্য -->
					<div>
						<label for="bank2_info" class="block mb-2">২য় ব্যাংকের তথ্য</label>
						<input type="text" name="bank2_info" id="bank2_info" class="w-full border border-gray-300 rounded-md">
					</div>
				</div>
			</fieldset>
		</fieldset>

		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4">
			<legend class="text-lg font-semibold px-2">যেসকল কোম্পানির সাথে ডিপো/পরিবেশক হিসেবে ব্যবসা করেছেন তার তথ্য</legend>
		
			<!-- First Company Information -->
			<fieldset class="border border-gray-300 rounded-md p-4 mb-4">
				<legend class="text-base font-semibold px-2">১ম কোম্পানির তথ্য</legend>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
					<div>
						<label for="company1_name" class="block mb-2">নামঃ</label>
						<input type="text" name="company1_name" id="company1_name" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company1_address" class="block mb-2">ঠিকানাঃ</label>
						<input type="text" name="company1_address" id="company1_address" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company1_mobile" class="block mb-2">মোবাইলঃ</label>
						<input type="tel" name="company1_mobile" id="company1_mobile" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company1_duration" class="block mb-2">সময়কালঃ</label>
						<input type="text" name="company1_duration" id="company1_duration" class="w-full border border-gray-300 rounded-md">
					</div>
				</div>
			</fieldset>
		
			<!-- Repeat for 2nd to 4th companies -->
			<fieldset class="border border-gray-300 rounded-md p-4 mb-4">
				<legend class="text-base font-semibold px-2">২য় কোম্পানির তথ্য</legend>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
					<div>
						<label for="company2_name" class="block mb-2">নামঃ</label>
						<input type="text" name="company2_name" id="company2_name" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company2_address" class="block mb-2">ঠিকানাঃ</label>
						<input type="text" name="company2_address" id="company2_address" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company2_mobile" class="block mb-2">মোবাইলঃ</label>
						<input type="tel" name="company2_mobile" id="company2_mobile" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company2_duration" class="block mb-2">সময়কালঃ</label>
						<input type="text" name="company2_duration" id="company2_duration" class="w-full border border-gray-300 rounded-md">
					</div>
				</div>
			</fieldset>
		
			<!-- ৩য় কোম্পানির তথ্য -->
			<fieldset class="border border-gray-300 rounded-md p-4 mb-4">
				<legend class="text-base font-semibold px-2">৩য় কোম্পানির তথ্য</legend>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
					<div>
						<label for="company3_name" class="block mb-2">নামঃ</label>
						<input type="text" name="company3_name" id="company3_name" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company3_address" class="block mb-2">ঠিকানাঃ</label>
						<input type="text" name="company3_address" id="company3_address" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company3_mobile" class="block mb-2">মোবাইলঃ</label>
						<input type="tel" name="company3_mobile" id="company3_mobile" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company3_duration" class="block mb-2">সময়কালঃ</label>
						<input type="text" name="company3_duration" id="company3_duration" class="w-full border border-gray-300 rounded-md">
					</div>
				</div>
			</fieldset>

			<!-- ৪র্থ কোম্পানির তথ্য -->
			<fieldset class="border border-gray-300 rounded-md p-4 mb-4">
				<legend class="text-base font-semibold px-2">৪র্থ কোম্পানির তথ্য</legend>
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
					<div>
						<label for="company4_name" class="block mb-2">নামঃ</label>
						<input type="text" name="company4_name" id="company4_name" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company4_address" class="block mb-2">ঠিকানাঃ</label>
						<input type="text" name="company4_address" id="company4_address" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company4_mobile" class="block mb-2">মোবাইলঃ</label>
						<input type="tel" name="company4_mobile" id="company4_mobile" class="w-full border border-gray-300 rounded-md">
					</div>
					<div>
						<label for="company4_duration" class="block mb-2">সময়কালঃ</label>
						<input type="text" name="company4_duration" id="company4_duration" class="w-full border border-gray-300 rounded-md">
					</div>
				</div>
			</fieldset>

		</fieldset>
		
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4">
			<legend class="text-base font-semibold px-2">পরিবেশনা কাজে ব্যবহৃত কিছু তথ্য</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
				<!-- মোট থানাঃ -->
				<div class="col-span-2">
					<label for="total_thanas" class="block mb-2">মোট থানাঃ</label>
					<input type="number" name="total_thanas" id="total_thanas" class="w-full border border-gray-300 rounded-md">
				</div>
				
				<!-- মোট বাজারঃ -->
				<div class="col-span-2">
					<label for="total_markets" class="block mb-2">মোট বাজারঃ</label>
					<input type="number" name="total_markets" id="total_markets" class="w-full border border-gray-300 rounded-md">
				</div>
				
				<!-- মোট দোকানঃ -->
				<div class="col-span-2">
					<label for="total_shops" class="block mb-2">মোট দোকানঃ</label>
					<input type="number" name="total_shops" id="total_shops" class="w-full border border-gray-300 rounded-md">
				</div>
				
				<!-- থানা সমূহের নামঃ -->
				<div class="col-span-2">
					<label for="thana_names" class="block mb-2">থানা সমূহের নামঃ</label>
					<input type="text" name="thana_names" id="thana_names" class="w-full border border-gray-300 rounded-md">
				</div>
				
				<!-- উল্লেখযোগ্য বাজারের নামঃ -->
				<div class="col-span-2">
					<label for="important_market_names" class="block mb-2">উল্লেখযোগ্য বাজারের নামঃ</label>
					<textarea name="important_market_names" id="important_market_names" rows="3" class="w-full border border-gray-300 rounded-md"></textarea>
				</div>

				<!-- অন্যান্য ব্যবসার তথ্য-->
				<div class="col-span-2">
					<label for="other_business" class="block mb-2">এছাড়া অন্য কোন ব্যবসা/কাজ করবে তার বিবরণ</label>
					<textarea name="other_business" id="other_business" rows="3" class="w-full border border-gray-300 rounded-md"></textarea>
				</div>
			</div>
		</fieldset>

		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4">
			<legend class="text-base font-semibold px-2">
				মাতৃছায়া ট্রেড কর্পোরেশন এর ব্যবসায় যে গোডাউন ব্যবহার করবেন তার বিবরণ
			</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
				<div>
					<label for="godown_size" class="block mb-2">গোডাউন মাপ (ফুট একক) :</label>
					<input type="text" name="godown_size" id="godown_size" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="godown_area" class="block mb-2">গোডাউন ক্ষেত্রফল (বর্গফুট একক) :</label>
					<input type="text" name="godown_area" id="godown_area" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="owner_name" class="block mb-2">মালিকের নামঃ</label>
					<input type="text" name="owner_name" id="owner_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="market_name" class="block mb-2">মার্কেট/বাড়ির নামঃ</label>
					<input type="text" name="market_name" id="market_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="road_name" class="block mb-2">রোডের নামঃ</label>
					<input type="text" name="road_name" id="road_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="holding_no" class="block mb-2">বাড়ি/হোল্ডিং নংঃ</label>
					<input type="text" name="holding_no" id="holding_no" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="village" class="block mb-2">গ্রাম/মহল্লাঃ</label>
					<input type="text" name="village" id="village" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="thana" class="block mb-2">থানাঃ</label>
					<input type="text" name="thana" id="thana" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="district" class="block mb-2">জেলাঃ</label>
					<input type="text" name="district" id="district" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4">
			<legend class="text-base font-semibold px-2">
				মাতৃছায়া ট্রেড কর্পোরেশন এর ব্যবসায় ব্যবহৃত পরিবহনের তথ্য
			</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
				<div>
					<label for="rickshaw_van" class="block mb-2">রিক্সা ভ্যানঃ</label>
					<input type="number" name="rickshaw_van" id="rickshaw_van" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="engine_van" class="block mb-2">ইঞ্জিন চালিত ভ্যানঃ</label>
					<input type="number" name="engine_van" id="engine_van" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="boat_trawler" class="block mb-2">নৌকা/ট্রলারঃ</label>
					<input type="number" name="boat_trawler" id="boat_trawler" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="delivery_man" class="block mb-2">ডেলিভারি ম্যানঃ</label>
					<input type="number" name="delivery_man" id="delivery_man" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="salesman" class="block mb-2">সেলসম্যানঃ</label>
					<input type="number" name="salesman" id="salesman" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="driver" class="block mb-2">ড্রাইভারঃ</label>
					<input type="number" name="driver" id="driver" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4">
			<legend class="text-base font-semibold px-2">
				মাতৃছায়া ট্রেড কর্পোরেশন এর পরিবেশনা কাজে যেসকল এলাকাতে পন্য সরবরাহ করতে চান তার তথ্য
			</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
				<div>
					<label for="total_thanas" class="block mb-2">মোট থানাঃ</label>
					<input type="number" name="total_thanas" id="total_thanas" class="w-full border border-gray-300 rounded-md">
				</div>
				<div class="col-span-3">
					<label for="thana_names" class="block mb-2">থানা সমূহের নামঃ</label>
					<textarea name="thana_names" id="thana_names" class="w-full border border-gray-300 rounded-md" rows="3"></textarea>
				</div>
				<div>
					<label for="total_markets" class="block mb-2">মোট বাজারঃ</label>
					<input type="number" name="total_markets" id="total_markets" class="w-full border border-gray-300 rounded-md">
				</div>
				<div class="col-span-3">
					<label for="significant_markets" class="block mb-2">উল্লেখযোগ্য বাজারের নামঃ</label>
					<textarea name="significant_markets" id="significant_markets" class="w-full border border-gray-300 rounded-md" rows="3"></textarea>
				</div>
				<div>
					<label for="total_shops" class="block mb-2">মোট দোকানঃ</label>
					<input type="number" name="total_shops" id="total_shops" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>
		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4 relative">
			<legend class="text-base font-semibold px-2">
				মাতৃছায়া ট্রেড কর্পোরেশন এর পরিবেশনায় বর্তমান বিনিয়োগকৃত মূলধনের তথ্য (টাকায়)
			</legend>
			<div class="grid grid-cols-1 gap-4 text-base">
				<!-- Sub Fieldset: ফ্লোর স্টক -->
				<fieldset class="border border-gray-300 rounded-md p-4">
					<legend class="text-base font-semibold px-2">ফ্লোর স্টক</legend>
					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
						<div>
							<label for="floor_stock_amount" class="block mb-2">টাকার পরিমাণ (অংকে):</label>
							<input type="number" name="floor_stock_amount" id="floor_stock_amount" class="w-full border border-gray-300 rounded-md">
						</div>
						<div>
							<label for="floor_stock_words" class="block mb-2">টাকার পরিমাণ (কথায়):</label>
							<input type="text" name="floor_stock_words" id="floor_stock_words" class="w-full border border-gray-300 rounded-md">
						</div>
					</div>
				</fieldset>
		
				<!-- Sub Fieldset: মাসিক বিনিয়োগ -->
				<fieldset class="border border-gray-300 rounded-md p-4">
					<legend class="text-base font-semibold px-2">মাসিক বিনিয়োগ</legend>
					<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
						<div>
							<label for="monthly_investment_amount" class="block mb-2">টাকার পরিমাণ (অংকে):</label>
							<input type="number" name="monthly_investment_amount" id="monthly_investment_amount" class="w-full border border-gray-300 rounded-md">
						</div>
						<div>
							<label for="monthly_investment_words" class="block mb-2">টাকার পরিমাণ (কথায়):</label>
							<input type="text" name="monthly_investment_words" id="monthly_investment_words" class="w-full border border-gray-300 rounded-md">
						</div>
					</div>
				</fieldset>
			</div>
			<p class="text-xs italic  col-span-3 absolute bottom-[-2px]">
				* উল্লেখ্য যে, এই পরিবেশক পয়েন্টের সেলস বৃদ্ধির সাথে সাথে ফ্লোর স্টক ও মাসিক বিনিয়োগ বাড়াতে বাধ্য থাকিবো।
			</p>								
		</fieldset>

		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4">
			<legend class="text-base font-semibold px-2">
				আমার অনুপস্থিতে যে ব্যাক্তি ব্যবসা পরিচালনা করবে তাহার বিবরণ
			</legend>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-base">
				<div>
					<label for="representative_name" class="block mb-2">নামঃ</label>
					<input type="text" name="representative_name" id="representative_name" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="representative_address" class="block mb-2">ঠিকানাঃ</label>
					<input type="text" name="representative_address" id="representative_address" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="representative_mobile" class="block mb-2">মোবাইল নাম্বারঃ</label>
					<input type="tel" name="representative_mobile" id="representative_mobile" class="w-full border border-gray-300 rounded-md">
				</div>
				<div>
					<label for="representative_photo" class="block mb-2">ছবিঃ</label>
					<input type="file" name="representative_photo" id="representative_photo" accept="image/*" class="w-full border border-gray-300 rounded-md">
				</div>
			</div>
		</fieldset>


		<fieldset class="col-span-4 border border-gray-300 rounded-md p-4 mb-4 relative">
    <legend class="text-base font-semibold px-2">এ এস এম কর্তৃক পূরণীয়</legend>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
        <!-- Text Inputs -->
        <div class="col-span-1 lg:col-span-2">
            <label for="asm_full_name" class="block mb-2">এ এস এম এর পূর্ণ নামঃ</label>
            <input type="text" name="asm_full_name" id="asm_full_name" class="w-full border border-gray-300 rounded-md">
        </div>
        <div>
            <label for="area_zone_name" class="block mb-2">এড়িয়া/জোনের নামঃ</label>
            <input type="text" name="area_zone_name" id="area_zone_name" class="w-full border border-gray-300 rounded-md">
        </div>
        <div>
            <label for="target_area_name" class="block mb-2">যে এলাকার জন্য নিয়োগ দিতে চান সেই এলাকার নামঃ</label>
            <input type="text" name="target_area_name" id="target_area_name" class="w-full border border-gray-300 rounded-md">
        </div>

        <!-- Radio Inputs -->
        <fieldset class="col-span-1 lg:col-span-2">
            <legend class="font-semibold mb-2">আবেদনকারীর আর্থিক অবস্থাঃ</legend>
            <div class="flex flex-wrap gap-4">
                <label><input type="radio" name="financial_status" value="very_good"> খুব ভালো</label>
                <label><input type="radio" name="financial_status" value="good"> ভালো</label>
                <label><input type="radio" name="financial_status" value="average"> মোটামুটি</label>
            </div>
        </fieldset>

        <fieldset class="col-span-1 lg:col-span-2">
            <legend class="font-semibold mb-2">আবেদনকারীর সাথে দোকানদারের সম্পর্কঃ</legend>
            <div class="flex flex-wrap gap-4">
                <label><input type="radio" name="shopkeeper_relationship" value="very_good"> খুব ভালো</label>
                <label><input type="radio" name="shopkeeper_relationship" value="good"> ভালো</label>
                <label><input type="radio" name="shopkeeper_relationship" value="average"> মোটামুটি</label>
                <label><input type="radio" name="shopkeeper_relationship" value="not_good"> ভালো নয়</label>
            </div>
        </fieldset>

        <fieldset class="col-span-1">
            <legend class="font-semibold mb-2">আবেদনকারী কোনো রাজনৈতিক দলের সাথে জড়িত কি?</legend>
            <div class="flex gap-4">
                <label><input type="radio" name="political_affiliation" value="yes"> হ্যাঁ</label>
                <label><input type="radio" name="political_affiliation" value="no"> না</label>
            </div>
        </fieldset>

        <div class="col-span-1 lg:col-span-3">
            <label for="expected_sales" class="block mb-2">আবেদনকারীকে পরিবেশক হিসেবে নিয়োগ দেওয়া হলে প্রতিমাসে সম্ভাব্য বিক্রয়ের পরিমাণ (টাকায়):</label>
            <input type="number" name="expected_sales" id="expected_sales" class="w-full border border-gray-300 rounded-md">
        </div>

        <!-- Distributor Union Section -->
        <fieldset class="col-span-1 lg:col-span-3 mb-2">
            <legend class="font-semibold mb-2">সংশ্লিষ্ট এলাকায় পরিবেশক সমিতি আছে কি-না?</legend>
            <div class="flex gap-4">
                <label><input type="radio" name="has_distributor_union" value="yes" onclick="toggleUnionDetails(true)"> হ্যাঁ</label>
                <label><input type="radio" name="has_distributor_union" value="no" onclick="toggleUnionDetails(false)"> না</label>
            </div>
        </fieldset>

        <div id="unionDetails" class="col-span-1 lg:col-span-3 hidden">
            <fieldset class="border border-gray-300 rounded-md p-4">
                <legend class="text-base font-semibold px-2">পরিবেশক সমিতি</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="union_president_name" class="block mb-2">সভাপতির নামঃ</label>
                        <input type="text" name="union_president_name" id="union_president_name" class="w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="union_president_mobile" class="block mb-2">মোবাইল নংঃ</label>
                        <input type="tel" name="union_president_mobile" id="union_president_mobile" class="w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="union_secretary_name" class="block mb-2">সম্পাদকের নামঃ</label>
                        <input type="text" name="union_secretary_name" id="union_secretary_name" class="w-full border border-gray-300 rounded-md">
                    </div>
                    <div>
                        <label for="union_secretary_mobile" class="block mb-2">মোবাইল নংঃ</label>
                        <input type="tel" name="union_secretary_mobile" id="union_secretary_mobile" class="w-full border border-gray-300 rounded-md">
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
	<div class="mt-2 col-span-4">
        <p class="text-xs italic">
            আমি উপরোক্ত সকল তথ্য সরেজমিনে যাচাই করে এবং উপরোক্ত সকল তথ্য সম্পর্কে নিশ্চিত হয়ে এই প্রতিষ্ঠানকে মাতৃছায়া ট্রেড কর্পোরেশন এর আমার সংলিষ্ট রেজিয়ন/এড়িয়াতে অস্থায়ী ভিত্তিতে পরিবেশক হিসেবে নিরোগ দানের জন্য সুপারিশ করছি।
        </p>
    </div>
</fieldset>

		
		<script>
			function toggleUnionDetails(show) {
				const unionDetails = document.getElementById('unionDetails');
				if (show) {
					unionDetails.classList.remove('hidden');
				} else {
					unionDetails.classList.add('hidden');
				}
			}
		</script>

<fieldset class="border border-gray-300 rounded-md p-4 mb-4 col-span-4">
	<legend class="text-base font-semibold px-2">ডিপো ও পরিবেশক নেওয়ার প্রয়োজনীয় কাগজ পত্রঃ</legend>
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-base">
	  <!-- Input for Trade License -->
	  <div>
		<label for="trade_license" class="block mb-2 font-medium">ট্রেড লাইসেন্স এর ফটোকপি:</label>
		<input type="file" name="trade_license" id="trade_license" accept="image/*,application/pdf" class="w-full border border-gray-300 rounded-md p-2">
	  </div>
  
	  <!-- Input for TIN Certificate -->
	  <div>
		<label for="tin_certificate" class="block mb-2 font-medium">টিন সার্টিফিকেট এর ফটোকপি (যদি থাকে):</label>
		<input type="file" name="tin_certificate" id="tin_certificate" accept="image/*,application/pdf" class="w-full border border-gray-300 rounded-md p-2">
	  </div>
  
	  <!-- Input for Bank Solvency -->
	  <div>
		<label for="bank_solvency" class="block mb-2 font-medium">ব্যাংক সলভেন্সি এর ফটোকপি (যদি থাকে):</label>
		<input type="file" name="bank_solvency" id="bank_solvency" accept="image/*,application/pdf" class="w-full border border-gray-300 rounded-md p-2">
	  </div>
  
	  <!-- Input for Passport Size Photos -->
	  <div>
		<label for="passport_photos" class="block mb-2 font-medium">পাসপোর্ট সাইজের ছবি:</label>
		<input type="file" name="passport_photos" id="passport_photos" accept="image/*" multiple class="w-full border border-gray-300 rounded-md p-2">
	  </div>
  
	  <!-- Input for National ID -->
	  <div>
		<label for="national_id" class="block mb-2 font-medium">জাতীয় পরিচয় পত্রের ফটোকপি:</label>
		<input type="file" name="national_id" id="national_id" accept="image/*,application/pdf" class="w-full border border-gray-300 rounded-md p-2">
	  </div>
  
	  <!-- Input for Nominee Details -->
	  <div>
		<label for="nominee_documents" class="block mb-2 font-medium">নমিনির পাসপোর্ট সাইজের ছবি ও জাতীয় পরিচয় পত্রের ফটোকপি:</label>
		<input type="file" name="nominee_documents" id="nominee_documents" accept="image/*,application/pdf" multiple class="w-full border border-gray-300 rounded-md p-2">
	  </div>
	</div>
  </fieldset>
  
		
		<div class="bg-[tomato] px-2 py-4 text-base col-span-4">
			<p class="text-lg font-bold text-center mb-2">বিশেষ নির্দেশিকা</p>
			<ul class="list-disc pl-5">
				<li>
					কোম্পানি হতে পণ্যের হার 
					<input type="number" name="product_rate_percentage" id="product_rate_percentage" class="bg-[#e7975d] text-white w-20 border border-[black] rounded-md text-center mx-1"> 
					% অনুযায়ী মূল্য ভিত্তিক কমিশন মূল্য তালিকা অনুযায়ী প্রদান করা হইবে।
				</li>
				<li>ডিপো বা পরিবেশক এর ব্যবসায়ী কার্যক্রম কোম্পানি থেকে সম্পূর্ণ নগদে পরিচালিত হবে।</li>
				<li>ডিপো বা পরিবেশক এর ব্যবসায়ী কার্যক্রম অবশ্যই ব্যাংকের মাধ্যমে লেনদেন সম্পূর্ণ করিবেন।</li>
				<li>কোম্পানির যে কোন স্তরের প্রতিনিধিগণের সহিত কোনো আর্থিক বা অন্য কোন লেনদেন করা যাবে না। এরূপ কোনো প্রকারের লেনদেনের দায়ভার কোম্পানী বহন করিবে না।</li>
				<li>কোম্পানি ডিপো/পরিবেশকদের ব্যাংক অনলাইন টিটি/ডিডি করার ৭২ ঘন্টার মধ্যে চাহিদা মোতাবেক পণ্য পৌঁছে দিতে বাধ্য থাকিবে।</li>
				<li>ডিপো থেকে ড্যামেজ/নষ্ট পণ্য পরবর্তী চালানে পণ্যের বিনিময়ে সমন্বয় করা হবে।</li>
				<li>ডিপো/পরিবেশক এর নির্দিষ্ট মার্কেট সংযোজন/বিয়োজন করার সক্ষমতা কোম্পানী সংরক্ষণ করে।</li>
				<li>মার্কেট সেলসের স্বার্থে কোম্পানি থেকে প্রদত্ত ট্রেড অফার/বোনাস/নগদ ছাড়, ডিপো/পরিবেশক মার্কেটে প্রদান করিতে বাধ্য থাকিবে।</li>
				<li>ডিপো/পরিবেশক এর গোডাউন ড্যামেজ হলে কোম্পানি এর দ্বায়ভার বহন করবে না।</li>
				<li>উপরের উল্লেখিত কোম্পানির নির্ধারিত নির্দেশিকা মেনে ব্যবসায়িক কার্যক্রম পরিচালনা করতে বাধ্য থাকব।</li>
			</ul>
			
		</div>
		<div class="border border-gray-300 rounded-md p-4 mb-4 col-span-4 bg-[#F9F1BF]">
			<h2 class="text-lg font-semibold text-center mb-4">পরিবেশক নিয়োগের শর্তাবলী</h2>
			<ul class="list-decimal pl-6 text-base space-y-2">
				<li>ব্যবসায় কোন প্রকার ক্রেডিট হবে না।</li>
				<li>অনলাইনের মাধ্যমে টাকা পাঠাতে হবে।</li>
				<li>কোম কর্মকর্তা ও কর্মচারীর সাথে নগদ লেনদেন করা যাবে না।</li>
				<li>কোম্পানীয় পলিসি অনুযায়ী পরিবেশককে তার কার্যকলাপ পরিচালনা করতে হবে।</li>
				<li>
					পরিবেশক যদি কোন কারণে কোম্পানির সাথে ব্যবসায়িক সম্পর্ক বজায় রাখতে না করে তবে অবশিষ্ট
					পরিবেশকের তিন মাস পূর্বে লিখিত কারণসহ কোম্পানির নির্দিষ্ট অফিসে জানাতে হবে।
				</li>
				<li>পরিবেশকের টার্নওভার হবে ১০% মূল্য ভিত্তিক কমিশন।</li>
				<li>ডিপো থেকে ড্যামেজ পণ্য সমন্বয় করা যাবে।</li>
				<li>
					কোম্পানির নির্দেশিকা অনুযায়ী কোন প্রকার বোনাস/অফার/ডিসকাউন্ট প্রয়োজনে
					উল্লেখিত কর্মীদের অনুমতিক্রমে করতে হবে।
				</li>
				<li>
					পরিবেশকের ব্যবসায়িক কার্যক্রম নিজস্ব সরবরাহ ব্যবস্থায় পরিচালিত হতে হবে।
				</li>
			</ul>
		</div>

		<button type="submit" class="mx-auto text-base italic px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 col-span-4 items-center">
			আমি সজ্ঞানে পড়িয়া, জানিয়া, বুঝিয়া আবেদনপত্র সাবমিট করিলাম
		</button>
		
		
	</form>
</section>

@endsection