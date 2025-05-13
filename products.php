
    <?php
    $conect = mysqli_connect('localhost','root','' ,'db_shop');
    $result = mysqli_query($conect,'select * from products');
    ?>

<p class="p-2 mt-4 text-lg font-semibold">محصولات</p>
    <div class="p-5 mt-2 relative shadow gap-2 flex-col border-zinc-500 flex rounded-xl justify-center">
        <?php
        while($row = mysqli_fetch_row($result)){
            ?>

        <div class="flex border border-1 gap-2 items-center mx-auto w-[90%] border-gray-300 rounded-md  ">
            <div class="w-40 border-e border-gray-300 ">
                <img src="uploads/<?php echo $row[5] ?>" class="w-full p-1">
            </div>
            <div class="flex flex-col p-2 grow">
                <h2 class="font-semibold"><?php echo $row[1] ?></h2>
                <p class="text-sm font-light">هندوانه ناب و علاء به شرط چافو</p>
                <div class=" mt-3 flex gap-2 items-end">
                    <!-- <del class="text-sm text-zinc-700 line-through">100,000</del> -->
                    <p class="text-xs"><span class="text-lg"><?php echo $row[3] ?></span> تومان</p>
                </div>
                <div class="flex flex-row-reverse">
                    <button class="text-sm bg-green-600 rounded-md text-white p-2 px-3">افزودن به سبد خرید</button>
                </div>
            </div>
        </div>
    
        <?php
            }
        ?>
    </div>
