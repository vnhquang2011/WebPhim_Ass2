<?php
    session_start();
?>

<?php
    require_once("libs/db.php");
    if(isset($_POST["btn_login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
            
        $username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {?><script>
			alert("username và password bạn không được để trống!")
            </script>
            <?php
        }
        else{
			$sql = "SELECT * FROM user WHERE username = '$username'";
            $result = mysqli_query($link,$sql);
            if(!$result || (mysqli_num_rows($result) < 1)){?>
                <script>
                    alert("Username không đúng");
                </script> 
            <?php
            }
            $dbarray = mysqli_fetch_array($result); 
            if(password_verify($password,$dbarray["password"])){
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                // phân quyền
                if($dbarray['usertype'] == 99){
                    header('Location:admin/index.php');
                }
                else{
                    //member
                    //header('Location:index.php');
                    ?>
                    <script>
                        document.getElementById("log").onclick= function logout() {
                            //alert("hello");
                            document.getElementById("log").text ="Đăng xuất";
                        }
                    </script>
                    <?php
                }
            }
            else{
                echo " Fail";
                // echo "<script>
                //     alert('Password failure');
                // </script>";
            }
		}
    }
?>