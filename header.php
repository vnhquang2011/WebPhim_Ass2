<div id="header">
  <div class="container">
    <h1 id="logo"><a href="javascript:void();" title="Xem Phim">Xem phim</a></h1>
    <div id="search">
      <form method="get" action="javascript:void();"><input type="text" autocomplete="off" name="keyword" placeholder="Tên phim hoặc diễn viên cần tìm..." class="keyword"><button type="submit" class="submit"></button></form>
    </div>
    <div id="sign">
<!-- Van modified ↓↓ -->
      <div class="login"><a rel="nofollow" href="javascript:void();" id="log" onclick="login()">Đăng nhập</a>
        <div class="login-form" id="login-form" style="display: none;">
        <form method="post" action="">
          <div>
            <input type="text" placeholder="Tên đăng nhập" class="input username" name="username">
          </div>
          <div>
            <input type="password" placeholder="Mật khẩu" class="input password" name="password">
          </div>
          <div>
            <label class="remember">
              <input type="checkbox" checked="checked" class="checkbox" name="remember"> Remember
            </label>
          <button type="submit" class="submit" name="btn_login">Đăng nhập</button>
          </div>
        </form>
        </div>
      </div>
      <div class="links"><a rel="nofollow" href="register.php">Đăng ký thành viên</a></div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function login() {
    var x = document.getElementById("login-form");
      if (x.style.display === "none") {
          x.style.display = "block";
      } else {
          x.style.display = "none";
      }      
  }
  // document.getElementById("log").onclick.name="logout";
  //document.getElementById("log").style.visibility = 'hidden';
  // } -->
</script>
<?php
include("login.php");
?>
<!-- Van modified ↑↑ -->
<div id="nav">
  <ul class="container menu">
    <li class="home"><a href="index.php" title=""></a></li>
    <?php
      $sql = 'select * from `nav-menu`';
      $query = mysqli_query($link,$sql);
      while($r=mysqli_fetch_assoc($query)){
    ?>
      <li class=""><a><?php echo $r['name']; ?></a>
        <ul class="sub-menu" style="width: 260px; display: none;">
          <?php
            $handle = $r['handle'];
            $sql = 'select * from `'.$handle.'`';
            $query1 = mysqli_query($link,$sql);
            while($r1=mysqli_fetch_assoc($query1)){
          ?>
          <?php
            if ($handle == 'category' or $handle == 'nation') {
              echo '<li class=""><a href="?mod=list&type='.$handle.'&id='.$r1['id'].'">'.$r1['name'].'</a></li>';
            }
            else {
              echo '<li class=""><a href="?mod=list&type='.$handle.'&year='.$r1['year'].'">'.$r1['name'].'</a></li>';
            }
          ?>
          <?php
            }
          ?>
        </ul>
      </li>
    <?php
      }
    ?>
  </ul>
</div>
<div id="nav2">
  <div class="container">
    <h2 class="title">Xem phim online chất lượng cao</h2></div>
</div>
