<?php 
  require_once("libs/db.php");
  $_SESSION['username']="Van";
  $username = $_SESSION['username'];
  $query="SELECT * FROM user WHERE username= '$username'";

  $result=mysqli_query($link,$query);
  

  if(mysqli_num_rows($result) < 1){
    echo "Username không tồn tại";
  }
  
  $info = mysqli_fetch_array($result);

  $name  = $info['username'];
  $birthday=$info['birthday'];
  $sex = $info['sex'];
  $id=$info['ID'];

 

  if(isset($_POST["button_update"])){
    $username = $_POST["username"];
    $password = $_POST["password1"];
    
    $hash = password_hash($password, PASSWORD_BCRYPT);
    $email = $_POST["email"];
    $fullName = $_POST["fullname"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];
 
    echo $gender;
    $sql = "UPDATE user SET 
              username = '$username',
              password = '$hash',
              email = '$email',
              birthday = '$birthday',
              sex = '$gender'
            WHERE ID = $id;";  
    mysqli_query($link,$sql);                                          
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
        include('header.php');
        ?>
      
      <div id="body-wrap" class="container">
      </div>    

      <h3 style="margin-bottom: 20px; font-size:30px;text-align:center; ">Thông tin khách hàng</h3>

      <div class="form-update">
        <form method="post" id="form-update" name="form-update" class="form-horizontal" action="" role="form">

          <div class="form-group">
            <label class="col-lg-3 control-label">Tài khoản</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" name="username" id="update-username" value="<?php echo htmlentities($name); ?>">
              <label class="notifyerror" style="visibility: hidden; height: 0px" id="usernameerror">Tên tài khoản chỉ bao gồm ký tự a-z, A-Z và số</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Mật khẩu cũ</label>
            <div class="col-lg-7">
              <input type="password" class="form-control" name="password" id="password" value="">
              <label class="notifyerror" style="visibility: hidden; height: 0px" id="passworderror">Mật khẩu phải bao gồm chữ thường, chữ hoa và số, độ dài tối thiểu 8 ký tự</label>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Mật khẩu mới</label>
            <div class="col-lg-7">
              <input type="password" class="form-control" name="password1" id="password1" value="">
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
                <input type="text" class="form-control" name="fullname" id="update-fullname" value="">
                <label class="notifyerror" style="visibility: hidden; height: 0px" id="fullnameerror">Tên chỉ bao gồm các chữ cái</label>  
              </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">Email</label>
                <div class="col-lg-7"><input type="email" class="form-control" name="email" id="update-email">
                <label class="notifyerror" style="visibility: hidden; height: 0px" id="emailerror">Email không đúng định dạng name@domain</label>  
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-lg-3 control-label">Số ĐT</label>
                <div class="col-lg-7">
                  <input type="text" class="form-control" name="phone" id="update-phone">
                  <label class="notifyerror" style="visibility: hidden; height: 0px" id="phoneerror">Số điện thoại gồm 9 chữ số</label>  
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-3 control-label">Ngày sinh</label>
                <div class="col-lg-7">
                  <input type="date" class="form-control" name="birthday" id="birthday" 
                  value="<?php echo $birthday; ?>">
                </div>
            </div>

            <!-- <div class="form-group">
              <label class="col-lg-3 control-label">Ngày sinh</label>
              <div class="col-lg-2">
                <select class="form-control" name="birthdayday" id="update-birthday-day">
                  <option value="">Ngày</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div> -->
            
            <!-- <div class="col-lg-2">
              <select class="form-control" name="birthdaymonth" id="update-birthday-month">
                <option value="">Tháng</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>

              </select>
            </div>
            <div class="col-lg-2">
              <select class="form-control" name="birthdayyear" id="update-birthday-year">
                <option value="">Năm</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
              </select>
            </div> -->

            <!-- </div> -->
            <div class="form-group">
              <label class="col-lg-3 control-label">Giới tính</label>
              <div class="col-lg-7">
                <label class="checkbox-inline">
                  <input type="radio" name="gender" id="update-gender-male" value="male" 
                  <?php echo ($sex=='male')?'checked':'' ?>> Nam</label>
                  <label class="checkbox-inline">
                  <input type="radio" name="gender" id="update-gender-female" value="female"
                  <?php echo ($sex=='female')?'checked':'' ?>> Nữ
                  </label>
              </div>
            </div>

          

            <div class="col-offset-3 col-lg-10">
        <!--       <input type="hidden" name="_fxRef" value="http://www.phimmoi.net/">
              <input type="hidden" name="update[password_md5]" value=""> -->
              <button type="submit" class="btn btn-primary" id="button_update" name="button_update">Cập nhật</button>
            </div>

            <div class="clear"></div>
          </form>
      </div>
    
      <?php 
      include('footer.php');
      ?>

    <!-- <script language="javascript">
      var username = document.getElementById("update-username");
      var password = document.getElementById("password");
      var password1 = document.getElementById("password1");
      var password2 = document.getElementById("password2");
      var fullname = document.getElementById("update-fullname");
      var email = document.getElementById("update-email");
      var phone = document.getElementById("update-phone");
      var button_update = document.getElementById("button_update");
      var update_birthday_day = document.getElementById("update-birthday-day");
      var update_birthday_month = document.getElementById("update-birthday-month");
      var update_birthday_year = document.getElementById("update-birthday-year");

      var usernameerror = document.getElementById("usernameerror");
      var passworderror = document.getElementById("passworderror");
      var password1error =  document.getElementById("password1error");
      var password2error1 =  document.getElementById("password2error1");
      var fullnameerror = document.getElementById("fullnameerror");
      var emailerror =  document.getElementById("emailerror");
      var phoneerror =  document.getElementById("phoneerror");

      var regUsername = /^[A-Za-z0-9]+$/;
      var regFullname = /^[A-Za-z ]+$/;
      var regEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      var regPhone =  /^\d{10}$/;
      var regPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/

      var errorPasswordDefault = (passworderror.innerText || passworderror.textContent);

      username.onchange = function(){
        checkname();
      }

      password.onchange = function(){
        checkpass();
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

      phone.onchange = function(){
        checkphone();
      }

      button_update.onclick = function(){
        if(username.value.toString().length <= 0){
          alert("Bạn chưa nhập tên tài khoản");
          checkname();
          return false;
        }

        if(password.value.toString().length <= 0){
          alert("Bạn chưa nhập mật khẩu");
          checkpass();
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

        if(phone.value.toString().length <= 0){
          alert("Bạn chưa nhập số điện thoại");
          checkphone();
          return false;
        }

        // if(update_birthday_day.value.toString().localeCompare("Ngày") == 0){
        //   alert("Bạn chưa chọn Ngày");
        //   checkbirthday();
        //   return false;
        // }

        // if(update_birthday_month.value.toString().localeCompare("Tháng") == 0){
        //   alert("Bạn chưa chọn Tháng");
        //   checkbirthday();
        //   return false;
        // }

        // if(update_birthday_year.value.toString().localeCompare("Năm") == 0){
        //   alert("Bạn chưa chọn Năm");
        //   checkbirthday();
        //   return false;
        // }

        var validName = checkname();
        var validPass = checkpass();

        var validNewPass1 = true;
        var validNewPass2 = true;

        if(password1.value.toString().length > 0 || password2.value.toString().length > 0){
          validNewPass1 = checkNewpassword();
          validNewPass2 = checkNewpassword2();
        }
        var validFullname = checkfullname();
        var validEmail = checkemail();
        var validPhone = checkphone();
        // var validBirthday = checkbirthday(update_birthday_day.value,update_birthday_month.value,update_birthday_year.value);

        if(validName && validPass && validNewPass1 && validNewPass2 && validFullname && validEmail && validPhone && validBirthday){
          return true;
        }
        return false;
      }

      function checkbirthday(day, month, year){
        var d = new Date(year, month - 1, day); 
        return d && (d.getMonth() + 1) == month;
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

      function checkphone(){
        if(!regPhone.test(phone.value)){
          phoneerror.style.visibility = 'visible';
          phoneerror.style.height = 'auto';
          return false;
        }
        else{
          phoneerror.style.visibility = 'hidden';
          phoneerror.style.height = '0px';
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
          password2error1.innerHTML = errorPasswordDefault;
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

    
    </script> -->

  </body>
</html>