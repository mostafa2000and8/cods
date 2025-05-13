<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود</title>
    <script src="../tailwind.js"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
</head>

<body class="h-screen items-stretch w-full flex font-[IRANSans]">
    <div class=" w-[40%] p-5 flex flex-col bg-stone-50 border-l-2 border-zinc-300 ">
        <div class="my-16 text-center">
            <h2 class="text-2xl font-semibold text-gray-800">خوش آمدید!</h2>
            <p class="text-zinc-700 text-sm">برای ادامه لطفا به حساب خود وارد شوید</p>
        </div>
        <form method="post" class="flex flex-col gap-4" action="checkLogin.php" onsubmit="return validate()">
            <input id="email" name="email" class="border text-sm outline-none border-zinc-200 rounded-full p-2 px-4" type="text" placeholder="ایمیل">
            <input id="pass" name="password" class="border text-sm border-zinc-200 outline-none rounded-full p-2 px-4" type="password" placeholder="رمز عبور">
            <button class="p-2 mt-4 rounded-md text-sm  bg-green-600 text-white">ورود به حساب</button>
        </form>
        <p class="text-sm text-center mt-4 text-zinc-600">حسابی ندارید ؟ <a class="text-sky-500" href="register.php">ثبت‌نام</a></p>
        <div id="hlogo" class="flex items-center mt-auto justify-center px-2">
            <img src="logo.png" class="w-14 h-fit ">
            <div class="flex gap-1 mt-2 font-semibold ">
                <span class="text-[#5ea528] h-full flex justify-center items-center  "> خانه </span>
                <span class="text-[#5ea528] h-full flex justify-center items-center"> سبز</span>
            </div>
        </div>
    </div>
    <div class="bg-[url('../img/bg.png')] grow">

    </div>
    <script>
        function validate() {
            const email = document.querySelector('#email');
            const pass = document.querySelector('#pass');

            const error = document.querySelector('#error');

            if (!email.value || !pass.value ) {
                error.classList.remove('hidden');
                error.innerHTML = "لطفا تمام فیلد ها را کامل کنید.";
                return false;
            }
            error.classList.add('hidden');

            return true;
        }
    </script>
</body>

</html>