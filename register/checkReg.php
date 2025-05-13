<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ثبت‌نام</title>
  <script src="../tailwind.js"></script>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
</head>

<body>
  <?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $connect = mysqli_connect('localhost','root','','db_shop');
  $query = "SELECT * FROM `user` WHERE `email`='$email'";
  $result = mysqli_query($connect, $query);
  $data = mysqli_fetch_array($result);

  if ($data['email'] == $email) {
  ?>
    <div class="w-[40%] mx-auto p-5 mt-24 rounded-lg border border-zinc-300"> 
      <h2>این ایمیل از قبل وجود دارد!</h2>

      <button onclick="back()" class="text-white mt-2 bg-red-500 p-2 px-3 rounded-md">بازگشت</button>
    </div>
  <?php
  }else{
    $insert ="INSERT INTO `user`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$password','user')";
    $result = mysqli_query($connect, $insert); 
    ?>
  <p class="p-5 bg-green-600 text-white text-center" >حساب با موفقیت ساخته شد</p>
    <?php
  }
    ?>
  <script>
    function back(){
      window.location = "../register";
    }
    setTimeout(() => {
      window.location = "../";
    }, 3000);
  </script>
</body>

</html>