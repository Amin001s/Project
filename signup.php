
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<!DOCTYPE html>
<html lang="fa-IR" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="./css/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <title>Sign Up</title>
    <link rel="Website icon" type="png" href="./img/icon2.png">
</head>
<body>
  <div id="btn">
    <a class="btn btn-hover" href="index.html">بازگشت</a>
  </div>
  <div class="wrapper">
    <section class="form signup">
      <header style="direction: rtl;">ساخت حساب کاربری</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label style="direction: rtl;">نام</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label style="direction: rtl;">نام خانوادگی</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label style="direction: rtl;">آدرس ایمیل</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label style="direction: rtl;">رمز ورود</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="ادامه">
        </div>
      </form>
      <div class="link" style="direction: rtl;">آیا حساب کاربری دارید ؟<a href="login.php">وارد شوید</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
