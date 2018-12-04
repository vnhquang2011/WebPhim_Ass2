<?php
  if (!isset($_POST['filter_type'])) {
    if ($_GET['type'] == 'category') {
      echo $cate_id = $_GET['id'];
      echo $sql_filter = "select * from `film` where `category_id` = '$cate_id'";
    }
    elseif ($_GET['type'] == 'nation') {
      echo $nation = $_GET['id'];
      echo $sql_filter = "select * from `film` where `nation_id` = '$nation'";
    }
    elseif ($_GET['type'] == 'single-movie') {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 1 and `year` = '$year'";
    }
    elseif ($_GET['type'] == 'series-movie') {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 2 and `year` = '$year'";
    }
    else {
      echo $year = $_GET['year'];
      echo $sql_filter = "select * from `film` where `type_movie` = 3 and `year` = '$year'";
    }

  }
  else {
    if ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] == '') {
      echo $filter_type = $_POST['filter_type'];
      if ($filter_type == 'filter_id') {
        echo  $sql_filter = "select * from `film` order by `id` desc ";
      }
      elseif ($filter_type == 'filter_view') {
        echo  $sql_filter = "select * from `film` order by `num_view` desc ";
      }
      elseif ($filter_type == 'filter_name_desc') {
        echo  $sql_filter = "select * from `film` order by `name` desc ";
      }
      elseif ($filter_type == 'filter_name_asc') {
        echo  $sql_filter = "select * from `film` order by `name` asc ";
      }
      elseif ($filter_type == 'filter_lenght') {
        echo  $sql_filter = "select * from `film` order by `duration` desc ";
      }
    }
    // type = 1,nation = 0, year = 0
    elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] == '') {
      $filter_type = $_POST['filter_type'];
      $filter_nation = $_POST['filter_nation'];
      if ($filter_type == 'filter_id') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' order by `id` desc";
      }
      elseif ($filter_type == 'filter_view') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' order by `num_view` desc ";
      }
      elseif ($filter_type == 'filter_name_desc') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' order by `name` desc ";
      }
      elseif ($filter_type == 'filter_name_asc') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' order by `name` asc ";
      }
      elseif ($filter_type == 'filter_lenght') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' order by `duration` desc ";
      }
    }
    // type = 1,nation = 1, year = 0
    elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] == '' && $_POST['filter_year'] != '') {
      $filter_type = $_POST['filter_type'];
      $filter_year = $_POST['filter_year'];
      if ($filter_type == 'filter_id') {
        echo  $sql_filter = "select * from `film` where `year` = '$filter_year' order by `id` desc";
      }
      elseif ($filter_type == 'filter_view') {
        echo  $sql_filter = "select * from `film` where `year` = '$filter_year' order by `num_view` desc ";
      }
      elseif ($filter_type == 'filter_name_desc') {
        echo  $sql_filter = "select * from `film` where `year` = '$filter_year' order by `name` desc ";
      }
      elseif ($filter_type == 'filter_name_asc') {
        echo  $sql_filter = "select * from `film` where `year` = '$filter_year' order by `name` asc ";
      }
      elseif ($filter_type == 'filter_lenght') {
        echo  $sql_filter = "select * from `film` where `year` = '$filter_year' order by `duration` desc ";
      }
    }
    // type = 1,nation = 0, year = 1
    elseif ($_POST['filter_type'] != '' && $_POST['filter_nation'] != '' && $_POST['filter_year'] != '') {
      $filter_type = $_POST['filter_type'];
      $filter_nation = $_POST['filter_nation'];
      $filter_year = $_POST['filter_year'];
      if ($filter_type == 'filter_id') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' and `year` = '$filter_year'  order by `id` desc";
      }
      elseif ($filter_type == 'filter_view') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `num_view` desc";
      }
      elseif ($filter_type == 'filter_name_desc') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `name` desc";
      }
      elseif ($filter_type == 'filter_name_asc') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `name` asc";
      }
      elseif ($filter_type == 'filter_lenght') {
        echo  $sql_filter = "select * from `film` where `nation_id` = '$filter_nation' and `year` = '$filter_year' order by `duration` desc";
      }
    }
    // type = 1,nation = 1, year = 1
  }
