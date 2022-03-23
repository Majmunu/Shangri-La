
<?php
if(isset($_POST['sub']))
{
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $DD = $_POST['DD'];
    $MM = $_POST['MM'];
    $YY = $_POST['YY'];
    $nation = $_POST['nation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $link = mysqli_connect("localhost","root","root");
    mysqli_select_db($link,"demo");
    $strsql = "insert into registered (lastname,firstname,DD,MM,YY,nation,email,phone,password) values ('".$lastname."','".$firstname."','".$DD."','".$MM."','".$YY."','".$nation."','".$email."','".$phone."','".$password."')";
    $result = mysqli_query($link, $strsql);
    if($result)
    {
        echo "<script>alert('添加成功！');</script>";
         echo '<script language="javascript">';
echo "location.href='index.php'";
         echo '</script>';

    }else{
        echo "<script>alert('添加失败！');</script>";
    }
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
        #add
        {

            text-align: center;
            font-size:20px;
        }
        .add input
        {
            margin:10px;
        }
        table{border:1px solid #87CEEB;
           text-align:center;
           width:100%;
           height:100%;
       }
       td{border:1px solid #87CEEB;}
        #tab{
                width: 80%;
                height: 50%;
                margin-left: 10%;


            }
    </style>
    <title></title>
</head>
<body>
<table id="tab">
<thead>
    <tr><h1 style=text-align:center>信息添加</h1></tr>
</thead>
<tr>
    <td colspan="" rowspan="" headers="">会员管理</td>
</tr>
<tr>
    <td colspan="" rowspan="" headers="" style="background-color: aquamarine">添加会员</td>
    <td colspan="" rowspan="8" headers="">
      <div id="add">
  <form action="" method="post">

  <table>
        <tr style= background-color:#A9E2F3>

  <td>
      <label for="">姓：</label>
      <input type="text" name="lastname" value="<?php echo $lastname;?>"/>
      </td>
      <tr>
      <td>
       <label for="">名：</label>
        <input type="text" name="firstname" value="<?php echo $lastname;?>"/>
        </td>
        </tr>
        <tr>
        <td>
        <label for="">DD：</label>
        <input type="text" name="DD" value="<?php echo $DD;?>"/>
        </td>
        </tr>
        <tr>
        <td>
        <label for="">MM：</label>
        <input type="text" name="MM" value="<?php echo $MM;?>"/>
        </td>
        </tr>
        <tr>
      <td>
       <label for="">YY：</label>
        <input type="text" name="YY" value="<?php echo $YY;?>"/>
        </td>
        </tr>
        <tr>
      <td>
       <label for="">国家：</label>
        <input type="text" name="nation" value="<?php echo $nation;?>"/>
        </td>
        </tr>
        <tr>
      <td>
       <label for="">电邮：</label>
        <input type="text" name="email" value="<?php echo $email;?>"/>
        </td>
        </tr>
        <tr>
      <td>
       <label for="">电话：</label>
        <input type="text" name="phone" value="<?php echo $phone;?>"/>
        </td>
        </tr>
        <tr>
      <td>
       <label for="">密码：</label>
        <input type="text" name="password" value="<?php echo $password;?>"/>
        </td>
        </tr>
        </tr>
        <tr>
        <td>
        <input type="submit" name="sub" value="提交" />
        </td>
        </tr>
        </table>

  </form>
  </div>
    </td>
</tr>
<tr>
    <td colspan="" rowspan="" headers="">删除会员</td>
</tr>
<tr>
    <td colspan="" rowspan="" headers="">编辑会员</td>
</tr>
<tr>
    <td colspan="" rowspan="" headers="">查找会员</td>
</tr>

  </table>
</body>
</html>