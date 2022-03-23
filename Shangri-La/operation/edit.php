<?php

if($_GET['editid'])
{
    $editid = $_GET['editid'];
}
else
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
}
        $link=mysqli_connect("localhost","root","root");
        mysqli_select_db($link,"demo");
        mysqli_query($link,"set names 'utf8'");
        if ($editid!="")
        {
           $str = "select * from registered where id = ".$editid;
           $result = mysqli_query($link,$str);
           $row = mysqli_fetch_array($result);
           $lastname = $row['lastname'];
           $firstname = $row['firstname'];
           $DD = $row['DD'];
           $MM = $row['MM'];
           $YY = $row['YY'];
           $nation = $row['nation'];
            $email = $row['email'];
             $phone = $row['phone'];
              $password = $row['password'];

        }
        if ($_GET['id']!="")
        {
        $id = $_GET['id'];
        if(isset($_POST['sub']))
        {
            $ $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $DD = $_POST['DD'];
    $MM = $_POST['MM'];
    $YY = $_POST['YY'];
    $nation = $_POST['nation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
            $str = "update registered set  lastname = '".$lastname."',firstname = '".$firstname."',DD = '".$DD."',MM = '".$MM."',YY= '".$YY."',nation = '".$nation."',email = '".$email."',phone = '".$phone."',password = '".$password."' where id = ".$id;
            $result = mysqli_query($link,$str);
            if($result)
            {

                echo "<script>window.location.href='index.php';</script>";
            }

        }
        }
       mysqli_close($link);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        #edit
        {

            text-align: center;
            font-size:20px;
        }

        table{border:1px solid #87CEEB;
           width:100%;
           height:100%;
           text-align:center;
       }
        #tab{
                width: 80%;
                height: 100%;
                margin-left: 10%;


            }
       td{border:1px solid #87CEEB;
    </style>
</head>
<body>
<table id="tab">
<thead>
    <div id="edit">
    <form action="edit.php?id=<?php echo $editid;?>" method="post">
        <h1>信息编辑</h1>
</thead>
<tr>
<td colspan="" rowspan="" headers=""><a href="index.php">员工管理</a></td>
</tr>
           <tr>
                <td><a href="add.php">添加员工</a></td>
            </tr>
            <tr>
                <td><a href="del.php">删除员工</a></td>
            </tr>
            <tr>
                <td><a href="edit.php" style="background-color: aquamarine">编辑员工</a></td>
                <td colspan="" rowspan="8" headers="">
     <table>
        <tr style= background-color:#A9E2F3>
    <td>
    <label for="">姓名：</label>
    <input style = font-size:20px type="text" name="name" value="<?php echo $name;?>"/>
    </td>
    </tr>
    <tr>
     <td>
    <label for="">部门：</label>
    <input style = font-size:20px type="text" name="department" value="<?php echo $department;?>"/>
    </td>
    </tr>
    <tr>
     <td>
    <label for="">出生日期：</label>
    <input style = font-size:20px  type="text" name="birth" value="<?php  echo $birth;?>"/>
    </td>
    </tr>
    <tr>
     <td>
    <label>入职日期：</label>
    <input style = font-size:20px type="text" name="entry" value="<?php  echo $entry;?>"/>
    </td>
    </tr>
     <tr><td>
    <input style = font-size:20px type="submit" name="sub" value="修改"/>
    </td>
    </tr>
   </form>

    </table>
</div>
                </td>
</tr>
            <tr>
                <td><a href="search.php">查找员工</a></td>
            </tr>



</table>
</body>
</html>>
