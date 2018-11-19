<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng kí thành viên</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style_watch.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


    <script src="js/watch.js"></script>
</head>

<body>
    <div class="container" id="wrap">
        
        <div id="nav2">Xem Phim Nhanh, Xem Phim Online chất lượng cao miễn phí</div>
        <div id="body_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8" id="content">
                        <div class="container">
                            <div class="row cur-location">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Xem phim</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Đăng kí thành viên
                                        </li>
                                    </ol>
                                </nav>
                            </div>

                        </div>
                        <div class="container" id="signUpForm">
                            <form action="#" method="post">
                                <div class="form-group row">
                                    <label for="username" class="col-3 col-form-label">Tên đăng nhập</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" value="" id="username" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-3 col-form-label">Mật khẩu</label>
                                    <div class="col-9">
                                        <input class="form-control" type="password" value="" id="password" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="rePassword" class="col-3 col-form-label">Nhập lại mật khẩu</label>
                                    <div class="col-9">
                                        <input class="form-control" type="password" value="" id="rePassword" name="rePassword">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-3 col-form-label">Email</label>
                                    <div class="col-9">
                                        <input class="form-control" type="email" value="" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fullName" class="col-3 col-form-label">Họ và tên</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" value="" id="fullName" name="fullName">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="birthday" class="col-3 col-form-label">Ngày sinh</label>
                                    <div class="col-9">
                                        <input class="form-control" type="date" value="" id="birthday" name="birthday">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="gender" class="col-3 col-form-label">Giới tính</label>
                                    <div class="col-9">
                                        <input type="radio" name="gender" value="male"> Male &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gender" value="female"> Female &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="gender" value="other"> Other &nbsp;&nbsp;&nbsp;
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="captcha" class="col-3 col-form-label">Mã xác nhận</label>
                                    <div class="col-6">
                                        <input class="form-control" type="text" value="" id="captcha" name="captcha">
                                    </div>
                                    <div class="col-3">
                                        <img src="images/captcha/captcha1.jpg" alt="captcha" width="90%" height=60%>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-9"></div>
                                    <div class="col-3">
                                        <input class="btn btn-primary" type="submit" value="Đăng ký">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer" footer>footer</div>

    </div>
</body>

</html>