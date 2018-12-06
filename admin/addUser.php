
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>

    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="asset/css/local.css" />

    <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>   

    <style>
        div {
            padding-bottom:20px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <?php
            include("common.php");
        ?>
        <div id="add-user">
            <div class="row text-center">
                <h2>Thêm User</h2>
            </div>
            <div>
                <label for="firstname" class="col-md-2">
                    Tên đăng nhập:
                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="firstname" >
                </div>
            </div>        
            <div>
                <label for="password" class="col-md-2">
                    Mật khẩu:
                </label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="password" >
                </div>
                
            </div>
            <div>
                <label for="re-password" class="col-md-2">
                    Nhập lại mật khẩu:
                </label>
                <div class="col-md-9">
                    <input type="password" class="form-control" id="re-password" >
                </div>
            </div>
            <div>
                <label for="email" class="col-md-2">
                    Email address:
                </label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email" >
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
                        <input type="radio" name="sex" id="sex" value="male" checked>
                        Male
                    </label>
                    <label class="radio">
                        <input type="radio" name="sex" id="sex" value="female">
                        Female
                    </label>
                    <label class="radio">
                        <input type="radio" name="sex" id="sex" value="female">
                        Other
                    </label>
                </div>             
            </div>
            <div>
                <label for="captcha" class="col-md-2">Mã xác nhận:</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" value="" id="captcha" name="captcha">
                </div>
                <div class="col-md-3">
                    <img src="asset/image/captcha/captcha1.jpg" alt="captcha" width="30%" height=30%>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <input class="btn btn-primary" type="submit" value="Đăng ký">
                </div>
            </div>
            
        </div>  
    </div>

</body>
</html>
