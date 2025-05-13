<?php
session_start();
?>
<div class="flex p-2 flex-col" id="hcontainer">
    <div id="htop" class=" w-full flex items-center justify-between gap-2 px-2">
        <div id="htright" class="flex gap-8 items-center">
            <div id="hlogo" class="flex items-center justify-center px-2">
                <img src="img/logo.png" class="w-14 h-fit ">
                <div class="flex flex-col ">
                    <h1 class="text-[#5ea528] h-full flex justify-center items-center  ">خانه </h1>
                    <h1 class="text-[#5ea528] h-full flex justify-center items-center">سبز</h1>
                </div>
            </div>
            <div class="relative w-fit overflow-hidden">
                <input
                    class="bg-lime-50 w-[600px] outline-none focus:border-zinc-400 h-fit rounded-md py-4 p-2 px-3 border border-zinc-300 text-xs"
                    type="text" placeholder="محصول مورد نظر خود را جست و جو کنید">
                <div class="flex h-full px-4 top-0 left-0 absolute justify-center items-center">
                    <i class="fas fa-search "></i>
                </div>
            </div>
        </div>
        <div id="htleft">
            <div class="flex border-2 border-[#5ea528] rounded-md">
                <button onclick="window.location = './login'" class="p-2 px-4  borde-2 text-[#5ea528] border-l border-[#5ea528] text-sm">ورود</button>
                <button onclick="window.location = './register'" class="p-2 px-3  bg-[#5ea528] text-white text-sm">ثبت نام</button>
            </div>
        </div>
    </div>
    <nav class="mt-3 pr-4">
        <a href="localhost/khanesabz/" class="p-2 text-gray-500 text-sm">صفحه اصلی</a>
        <a href="" class="p-2 text-gray-500 text-sm"> دسته بندی محصولات</a>
        <a href="" class="p-2 text-gray-500 text-sm">تخفیف های ویژه</a>
        <?php
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {

        ?>
            <a href="./addproduct" class="p-2 text-sm text-[#5ea528]">افزورن محصول</a>
        <?php
        }
        ?>
    </nav>
</div>