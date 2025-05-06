<!DOCTYPE html>
<html lang="en"dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>محصول جدید</title>
    <link rel="stylesheet" href="style.css">
    <script src="tailwind.js"></script>

</head>
<body class="">

    <div class="h-fit border rounded-xl border-zinc-300 p-4 shadow-sm">
        <h2 class="text-lg font-medium ">افزورن محصول</h2>
        <form class=" rounded-lg flex flex-col " action="./addCheck.php" method="post" enctype="multipart/form-data">
            <div class="relative w-52 h-52 border border-zinc-400 mt-2 rounded-md">
                <div onclick="document.getElementById('imageSelect').click()" class="hover:bg-zinc-200 transition-all flex justify-center cursor-pointer items-center h-full">
                    <img id="preview" class="w-full h-full absolute hidden object-cover" src="" alt="">
                    <p class="top-1/2 left-1/2">انتخاب تصویر</p>
                </div>
            </div>
            <input require placeholder="نام محصول" class="rounded-lg p-2 px-3 mt-3 border border-zinc-300 outline-none" type="text" name="name" id="name">
            <input require placeholder="توضیحات محصول" class="rounded-lg p-2 px-3 mt-3 border border-zinc-300 outline-none" type="text" name="description" id="description">
            <input require placeholder="قیمیت محصول" class="rounded-lg p-2 px-3 mt-3 border border-zinc-300 outline-none" type="number" name="price" id="price">
            <select require placeholder="دسته بندی" class="rounded-lg p-2 px-3 mt-3 border border-zinc-300 outline-none" type="text" name="category" id="category">
                <option value="میوه" >میوه</option>
                <option value="خشکبار" >خشکبار</option>
                <option value="سبزیجات" >سبزیجات</option>
            </select>
            <input class="w-52 hidden h-24 border rounded-md " type="file" name="image" id="imageSelect">
            <button class="rounded-sm p-3 px-4 mt-5 border border-zinc-300 outline-none bg-green-500 text-white">افزودن محصول</button>
        </form>
    </div>
    <script>
    const imgInp = document.getElementById('imageSelect');
    const preview = document.getElementById('preview');

    imgInp.addEventListener('change' ,(e)=>{
        preview.classList.remove('hidden');
        preview.src = URL.createObjectURL(imgInp.files[0]);
    })
</script>
</body>
</html>