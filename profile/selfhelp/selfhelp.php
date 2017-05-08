
<?php
session_start();
//$state =  trim($_SESSION["state"]);
if(!isset( $_SESSION["state"])){
    header("Location: /psychohelp");
    exit();
    // echo "<script> window.location.replace('http://localhost:63342/psycho_help/index.html')</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8 ;width=device-width;initial-scale=1" />

    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" >

        function part1() {
            var container = document.getElementById("part1");

            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }


            div = document.createElement('div');
            div.appendChild(document.createTextNode("নিজেকে নিজে সাহায্য করি -১"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("এই নিজেকে নিজে সাহায্য করি মানসিক স্বাস্থ্য সেবাটি কোনক্রমেই প্রচলিত প্রতিষ্টিত চিকিৎসা বাবস্থার  সমকক্ষ নয় বা প্রতিথাপনকারী  না।"));
            div.appendChild(document.createTextNode("মানসিক বিষয়গুলো আমাদের জীবনে কিভাবে প্রকাশিত হয় তা নির্ভর করে আমরা কোন  পরিস্থিতিতে  আছি তার উপর। কারণ যে কোন পরিস্থিতিতে  আমাদের ভেতর চার ধরণের পরিবর্তন তৈরী হয়। পরিবর্তনের দিকগুলি একটি আরেকটির সাথে সম্পর্কিত। এই দিক গুলি হল: চিন্তা, আবেগ, শারীরিক পরিবর্তন, এবং আচরন। এই  অংশ গুলি একটি অন্যটির সাথে কিভাবে সংযুক্ত তা নিচের চিত্রে দেখানো হলো:"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("[চিত্র ১:পঞ্চ জ্ঞানীয় উপাদান তত্ত্ব]। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("ধরা যাক আপনি একদিন রাস্তায় হেটে যাচিছলেন এমন সময় দেখলেন আপনার এক বন্ধু পাশ দিয়ে হেটে চলে গেল কিন্তু আপনার সাথে কোন কথা বলল না। তৎক্ষনাৎ আপনার ভেতর কয়েকটি পরিবর্তন হয়।  "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("[চিত্র ২: পঞ্চ জ্ঞানীয় উপাদান তত্ত্বের বাস্তব উদাহরণ]"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("উপরোক্ত পরিস্থিতিতে যে চিন্তা করা হয়েছে সেটা হলো নেতিবাচক চিন্তা। আর এই নেতিবাচক চিন্তাই আমাদের আবেগ, আচরন এবং শারীরিক পরিবর্তনকে প্রভাবিত করছে। এক্ষেত্রে মন খারাপ নিয়ে বাড়ি ফিরলেন এবং ঐ একই চিন্তা বারবার করতে থাকলেন। এর ফলে আরো মন খারাপ হতে লাগলো। অর্থাৎ আপনার এই চিন্তা ও অনুভূতি বৃত্তাকারে আসতে থাকবে এবং আপনি এই অবস্থার মধ্যে ঘুরতে থাকবেন। যদি আপনি আপনার বন্ধুর সাথে যোগাযোগ করেন তাহলে এই অবস্থার পরিবর্তন হওয়া সম্ভব। কিন্তু আপনি যদি তাকে এড়িয়ে যান এবং যোগাযোগ না করেন তাহলে আপনার চিন্তা ও মেজাজ একই রকম থেকে যাবে।  সব ধরনের পরিস্থিতি পরিবর্তন করা মানুষের পক্ষে সম্ভব নয়। একই পরিস্থিতিতে যদি ইতিবাচক চিন্তা করা যায় তাহলে কি হতো তা নিম্নে দেখানো হলো-"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("[চিত্র ৩: পঞ্চ জ্ঞানীয় উপাদান তত্ত্বের ইতিবাচক চিন্তার বাস্তব উদাহরণ]"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("উপরোক্ত পরিস্থিতিতে ইতিবাচক চিন্তা করা হয়েছে। যার ফলে আবেগ, আচরন এবং শারীরিক প্রক্রিয়া স্বাভাবিক অবস্থায় রয়েছে। আপনার চিন্তা এবং আপনার আবেগ,অনুভূতি আপনার ব্যবহার কে নিয়ন্ত্রন করে। অর্থাৎ কোন দৃষ্টিভঙ্গিতে একটি পরিস্থিতি দেখা হচ্ছে তার উপর আমাদের আবেগ, আচরন এবং শারীরিক প্রক্রিয়া পুরো বিষয়টি নির্ভর করে।কিন্তুু কেন আমরা কেউ একজন বেশীরভাগ পরিস্থিতি ইতিবাচক ভাবে ভাবি, আর কেউ একজন বেশীরভাগ পরিস্থিতি নেতিবাচক ভাবে ভাবি। কারন অনেক সময়ই -শৈশবের শিক্ষন ও অভিজ্ঞতা (বংশগত প্রবণতা ও হতে পারে) বর্তমান সমস্যায় কি অবদান রাখে।কোন কোন চাপ সৃষ্টিকারী পরিস্থিতি,অভিজ্ঞতা বা ঘটনা মানসিক সমস্যায় অবদান রাখে অথবা সমস্যা সমাধানের ক্ষমতায় হস্তক্ষেপ করে।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("সমস্যা সমাধানের জন্য লক্ষ্য নির্ধারন করুনঃ "));

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("১. দুই থেকে তিন সপ্তাহ পর আপনি কি করলে বুঝবেন সমস্যা কিছু কমেছে? তালিকা করুন।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("২. তালিকায় দীর্ঘমেয়াদী লক্ষ্য নির্ধারন করুন। নিশ্চিত করুন লক্ষ্যগুলি বাস্তবধর্মী।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৩. লক্ষটি নির্দিষ্ট করুন। যেমন: আমি অনেক কাজ করতে চাই, অথবা আমি দিনে অন্তত একটি কাজ করতে চাই। এক্ষেত্রে দ্বিতীয় বাক্যটি হচ্ছে অনেক বেশী কার্যকরী।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৪. নিশ্চিত করুন লক্ষ্যটি আপনি নিয়ন্ত্রন, ম্যানেজ করতে পারবেন। এমন কোন কিছু হয় যা আপনি নিয়ন্ত্রন করতে পারবেন না। যেমন: অন্যান্য মানুষের চিন্তা বা অনুভূতি আপনি নিয়ন্ত্রন করতে পারবেন না। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৫. সবচেয়ে সহজ ধাপটি থেকে লক্ষ্য পূরনের জন্য কাজ করুন।"));

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("একটি স্বল্পমেয়াদী লক্ষ্য নির্ধারন করুন। উদহারন: আপনি একবারে লাফ দিয়ে একটি বড় গাছের উপরে উঠতে পারবেন না, কিন্তু আপনি যদি একটি মই নেন এবং একধাপ করে উঠেন তাহলে এটা অনেক সহজ হবে। যখন আপনি লক্ষ্য পূরন করবেন অথবা লক্ষ্য পূরনের জন্য একটি ধাপ অতিক্রম করবেন, নিজেকে ধন্যবাদ দিন।"));

            container.appendChild(div);
            $('html,body').animate({
                    scrollTop: $(".anormal").offset().top},
                'slow');
        }

        function part2() {
            var container = document.getElementById("part1");

            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }


            div = document.createElement('div');

            div.appendChild(document.createTextNode("দ্বিতীয় অধ্যায়"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("বিশ্বাসঃ শৈশবের শুরু থেকেই মানুষের মধ্যে নিজের সম্পর্কে, অন্যদের সম্পর্কে এবং পৃথিবী সম্পর্কে নির্দিষ্ট বিশ্বাস গড়ে ওঠে। এই কেন্দ্রিয় বিশ্বাস খুব মৌলিক এবং গভীরে থাকে। এতটা গভীর ভাবে থাকে যে ব্যক্তিও এটাকে অনেক সময় স্পষ্টভাবে বুঝতে পারেনা। জীবনের নানা রকম অভিজ্ঞতা থেকে মানুষের বিভিন্ন সময়ে মূল বিশ্বাস তৈরী হয়, যার ফলে মানুষের ভবিষ্যতের জন্য চিন্তার ধরন ইতিবাচক বা নেতিবাচক ভাবে তৈরী হয়।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("কিভাবে মূল বিশ্বাস ও অন্তর্বতী বিশ্বাস সৃষ্টি হয়? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("মানুষ তাদের পূর্বের বিকাশজনিত ধাপ থেকে তাদের পরিবেশ সম্পর্কে জ্ঞান অর্জন করার চেষ্টা করে। স্বক্রিয় উপযোজনের মাধ্যমে সুসঙ্গত পন্থায় তাদের অভিজ্ঞতাকে সংগঠিত করার প্রয়োজন হয় (জড়ংবহ, ১৯৮৮)। পৃথিবী এবং অন্যান্য মানুষের সাথে প্রতিক্রিয়ার মাধ্যমে মানুষ বুঝতে শিখে অথবা শিক্ষন হয়, মানুষের বিশ্বাস পরবর্তীত হয় তাদের যথাযথ কার্যকারিতার মাধ্যমে।একটি বিশেষ পরিস্থিতিতে আপনার মধ্যে যে বিশ্বাস তৈরী হবে সেটা আপনার প্রত্যক্ষণকে প্রভাবিত করে যা পরিস্থিতি-বিশেষে সরাসরি চিন্তার মাধ্যমে প্রকাশিত হয়। পরবর্তীতে এই চিন্তা আপনার আবেগকে প্রভাবিত করে। নেতিবাচক চিন্তা আচরন এবং শরীরবৃত্তিয় প্রতিক্রিয়াকেও প্রভাবিত করে। যেমন: ‘রুশি একজন ছাত্রী (কাল্পনিক নাম)’ সে ক্লাস করার সময় চিন্তা করছিল, ‘এই ক্লাসটি খুবই কঠিন, আমি কখনই এটি বুঝতে পারবো না। এটা যতো ভাবতে লাগলো ততই সে বিষন্ন বোধ করে, কøান্ত অনুভব করে এবং শেষে ক্লাস থেকে বের হয়ে যায়।এই বিশ্বাস যেকোন পরিস্থিতিকে বিচার করার ক্ষেত্রে প্রভাব ফেলে, যা পরবর্তীতে মানুষের চিন্তা, অনুভূতি ও আচরণকে প্রভাবিত করে। যদি রুশি নিজেকে বলতো, চিন্তা করতো, ‘এটা হয়তো কঠিন কিন্তু অসম্ভব নয়। আমি এর আগেও এই ধরনের ক্লাস করেছি। যদি আমি লেগে থাকি, তাহলে হয়তো কিছুটা হলেও বুঝতে পারবো’। তাহলে সে ক্লাসটি ভালো ভাবে শেষ করতে পারতো।নেতিবাচক চিন্তা যা ব্যাক্তিকে সক্রিয় হতে বাধা দেয়:"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("নেতিবাচক চিন্তা যা ব্যাক্তিকে সক্রিয় হতে বাধা দেয়:"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("পূর্বেই আলোচনা করা হয়েছে কিভাবে কোন পরিস্থিতি আমাদের উপর প্রভাব ফেলছে এবং কিভাবে আপনি বিষন্নতার চক্রের মধ্যে পড়ে যাচেছন। বিষন্নতা কে মোকাবেলা করার সবচেয়ে গুরুত্বপূর্ণ কৌশল হলো আপনার হতাশাগ্রস্থ  চিন্তা যখন হয় তা সনাক্ত করুন এবং ঐ চিন্তা কে চ্যালেঞ্জ করুন। কি কি নেতিবাচক চিন্তা আপনার উন্নতি তে বাধা দিচেছ তা পর্যবেক্ষণ করুন। নিম্নে কিছু নেতিবাচক চিন্তার উদহারণ দেয়া হলো যা উন্নতি তে বাধা দেয় এবং এর সাথে কিছু অধিক কার্যকরী চিন্তার উদহারণ ও দেয়া হলো। এগুলোই একমাত্র এবং সঠিক উত্তর নয়, এখানে কিছু পরামর্শ দেয়া হলো। আপনার নেতিবাচক চিন্তা এগুলো থেকে আলাদা ও  হতে পারে। অনুশীলনের মাধ্যমে আপনি কার্যকর কৌশল শিখতে পারবেন এবং আপনার হতাশা  অবসাদ মোকাবেলা করতে পারবেন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode(" পুরাতন বিশ্বাস: যদি আমি সর্বোচ্চ অর্জন করতে না পারি আমি ব্যর্থ (৫৫%) "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("নতুন ধারনা: যদি আমি প্রায় সবকিছুতেই ব্যর্থ হই, শুধুমাত্র এটাই সামগ্রিক ব্যর্থতা (৪০%)। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("পুরাতন বিশ্বাস----------অধিক কার্যকরী বিশ্বাস "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("১. যদি আমি অন্যদের মতো ভালো করতে না পরি, আমি ব্যর্থ।"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("যদি আমি অন্যদের মতো ভালো করতে না পারি,আমি ব্যর্থ না, আমি শুধুমাত্র মানুষ, আমি ও মানুষ।"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode(" ২. যদি আমি কাজে ব্যর্থ হই, আমি একজন ব্যক্তি হিসেবে ব্যর্থ"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("যদি আমি কাজে ব্যর্থ হই, এটা আমার সমস্ত পরিচয়, নিজেকে প্রতিফলিত করে না। (আমার সমগ্রতা, সমস্ত সত্ত্বা বলতে বোঝায় একজন বন্ধু, মেয়ে, বোন, আত্মীয়, নাগরিক এবং সমাজের সদস্য এবং আমার মহানুভবতা ও সংবেদনশীলতা অন্যের প্রতি এবং সাহায্য ক্ষমতা ইত্যাদি) অতএব, ব্যর্থতা একটি স্থায়ী শর্ত না। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("আমি যা করার চেষ্টা করছি সবকিছুতেই আমার শ্রেষ্ঠ হওয়া উচিত"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("আমি কিছু বিষয়ে সর্বোৎকৃষ্ট হতে পারব না, যদি না আমি সে বিষয়ে প্রতিভাধর হই (এবং ঐ বিষয়ে আমাদের যথেষ্ট সময় ও কঠোর পরিশ্রম করতে হবে) "));
            div.appendChild(document.createElement("br"));



            div.appendChild(document.createTextNode("৪. আমার সবসময় কঠোর পরিশ্রম করা উচিত এবং সর্বোৎকৃষ্ট দিতে হবে"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("একটা কাজে যতটুকু পরিশ্রম করতে হবে ততটুকুই করা উচিত। "));
            div.appendChild(document.createElement("br"));



            div.appendChild(document.createTextNode("৫. যদি আমি আমার দক্ষতার সাথে না বাঁচি, আমি অকৃতকার্য"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("যদি আমি আমার সর্বোৎকৃষ্টের কম দেই, তাহলে আমি ৭০%, ৮০%, অথবা ৯০% নয়ত ০% সফলতা পাবো। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("   চিত্র ৪: অধিক কার্যকরী বিশ্বাস "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));



            div.appendChild(document.createTextNode("নেতিবাচক চিন্তা মূল্যায়ন করা: "));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("বিষন্ন ব্যক্তি প্রায় সবকিছু নেতিবাচকভাবে চিন্তা করে। মূলত তিনটি বিষয়ে নেতিবাচক ধারণা আবর্তিত হয়। নিজের সম্পর্কে নেতিবাচকভাবে চিন্তা করা (যেমন: আমি ভালো না), পৃথিবী সম্পর্কে নেতিবাচক ধারণা (যেমন: জীবণের কোন অর্থ নেই) এবং ভবিষ্যত সম্পর্কে নেতিবাচক ধারণা (যেমন: আমার দ্বারা কিছুই হবে না)। এই চিন্তাগুলো হঠাৎ করেই আসে এবং অনৈচিছক ও ক্ষতিকারক হয়ে থাকে।আপনি নিজেই অনেক নেতিবাচক চিন্তা বের করতে পারেন। নিচে সহায়তার জন্য অনেকগুলো বিকল্প উপায় দেওয়া হলোঃ"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. চিন্তার উপর মনোযোগ দিন।(এই চিন্তাটি আপনি কতটুকু বিশ্বাস করেন,করেছিলেন? আপনি এই চিন্তায় কি ধরনের আবেগে বোধ করেছিলেন? এই চিন্তার পরে আপনি কি করেছিলেন?)  "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("২.নেতিবাচক চিন্তার সঙ্গে যুক্ত অবস্থা ,ঘটনা খুজে বের করুন।(যখন এই ঘটনাটি ঘটেছে আপনি কোথায় ছিলেন? পরিস্থিতিটি সম্পর্কে আরো ভাবুন।)  "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৩. চিন্তাটি কে বিশে¬ষণ করুন।(আপনার কত ঘন ঘন এই ধরনের চিন্তা আসে? কি ধরনের পরিস্থিতিতে? এই ধরনের চিন্তা আপনাকে কতটুকু বিরক্ত করে?)"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("৪. একই ধরনের পরিস্থিতিতে অন্যন্য নেতিবাচক চিন্তা ও কল্পনা চিহ্নিত করুন। (যা কিছু আপনার মনে চলছিল? কোন ছবি বা কল্পনা?) "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৫. এই পরিস্থিতির সাথে সম্পর্কিত নেতিবাচক চিন্তার সমস্যা সমাধান করুন।(আপনি কি করতে পারতেন? আপনি কী আগে কখনো এমন কিছু ,কোন পরিস্থিতি মোকাবেলা করেছিলেন? আপনার কি করতে ইচ্ছা করছিল?)"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৬. নেতিবাচক চিন্তার ফলে কি বিশ্বাস হয়েছিল তা খুজে বের করুন। (যদি এই চিন্তা সত্য হয়, তাহলে আপনার কাছে এটার অর্থ কি ?) "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("চিন্তাধারার ক্ষেত্রে এভাবে প্রশ্ন করা, মূল্যায়ন করা এবং উত্তর দেয়া এটা সাধারনত আমরা নিজেরা অনুশীলন করি না। তাই প্রথমত এভাবে নিজেকে প্রশ্ন করে নেতিবাচক চিন্তাধারার ফলে কি আবেগ হয় তা বের করা কিছুটা কঠিন হতে পারে। যতবার নেতিবাচক চিন্তা আসবে ততবার এটার উত্তর খুজুন এবং পরিবর্তনের কৌশলগুলো ব্যবহার করুন। এক্ষেত্রে হতাশ হবেন না, আপনি যদি হতাশ হন তাহলেই নেতিবাচক চিন্তা তৈরী হবে এবং এটা অভ্যাসে পরিনত হবে। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("মৌলিক চিন্তা বের করার প্রশ্নসমূহঃ-"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("নেতিবাচক চিন্তাধারার ক্ষেত্রে সিধান্ত নেওয়ার জন্য, নিচের ধাপগুলো অনুসরন করুনঃ- "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("১. এই চিন্তার পক্ষে কি প্রমান আছে? কি কি প্রমান আছে যা আপনার ধারনা, চিন্তাকে সমর্থন করে? এই ধারনার বিপক্ষে কি কি প্রমান আছে? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("২. বিকল্প কোন ব্যাখ্যা আছে নাকি?"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৩. এটি যদি ঘটে তাহলে সর্বোচ্চ ক্ষতি কি হতে পারে? আমি কি এটা মেনে নিতে পারবো? এটি যদি ঘটে তাহলে সবচেয়ে ভালো কি হতে পারে? সত্যিই কি ফলাফল হবে? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৪. এই মৌলিক চিন্তা, বিশ্বাসের কি প্রভাব হবে? এই চিন্তা পরিবর্তনের ফলাফল কি হবে? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৫. আমি এটি সম্বন্ধে কি করতে পারি? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৬. আমি আমার বন্ধু, আত্মীয় কে কি বলতাম যদি তারাও একই ধরনের পরিস্থিতিতে পড়তো, সম্মুখীন হতো?"));
            div.appendChild(document.createElement("br"));


            container.appendChild(div);
            $('html,body').animate({
                    scrollTop: $(".anormal").offset().top},
                'slow');
        }

        function part3() {
            var container = document.getElementById("part1");

            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }


            div = document.createElement('div');
            div.appendChild(document.createTextNode(" তৃতীয় অধ্যায়"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode(" ত্রুটিপূর্ণ চিন্তা: যারা মানসিক সমস্যায় অথবা বিষন্নতায় ভোগেন তাদের চিন্তায় যৌক্তিক ভ্রান্তি খুব বেশী লক্ষ্য করা যায় (ইবপশ, ১৯৭৬) যখন আপনি স্বয়ংক্রিয় চিন্তাগুলো বের করবেন, তখন কোন ধরনের যৌক্তিক ভ্রান্তি করছেন তা সনাক্ত করবেন। এই যৌক্তিক ভ্রান্তি বিভিন্ন রকম হয়ে থাকে। নিুে উদাহরণসহ দেওয়া হলোঃ-"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("১. সাদা-কালো চিন্তা: কোন একটি পরিস্থিতিকে ব্যক্তি শুধু দুইভাবে দেখে এবং চিন্তা করে। যে কোন পরিস্থিতিকে সে সাদা বা কালো এই দুইভাবে দেখে কিন্তু এর মাঝামাঝি যে একটা অবস্থা আছে তা সে চিন্তাও করেনা। যেমন: যদি আমি সফল না হই তাহলে আমি পুরোপুরি ব্যর্থ। "));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("২. বড় করে দেখা : উপযুক্ত প্রমান ছাড়াই নেতিবাচক ভাবে নিজের ভবিষ্যতের কথা বলে। যেমন: আমার বুক ধড়ফড় করছে, আমার অবশ্যই হার্ট-এ্যটাক হবে ।  "));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("৩. নেতিবাচক মূল্যায়ন: নিজের মূল্যায়নের ক্ষেত্রে ব্যক্তি তার ইতিবাচক ব্যক্তিগত বৈশিষ্ট্য, কাজ বা গুণ কে ভুলভাবে মূল্যায়ন করে। যেমন: আমি পরীক্ষাটিতে পাস করেছি, আমি আসলে এটা ভালো পারিনা, এটা সৌভাগ্যক্রমে ঘটেছে। "));
            div.appendChild(document.createElement("br"));




            div.appendChild(document.createTextNode("৪. ছাপ মেরে দেওয়া : উপযুক্ত প্রমান ছাড়াই ব্যক্তি নিজের সম্পর্কে অথবা অন্যের সম্পর্কে নির্দিষ্ট, সার্বজনীন ও হতাশাজনক আখ্যা দেয়। উপর্সহারে পৌছায়। যেমন: আমি একজন পরাজিত মানুষ। সে একেবারেই ভালো নয়।"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("৫. বড়, ছোট করে দেখা: কোন ভাল ঘটনাকে ছোট করে দেখা এবং খারাপ ঘটনাকে বড় করে দেখা। যেমন: সে বলেছে যে আমাকে পছন্দ করেনা, তাহলে সে অবশ্যই আমাকে ঘৃনা করে। অথবা, সে বলেছে যে আমাকে পছন্দ করে, কিন্তু সে হয়তো এটা মনে করে না। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৬. একজায়গায় আটকে থাকা: নিজের নেতিবাচক দিক, অদক্ষতা, দুর্বলতা, এবং সীমাবদ্ধতার দিকে বেশী মনোযোগ দেওয়া। যেমন: যেহেতু আমার কাজে সকালে একটি ভুল করেছি। তাই আজ সারাদিনের সবকিছুই ভুল হয়েছে। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৭. অন্যের মন পড়া, সব কিছু নিজের উপর নেয়া: কোন প্রমান অথবা কারন ছাড়াই চিন্তা করা অন্যরা ব্যক্তির বিরুদ্ধে রয়েছে, প্রতিক্রিয়া করছে। যেমন: তার চুপ থাকার অর্থ হচ্ছে যে সে আমাকে পছন্দ করেনা। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৮. অবিচার: জীবনের একটি ঘটনা দ্বারা সব ঘটনাকে ব্যাখ্যা করা। যেমন: এই পরীক্ষায় ফেল করা মানে জীবনের সব পরীক্ষায় ফেল। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("উপরোক্ত যৌক্তিক ভ্রান্তিগুলোর কোনটি আপনার মধ্যে রয়েছে তা চিহ্নিত করবেন। আপনি যখন যৌক্তিক ভ্রান্তির ধরনগুলো চিহ্নিত করতে পারবে, তখন আপনার চিন্তার কতটুকু যৌক্তিক তা মূল্যায়ন করতে পারবেন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("(চিন্তার তালিকা,ডায়েরী ব্যবহার করুন)"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("সরাসরি মনে আসা নেতিবাচক চিন্তার প্রতি প্রতিক্রিয়া করার জন্য চিন্তার ডায়েরী খুবই কার্যকরী। নিচের পদ্ধতি অনুযায়ী ‘চিন্তার ডায়েরী’ কিভাবে ব্যবহার করবেন সে সম্পর্কে শিখিয়ে দেয়া হলো:"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("তারিখ বা সময়"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("পরিস্থিতি"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("সরাসরি মনে আসা চিন্তা"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("আবেগ"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("যৌক্তিক প্রতিক্রিয়া"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("ফলাফল"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. উক্ত পরিস্থিতিতে আপনি কি করেছিলেন অথবা কি চিন্তা করেছিলেন? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. আপনার মনে কি ধরনের চিন্তা বা কল্পনা এসেছিল? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("২. এই চিন্তাটি আপনার কাছে কতটুকু বিশ্বাস যোগ্য (০-১০০%)?"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. এই সময়ে আপনি কি ধরনের আবেগ অনুভূব করছিলেন? (যেমন: দুঃখ, উদ্বিগ্ন, রাগ ইত্যাদি) "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("২. আপনার আবেগের মাত্রা বা তীব্রতা কতটুকু ছিল (০-১০০%)?"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. আপনার কি ধরনের যৌক্তিক ভ্রান্তি ঘটেছিল? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("২. কি যৌক্তিক প্রশ্ন ব্যবহার করে নেতিবাচক চিন্তার প্রতি প্রতিক্রিয়া করেছিলেন? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৩. প্রত্যেক প্রতিক্রিয়া কে আপনি কতটুকু মাত্রায় বিশ্বাস করেন(০-১০০%)? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("১.এখন এই নেতিবাচক চিন্তাকে আপনি কতটুকু বিশ্বাস করেন? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("২. আপনার এখন কি অনুভব করছেন? এটার মাত্রা বা তীব্রতা কতটুকু (০-১০০%) ? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৩. আপনি এখন কি করবেন?"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("সংক্ষেপে বলা যায় যে,  চিন্তার ডায়েরী ত্রুটিপূর্ণ চিন্তাগুলোর সাথে প্রতিক্রিয়া করার সম্ভাবনা বাড়িয়ে দেয়, এই গুরুত্বপূর্ণ কৌশলটি নিজেই ব্যবহার করবেন।  "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("জ্ঞানীয় কৌশল সমূহ:"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("অপরাধবোধ অথবা লজ্জাবোধের জন্য চওঊ কৌশলঃ:"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১. আপনার জীবনের একটি নেতিবাচক ঘটনা অথবা পরিস্থিতির কথা চিন্তা করুন যেটার জন্য আপনি নিজেকে দায়ী মনে করেন (এবং এজন্য অপরাধ বা লজ্জাবোধ করেন)। "));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("২. যারা এই ঘটনার সাথে সম্পৃক্ত ছিলো, তাদের প্রত্যেকের নাম লিষ্ট করুন। আপনার নাম সবার প্রথমে রাখুন। একটি গোল বৃত্ত করুন, বৃত্তটিকে কয়েকটি ভাগে টুকরায় ভাগ করুন। আপনারা তালিকায় যারা আছে এই ঘটনার সাথে সম্পৃক্ততা অনুযায়ী তাদের নাম এই বৃত্তে লিখুন। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৩. এই ঘটনা বা পরিস্থিতির জন্য যাকে সবচেয়ে বেশী দায়ী মনে হচ্ছে তাকে একটি বড় অংশে রাখুন। এবার দেখুন এই পরিস্থিতির জন্য আপনি কতটুকু অংশে দায়ী এবং অন্যরা এতে কতটুকু অংশে দায়ী। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("সমস্যা সমাধানঃ"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("সমস্যা সমাধানের ধাপ নিচে দেওয়া হলো:"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("প্রথমত, সমস্যাটিকে সনাক্ত করুন এবং লিখে ফেলুন। যদি অনেকগুলো সমস্যা থাকে তাহলে সেগুলোর মধ্যে যেটি আপনার কাছে গুরুত্বপূর্ণ সেটি নিয়ে কাজ শুরু করুন। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("দ্বিতীয়, সমস্যাটির ক্ষেত্রে সম্ভাব্য যতগুলি সমাধান আপনার মনে আসে তা লিখে ফেলুন। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("তৃতীয়ত, প্রত্যেকটি সমাধানের সুবিধা এবং অসুবিধা লিখুন। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("চতুর্থত, একটি বা দুটি বাস্তবসম্মত কার্যকরী সমাধান সনাকÍ করুন এবং যেটিতে সুবিধা বেশী ও অসুবিধা কম সেই সমাধানটি নির্বাচন করুন। "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("পঞ্চমত, সমাধানটি বাস্তবায়ন করুন, এর কার্যকারিতা বা কতটুকু উন্নতি হয়েছে তা লক্ষ্য করুন।"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("ষষ্ঠত, প্রয়োজন হলে উক্ত সমাধানটি আবার পর্যালোচনা করুন অথবা সমাধানটি আরো ভালেবভাবে করার জন্য নতুন পরিকল্পনা করুন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("সিদ্ধান্ত গঠনঃ বেশীরভাগ মানুষ এর মধ্যে একটি সাধারন সমস্যা হলো সিদ্ধান্তহীনতায় ভোগা। যখন দুইটি পছন্দনীয় বিষয়ের, কাজের মধ্যে একটিকে বেছে নিতে হয় তখন মূলত সিদ্ধান্ত নিতে অসুবিধা হয়। এক্ষেত্রে প্রত্যেকটি বিষয়ের সুবিধা এবং অসুবিধা গুলি লিখতে বলুন এবং এর উপর ভিত্তি করে যেই বিষয়টি, কাজটি সবচেয়ে বেশী সুবিধাজনক তা নির্বাচন করুন । সমাধানটি বাস্তবায়ন করুন, এর কার্যকারিতা বা কতটুকু উন্নতি হয়েছে তা লক্ষ্য করুন।"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("প্রমানের জন্য জিজ্ঞাসাবাদ:"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("নেতিবাচক চিন্তা এবং ধারনা দূর করার জন্য এই কৌশল ব্যবহার করা হয়। নিম্নক্ত প্রশ্ন ব্যবহার করা যায়; :"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("১। এই ঘটনা ঘটবে (দূর্ঘটনা)  এর পক্ষে কি কি প্রমান আছে? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("২। কি জন্য আপনার মধ্যে এই চিন্তাটি তৈরী হয়েছে? "));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৩। আপনি কিভাবে জানলেন যে ঘটনাটি ঘটবে? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৪। ঘটনাটি ঘটবে (দূর্ঘটনা), এটা বিশ্বাসের জন্য যুক্তি কি?"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("আচরণগত পরীক্ষা : নেতিবাচক চিন্তা, ধারনা অথবা মূল বিশ্বাসের যথার্থতা পরীক্ষা করার ক্ষেত্রে এই কৌশল বেশ কার্যকরী। উদাহরণস্বরূপ: আপনার মধ্যে যদি ধারনা থাকে আমি কোন কিছুই সঠিকভাবে করতে পারিনা, এই বিশ্বাসের ক্ষেত্রে আপনি একটি সহজ কাজ করতে নিন যা সে সফলভাবে শেষ করতে পারবেন, এগুলোর মধ্যে হতে পারে বই থেকে একটি রচনা, কবিতা পড়া, বাজারের লিষ্ট তৈরী করা অথবা আপনার বন্ধুদের সাথে কাটানো কোন সুন্দর সময় বর্ণনা করে লিখুন, এই কাজটি শেষ করার মাধ্যমে আপনি বুঝতে পারবেন যে সে অন্তত একটি বা দুইটি কাজ ঠিকভাবে শেষ করতে পারেন।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("প্রথমত: সমস্যার শ্রেণী, ধরন অনুযায়ী ছোট ছোট ভাগে ভাগ করুন। এরপর ধীরে ধীরে চ্যালেঞ্জ অনুযায়ী ছোট থেকে বড় কাজের দিকে অগ্রসর হন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("দ্বিতীয়ত: পরীক্ষাটি করার জন্য নির্দিষ্ট জায়গা এবং সময় ঠিক করুন।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("তৃতীয়ত: নেতিবাচক চিন্তা অথবা বিশ্বাসটি সত্যি নাকি মিথ্যা তা পরীক্ষা করার জন্য একটি পরিকল্পনা করুন এবং সম্ভাব্য কি ফলাফল আসবে তা লিখে রাখুন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("চতুর্থত: পরীক্ষাটি করতে যেয়ে এর কোন সমস্যা হচ্ছে কিনা তা বলতে লিখুন। সমস্যা মোকাবেলা করার জন্য কৌশলগুলির একটি লিষ্ট তৈরী করুন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("পঞ্চমত: আপনার নেতিবাচক অথবা ইতিবাচক ভবিষ্যৎবাণী, ধারণাটি যদি এই পরীক্ষনে সমর্থন পায় অথবা যে ফলাফল এসেছে তা লিখে রাখতে বলুন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("এমন যদি হতো : "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("বিশ্বাসের পরিবর্তন হলে আচরনেরও পরিবর্তন হতে পারে। এবং আচরনের পরিবর্তনের সাথে সাথে আবার বিশ্বাসেরও পরিবর্তন হতে পারে। যদি বিশ্বাস দূর্বল হয় তাহলে কোন চিন্তা ছাড়াই ব্যক্তি তার আচরন খুব সহজেই এবং দ্রুত পরিবর্তন করতে পারে। আচরনের পরিবর্তন আনার জন্য কিছু বিশ্বাসের সামান্য পরিবর্তন আনা প্রয়োজন এবং একবার যখন ক্লায়েন্ট আচরনের পরিবর্তন আনতে পারবে, বিশ্বাসটি আস্তে আস্তে দূর্বল হয়ে যাবে। উদাহরণস্বরুপ: হাসুন অথবা হাসার অভিনয় করুন, এমনকি আপনার যদি হাসি না আসে, হাসতে মন না চায়। একইভাবে কাজের ক্ষেত্রেও এটি প্রয়োগ করুন। একটি কাজ করার চেষ্টা করুন, যদিও কাজটি করতে আপনার ভালো লাগছে না।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            div.appendChild(document.createTextNode("কার্যক্রমের তালিকা ঠিক করুন:"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("বিষন্নতা একটি ভয়ংকর চক্র। এটি আপনার শারিরীক ও মানসিক গতি মন’র করে দিবে।এর ফলে আপনার কাজের গতি কমে যাবে এবং আপনি নিজেকে দোষারোপ করা শুরু করবেন। আপনি বিশ্বাস করতে শুরু করবেন যে “আমি কিছুই করতে পারি না”। এর ফলে আপনি নিজের কাজগুলো ঠিক ভাবে করার ক্ষেত্রে ও অসুবিধা বোধ করবেন। তাই আপনি সারা সপ্তাহ কি কাজ করছেন সেটার ঘন্টা অনুযায়ী একটি সংক্ষিপ্ত তালিকা তৈরী করুন। যেই কাজটি আনন্দদায়ক মনে হবে সেটার পাশে (আ) লিখুন যেই কাজটি আপনি দক্ষতা সাথে করেছেন বলে মনে হবে সেটার পাশে (দ) লিখুন, এবং ১-১০ এর মধ্যে রেট করুন।  মনে রাখবেন আপনি যেই কাজটি আগে খুব কম সময়ে করতে পারতেন, বিষন্ন অবস্থায় সেই কাজটি সম্পন্ন করতে অনেক বেশী সময় লাগতে পারে। তাই যতটুকু কাজ করছেন তার জন্য নিজেই নিজেকে ধন্যবাদ দিন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("ঘন্টা  শনি রবি সোম মঙ্গল   বুধ বৃহ:    শুক্র"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৮-১১টা ঘুম থেকে উঠা ,নাস্তা করা (আ৬)"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("১১-২টা, বাসার কাজ করা (দ ৮)"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("২-৫টা,িভি দেখা(আ৫)"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("৫-রাত ৮ টা"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("৮ -১১টা"));
            div.appendChild(document.createElement("br"));




            container.appendChild(div);
            $('html,body').animate({
                    scrollTop: $(".anormal").offset().top},
                'slow');
        }
        function part4() {

            var container = document.getElementById("part1");
            var container2 = document.getElementById("sendf");
            var container3 = document.getElementById("sendf2");


            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }





            div = document.createElement('div');

            div.appendChild(document.createTextNode("চতুর্থ অধ্যায়"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("সমস্যাটি আবার হলে কি করবেন? "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("বিষন্নতা বা হতাশা আবার হবার সম্ভাবনা থাকে। এক্ষেত্রে আপনি যা শিখলেন সেগুলি ব্যবহার করুন এবং নিজে নিজেই সমস্যা সমাধানে প্রয়োগ করুন। যদি কোন সমস্যার ফলে আবারও বিষন্নবোধ করেন এবং এটার ফলে আপনার জীবন ক্ষতিগ্রস্থ হয় তাহলে প্রয়োজনে সরাসরি থেরাপীষ্টের সহায়তা নিন। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createTextNode("এই কৌশলগুলি ব্যবহার করে আপনার কতটুকু উন্নতি হয়েছে তা দেখার জন্য অবশ্যই এখানে যে প্রশ্নমালা গুলি আছে তা পূরণ করুন এবং ফলাফল দেখুন, ধন্যবাদ।"));
            div.appendChild(document.createElement("br"));


            var input= document.createElement("input");
            // butn.value="submit";


            input.type = "text" ;
            input.style = " background-color: #ccffe6 ;width : 700px ; height: 200px;  font-size : 100%; ;";
            input.id="feedback";

            div.appendChild(input);




            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("আমাদের কার্যক্রমে অংশ নেবার আগে আপনার মানসিক কষ্ট যে পরিমান ছিল তা 'শূন্য' (০) থেকে 'একশো' (১০০)-এর স্কেল-এ কোথায় ছিল তা নির্দেশ করুন। যেখানে ০ মানে হলো কোনো সমস্যা নেই এবং ১০০ মানে হলো অনেক সমস্যা। "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            var input1= document.createElement("input");
            // butn.value="submit";


         /*   input1.type = "number" ;
            input1.style = " background-color: #ccffe6 ;width : 50px ; height: 50px;  font-size : 100%; ;";
            input1.id="inp1";

            div.appendChild(input1);

            div.appendChild(document.createElement("br"));*/

            var scale= document.createElement("input");
            // butn.value="submit";


            scale.type = "range" ;
            scale.min = "0";
            scale.max = "100";
            scale.step = 10;
            scale.id= "range1" ;
            scale.value = 0;
            div.appendChild(scale);

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(container2);

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("আমাদের কার্যক্রমে অংশ নেবার পর আপনার মানসিক কষ্ট কি কিছু কমেছে? কার্যক্রমে অংশ নেবার পর আপনার যে পরিমান সমস্যা বোধ হয় তা 'শূন্য' (০) থেকে 'একশো' (১০০)-এর স্কেল-এ কোথায় তা নির্দেশ করুন। যেখানে ০ মানে হলো কোনো সমস্যা নেই এবং ১০০ মানে হলো অনেক সমস্যা।  "));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            var input2= document.createElement("input");
            // butn.value="submit";


        /*    input2.type = "number" ;
            input2.style = " background-color: #ccffe6 ;width : 50px ; height: 50px;  font-size : 100%; ;";
            input2.id="inp2";

            div.appendChild(input2);
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));*/



            var scale1= document.createElement("input");
            // butn.value="submit";


            scale1.type = "range" ;
            scale1.min = "0";
            scale1.max = "100";
            scale1.step = 10;
            scale1.id= "range2" ;
            scale1.value = 0;
            div.appendChild(scale1);

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
          //  container.appendChild(container2);
            div.appendChild(container3)


            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "ass1" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Assesment on Anxiety";



            div.appendChild(butn);



            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));



            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "ass2" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Assesment on Depression";
            div.appendChild(butn);

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));




            container.appendChild(div);

           // container.appendChild(container2);
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));
            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "bfeedback" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Send";



         //  div.appendChild(butn);
            container.appendChild(butn);





            $('html,body').animate({
                    scrollTop: $(".anormal").offset().top},
                'slow');

            $('#range1').on('change',function(){
                //div.appendChild(document.createTextNode($(this).val()));
                $('#sendf').html($(this).val());
            });

            $('#range2').on('change',function(){
                //div.appendChild(document.createTextNode($(this).val()));
                $('#sendf2').html($(this).val());
            });

            $('#bfeedback').click(function(){
                if(input.value!="" && scale1.value!="" && scale.value!="") {
                   // alert(scale.value+" "+ scale1.value);
                    $.ajax({
                        url: "/psychohelp/profile/selfhelp/feedback.php",
                        type: "GET",
                        data: {
                            "data": input.value,
                            "feed1": scale.value,
                            "feed2": scale1.value
                        },
                        success: function (feedback) {
                            alert(feedback);
                           window.location = "/psychohelp/profile/selfhelp/selfhelp.php";

                        }

                    });
                }
                else
                {
                    alert("Please fill up all the three fields before send");
                }
            });


            $('#ass1').click(function(){
                window.location = "/psychohelp/profile/quiz/quiz_view.html";
            });

            $('#ass2').click(function(){
                window.location = "/psychohelp/profile/quiz/quix_view_depression.html";
            });
            $('html,body').animate({
                    scrollTop: $(".anormal").offset().top},
                'slow');
        }


        function load_quiz() {


            var container = document.getElementById("container");

            while (container.hasChildNodes())
            {
                container.removeChild(container.lastChild);
            }


            div = document.createElement('div');

            div.appendChild(document.createTextNode("নিজেকে সহযোগিতার শুরু"));
            div.appendChild(document.createElement("br"));
          div.appendChild(document.createTextNode("অনেক সময় আমরা চাইলে নিজের মনকে নিয়ন্ত্রণ করতে পারি।মানসিক বিষয়ের সমস্যা দূর করতে অনেক ক্ষেত্রেই ব্যক্তি কে যাতে সমস্যা থেকে বের করে আনতে পারা যায় তাই সাইক্রেটিকসরা  এর বিভিন্ন উপকরন তৈরী করেছেন পেশাদার মানসিক স্বাস্থ্য সেবা কর্মীরা। সব ধরনের উপকরণের ভিতর সবচেয়ে বেশি কার্যকরী উপায়  হলো মানসিক স্বাস্থ্য সমস্যা তৈরী হয় কিভাবে আর চেষ্টা না করলে কিভাবে সমস্যা ক্রমশঃ বাড়তে থাকে তা বোঝা এবং ধীরে ধীরে তা নিয়ন্ত্রণ করতে চেষ্টা করা। এই কার্যটি মূলতঃ লিখিত তথ্যের সহায়তা নিয়েই সবচেয়ে বেশী করা হয়।"));
            div.appendChild(document.createTextNode("এই অংশে আপনি তিনটি অধ্যায় দেখতে পাবেন।যে তিনটি অধ্যায় বা নিজেকে নিজে সহায়তা করার উপায়  হিসাবে কাজ করতে পারে।"));

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("সবচেয়ে ভালো উপায় হলো আপনি তিনটি অধ্যায় একসাথে পড়ে নিবেন না। প্রথম অধ্যায় পড়ার পর এক সপ্তাহ আপনার জীবণে ঐ বিষয়ের উপস্থিতি  নোট করবেন। তারপর দ্বিতীয় সপ্তাহের শুরুতে দ্বিতীয়  অধ্যায়টি পড়বেন এবং একই ভাবে এরপর একসপ্তাহ যা শিখলেন তা নিজের জীবনে কিভাবে অভিজ্ঞতা করছে তা নিজের কাছে নোট রাখুন ডাইরির মতো। "));
        div.appendChild(document.createTextNode("তারপর দ্বিতীয় সপ্তাহ যাবার পর তৃতীয় সপ্তাহের শুরুতে তৃতীয় অধ্যায়টি পড়ুন  এবং তার ব্যবহার একই ভাবে তৃতীয় সপ্তাহে নিজের জীবণে করুন ও নোট রাখুন।এরপর চতুর্থ সপ্তাহের শুরুতে পুনরায় মানসিক  স্বাস্থ্য পরিমাপণের মানক দুটি পরিমাপক ব্যবহার করে নিজের মানসিক অবস্থা  জেনে নিন।"));
    div.appendChild(document.createTextNode("অবশেষে আমাদের ফিডব্যাক সেকশনে আপনার অভিজ্ঞতা এবং মতামত আমাদের জানান।"));
            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));

            div.appendChild(document.createTextNode("Developed by Jesan Ara Assistant Profession at University of Rajshahi"));

            div.appendChild(document.createElement("br"));
            div.appendChild(document.createElement("br"));


            //div.appendChild(document.createTextNode(" "));
            container.appendChild(div);


            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "butn1" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Selfhelp Part1";
            butn.onclick = part1();


            // var span = document.createElement('span');
            // span.innerHTML = '<button id="but' + inc +'" onclick="callJavascriptFunction()" ,>';
            container.appendChild(butn);

            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "butn2" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Selfhelp Part2";
            butn.onclick = part2();
            container.appendChild(butn);


            var butn= document.createElement("input");
            // butn.value="submit";


            butn.type = "button" ;
            butn.id= "butn3" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Selfhelp Part3";
            butn.onclick = part3();

            butn.type = "button" ;
            butn.id= "butn4" ;
            butn.style =" padding: 5px 10px;font-size: 24px;text-align: center;text-decoration: none;outline: none;color: #fff;background-color: #338caf;border: none;border-radius: 15px;box-shadow: 0 9px #999;";
            butn.value = "Selfhelp Part4";
            butn.onclick = part4();
            container.appendChild(butn);






           // butn.onclick = part4();
//            container.appendChild(butn);



        }

    </script>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }
        div.normal {
            font-style: normal;
            font-size : 100%;
            font-family: Times New Roman Bold Italic, Times New Roman Bold Italic;>

        }
        div.anormal {
            font-style: normal;
            font-size : 100%;
            font-family: Times New Roman Bold Italic, Times New Roman Bold Italic;>

        }
        .button {
            display: inline-block;
            padding: 5px 15px;
            font-size: 24px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button:hover {background-color: #3e8e41}

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
    </style>
</head>
<title>Self Help</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<body bgcolor="#99ffcc" >
<ul>
    <li><a href="/psychohelp">Home</a></li>
    <li><a href="/psychohelp/profile/access/user_profile.php">Profile</a></li>
    <li><a class="active" href="/psychohelp/profile/selfhelp/selfhelp.html">Selfhelp</a></li>
</ul>

</br>
<center>
    <div class= "normal" id="container"/>

    <script> document.write(load_quiz())
    </script>


    <button class="button" id="butn1" onclick="part1()" value="Selfhelp Part-1">
        Selfhelp Part-1
    </button></br></br></br>


    <button class="button" id="butn2" onclick="part2()" value="Selfhelp Part-2">
        Selfhelp Part-2
    </button></br></br></br>


    <button class="button" id="butn3" onclick="part3()" value="Selfhelp Part-3">
        Selfhelp Part-3
    </button></br></br></br>

    <button class="button" id="butn4" onclick="part4()" value="Selfhelp Part-4">
        Selfhelp Part-4
    </button></br></br></br>



    <div class= "anormal" id="part1"/></div></br></br></br>

    <div id = "sendf"/>
    <div id = "sendf2"/>






    </br>

</center>
</body>


</html>