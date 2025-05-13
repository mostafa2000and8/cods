<?php 
session_start();
?>
<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ورود</title>
  <script src="../tailwind.js"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
</head>

<body>
  <?php
  $email = $_POST['email'];
  $password = $_POST['password'];

  $connect = mysqli_connect('localhost','root','','db_shop');
  $query = "SELECT * FROM `user` WHERE `email`='$email'";
  $result = mysqli_query($connect, $query);
  $data = mysqli_fetch_array($result);

  if ($data['email'] == $email && $data['password'] == $password) {
    $_SESSION['role'] = $data['role'];
  ?>
    <div class="w-[40%] mx-auto p-5 mt-24 rounded-lg border border-zinc-300"> 
      <h2>ورود با موفقیت انجام شد</h2>
    </div>
  <?php
  }else{
    ?>
  <p class="p-5 bg-red-600 text-white text-center" >حساب با این مشخصلت یافت نشد</p>
    <?php
  }
    ?>
  <script>
    function back(){
      window.location = "../login";
    }
    setTimeout(() => {
      window.location = "../";
    }, 3000);
  </script>
</body>

</html>