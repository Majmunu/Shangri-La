<?php

     if(isset($_POST['txt']))
     {
        $txt = $_POST['txt'];
    }
        $link=mysqli_connect("localhost","root","root");
        mysqli_select_db($link,"demo");
        mysqli_query($link,"set names 'utf8'");
        $str = "select * from registered where lastname like '%".$txt."%'";
        $result=mysqli_query($link,$str);  //查询结果反馈给result
        $arr = array();
        while ($row = mysqlI_fetch_array($result))
        {
            $arr[] = $row;
        }

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
    #all{}
        table
        {
             ;
           width:80%;
           height:20%;
           text-align:center;
           margin:auto;
            margin-top: 30px;
           font-size: 20px;
            border-collapse: collapse;

        }
        th
        {
            background-color:#E1F5A9;
        }
        td
        {
            border: 1px solid  #E1F5A9;
            background-color:#A9E2F3
        }

    </style>
</head>
<body>
    <div id=all>
        <h1 style=text-align:center>员工信息列表</h1>
      </div>
<table >
       <tr>
            <th>ID</th>
               <th>姓</th>
               <th>名</th>
               <th>日</th>
               <th>月</th>
               <th>年</th>
               <th>国家</th>
               <th>电邮</th>
               <th>电话</th>
               <th>密码</th>
       </tr>
       <?php
       foreach($arr as $key => $value)
       {
       ?>
         <tr>
            <td><?php echo $value[0];?></td>
            <td><?php echo $value[1];?></td>
            <td><?php echo $value[2];?></td>
            <td><?php echo $value[3];?></td>
            <td><?php echo $value[4];?></td>
            <td><?php echo $value[5];?></td>
             <td><?php echo $value[6];?></td>
              <td><?php echo $value[7];?></td>
               <td><?php echo $value[8];?></td>
                <td><?php echo $value[9];?></td>
       </tr>
       <?php }?>
</table>

</body>
</html>