@extends('home.layouts.master')
@section('content')
<section class="bg-[#F9F1BF] text-[#1B266B] p-6 rounded-md shadow-md space-y-6 text-base">
	<h1 class="text-3xl font-bold text-center mb-6">টার্মস এন্ড কন্ডিশন</h1>
	
	<!-- Section 1: Introduction -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">১. ভূমিকা</h2>
	  <p>এই ওয়েবসাইটটি মাতৃছায়া ট্রেড কর্পোরেশন দ্বারা পরিচালিত। ওয়েবসাইটটি ব্যবহার করার মাধ্যমে, আপনি নিম্নলিখিত শর্তাবলী মেনে চলতে সম্মত হচ্ছেন। যদি আপনি এই শর্তাবলী মেনে নিতে না চান, তবে দয়া করে ওয়েবসাইটটি ব্যবহার করবেন না।</p>
	</div>
	
	<!-- Section 2: Website Usage -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">২. ওয়েবসাইট ব্যবহার</h2>
	  <ul class="list-disc pl-6">
		<li>ওয়েবসাইটটি শুধুমাত্র ব্যক্তিগত এবং অ-বাণিজ্যিক ব্যবহারের জন্য।</li>
		<li>আপনি ওয়েবসাইটের কোন অংশ পরিবর্তন, কপি, বিতরণ, ট্রান্সমিট, প্রদর্শন, সম্পাদনা, পুনরুত্পাদন, প্রকাশ, লাইসেন্স, ক্রিয়েটিভ ডেরিভেটিভ কাজ তৈরি বা বিক্রি করতে পারবেন না।</li>
	  </ul>
	</div>
	
	<!-- Section 3: Products and Services -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৩. পণ্য এবং পরিষেবা</h2>
	  <ul class="list-disc pl-6">
		<li>মাতৃছায়া ট্রেড কর্পোরেশন ওয়েবসাইটে প্রদর্শিত পণ্য এবং পরিষেবার বিবরণ, মূল্য এবং প্রাপ্যতা পরিবর্তন করার অধিকার সংরক্ষণ করে।</li>
		<li>আমরা পণ্য বা পরিষেবার সঠিকতা, সম্পূর্ণতা বা আপডেটেড তথ্যের জন্য দায়ী নই।</li>
	  </ul>
	</div>
	
	<!-- Section 4: Orders and Payments -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৪. অর্ডার এবং পেমেন্ট</h2>
	  <ul class="list-disc pl-6">
		<li>সমস্ত অর্ডার আমাদের দ্বারা গৃহীত হওয়ার পরেই কার্যকর হবে।</li>
		<li>পেমেন্টের জন্য আমরা বিভিন্ন পদ্ধতি গ্রহণ করি, যা ওয়েবসাইটে উল্লেখ করা হয়েছে।</li>
	  </ul>
	</div>
	
	<!-- Section 5: Return and Refund -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৫. রিটার্ন এবং রিফান্ড</h2>
	  <ul class="list-disc pl-6">
		<li>পণ্য গ্রহণের ৭ দিনের মধ্যে রিটার্নের জন্য আবেদন করতে হবে।</li>
		<li>রিফান্ড প্রক্রিয়া আমাদের রিটার্ন পলিসি অনুযায়ী পরিচালিত হবে।</li>
	  </ul>
	</div>
	
	<!-- Section 6: Privacy Policy -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৬. গোপনীয়তা নীতি</h2>
	  <ul class="list-disc pl-6">
		<li>আপনার ব্যক্তিগত তথ্যের গোপনীয়তা রক্ষা করা আমাদের অগ্রাধিকার।</li>
		<li>আমাদের গোপনীয়তা নীতি অনুযায়ী, আমরা আপনার তথ্য সংগ্রহ, ব্যবহার এবং সুরক্ষা করি।</li>
	  </ul>
	</div>
	
	<!-- Section 7: Liability Limitation -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৭. দায়বদ্ধতা সীমাবদ্ধতা</h2>
	  <p>মাতৃছায়া ট্রেড কর্পোরেশন কোন প্রকার সরাসরি, পরোক্ষ, বিশেষ বা ফলস্বরূপ ক্ষতির জন্য দায়ী থাকবে না যা ওয়েবসাইট ব্যবহারের ফলে হতে পারে।</p>
	</div>
	
	<!-- Section 8: Changes -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৮. পরিবর্তন</h2>
	  <p>আমরা যে কোন সময় এই শর্তাবলী পরিবর্তন করার অধিকার সংরক্ষণ করি। পরিবর্তিত শর্তাবলী ওয়েবসাইটে প্রকাশিত হওয়ার পর থেকে কার্যকর হবে।</p>
	</div>
	
	<!-- Section 9: Contact -->
	<div>
	  <h2 class="text-xl font-semibold mb-2">৯. যোগাযোগ</h2>
	  <p>যদি আপনার কোন প্রশ্ন বা উদ্বেগ থাকে, দয়া করে আমাদের সাথে যোগাযোগ করুন:</p>
	  <ul class="list-disc pl-6">
		<li><strong>ইমেইল:</strong> info@mtcofficial.com</li>
		<li><strong>ফোন:</strong> +880 1958-480400</li>
	  </ul>
	</div>
  </section>
  
@endsection