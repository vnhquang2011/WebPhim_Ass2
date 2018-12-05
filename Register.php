<?php
    require_once("libs/db.php");
    if(isset($_POST["button_update"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo $username;
            $hash = password_hash($password, PASSWORD_BCRYPT);
        $email = $_POST["email"];
        $fullName = $_POST["fullname"];
        $birthday = $_POST["birthday"];
        $gender = $_POST["gender"];

        //thực hiện việc lưu trữ dữ liệu vào db
        $sql = "SELECT* FROM user WHERE username = '$username'";
        $check = mysqli_query($link,$sql);
        if(mysqli_num_rows($check) > 0){
            // echo "<script>
            //     alert('Tài khoản $username đã tồn tại');
            // </script>";
            echo "Tài khoản $username đã tồn tại";
        }
        else{
            $sql = "INSERT INTO user(username,password,email,birthday,sex,usertype)
                        VALUES ('$username','$hash','$email','$birthday','$gender',20)";
            mysqli_query($link,$sql);
            echo "Signup successful";
            header('Location:Index.php');
        }
    }
?>
 
<!DOCTYPE html>
<!-- saved from url=(0018)javascript:void(); -->
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Index</title>
  <link href="css/owl.carousel.css" type="text/css" rel="stylesheet"> 
  <script src="js/jquery.min.js" type="text/javascript"></script>
  <script src="js/owl.carousel.js" type="text/javascript"></script>
  <script src="js/jwplayer.js"></script>

  <link href="css/style_info_account.min.css" type="text/css" rel="stylesheet"> 
  <link href="css/style-info_account.css" type="text/css" rel="stylesheet"> 

</head>
  <body style="position: relative;">
    <div id="wrapper">
      <?php
        include("header.php");
      ?>
      <div id="body-wrap" class="container">
      </div>

      <h3 style="margin-bottom: 20px; font-size:30px;text-align:center; ">Đăng kí thành viên</h3>

      <div class="form-update">
        <form method="post" id="form-update" name="form-update" class="form-horizontal" action="" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label">Tài khoản</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" name="username" id="username" value="">
              <label class="notifyerror" style="visibility: hidden; height: 0px" id="usernameerror">Tên tài khoản chỉ bao gồm ký tự a-z, A-Z và số</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Mật khẩu</label>
            <div class="col-lg-7">
              <input type="password" class="form-control" name="password" id="password1" value="">
              <label class="notifyerror" style="visibility: hidden; height: 0px" id="password1error">Mật khẩu phải bao gồm chữ thường, chữ hoa và số, độ dài tối thiểu 8 ký tự</label>
            </div>
          </div>


          <div class="form-group">
            <label class="col-lg-3 control-label">Xác nhận mật khẩu</label>
            <div class="col-lg-7">
              <input type="password" class="form-control" name="password2" id="password2" value="">
              <label class="notifyerror" style="visibility: hidden; height: 0px" id="password2error1">Mật khẩu phải bao gồm chữ thường, chữ hoa và số, độ dài tối thiểu 8 ký tự</label>
            </div>
          </div>
            
            <div class="form-group">
              <label class="col-lg-3 control-label">Họ tên</label>
              <div class="col-lg-7">
                <input type="text" class="form-control" name="fullname" id="fullname" value="">
                <label class="notifyerror" style="visibility: hidden; height: 0px" id="fullnameerror">Tên chỉ bao gồm các chữ cái</label>  
              </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">Email</label>
                <div class="col-lg-7"><input type="email" class="form-control" name="email" id="email">
                <label class="notifyerror" style="visibility: hidden; height: 0px" id="emailerror">Email không đúng định dạng name@domain</label>  
                </div>
            </div>
                        
            <div class="form-group">
                <label for="birthday" class="col-lg-3 control-label">Ngày sinh</label>
                <div class="col-lg-7">
                    <input class="form-control" type="date" value="" id="birthday" name="birthday">
                </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-3 control-label">Giới tính</label>
              <div class="col-lg-7">
                <label class="checkbox-inline">
                  <input type="radio" name="gender" id="update-gender-male" value="male" checked=""> Nam</label>
                  <label class="checkbox-inline">
                    <input type="radio" name="gender" id="update-gender-female" value="female"> Nữ
                  </label>
              </div>
            </div>

          

            <div class="col-offset-3 col-lg-10">
              <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Đăng kí</button>
            </div>

            <div class="clear"></div>
          </form>
    
    
    
  </div>
    <?php
        include("footer.php");
      ?>
  </div>
    
    <script language="javascript">
      var username = document.getElementById("username");
      var password1 = document.getElementById("password1");
      var password2 = document.getElementById("password2");
      var fullname = document.getElementById("fullname");
      var email = document.getElementById("email");
      var phone = document.getElementById("phone");
      var button_update = document.getElementById("button_update");

      var usernameerror = document.getElementById("usernameerror");
      //var passworderror = document.getElementById("passworderror");
      var password1error =  document.getElementById("password1error");
      var password2error1 =  document.getElementById("password2error1");
      var fullnameerror = document.getElementById("fullnameerror");
      var emailerror =  document.getElementById("emailerror");
      //var phoneerror =  document.getElementById("phoneerror");

      var regUsername = /^[A-Za-z0-9]+$/;
      var regFullname = /^[A-Za-z ]+$/;
      var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      // var regPhone =  /^\d{10}$/;
      var regPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/

      //var errorPasswordDefault = (passworderror.innerText || passworderror.textContent);

      username.onchange = function(){
        checkname();
      }

      password1.onchange = function(){
        checkNewpassword();
      }

      password2.onchange = function(){
        checkNewpassword2();
      }

      fullname.onchange = function(){
        checkfullname();
      }

      email.onchange = function(){
        checkemail();
      }

      button_update.onclick = function(){
        if(username.value.toString().length <= 0){
          alert("Bạn chưa nhập tên tài khoản");
          checkname();
          return false;
        }

        if(fullname.value.toString().length <= 0){
          alert("Bạn chưa nhập tên");
          checkname();
          return false;
        }

        if(email.value.toString().length <= 0){
          alert("Bạn chưa nhập email");
          checkemail();
          return false;
        }

        var validName = checkname();

        var validNewPass1 = true;
        var validNewPass2 = true;

        if(password1.value.toString().length > 0 || password2.value.toString().length > 0){
          validNewPass1 = checkNewpassword();
          validNewPass2 = checkNewpassword2();
        }
        var validFullname = checkfullname();
        var validEmail = checkemail();

        if(validName && validNewPass1 && validNewPass2 && validFullname && validEmail){
          return true;
        }
        return false;
      }
      function checkNewpassword(){
        if(!regPassword.test(password1.value)){
          password1error.style.visibility = 'visible';
          password1error.style.height = 'auto';
          return false;
        }
        else{
          password1error.style.visibility = 'hidden';
          password1error.style.height = '0px';
          
          if(password2.value.toString().length > 0){
            if(password2.value.localeCompare(password1.value) == 0){
              password2error1.style.visibility = 'hidden';
              password2error1.style.height = '0px';
              return true;
            }
            else{
              password2error1.innerHTML = "Mật khẩu không khớp";
              password2error1.style.visibility = 'visible';
              password2error1.style.height = 'auto';
              return false;
            }
          }   
          return true;
        }
      }

      function checkname(){
        if(!regUsername.test(username.value)){
          usernameerror.style.visibility = 'visible';
          usernameerror.style.height = 'auto';
          return false;
        }
        else{
          usernameerror.style.visibility = 'hidden';
          usernameerror.style.height = '0px';
          return true;
        }
      }

      function checkpass(){
        if(!regPassword.test(password.value)){
          passworderror.style.visibility = 'visible';
          passworderror.style.height = 'auto';
          return false;
        }
        else{
          passworderror.style.visibility = 'hidden';
          passworderror.style.height = '0px';
          return true;
        }
      }

      function checkemail(){
        if(!regEmail.test(email.value)){
          emailerror.style.visibility = 'visible';
          emailerror.style.height = 'auto';
          return false;
        }
        else{
          emailerror.style.visibility = 'hidden';
          emailerror.style.height = '0px';
          return true;
        }
      }

      function checkfullname(){
        if(!regFullname.test(fullname.value)){
          fullnameerror.style.visibility = 'visible';
          fullnameerror.style.height = 'auto';
          return false;
        }
        else{
          fullnameerror.style.visibility = 'hidden';
          fullnameerror.style.height = '0px';
          return true;
        }
      }

      function checkNewpassword2(){
        if(!regPassword.test(password2.value)){
          //password2error1.innerHTML = errorPasswordDefault;
          password2error1.style.visibility = 'visible';
          password2error1.style.height = 'auto';
          return false;
        }
        else{
          if(password1.value.toString().length > 0){
            if(password2.value.localeCompare(password1.value) == 0){
              password2error1.style.visibility = 'hidden';
              password2error1.style.height = '0px';
              return true;
            }
            else{
              password2error1.innerHTML = "Mật khẩu không khớp";
              password2error1.style.visibility = 'visible';
              password2error1.style.height = 'auto';
              return false;
            }
          }
          else{
            password2error1.style.visibility = 'hidden';
            password2error1.style.height = '0px';
            return true;
          }
        }
      }

    
    </script>
  </body>
</html>