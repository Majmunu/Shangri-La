    <?php
error_reporting(0);
 if ( (($_POST['phone']))!=NULL && (($_POST['password'])!=NULL)) {
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost','root','root');
    mysqli_select_db($conn,'demo');
    $sql = "select * from registered where phone = '".$phone."' and password='".$password."'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($res);
    $id = $row['Id'];
    print_r($row);
    if  ($row['phone']!=$phone) {
         echo '<script language="javascript">';
         echo 'alert("密码或者账号错误！！请重新登录");';
        echo "location.href='登录.php'";
         echo '</script>';
    }
    else if($row['phone']==$phone&&$row['password']!=$password)
    {
         echo '<script language="javascript">';
         echo 'alert("密码或者账号错误！！请重新登录");';
         echo "location.href='登录.php'";
         echo '</script>';

    }
    else if($row['phone']!=$phone&&$row['password']!=$password) {
        echo '<script language="javascript">';
        echo 'alert("密码或者账号错误！！！请重新登录");';
        echo "location.href='登录.php'";
        echo '</script>';
    }

    else if($row['phone']==$phone&&$row['password'] ==$password) {

echo "<script>alert('登陆成功！');</script>";
 echo "<script>window.location.href='index.php?id=$id'</script>";


}
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登录（二级页面）</title>
</head>
<link rel="stylesheet" href="css/login.css">
<body><form method="post">
    <div class="login">
        <div class="login-header">
            登录
        </div>

        <div class="login-number">
            <label>账号</label>
            <input type="text" class="zhanghao" name="phone" value="<?php echo $phone;?>">
        </div>
        <div class="login-number">
            <label>密码</label>
            <input type="text" class="zhanghao" name="password" value="<?php echo $password;?>">
        </div>
        <div class="login-number">

            <input type="submit" class="zhanghao" style="background-color: #ac8642; color: #fff" name="login">
        </div>
    </div>
        </form>
</body>
</html>