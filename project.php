<?php
include('in.php');
?>
<!DOCTYPE html>
<html lang="ku-IQ" dir="rtl"> <!-- کوردی چەپ بۆ ڕاست-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- mobile view -->
<title>گەشتیار - خزمەتگوزاری گەشتیاری کوردستان</title>
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<script>tailwind.config={theme:{extend:{colors:{primary:'#4F46E5',secondary:'#10B981'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-gray-50 min-h-screen">
<div id="login-page" class="min-h-screen flex items-center justify-center p-4">
<div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
<div class="text-center mb-8">
<h1 class="font-['Pacifico'] text-3xl text-primary">گەشتیار</h1><!-- شینەکە-->
<p class="text-gray-600 mt-2">سیستەمی گەشتیاری کوردستان</p><!-- سپی-->
</div>
<div class="flex mb-6 bg-gray-100 rounded-full p-1"><!-- تۆمارکدن یان چونەژورەوە -->
<button id="login-tab" class="flex-1 py-2 px-4 rounded-full tab-active whitespace-nowrap !rounded-button">چوونە ژوورەوە</button>
<button id="register-tab" class="flex-1 py-2 px-4 rounded-full whitespace-nowrap !rounded-button">تۆمارکردن</button>
</div>
<div id="login-form" class="space-y-4"><!-- چونەژورەوە -->
<div>
<label for="login-email" class="block text-sm font-medium text-gray-700 mb-1">ئیمەیڵ / ناوی بەکارهێنەر</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-user-line text-gray-400"></i>
</div>
<input type="text" id="login-email" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ئیمەیڵەکەت بنووسە">
</div>
</div>
<div>
<label for="login-password" class="block text-sm font-medium text-gray-700 mb-1">وشەی نهێنی</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-lock-line text-gray-400"></i>
</div>
<input type="password" id="login-password" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="وشەی نهێنی بنووسە">
</div>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center">
<input type="checkbox" id="remember-me" class="custom-checkbox">
<label for="remember-me" class="text-sm text-gray-600">بمهێڵەوە چوومەتە ژوورەوە</label>
</div>
<a href="#" class="text-sm text-primary hover:underline">وشەی نهێنیت لەبیرچووە؟</a>
</div>
<button id="login-button" class="w-full bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">چوونە ژوورەوە</button>
</div>
<div id="register-form" class="space-y-4 hidden">
<div><!-- تۆمارکردن -->
    <form method="post">
<label for="register-name" class="block text-sm font-medium text-gray-700 mb-1">ناوی تەواو</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-user-line text-gray-400"></i>
</div>
<input type="text"name="name" id="register-name" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ناوی تەواوت بنووسە">
</div>
</div>
<div>
<label for="register-email" class="block text-sm font-medium text-gray-700 mb-1">ئیمەیڵ</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-mail-line text-gray-400"></i>
</div>
<input type="email" name="email" id="register-email" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ئیمەیڵەکەت بنووسە">
</div>
</div>
<div>
<label for="register-password" class="block text-sm font-medium text-gray-700 mb-1">وشەی نهێنی</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-lock-line text-gray-400"></i>
</div>
<input type="password" name="password" id="register-password" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="وشەی نهێنی بنووسە">
</div>
</div>
<div>
<label for="register-confirm-password" class="block text-sm font-medium text-gray-700 mb-1">دووبارەکردنەوەی وشەی نهێنی</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-lock-line text-gray-400"></i>
</div>
<input type="password" id="register-confirm-password" class="pr-10 w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="وشەی نهێنی دووبارە بنووسەوە">
</div>
</div>
<div class="flex items-center">
<input type="checkbox" id="agree-terms" class="custom-checkbox">
<label for="agree-terms" class="text-sm text-gray-600">ڕازیم بە مەرج و ڕێساکان</label>
</div>
<button name="submit" type="submit" id="register-button" class="w-full bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">تۆمارکردن</button>
<a href="se.php" style="color: #4F46E5; font-weight: bold; text-decoration: underline;">View Data</a>
</form>
</div>
</div>
</div><!-- پەڕەی سەرەکی -->
<div id="home-page" class="hidden min-h-screen flex flex-col">
<header class="bg-white shadow-sm">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
<div class="flex items-center">
<h1 class="font-['Pacifico'] text-2xl text-primary">گەشتیار</h1><!-- سەرسەرەوە -->
</div>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="relative">
<button id="notifications-button" class="relative p-2 text-gray-600 hover:text-primary transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-notification-3-line text-xl"></i>
<span class="absolute top-1 left-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
</button>
</div>
<div class="relative" id="profile-dropdown-container">
<button id="profile-button" class="flex items-center space-x-2 space-x-reverse">
<img src="https://readdy.ai/api/search-image?query=professional%20portrait%20photo%20of%20a%20Kurdish%20man%20with%20a%20friendly%20smile%2C%20minimal%20background%2C%20high%20quality&width=100&height=100&seq=1&orientation=squarish" class="w-10 h-10 rounded-full object-cover object-top">
<div class="text-right"><!-- ڕەسمەکە -->
<p class="text-sm font-medium">ئاکۆ محەمەد</p>
<p class="text-xs text-gray-500">ئەندامی VIP</p>
</div>
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
<div id="profile-dropdown" class="hidden absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10">
<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
<div class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-user-line"></i>
</div>
<span>پڕۆفایلەکەم</span>
</div>
</a>
<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
<div class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-history-line"></i>
</div>
<span>مێژووی شوێن تەرخانکردن</span>
</div>
</a>
<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
<div class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-settings-3-line"></i>
</div>
<span>ڕێکخستنەکان</span>
</div>
</a>
<div class="border-t border-gray-100 my-1"></div>
<a href="#" id="logout-button" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
<div class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-logout-box-r-line"></i>
</div>
<span>چوونە دەرەوە</span>
</div>
</a>
</div>
</div>
</div>
</div>
</header>
<main class="flex-grow">
<section class="bg-gradient-to-l from-primary/10 to-white py-16">
<div class="container mx-auto px-4">
<div class="max-w-3xl mx-auto text-center mb-10"><!-- گەڕان -->
<h2 class="text-3xl font-bold text-gray-900 mb-4">گەشتێک بۆ شوێنە جوانەکانی کوردستان</h2>
<p class="text-lg text-gray-600">باشترین ئوتێل و شوێنی مانەوە لە شارەکانی کوردستان بدۆزەوە</p>
</div>
<div class="bg-white rounded-xl shadow-lg p-6 max-w-4xl mx-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<div class="col-span-1">
<label class="block text-sm font-medium text-gray-700 mb-1">شوێنی مەبەست</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-map-pin-line text-gray-400"></i>
</div>
<input type="text" class="pr-10 w-full py-3 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="شارێک هەڵبژێرە">
</div>
</div>
<div class="col-span-1">
<label class="block text-sm font-medium text-gray-700 mb-1">ڕۆژی هاتن</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-calendar-line text-gray-400"></i>
</div>
<input type="date" class="pr-10 w-full py-3 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm">
</div>
</div>
<div class="col-span-1">
<label class="block text-sm font-medium text-gray-700 mb-1">ڕۆژی دەرچوون</label>
<div class="relative">
<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none w-10 h-10 flex items-center justify-center">
<i class="ri-calendar-line text-gray-400"></i>
</div>
<input type="date" class="pr-10 w-full py-3 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm">
</div>
</div>
</div>
<div class="mt-6 flex justify-center">
<button id="search-button" class="bg-primary text-white py-3 px-8 rounded-md hover:bg-primary/90 transition-colors flex items-center space-x-2 space-x-reverse whitespace-nowrap !rounded-button">
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-search-line"></i>
</div>
<span>گەڕان</span>
</button>
</div>
</div>
</div>
</section>
<section class="py-12 bg-white"><!-- وێنەکان -->
<div class="container mx-auto px-4">
<div class="text-center mb-10">
<h2 class="text-2xl font-bold text-gray-900 mb-2">شارەکانی کوردستان</h2>
<p class="text-gray-600">شارێک هەڵبژێرە بۆ بینینی ئوتێلەکان</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Erbil%20city%20in%20Kurdistan%2C%20showing%20the%20ancient%20citadel%20and%20modern%20buildings%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=1&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">هەولێر</h3>
<p class="text-gray-600 text-sm">٢٤ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Sulaymaniyah%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20city%20landscape%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=2&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">سلێمانی</h3>
<p class="text-gray-600 text-sm">١٨ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Duhok%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20lake%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=3&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">دهۆک</h3>
<p class="text-gray-600 text-sm">١٢ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Halabja%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20city%20landscape%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=4&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">هەڵەبجە</h3>
<p class="text-gray-600 text-sm">٨ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Koya%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20city%20landscape%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=5&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">کۆیە</h3>
<p class="text-gray-600 text-sm">٦ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Zakho%20city%20in%20Kurdistan%2C%20showing%20the%20ancient%20bridge%20and%20river%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=6&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">زاخۆ</h3>
<p class="text-gray-600 text-sm">٧ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Ranya%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20lake%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=7&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">ڕانیە</h3>
<p class="text-gray-600 text-sm">٥ ئوتێل بەردەستە</p>
</div>
</div>
<div class="city-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow cursor-pointer">
<div class="h-48 overflow-hidden">
<img src="https://readdy.ai/api/search-image?query=beautiful%20panoramic%20view%20of%20Soran%20city%20in%20Kurdistan%2C%20showing%20mountains%20and%20city%20landscape%2C%20clear%20blue%20sky%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=8&orientation=landscape" class="w-full h-full object-cover object-top transition-transform hover:scale-105">
</div>
<div class="p-4">
<h3 class="font-bold text-lg mb-1">سۆران</h3>
<p class="text-gray-600 text-sm">٤ ئوتێل بەردەستە</p>
</div>
</div>
</div>
</div>
</section>
<section class="py-12 bg-gray-50"><!-- سێ تایبەت مەندی -->
<div class="container mx-auto px-4">
<div class="text-center mb-10">
<h2 class="text-2xl font-bold text-gray-900 mb-2">تایبەتمەندییەکانی خزمەتگوزاری</h2>
<p class="text-gray-600">بۆچی گەشتیار هەڵبژێریت؟</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="bg-white p-6 rounded-lg shadow-md text-center">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
<div class="w-8 h-8 flex items-center justify-center text-primary">
<i class="ri-hotel-line text-2xl"></i>
</div>
</div>
<h3 class="font-bold text-lg mb-2">باشترین ئوتێلەکان</h3>
<p class="text-gray-600">زیاتر لە ١٠٠ ئوتێل لە سەرتاسەری کوردستان بۆ هەڵبژاردن</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md text-center">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
<div class="w-8 h-8 flex items-center justify-center text-primary">
<i class="ri-secure-payment-line text-2xl"></i>
</div>
</div>
<h3 class="font-bold text-lg mb-2">پارەدانی ئاسان</h3>
<p class="text-gray-600">چەندین ڕێگای پارەدان بۆ ئاسانکاری بەکارهێنەران</p>
</div>
<div class="bg-white p-6 rounded-lg shadow-md text-center">
<div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
<div class="w-8 h-8 flex items-center justify-center text-primary">
<i class="ri-customer-service-2-line text-2xl"></i>
</div>
</div>
<h3 class="font-bold text-lg mb-2">پشتگیری ٢٤/٧</h3>
<p class="text-gray-600">تیمی پشتگیری ئێمە هەموو کاتێک ئامادەیە بۆ یارمەتیدان</p>
</div>
</div>
</div>
</section><!-- بەشی خوار خوارەوە -->
</main>
<footer class="bg-gray-900 text-white py-10">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div>
<h3 class="font-['Pacifico'] text-2xl mb-4">گەشتیار</h3>
<p class="text-gray-400 mb-4">باشترین خزمەتگوزاری گەشتیاری لە کوردستان</p>
<div class="flex space-x-4 space-x-reverse">
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-facebook-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-instagram-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-twitter-x-fill text-xl"></i>
</a>
</div>
</div>
<div>
<h4 class="font-bold text-lg mb-4">بەستەرە خێراکان</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">سەرەکی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">شارەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">ئوتێلەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پەیوەندی</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">یارمەتی</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پرسیارە باوەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">مەرج و ڕێساکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">تایبەتمەندی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پشتگیری</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">پەیوەندی</h4>
<ul class="space-y-2">
<li class="flex items-start space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400 mt-1">
<i class="ri-map-pin-line"></i>
</div>
<span class="text-gray-400">شەقامی ١٠٠ مەتری، هەولێر، هەرێمی کوردستان</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-phone-line"></i>
</div>
<span class="text-gray-400">٠٧٥٠ ١٢٣ ٤٥٦٧</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-mail-line"></i>
</div>
<span class="text-gray-400">info@geshtiar.com</span>
</li>
</ul>
</div>
</div>
<div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm mb-4 md:mb-0">© ٢٠٢٥ گەشتیار. هەموو مافەکان پارێزراوە.</p>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-visa-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-mastercard-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-paypal-fill text-2xl text-gray-400"></i>
</div>
</div>
</div>
</div>
</footer>
</div><!-- هۆتێلەکان-->
<div id="city-hotels-page" class="hidden min-h-screen flex flex-col">
<header class="bg-white shadow-sm">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
<div class="flex items-center">
<h1 class="font-['Pacifico'] text-2xl text-primary">گەشتیار</h1>
</div>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="relative">
<button class="relative p-2 text-gray-600 hover:text-primary transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-notification-3-line text-xl"></i>
<span class="absolute top-1 left-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
</button>
</div>
<div class="relative">
<button class="flex items-center space-x-2 space-x-reverse">
<img src="https://readdy.ai/api/search-image?query=professional%20portrait%20photo%20of%20a%20Kurdish%20man%20with%20a%20friendly%20smile%2C%20minimal%20background%2C%20high%20quality&width=100&height=100&seq=1&orientation=squarish" class="w-10 h-10 rounded-full object-cover object-top">
<div class="text-right">
<p class="text-sm font-medium">ئاکۆ محەمەد</p>
<p class="text-xs text-gray-500">ئەندامی VIP</p>
</div>
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
</div>
</div>
</div>
</header>
<div class="bg-primary/10 py-6"><!-- بەشی گەڕانەوە -->
<div class="container mx-auto px-4">
<div class="flex items-center space-x-2 space-x-reverse">
<a href="#" id="back-to-home" class="text-gray-600 hover:text-primary transition-colors w-8 h-8 flex items-center justify-center">
<i class="ri-arrow-right-line"></i>
</a>
<span class="text-gray-600">/</span>
<a href="#" class="text-gray-600 hover:text-primary transition-colors">سەرەکی</a>
<span class="text-gray-600">/</span>
<span class="text-primary">هەولێر</span>
</div>
</div>
</div>
<main class="flex-grow py-8"><!-- بەشی رەیتینگ و ئەڵسەنگاندن-->
<div class="container mx-auto px-4">
<div class="flex flex-col lg:flex-row gap-8">
<div class="lg:w-1/4">
<div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
<h3 class="font-bold text-lg mb-4">فلتەرەکان</h3>
<div class="mb-6">
<h4 class="font-medium text-gray-700 mb-2">مەودای نرخ</h4>
<div class="mb-4"><!-- دیاری کردنی نرخ-->
<input type="range" min="0" max="500" value="200" class="custom-range w-full">
</div>
<div class="flex justify-between">
<span class="text-sm text-gray-600">$٠</span>
<span class="text-sm text-gray-600">$٥٠٠</span>
</div>
</div>
<div class="mb-6">
<h4 class="font-medium text-gray-700 mb-2">پلەبەندی ئوتێل</h4>
<div class="space-y-2">
<div class="flex items-center">
<input type="checkbox" id="star-5" class="custom-checkbox">
<label for="star-5" class="flex items-center">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="star-4" class="custom-checkbox">
<label for="star-4" class="flex items-center">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-line"></i>
</div>
</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="star-3" class="custom-checkbox">
<label for="star-3" class="flex items-center">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-line"></i>
<i class="ri-star-line"></i>
</div>
</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="star-2" class="custom-checkbox">
<label for="star-2" class="flex items-center">
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-line"></i>
<i class="ri-star-line"></i>
<i class="ri-star-line"></i>
</div>
</label>
</div>
</div>
</div>
<!--خزمەت گوزاری -->
<div class="mb-6">
<h4 class="font-medium text-gray-700 mb-2">خزمەتگوزارییەکان</h4>
<div class="space-y-2">
<div class="flex items-center">
<input type="checkbox" id="wifi" class="custom-checkbox">
<label for="wifi">وایفای بەخۆڕایی</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="breakfast" class="custom-checkbox">
<label for="breakfast">نانی بەیانی</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="parking" class="custom-checkbox">
<label for="parking">پارکینگی بەخۆڕایی</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="pool" class="custom-checkbox">
<label for="pool">مەلەوانگە</label>
</div>
<div class="flex items-center">
<input type="checkbox" id="gym" class="custom-checkbox">
<label for="gym">هۆڵی وەرزش</label>
</div>
</div>
</div>
<button class="w-full bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">جێبەجێکردنی فلتەرەکان</button>
</div>
</div>
<div class="lg:w-3/4"><!-- بەشی وەسف کردنی ئۆتێل -->
<div class="mb-6">
<h2 class="text-2xl font-bold mb-2">ئوتێلەکانی هەولێر</h2>
<p class="text-gray-600">٢٤ ئوتێل دۆزرایەوە</p>
</div>
<div class="space-y-6">
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=luxury%20hotel%20room%20interior%20in%20Erbil%20Kurdistan%2C%20modern%20design%2C%20king%20size%20bed%2C%20large%20windows%20with%20city%20view%2C%20elegant%20furniture%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=10&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی ڕۆتانا ئەربیل</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
<p class="text-gray-600 mb-4">ناوەندی شاری هەولێر، نزیک قەڵای هەولێر</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٩.٢ زۆر باش</div>
<p class="text-gray-600 text-sm">١٢٠ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">مەلەوانگە</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٨٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=modern%20hotel%20room%20interior%20in%20Erbil%20Kurdistan%2C%20stylish%20design%2C%20queen%20size%20bed%2C%20city%20view%2C%20contemporary%20furniture%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=11&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی دیوان</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-line"></i>
</div>
<p class="text-gray-600 mb-4">شەقامی گوڵان، نزیک پارکی شار</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٨.٧ باش</div>
<p class="text-gray-600 text-sm">٩٥ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٢٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=comfortable%20hotel%20room%20interior%20in%20Erbil%20Kurdistan%2C%20cozy%20design%2C%20twin%20beds%2C%20mountain%20view%2C%20warm%20colors%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=12&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی گراند میلینیۆم</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-line"></i>
</div>
<p class="text-gray-600 mb-4">شەقامی ١٠٠ مەتری، نزیک فامیلی مۆڵ</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٨.٥ باش</div>
<p class="text-gray-600 text-sm">٨٨ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">هۆڵی وەرزش</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٥٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>
</div>
<div class="mt-8 flex justify-center">
<nav class="flex items-center space-x-2 space-x-reverse">
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-primary hover:text-white hover:border-primary transition-colors">
<i class="ri-arrow-right-s-line"></i>
</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-primary text-white">1</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-primary hover:text-white hover:border-primary transition-colors">2</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-primary hover:text-white hover:border-primary transition-colors">3</a>
<a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-primary hover:text-white hover:border-primary transition-colors">
<i class="ri-arrow-left-s-line"></i>
</a>
</nav>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-gray-900 text-white py-10"><!-- بەشی خوارەوە -->
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div>
<h3 class="font-['Pacifico'] text-2xl mb-4">گەشتیار</h3>
<p class="text-gray-400 mb-4">باشترین خزمەتگوزاری گەشتیاری لە کوردستان</p>
<div class="flex space-x-4 space-x-reverse">
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-facebook-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-instagram-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-twitter-x-fill text-xl"></i>
</a>
</div>
</div>
<div>
<h4 class="font-bold text-lg mb-4">بەستەرە خێراکان</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">سەرەکی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">شارەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">ئوتێلەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پەیوەندی</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">یارمەتی</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پرسیارە باوەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">مەرج و ڕێساکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">تایبەتمەندی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پشتگیری</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">پەیوەندی</h4>
<ul class="space-y-2">
<li class="flex items-start space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400 mt-1">
<i class="ri-map-pin-line"></i>
</div>
<span class="text-gray-400">شەقامی ١٠٠ مەتری، هەولێر، هەرێمی کوردستان</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-phone-line"></i>
</div>
<span class="text-gray-400">٠٧٥٠ ١٢٣ ٤٥٦٧</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-mail-line"></i>
</div>
<span class="text-gray-400">info@geshtiar.com</span>
</li>
</ul>
</div>
</div>
<div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm mb-4 md:mb-0">© ٢٠٢٥ گەشتیار. هەموو مافەکان پارێزراوە.</p>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-visa-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-mastercard-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-paypal-fill text-2xl text-gray-400"></i>
</div>
</div>
</div>
</div>
</footer>
</div>
<!-- پەڕەی پارە دان-->
<div id="payment-page" class="hidden min-h-screen flex flex-col">
<header class="bg-white shadow-sm">
<div class="container mx-auto px-4 py-4 flex items-center justify-between">
<div class="flex items-center">
<h1 class="font-['Pacifico'] text-2xl text-primary">گەشتیار</h1>
</div>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="relative">
<button class="relative p-2 text-gray-600 hover:text-primary transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-notification-3-line text-xl"></i>
<span class="absolute top-1 left-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
</button>
</div>
<div class="relative">
<button class="flex items-center space-x-2 space-x-reverse">
<img src="https://readdy.ai/api/search-image?query=professional%20portrait%20photo%20of%20a%20Kurdish%20man%20with%20a%20friendly%20smile%2C%20minimal%20background%2C%20high%20quality&width=100&height=100&seq=1&orientation=squarish" class="w-10 h-10 rounded-full object-cover object-top">
<div class="text-right">
<p class="text-sm font-medium">ئاکۆ محەمەد</p>
<p class="text-xs text-gray-500">ئەندامی VIP</p>
</div>
<div class="w-5 h-5 flex items-center justify-center">
<i class="ri-arrow-down-s-line"></i>
</div>
</button>
</div>
</div>
</div>
</header>
<div class="bg-primary/10 py-6">
<div class="container mx-auto px-4">
<div class="flex items-center space-x-2 space-x-reverse">
<a href="#" id="back-to-hotels" class="text-gray-600 hover:text-primary transition-colors w-8 h-8 flex items-center justify-center">
<i class="ri-arrow-right-line"></i>
</a>
<span class="text-gray-600">/</span>
<a href="#" class="text-gray-600 hover:text-primary transition-colors">سەرەکی</a>
<span class="text-gray-600">/</span>
<a href="#" class="text-gray-600 hover:text-primary transition-colors">هەولێر</a>
<span class="text-gray-600">/</span>
<a href="#" class="text-gray-600 hover:text-primary transition-colors">ئوتێلی ڕۆتانا ئەربیل</a>
<span class="text-gray-600">/</span>
<span class="text-primary">پارەدان</span>
</div>
</div>
</div>
<main class="flex-grow py-8">
<div class="container mx-auto px-4">
<div class="flex flex-col lg:flex-row gap-8">
<div class="lg:w-2/3">
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
<h3 class="font-bold text-xl mb-4">شێوازی پارەدان</h3>
<div class="space-y-4">
<div class="border border-gray-200 rounded-lg p-4 bg-primary/5">
<div class="flex items-center">
<input type="radio" id="credit-card" name="payment-method" class="custom-checkbox" checked>
<label for="credit-card" class="flex items-center justify-between w-full">
<span class="font-medium">کارتی بانکی</span>
<div class="flex items-center space-x-2 space-x-reverse">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-visa-fill text-blue-700 text-2xl"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-mastercard-fill text-orange-600 text-2xl"></i>
</div>
</div>
</label>
</div>
<div class="mt-4 space-y-4">
<div>
<label for="card-number" class="block text-sm font-medium text-gray-700 mb-1">ژمارەی کارت</label>
<input type="text" id="card-number" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="XXXX XXXX XXXX XXXX">
</div>
<div class="grid grid-cols-2 gap-4">
<div>
<label for="expiry-date" class="block text-sm font-medium text-gray-700 mb-1">بەرواری بەسەرچوون</label>
<input type="text" id="expiry-date" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="MM/YY">
</div>
<div>
<label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
<input type="text" id="cvv" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="XXX">
</div>
</div>
<div>
<label for="card-holder" class="block text-sm font-medium text-gray-700 mb-1">ناوی خاوەنی کارت</label>
<input type="text" id="card-holder" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ناوی تەواو بنووسە">
</div>
</div>
</div>
<div class="border border-gray-200 rounded-lg p-4">
<div class="flex items-center">
<input type="radio" id="fastpay" name="payment-method" class="custom-checkbox">
<label for="fastpay" class="flex items-center justify-between w-full">
<span class="font-medium">فاست پەی</span>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-bank-card-fill text-primary text-2xl"></i>
</div>
</label>
</div>
</div>
<div class="border border-gray-200 rounded-lg p-4">
<div class="flex items-center">
<input type="radio" id="zaincash" name="payment-method" class="custom-checkbox">
<label for="zaincash" class="flex items-center justify-between w-full">
<span class="font-medium">زەین کاش</span>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-wallet-fill text-red-600 text-2xl"></i>
</div>
</label>
</div>
</div>
<div class="border border-gray-200 rounded-lg p-4">
<div class="flex items-center">
<input type="radio" id="paypal" name="payment-method" class="custom-checkbox">
<label for="paypal" class="flex items-center justify-between w-full">
<span class="font-medium">پەی پاڵ</span>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-paypal-fill text-blue-600 text-2xl"></i>
</div>
</label>
</div>
</div>
</div>
</div>
<div class="bg-white rounded-lg shadow-md p-6">
<h3 class="font-bold text-xl mb-4">زانیاری میوان</h3>
<div class="space-y-4">
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label for="guest-name" class="block text-sm font-medium text-gray-700 mb-1">ناوی تەواو</label>
<input type="text" id="guest-name" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ناوی تەواو بنووسە">
</div>
<div>
<label for="guest-email" class="block text-sm font-medium text-gray-700 mb-1">ئیمەیڵ</label>
<input type="email" id="guest-email" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ئیمەیڵەکەت بنووسە">
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div>
<label for="guest-phone" class="block text-sm font-medium text-gray-700 mb-1">ژمارەی مۆبایل</label>
<input type="tel" id="guest-phone" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ژمارەی مۆبایل بنووسە">
</div>
<div>
<label for="guest-id" class="block text-sm font-medium text-gray-700 mb-1">ژمارەی ناسنامە</label>
<input type="text" id="guest-id" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="ژمارەی ناسنامە بنووسە">
</div>
</div>
<div>
<label for="special-requests" class="block text-sm font-medium text-gray-700 mb-1">داواکاری تایبەت</label>
<textarea id="special-requests" rows="3" class="w-full py-2 px-4 border border-gray-300 rounded focus:ring-primary focus:border-primary text-sm" placeholder="هەر داواکارییەکی تایبەتت هەیە لێرە بینووسە"></textarea>
</div>
<div class="flex items-center">
<input type="checkbox" id="agree-terms-payment" class="custom-checkbox">
<label for="agree-terms-payment" class="text-sm text-gray-600">ڕازیم بە <a href="#" class="text-primary hover:underline">مەرج و ڕێساکان</a> و <a href="#" class="text-primary hover:underline">سیاسەتی تایبەتمەندی</a></label>
</div>
</div>
</div>
</div>
<div class="lg:w-1/3">
<div class="bg-white rounded-lg shadow-md p-6 sticky top-4">
<h3 class="font-bold text-xl mb-4">کورتەی شوێن تەرخانکردن</h3>
<div class="border-b border-gray-200 pb-4 mb-4">
<div class="flex items-center space-x-4 space-x-reverse">
<img src="https://readdy.ai/api/search-image?query=luxury%20hotel%20logo%20for%20Rotana%20Erbil%2C%20elegant%20and%20professional%20design%2C%20minimal%20style%2C%20high%20quality&width=100&height=100&seq=20&orientation=squarish" class="w-16 h-16 rounded-md object-cover object-top">
<div>
<h4 class="font-bold">ئوتێلی ڕۆتانا ئەربیل</h4>
<div class="flex text-yellow-400">
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
<i class="ri-star-fill"></i>
</div>
<p class="text-sm text-gray-600">ناوەندی شاری هەولێر</p>
</div>
</div>
</div>
<div class="space-y-3 mb-6">
<div class="flex justify-between">
<span class="text-gray-600">ژووری دەلوکس</span>
<span>١ ژوور</span>
</div>
<div class="flex justify-between">
<span class="text-gray-600">ڕۆژی هاتن</span>
<span>٢٠٢٥/٠٥/١٠</span>
</div>
<div class="flex justify-between">
<span class="text-gray-600">ڕۆژی دەرچوون</span>
<span>٢٠٢٥/٠٥/١٢</span>
</div>
<div class="flex justify-between">
<span class="text-gray-600">ماوەی مانەوە</span>
<span>٢ شەو</span>
</div>
<div class="flex justify-between">
<span class="text-gray-600">ژمارەی میوان</span>
<span>٢ کەس</span>
</div>
</div>
<div class="border-t border-gray-200 pt-4 mb-6">
<div class="flex justify-between mb-2">
<span class="text-gray-600">نرخی ژوور (٢ شەو)</span>
<span>$٣٦٠</span>
</div>
<div class="flex justify-between mb-2">
<span class="text-gray-600">باج و خزمەتگوزاری</span>
<span>$٣٦</span>
</div>
<div class="flex justify-between mb-2 text-green-600">
<span>داشکاندنی ئەندامی VIP</span>
<span>-$٣٩.٦</span>
</div>
<div class="flex justify-between font-bold text-lg mt-4">
<span>کۆی گشتی</span>
<span class="text-primary">$٣٥٦.٤</span>
</div>
</div>
<button id="confirm-payment" class="w-full bg-primary text-white py-3 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">پشتڕاستکردنەوەی پارەدان</button>
<p class="text-xs text-gray-500 text-center mt-4">پارەکەت بە تەواوی پارێزراوە</p>
</div>
</div>
</div>
</div>
</main>
<footer class="bg-gray-900 text-white py-10">
<div class="container mx-auto px-4">
<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
<div>
<h3 class="font-['Pacifico'] text-2xl mb-4">گەشتیار</h3>
<p class="text-gray-400 mb-4">باشترین خزمەتگوزاری گەشتیاری لە کوردستان</p>
<div class="flex space-x-4 space-x-reverse">
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-facebook-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-instagram-fill text-xl"></i>
</a>
<a href="#" class="text-gray-400 hover:text-white transition-colors w-10 h-10 flex items-center justify-center">
<i class="ri-twitter-x-fill text-xl"></i>
</a>
</div>
</div>
<div>
<h4 class="font-bold text-lg mb-4">بەستەرە خێراکان</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">سەرەکی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">شارەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">ئوتێلەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پەیوەندی</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">یارمەتی</h4>
<ul class="space-y-2">
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پرسیارە باوەکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">مەرج و ڕێساکان</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">تایبەتمەندی</a></li>
<li><a href="#" class="text-gray-400 hover:text-white transition-colors">پشتگیری</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-lg mb-4">پەیوەندی</h4>
<ul class="space-y-2">
<li class="flex items-start space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400 mt-1">
<i class="ri-map-pin-line"></i>
</div>
<span class="text-gray-400">شەقامی ١٠٠ مەتری، هەولێر، هەرێمی کوردستان</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-phone-line"></i>
</div>
<span class="text-gray-400">٠٧٥٠ ١٢٣ ٤٥٦٧</span>
</li>
<li class="flex items-center space-x-2 space-x-reverse">
<div class="w-5 h-5 flex items-center justify-center text-gray-400">
<i class="ri-mail-line"></i>
</div>
<span class="text-gray-400">info@geshtiar.com</span>
</li>
</ul>
</div>
</div>
<div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
<p class="text-gray-400 text-sm mb-4 md:mb-0">© ٢٠٢٥ گەشتیار. هەموو مافەکان پارێزراوە.</p>
<div class="flex items-center space-x-4 space-x-reverse">
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-visa-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-mastercard-fill text-2xl text-gray-400"></i>
</div>
<div class="w-8 h-8 flex items-center justify-center">
<i class="ri-paypal-fill text-2xl text-gray-400"></i>
</div>
</div>
</div>
</div>
</footer>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
// Login/Register Toggle
const loginTab = document.getElementById('login-tab');
const registerTab = document.getElementById('register-tab');
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');
loginTab.addEventListener('click', function() {
loginTab.classList.add('tab-active');
registerTab.classList.remove('tab-active');
loginForm.classList.remove('hidden');
registerForm.classList.add('hidden');
});
registerTab.addEventListener('click', function() {
registerTab.classList.add('tab-active');
loginTab.classList.remove('tab-active');
registerForm.classList.remove('hidden');
loginForm.classList.add('hidden');
});
// Login Button
const loginButton = document.getElementById('login-button');
loginButton.addEventListener('click', function() {
document.getElementById('login-page').classList.add('hidden');
document.getElementById('home-page').classList.remove('hidden');
});
// Profile Dropdown
const profileButton = document.getElementById('profile-button');
const profileDropdown = document.getElementById('profile-dropdown');
profileButton.addEventListener('click', function() {
profileDropdown.classList.toggle('hidden');
});
// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
const isClickInside = profileButton.contains(event.target) || profileDropdown.contains(event.target);
if (!isClickInside && !profileDropdown.classList.contains('hidden')) {
profileDropdown.classList.add('hidden');
}
});
// Logout Button
const logoutButton = document.getElementById('logout-button');
logoutButton.addEventListener('click', function() {
document.getElementById('home-page').classList.add('hidden');
document.getElementById('login-page').classList.remove('hidden');
});
});
document.addEventListener('DOMContentLoaded', function() {
// City Cards Click
const cityCards = document.querySelectorAll('.city-card');
cityCards.forEach(card => {
card.addEventListener('click', function() {
const cityName = this.querySelector('h3').textContent;
document.getElementById('home-page').classList.add('hidden');
document.getElementById('city-hotels-page').classList.remove('hidden');
const cityTitle = document.querySelector('#city-hotels-page h2');
const hotelCount = document.querySelector('#city-hotels-page h2 + p');
cityTitle.textContent = `ئوتێلەکانی ${cityName}`;
// Update hotel names and details based on city
const hotelContainer = document.querySelector('#city-hotels-page .space-y-6');
let hotelHTML = '';
if (cityName === 'هەولێر') {
hotelHTML = `
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=luxury%20hotel%20room%20interior%20in%20Erbil%20Kurdistan%2C%20modern%20design%2C%20king%20size%20bed%2C%20large%20windows%20with%20city%20view%2C%20elegant%20furniture%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=10&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی ڕۆتانا ئەربیل</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
</div>
<p class="text-gray-600 mb-4">ناوەندی شاری هەولێر، نزیک قەڵای هەولێر</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٩.٢ زۆر باش</div>
<p class="text-gray-600 text-sm">١٢٠ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">مەلەوانگە</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٨٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>`;
} else if (cityName === 'سلێمانی') {
hotelHTML = `
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=modern%20hotel%20room%20in%20Sulaymaniyah%20Kurdistan%2C%20contemporary%20design%2C%20mountain%20view%2C%20luxurious%20interior%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=13&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی گراند میلینیۆم سلێمانی</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i>
</div>
<p class="text-gray-600 mb-4">شەقامی سالم، نزیک پارکی ئازادی</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٩.٠ زۆر باش</div>
<p class="text-gray-600 text-sm">٩٨ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">مەلەوانگە</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٦٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>`;
} else if (cityName === 'دهۆک') {
hotelHTML = `
<div class="bg-white rounded-lg shadow-md overflow-hidden">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 h-60 md:h-auto">
<img src="https://readdy.ai/api/search-image?query=luxury%20hotel%20room%20in%20Duhok%20Kurdistan%2C%20modern%20design%2C%20scenic%20mountain%20view%2C%20elegant%20decor%2C%20high%20quality%20professional%20photography&width=400&height=300&seq=14&orientation=landscape" class="w-full h-full object-cover object-top">
</div>
<div class="md:w-2/3 p-6">
<div class="flex justify-between items-start">
<div>
<h3 class="font-bold text-xl mb-2">ئوتێلی دیلان دهۆک</h3>
<div class="flex text-yellow-400 mb-2">
<i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-line"></i>
</div>
<p class="text-gray-600 mb-4">شەقامی سەرەکی، نزیک زانکۆی دهۆک</p>
</div>
<div class="text-right">
<div class="bg-green-100 text-green-800 text-sm py-1 px-2 rounded-full mb-2">٨.٨ باش</div>
<p class="text-gray-600 text-sm">٧٥ هەڵسەنگاندن</p>
</div>
</div>
<div class="mt-4 flex flex-wrap gap-2">
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">وایفای بەخۆڕایی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">نانی بەیانی</span>
<span class="bg-gray-100 text-gray-800 text-xs py-1 px-2 rounded-full">پارکینگ</span>
</div>
<div class="mt-6 flex justify-between items-end">
<div>
<p class="text-gray-600 text-sm">نرخی یەک شەو بۆ دوو کەس</p>
<p class="text-2xl font-bold text-primary">$١٤٠</p>
</div>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">شوێن تەرخانکردن</button>
</div>
</div>
</div>
</div>`;
}
hotelContainer.innerHTML = hotelHTML;
// Update hotel count
const hotelCounts = {
'هەولێر': '٢٤',
'سلێمانی': '١٨',
'دهۆک': '١٢',
'هەڵەبجە': '٨',
'کۆیە': '٦',
'زاخۆ': '٧',
'ڕانیە': '٥',
'سۆران': '٤'
};
hotelCount.textContent = `${hotelCounts[cityName]} ئوتێل دۆزرایەوە`;
// Reattach event listeners for booking buttons
const bookButtons = document.querySelectorAll('#city-hotels-page button:not(#back-to-home)');
bookButtons.forEach(button => {
if (button.textContent.trim() === 'شوێن تەرخانکردن') {
button.addEventListener('click', function() {
document.getElementById('city-hotels-page').classList.add('hidden');
document.getElementById('payment-page').classList.remove('hidden');
});
}
});
});
});
// Back to Home
const backToHome = document.getElementById('back-to-home');
backToHome.addEventListener('click', function(e) {
e.preventDefault();
document.getElementById('city-hotels-page').classList.add('hidden');
document.getElementById('home-page').classList.remove('hidden');
});
// Hotel Booking Buttons
const bookButtons = document.querySelectorAll('#city-hotels-page button:not(#back-to-home)');
bookButtons.forEach(button => {
if (button.textContent.trim() === 'شوێن تەرخانکردن') {
button.addEventListener('click', function() {
document.getElementById('city-hotels-page').classList.add('hidden');
document.getElementById('payment-page').classList.remove('hidden');
});
}
});
// Back to Hotels
const backToHotels = document.getElementById('back-to-hotels');
backToHotels.addEventListener('click', function(e) {
e.preventDefault();
document.getElementById('payment-page').classList.add('hidden');
document.getElementById('city-hotels-page').classList.remove('hidden');
});
// Confirm Payment
const confirmPayment = document.getElementById('confirm-payment');
confirmPayment.addEventListener('click', function() {
const successModal = document.createElement('div');
successModal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
successModal.innerHTML = `
<div class="bg-white p-6 rounded-lg shadow-xl max-w-md w-full mx-4">
<div class="text-center">
<div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
<i class="ri-check-line text-3xl text-green-500"></i>
</div>
<h3 class="text-xl font-bold mb-2">سوپاس بۆ شوێن تەرخانکردنەکەت!</h3>
<p class="text-gray-600 mb-4">دڵنیاکردنەوەی شوێن تەرخانکردن بە ئیمەیڵ بۆت دەنێردرێت.</p>
<button class="bg-primary text-white py-2 px-4 rounded-md hover:bg-primary/90 transition-colors whitespace-nowrap !rounded-button">باشە</button>
</div>
</div>
`;
document.body.appendChild(successModal);
successModal.querySelector('button').addEventListener('click', function() {
successModal.remove();
document.getElementById('payment-page').classList.add('hidden');
document.getElementById('home-page').classList.remove('hidden');
});
});
// Search Button
const searchButton = document.getElementById('search-button');
searchButton.addEventListener('click', function() {
document.getElementById('home-page').classList.add('hidden');
document.getElementById('city-hotels-page').classList.remove('hidden');
});
});
</script>
</body>
</html>