?>
<div id="content">
  <div class="block" id="page-list">
    <div class="blocktitle breadcrumbs">
      <div class="item">
        <a href="#" title="Xem Phim Nhanh, Xem Phim Online chất lượng cao miễn phí">
          <span>Xem phim</span>
        </a>
      </div>
      <div class="item last-child">
        <span itemprop="title">Phim bộ</span>
      </div>
    </div>
    <div class="filter">
      <form method="post" action="?mod=list&type=<?php echo $_GET['type']?>&id=<?php echo $_GET['id'] ?>">
        <div class="item"><span>Sắp xếp</span>
          <select class="input" name="filter_type">
            <option >-Mặc định-</option>
            <option value="filter_id">Mới nhất</option>
            <option value="filter_name_asc">Tiêu đề phim A-Z</option>
            <option value="filter_name_desc">Tiêu đề phim Z-A</option>
            <option value="filter_view">Lượt xem</option>
            <option value="filter_lenght">Thời lượng dài nhất</option>
          </select>
        </div>
        <div class="item"><span>Quốc gia</span>
          <select class="input" name="filter_nation">
            <option value="">-Tất cả-</option>
            <?php
              $query = mysqli_query($link, 'select * from `nation`');
              while ($r=mysqli_fetch_assoc($query)) {
            ?>
              <option value="<?php echo $r['id'] ?>"><?php echo $r['name'] ?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="item"><span>Năm</span>
          <select class="input" name="filter_year">
            <option value="">-Tất cả-</option>
            <?php
              for ($i=2018; $i >= 2015 ; $i--) {
            ?>
              <option value="<?php echo $i ?>"><?php echo $i ?></option>
            <?php
              }
            ?>
          </select>
        </div>
        <div class="btn1">
          <button type="submit" class="btn" id="locphim">Lọc phim</button>
        </div>
      </form>
    </div>
    <a href="detail.html">
      <div class="blockbody" id="list-movie-update">
        <div class="tab toan-bo">
          <ul class="list-film tab toan-bo">
            <li data-liked="852" data-views="49,875">
              <div class="inner"><a href="detail.html" title="Biệt đội đánh thuê"><img src="images/bddt.jpg"
                    alt="Biệt đội đánh thuê"></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Biệt đội đánh thuê">Biệt đội đánh thuê</a></div>
                  <div class="name2">Revenge Note 2</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="2,718" data-views="664,650">
              <div class="inner"><a href="detail.html" title="Thời Đại Cam Hồng"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thời Đại Cam Hồng">Thời Đại Cam Hồng</a></div>
                  <div class="name2">Age of Legends</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="6,336" data-views="5,423,700">
              <div class="inner"><a href="detail.html" title="Hậu Cung Như Ý Truyện"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Hậu Cung Như Ý Truyện">Hậu Cung Như Ý Truyện</a></div>
                  <div class="name2">Ruyi's Royal Love In The...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="1,766" data-views="387,450">
              <div class="inner"><a href="detail.html" title="Mái Ấm Gia Đình 4"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Mái Ấm Gia Đình 4">Mái Ấm Gia Đình 4</a></div>
                  <div class="name2">Come Home Love: Lo and...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="6,046" data-views="1,263,600">
              <div class="inner"><a href="detail.html" title="Câu Chuyện Khởi Nghiệp"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Câu Chuyện Khởi Nghiệp">Câu Chuyện Khởi
                      Nghiệp</a></div>
                  <div class="name2">Another Era</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="3,968" data-views="102,075">
              <div class="inner"><a href="detail.html" title="Tô Mạt Nhi Truyền Kỳ"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Tô Mạt Nhi Truyền Kỳ">Tô Mạt Nhi Truyền Kỳ</a></div>
                  <div class="name2">The Legend of Sumoer</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="6,846" data-views="2,721,900">
              <div class="inner"><a href="detail.html" title="Đấu Phá Thương Khung (Bản Truyền Hình)"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Đấu Phá Thương Khung (Bản Truyền Hình)">Đấu
                      Phá Thương Khung (Bản...</a></div>
                  <div class="name2">Fights Break Sphere</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="2,916" data-views="90,375">
              <div class="inner"><a href="detail.html" title="Thám Tử Ma"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thám Tử Ma">Thám Tử Ma</a></div>
                  <div class="name2">The Ghost Detective</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="tab phim-le hide">
          <ul class="list-film">
            <li data-liked="3,987" data-views="94,650">
              <div class="inner"><a href="detail.html" title="Hoa Của Quỷ"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Hoa Của Quỷ">Hoa Của Quỷ</a></div>
                  <div class="name2">Gogol: Viy</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="5,054" data-views="83,475">
              <div class="inner"><a href="detail.html" title="Giữ Bóng Tối"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Giữ Bóng Tối">Giữ Bóng Tối</a></div>
                  <div class="name2">Hold the Dark</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="3,439" data-views="1,341,900">
              <div class="inner"><a href="detail.html" title="Người Kiến Và Chiến Binh Ong"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Người Kiến Và Chiến Binh Ong">Người Kiến Và
                      Chiến Binh Ong</a></div>
                  <div class="name2">Ant Man And The Wasp</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="3,938" data-views="209,850">
              <div class="inner"><a href="detail.html" title="Đại Sư Huynh"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Đại Sư Huynh">Đại Sư Huynh</a></div>
                  <div class="name2">Big Brother</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="2,761" data-views="62,775">
              <div class="inner"><a href="detail.html" title="Bộ Giáp Cuồng Phong"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Bộ Giáp Cuồng Phong">Bộ Giáp Cuồng Phong</a></div>
                  <div class="name2">Hurricane Polymar</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="3,132" data-views="67,275">
              <div class="inner"><a href="detail.html" title="Thế Giới Kỳ Ảo"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thế Giới Kỳ Ảo">Thế Giới Kỳ Ảo</a></div>
                  <div class="name2">Animal World</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="2,695" data-views="7,800">
              <div class="inner"><a href="detail.html" title="Giai Điệu Trên Triền Dốc"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Giai Điệu Trên Triền Dốc">Giai Điệu Trên
                      Triền Dốc</a></div>
                  <div class="name2">Kids In The Slope</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="258" data-views="36,150">
              <div class="inner"><a href="detail.html" title="Mặt Quỷ"><img src="images/bddt.jpg" alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Mặt Quỷ">Mặt Quỷ</a></div>
                  <div class="name2">Spy Eyes</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="993" data-views="28,575">
              <div class="inner"><a href="detail.html" title="Con Mắt Thứ Ba"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Con Mắt Thứ Ba">Con Mắt Thứ Ba</a></div>
                  <div class="name2">Mata Batin</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="1,977" data-views="161,700">
              <div class="inner"><a href="detail.html" title="Thử Thách Thần Chết 2: 49 Ngày Cuối Cùng"><img
                    src="images/bddt.jpg" alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thử Thách Thần Chết 2: 49 Ngày Cuối Cùng">Thử
                      Thách Thần Chết 2: 49 Ngày...</a></div>
                  <div class="name2">Along With the Gods: The...</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="1,279" data-views="825,960">
              <div class="inner"><a href="detail.html" title="Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông"><img
                    src="images/bddt.jpg" alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông">Án
                      Mạng Trên Chuyến Tàu Tốc...</a></div>
                  <div class="name2">Murder on the Orient...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="711" data-views="6,655,470">
              <div class="inner"><a href="detail.html" title="Mẹ Kế: Đoạn Kết"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Mẹ Kế: Đoạn Kết">Mẹ Kế: Đoạn Kết</a></div>
                  <div class="name2">Jan Dara: The Finale</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="1,742" data-views="114,525">
              <div class="inner"><a href="detail.html" title="Nàng Thơ Của Quỷ"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Nàng Thơ Của Quỷ">Nàng Thơ Của Quỷ</a></div>
                  <div class="name2">Muse</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="4,683" data-views="283,575">
              <div class="inner"><a href="detail.html" title="Chiến Binh Mexico"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Chiến Binh Mexico">Chiến Binh Mexico</a></div>
                  <div class="name2">Sicario: Day Of The...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="1,108" data-views="40,875">
              <div class="inner"><a href="detail.html" title="Nam Hán Sơn Thành"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Nam Hán Sơn Thành">Nam Hán Sơn Thành</a></div>
                  <div class="name2">The Fortress</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="3,314" data-views="193,575">
              <div class="inner"><a href="detail.html" title="Giải Cứu Người Đẹp 2"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Giải Cứu Người Đẹp 2">Giải Cứu Người Đẹp 2</a></div>
                  <div class="name2">Baaghi 2</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
          </ul>
        </div>
        <div class="tab phim-bo hide">
          <ul class="list-film">
            <li data-liked="1,189" data-views="49,875">
              <div class="inner"><a href="detail.html" title="Biệt đội đánh thuê"><img src="images/bddt.jpg"
                    alt="Biệt đội đánh thuê"></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Biệt đội đánh thuê">Biệt đội đánh thuê</a></div>
                  <div class="name2">Revenge Note 2</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="3,954" data-views="664,650">
              <div class="inner"><a href="detail.html" title="Thời Đại Cam Hồng"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thời Đại Cam Hồng">Thời Đại Cam Hồng</a></div>
                  <div class="name2">Age of Legends</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="5,082" data-views="5,423,700">
              <div class="inner"><a href="detail.html" title="Hậu Cung Như Ý Truyện"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Hậu Cung Như Ý Truyện">Hậu Cung Như Ý Truyện</a></div>
                  <div class="name2">Ruyi's Royal Love In The...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="4,784" data-views="387,450">
              <div class="inner"><a href="detail.html" title="Mái Ấm Gia Đình 4"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Mái Ấm Gia Đình 4">Mái Ấm Gia Đình 4</a></div>
                  <div class="name2">Come Home Love: Lo and...</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="5,701" data-views="1,263,600">
              <div class="inner"><a href="detail.html" title="Câu Chuyện Khởi Nghiệp"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Câu Chuyện Khởi Nghiệp">Câu Chuyện Khởi
                      Nghiệp</a></div>
                  <div class="name2">Another Era</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="5,277" data-views="102,075">
              <div class="inner"><a href="detail.html" title="Tô Mạt Nhi Truyền Kỳ"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Tô Mạt Nhi Truyền Kỳ">Tô Mạt Nhi Truyền Kỳ</a></div>
                  <div class="name2">The Legend of Sumoer</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="5,671" data-views="2,721,900">
              <div class="inner"><a href="detail.html" title="Đấu Phá Thương Khung (Bản Truyền Hình)"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Đấu Phá Thương Khung (Bản Truyền Hình)">Đấu
                      Phá Thương Khung (Bản...</a></div>
                  <div class="name2">Fights Break Sphere</div>
                </div>
                <div class="status">HD Vietsub</div>

              </div>
            </li>
            <li data-liked="5,148" data-views="90,375">
              <div class="inner"><a href="detail.html" title="Thám Tử Ma"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Thám Tử Ma">Thám Tử Ma</a></div>
                  <div class="name2">The Ghost Detective</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="4,508" data-views="38,175">
              <div class="inner"><a href="detail.html" title="Run Rẩy Đi A Bộ 2"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Run Rẩy Đi A Bộ 2">Run Rẩy Đi A Bộ 2</a></div>
                  <div class="name2">Let's Shake It 2</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="3,224" data-views="212,700">
              <div class="inner"><a href="detail.html" title="Điệp Viên Terius"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Điệp Viên Terius">Điệp Viên Terius</a></div>
                  <div class="name2">Terius Phía Sau Tôi...</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="1,573" data-views="274,950">
              <div class="inner"><a href="detail.html" title="Minh Hồng Truyện"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Minh Hồng Truyện">Minh Hồng Truyện</a></div>
                  <div class="name2">Myth Of Sword</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="548" data-views="83,400">
              <div class="inner"><a href="detail.html" title="Niềm Vui Hiểm Ác"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Niềm Vui Hiểm Ác">Niềm Vui Hiểm Ác</a></div>
                  <div class="name2">Devilish Joy</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="2,764" data-views="23,100">
              <div class="inner"><a href="detail.html" title="Hai Mạng Sống, Một Trái Tim"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Hai Mạng Sống, Một Trái Tim">Hai Mạng Sống,
                      Một Trái Tim</a></div>
                  <div class="name2">Two Lives One Heart</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="5,081" data-views="302,925">
              <div class="inner"><a href="detail.html" title="Chờ Tới Khi Khói Mưa Ấm Áp"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Chờ Tới Khi Khói Mưa Ấm Áp">Chờ Tới Khi Khói
                      Mưa Ấm Áp</a></div>
                  <div class="name2">Buried City To Shut All...</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="3,279" data-views="21,375">
              <div class="inner"><a href="detail.html" title="Sức Mạnh Lời Nguyện Cầu"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Sức Mạnh Lời Nguyện Cầu">Sức Mạnh Lời Nguyện
                      Cầu</a></div>
                  <div class="name2">Duay Rang Atitharn</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
            <li data-liked="4,498" data-views="8,635,020">
              <div class="inner"><a href="detail.html" title="Gia Đình Vui Vẻ"><img src="images/bddt.jpg"
                    alt=""></a>
                <div class="info">
                  <div class="name"><a href="detail.html" title="Gia Đình Vui Vẻ">Gia Đình Vui Vẻ</a></div>
                  <div class="name2">Virtues Of Harmony</div>
                </div>
                <div class="status">HD Vietsub</div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </a>
  </div>
</div>
