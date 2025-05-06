<!DOCTYPE html>
<html lang="en" dir='rtl'>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>محصولات</title>
    
    <link rel="stylesheet" href="style.css">
    <script src="../tailwind.js"></script>
</head>

<body class="bg-white text-black text-sm font-[IRANSans]">
    <?php
    $conect = mysqli_connect('localhost','root','' ,'db_shop');
    $result = mysqli_query($conect,'select * from products');
    ?>

    <div class="p-5 m-20 relative shadow border gap-8 flex-wrap border-zinc-500 flex rounded-xl justify-center">
        <p class="my-2 text-lg absolute -top-12 font-medium">محصولات</p>
        <?php
        while($row = mysqli_fetch_row($result)){
            ?>
        <div class="flex flex-col border rounded-md border-zinc-500  w-40">
            <img class="border border-b-md border-zinc-300 rounded-t-md " src="../image/<?php echo $row[5] ?>" alt="">
        <div class="flex" >
                <h2 class="  m-2 flex-"> نام محصول :   <?php echo $row[1] ?></h2>
            <p class="m-2 "> قیمت :   <?php echo $row[3] ?></h2>
        </div>
        </div>
        <?php
            }
        ?>
    </div>
</body>

</html>