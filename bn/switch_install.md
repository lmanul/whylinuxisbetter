---
layout: default
identifier: switch_install
category: bn
title: লিনাক্স ইন্সটলেশন
tags: switch
---



তো, শেষমেষ সিদ্ধান্ত নিলেন লিনাক্সে চলে আসবেন? কথা দিচ্ছি, লিনাক্স আপনাকে হতাশ করবে না।




আপনার পিসিতে যদি আগে Windows ইন্সটল করা থাকে তা হলে সেটা রেখে দেয়াটাই ভাল হবে। কারন নতুন ইউজার হওয়ার কারনে আপনি হয়তো শুরুতে লিনাক্সে কিছু কাজ কিভাবে করতে হয় তা জানবেন না। জরুরী অবস্থায় ঝামেলা এড়ানোর জন্য তাই Windows টা রেখে দিতে পারেন (তবে বারবারই বলছি, দু-একটা ব্যাপার ছাড়া এমন কিছু নেই যা লিনাক্সে করা যায় না)। তাই পিসিতে Windows এর পাশাপাশি লিনাক্স ইন্সটল করুন। পরে প্রতিবার বুট হবার সময় প্রয়োজনমত লিনাক্স বা উইন্ডোজ সিলেক্ট করে দেওয়া যাবে।



সবার আগে <b>প্রয়োজনীয় ডেটার ব্যাকআপ</b> রেখে নিন। যেহেতু প্রথমবার লিনাক্স ইন্সটল করছেন... সমস্যা হতেই পারে। ব্ল্যাঙ্ক সিডি-ডিভিডি, পেনড্রাইভ বা আরেকটা হার্ডডিস্ক যা সম্ভব যোগাড় করুন এবং দরকারি ডেটা অবশ্যই ব্যাকআপ করুন।



তারপর আপনার ডিস্ক ডিফ্র্যাগমেন্ট করতে হবে। এই মুহূর্তে আপনার ডেটাগুলো সমগ্র হার্ডডিস্কে ছড়িয়ে-ছিটিয়ে আছে। (Windows এর ফাইল ম্যানেজমেন্ট লিনাক্সের তুলনায় খুবই এলোমেলো; বিস্তারিত দেখুন <a href="/items/defragment/index_bn.php">এখানে</a>)। ডিফ্র্যাগমেন্ট শেষ হলে আপনার হার্ডডিস্কে নতুন একটা পার্টিশন করতে কোন সমস্যা হবে না (লিনাক্সের জন্য আলাদা পার্টিশন লাগবে।)



আপাতত আপনার পিসির কাজ শেষ। এখন আপনাকে লিনাক্স ডিস্ট্রিবিউশন বেছে নিতে হবে। বিভিন্ন "ফ্লেভারের" লিনাক্স আছে। এদেরকে "ডিস্ট্রিবিউশন" বা সংক্ষেপে "ডিস্ট্রো" বলা হয়। পৃথক পৃথক কোম্পানির তৈরী এসব ডিস্ট্রিবিউশন দেখতে বিভিন্নরকম হয়, অন্যরকম সফটওয়্যার ইন্সটল করা থাকে। এগুলোর সবগুলোই মূলত লিনাক্স, বিভিন্ন কাজের জন্য বিভিন্নভাবে সজ্জিত। কোনটি আপনার জন্য ভাল হবে সেটা আসলে একবারে বলে দেয়া সম্ভব না (আসলে কোন ডিস্ট্রো সেরা এ নিয়ে প্রচুর তর্কবিতর্ক আছে)। যাইহোক, নিচে <a href = "http://www.distrowatch.com">DistroWatch.com</a> এর র‍্যাঙ্ক করা সবচেয়ে জনপ্রিয় চারটি ডিস্ট্রিবিউশনের নাম দেওয়া হলঃ



<? make_distros_table() ?>



ডিস্ট্রিবিউশন সিলেক্ট করা হয়ে গেলে সেগুলোর সর্বশেষ ভার্সনের CD ইমেজ (.iso ফাইল) ডাউনলোড করে নিন (কোন সার্চ ইঞ্জিনে সার্চ দিলেই ডাউনলোড লিঙ্ক পাওয়া যাবে)। এরপর ইমেজটি একটি খালি CD/DVD তে রাইট করে নিন। তৈরী হয়ে গেল বুটেবল ইন্সটলেশন ডিস্ক (Unetbootin নামে একটা সফটওয়্যার আছে; যেটা দিয়ে পেনড্রাইভে CD ইমেজ রাইট করে নিয়ে সেটা দিয়েই ইন্সটল করে নেয়া যায়। ব্ল্যাঙ্ক CD/DVD দরকার হয় না। এই পদ্ধতিই ইদানিং বেশি জনপ্রিয়)। পুরো পদ্ধতিটা যদি ঝামেলা মনে হয়, তাহলে কিছু পয়সা খরচ করে <a href="http://www.easylinuxcds.com">EasyLinuxCDs.com</a> এ অর্ডার করতে পারেন। তাদের এব্যাপারে মোটামুটি সুনাম আছে। তারপর সিডি বা পেনড্রাইভ পিসিতে লাগিয়ে রিবুট করুন। BIOS থেকে "Boot from CD/DVD" অথবা "Boot from USB drive" সিলেক্ট করুন (বিস্তারিত <a href="\switch\try">"Try" লিনাক্স</a> সেকশনে দেখুন)।



তারপর স্ক্রিনের নির্দেশগুলো মত যেতে থাকুন। আপনার নাম, পাসওয়ার্ড, লোকেশন এগুলো চাইলে প্রবেশ করান। অধিকাংশ ক্ষেত্রে এই ধাপগুলো খুবই সহজ।

<b>লিনাক্সের সাথে আপনার যাত্রা শুভ হোক!</b>

