<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post</title>

	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="asset/css/local.css" />

	<script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

	<style>
		img {
			filter: gray;
			/* IE6-9 */
			-webkit-filter: grayscale(1);
			/* Google Chrome, Safari 6+ & Opera 15+ */
			-webkit-box-shadow: 0px 2px 6px 2px rgba(0, 0, 0, 0.75);
			-moz-box-shadow: 0px 2px 6px 2px rgba(0, 0, 0, 0.75);
			box-shadow: 0px 2px 6px 2px rgba(0, 0, 0, 0.75);
			margin-bottom: 20px;
		}

		img:hover {
			filter: none;
			/* IE6-9 */
			-webkit-filter: grayscale(0);
			/* Google Chrome, Safari 6+ & Opera 15+ */
		}

		div {
			padding-bottom: 30px;
		}
        .form-control{
            color: black;
        }
        .title{
            
            background-color: #2a9fd6;
            padding: 10px 30px;
            border-radius: 10px;
            width: 500px;
            margin: auto;
        }
        
	</style>
</head>

<body>

	<?php
        require('libs/db.php');
    ?>
		<div id="wrapper">
        <?php
            include("common.php");
        ?>
            
            <div class="container" id="post_film" style="padding: 0 15%">
                <div class="row text-center" style="margin: 20px 0px;">
                    <h2 class="title">Thêm Phim</h2>
                </div>
                <div>
                    <label for="ID-film" class="col-md-2">
                        ID phim:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="ID-film" value="<?php echo " auto increase
                            " ?>">
                    </div>
                </div>
                <div>
                    <label for="film-name" class="col-md-2">
                        Tên phim:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name">
                    </div>

                </div>
                <div>
                    <label for="film-name2" class="col-md-2">
                        Tên phim 2:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="film-name2">
                    </div>
                </div>
                <div>
                    <label for="status" class="col-md-2">
                        Trạng thái:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="status">
                    </div>
                </div>
                <div>
                    <label for="director" class="col-md-2">
                        Đạo diễn:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="director">
                    </div>
                </div>
                <div>
                    <label for="actor" class="col-md-2">
                        Diễn viên:
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="actor">
                    </div>
                </div>
                <div>
                    <label for="catagory" class="col-md-2">
                        Thể loại:
                    </label>
                    <div class="col-md-10">
                        <select id="category" style="color: black">
                            <?php 
                                $sql = "SELECT * FROM category";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No catagory";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="type" class="col-md-2">
                        Type-movie: 
                    </label>
                    <div class="col-md-10">
                        <select id="type" style="color: black">
                            <?php 
                                $sql = "SELECT * FROM type_movie";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="category" class="col-md-2">
                        Quốc gia: 
                    </label>
                    <div class="col-md-10">
                        <select id="category" style="color: black">
                            <?php 
                                $sql = "SELECT * FROM nation";
                                $result = mysqli_query($link, $sql);

                                if (mysqli_num_rows($result) > 0) { 
                                    while($row = mysqli_fetch_assoc($result)) { ?>
                                    <option value="<?php echo $row["id"];?>">
                                        <?php echo $row["name"];?>
                                    </option>
                            <?php 
                                    }
                                }  
                                else {
                                    echo "No nation";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="year" class="col-md-2">
                        Năm phát hành: 
                    </label>
                    <div class="col-md-9">
                        <select name="year" id="year" style="color: black">
                            <option value="2015">2015</option>
                            <option value="2015">2016</option>
                            <option value="2015">2017</option>
                            <option value="2015">2018</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="image" class="col-md-2">
                    Link ảnh: 
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="image" >
                        <p class="help-block">
                            Ví dụ: /image/film/cuoc-chien-vo-cuc.jpg
                        </p>
                    </div>
                </div>
                <div>
                    <label for="decription" class="col-md-2">
                    Mô tả phim: 
                    </label>
                    <div class="col-md-9" style="color: black">
                        <textarea name="decription" id="decription" cols="82" rows="10"></textarea>
                        
                    </div>
                
                </div>
                <div>
                    <label for="duration" class="col-md-2">
                    Thời lượng (phút):  
                    </label>
                    <div class="col-md-9">
                        <input type="number" class="form-control" id="duration" >
                    </div>
                </div>
                <div>
                    <label for="author" class="col-md-2">
                    Tác giả: 
                    </label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="author" >
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <input class="btn btn-primary" type="submit" value="Post">
                    </div>
                </div>

            </div>
        </div>

</body>

</html>