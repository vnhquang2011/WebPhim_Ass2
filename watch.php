<?php
  if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
  if (isset($_GET['episode'])) $episode = $_GET['episode'];
  $sql = "select * from `episode` where `film_id` = '$film_id' and `id` = '$episode'";
  $query= mysqli_query($link, $sql);
  $r=mysqli_fetch_assoc($query);
?>
<div id="content">
    <div  id="movie-display">
        <div class="row cur-location">
            <nav id="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Xem phim</a>
                    </li>
                    /
                    <li class="breadcrumb-item">
                      <?php
                        if (isset($_GET['film_id'])) $film_id = $_GET['film_id'];
                        $sql = "select * from `film` where `id` = '$film_id'";
                        $query= mysqli_query($link, $sql);
                        $r1=mysqli_fetch_assoc($query);
                        $type_movie = $r1['type_movie'];
                        $sql = "select * from `type-movie` where `id` = '$type_movie'";
                        $query= mysqli_query($link, $sql);
                        $r2=mysqli_fetch_assoc($query);
                      ?>
                      <a href="?mod=list&type=<?php echo $r2['handle'] ?>&year=2018"><?php echo $r2['name'] ?></a>
                    </li>
                    /
                    <?php
                    $sql = "select * from `film` where `id` = '$film_id'";
                    $query= mysqli_query($link, $sql);
                    $r3=mysqli_fetch_assoc($query);
                    ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $r3['name'] ?></li>
                </ol>
            </nav>
        </div>
        <div class="row body_video">
            <div class="col-sm-12">
                <video width="100%" height="100%" controls>
                    <source src="images/video/shortFilm.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="share">
                <div class="row">
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/plus.png" alt="Share" width="20px"> Thêm vào hộp
                    </button>
                    <button type="button" class="btn btn-primary share_fb">
                        <img src="images/icons/facebook_square_lightblue-512.png" alt="Share" width="20px"> Share
                    </button>
                    <button type="button" class="btn btn-secondary">AutoNext: On</button>
                    <button type="button" class="btn btn-secondary">Phóng to</button>
                    <button type="button" class="btn btn-secondary">
                        <img src="images/icons/lamp.png" alt="Share" width="20px"> Tắt đèn
                    </button>
                </div>

            </div>
        </div>
    </div>
    <div  id="detail">
        <div class="row">
            <p>Bạn đang xem phim
                <a href="#"><?php echo $r['name'] ?></a> online chất lượng cao miễn phí tại server phim GD 1.</p>
            <fieldset>
                <legend>Hướng khắc phục lỗi xem phim</legend>
                <ul>
                    <li>Sử dụng DNS 8.8.8.8, 8.8.4.4 hoặc 208.67.222.222, 208.67.220.220 để xem phim nhanh
                        hơn.
                    </li>
                    <li>Chất lượng phim mặc định chiếu là 360. Để xem phim chất lượng cao hơn xin vui lòng
                        chọn trên player.</li>
                    <li>Xem phim nhanh hơn với trình duyệt Google Chrome, Cốc Cốc</li>
                    <li>Nếu bạn không xem được phim vui lòng nhấn CTRL + F5 hoặc CMD + R trên MAC vài lần.</li>
                </ul>
            </fieldset>
        </div>

    </div>
    <div  id="server-list">
        <div class="row">
            <div class="col-sm-3">
                Server
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <a href="#" title="Server GD1 - 01" class="button btn-secondary seat">01</a>
                    <a href="#" title="Server GD1 - 02" class="button btn-secondary seat">02</a>
                    <a href="#" title="Server GD1 - 03" class="button btn-secondary seat">03</a>
                    <a href="#" title="Server GD1 - 04" class="button btn-secondary seat">04</a>
                    <a href="#" title="Server GD1 - 05" class="button btn-secondary seat">05</a>
                    <a href="#" title="Server GD1 - 06" class="button btn-secondary seat">06</a>
                    <a href="#" title="Server GD1 - 07" class="button btn-secondary seat">07</a>
                    <a href="#" title="Server GD1 - 08" class="button btn-secondary seat">08</a>
                    <a href="#" title="Server GD1 - 09" class="button btn-secondary seat">09</a>
                    <a href="#" title="Server GD1 - 10" class="button btn-secondary seat">10</a>
                    <a href="#" title="Server GD1 - 11" class="button btn-secondary seat">11</a>
                    <a href="#" title="Server GD1 - 12" class="button btn-secondary seat">12</a>
                    <a href="#" title="Server GD1 - 13" class="button btn-secondary seat">13</a>
                    <a href="#" title="Server GD1 - 14" class="button btn-secondary seat">14</a>
                    <a href="#" title="Server GD1 - 15" class="button btn-secondary seat">15</a>
                    <a href="#" title="Server GD1 - 16" class="button btn-secondary seat">16</a>
                    <a href="#" title="Server GD1 - 17" class="button btn-secondary seat">17</a>
                    <a href="#" title="Server GD1 - 18" class="button btn-secondary seat">18</a>
                    <a href="#" title="Server GD1 - 19" class="button btn-secondary seat">19</a>
                    <a href="#" title="Server GD1 - 20" class="button btn-secondary seat">20</a>
                    <a href="#" title="Server GD1 - 21" class="button btn-secondary seat">21</a>
                    <a href="#" title="Server GD1 - 22" class="button btn-secondary seat">22</a>
                    <a href="#" title="Server GD1 - 23" class="button btn-secondary seat">23</a>
                    <a href="#" title="Server GD1 - 24" class="button btn-secondary seat">24</a>
                    <a href="#" title="Server GD1 - 25" class="button btn-secondary seat">25</a>
                    <a href="#" title="Server GD1 - 26" class="button btn-secondary seat">26</a>
                    <a href="#" title="Server GD1 - 27" class="button btn-secondary seat">27</a>
                    <a href="#" title="Server GD1 - 28" class="button btn-secondary seat">28</a>
                    <a href="#" title="Server GD1 - 29" class="button btn-secondary seat">29</a>
                </div>
            </div>
        </div>
    </div>
</div>
