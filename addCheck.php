<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="tailwind.js"></script>
</head>
<body>
<?php
include('./mysql.php'); // $connect

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_FILES['image']['name'];

$query = mysqli_query($connect,"INSERT INTO `products` (`title`, `description`, `price`,`category`, `image`) VALUES ( '$name', '$description', $price, '$category', '$image')");

?>

    <p class="bg-green-500 text-white text-center p-5">محصول با موفقیت اضافه شد</p>
</body>
<script>
    setTimeout(() => {
        window.location = "products";
    }, 1000);
</script>
</html>
