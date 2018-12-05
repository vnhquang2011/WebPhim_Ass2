

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dark Admin</title>

    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/local.css" />

    <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>   

    <style>
        div {
            padding-bottom:20px;
        }
        .form-control{
            color: black;
        }
    </style>
</head>
<body>
<?php
    require('libs/db.php');

    if(isset($_GET["id"])){
        $userID = $_GET['id'];
    }
    $sql = "SELECT * FROM user WHERE id = $userID";
    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) == 0) { 
        echo "No required user";
    } else {
        $row = mysqli_fetch_assoc($result);?>
        
    <div id="wrapper">
        <?php
            include("common.php");
        ?>
        <div id="add-user">
            <div class="row text-center">
                <h2>Chỉnh sửa User</h2>
            </div>
            <div>
                <label for="firstname" class="col-md-2">
                    Tên đăng nhập:
                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="firstname" value="<?php echo $row["username"] ?>">
                </div>
            </div>        
            <div>
                <label for="password" class="col-md-2">
                    Mật khẩu:
                </label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="password" value="<?php echo $row["password"] ?>">
                </div>
                
            </div>
            <div>
                <label for="email" class="col-md-2">
                    Email address:
                </label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" value="<?php echo $row["email"] ?>">
                    <p class="help-block">
                        Ví dụ: yourname@domain.com
                    </p>
                </div>
            </div>
            <div>
                <label for="fullname" class="col-md-2">
                    Họ và tên: 
                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="fullname" >
                </div>
            </div>
            <div>
                <label for="birthday" class="col-md-2">Ngày sinh:</label>
                <div class="col-md-9">
                    <input type="date" value="" id="birthday" name="birthday">
                </div>
            </div>
            <div>
                <label for="sex" class="col-md-2">
                    Giới tính:
                </label>
                <div class="col-md-10">
                    <label class="radio">
                        <input type="radio" name="sex" id="sex" value="male" <?php if($row["sex"] == "male"){echo "checked";} ?>>
                        Male
                    </label>
                    <label class="radio">
                        <input type="radio" name="sex" id="sex" value="female" <?php if($row["sex"] == "female"){echo "checked";} ?>>
                        Female
                    </label>
                    <label class="radio">
                        <input type="radio" name="sex" id="sex" value="other"<?php if($row["sex"] == "other"){echo "checked";} ?>>
                        Other
                    </label>
                </div>             
            </div>
            
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input class="btn btn-primary" type="submit" value="Lưu và hoàn tất">
                </div>
            </div>
            
        </div>  
    </div>

    <?php }
    mysqli_close($link);
?>

</body>
</html>

        
    


