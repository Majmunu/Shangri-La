<?php

$link = mysqli_connect("localhost","root","root");
mysqli_select_db($link, "demo");
mysqli_query($link, "set names 'utf-8'");
$str1 = "select count(id) as count from registered";
$result1 = mysqli_query($link,$str1);
$row1 = mysqli_fetch_row($result1);
$count = $row1[0];
$endpage = ceil($count /3);
if(isset($_GET['page']))
{$page = $_GET['page'];}
else
{$page =1;}
$str = "select * from  registered";
if($page!="")
  {$str .=" limit ".(($page -1)*3).",3";}
$result = mysqli_query($link, $str);
$arr = array();
while($row = mysqli_fetch_array($result,)){$arr[]=$row;}

mysqli_close($link);



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <script>
        function front()
    {
           var page=parseInt("<?php echo $page?>");
           if(page!=1)
           {
            page-=1;
           }
           window.location.href="?page="+page;
    }
    function next()
    {
         var page=parseInt("<?php echo $page;?>");
         var endpage = parseInt("<?php echo $endpage;?>");
         if(page!=endpage)
         {
          page+=1;
         }
           window.location.href="?page="+page;

    }

    function edit(node)
    {
      var id  = node.parentNode.parentNode.cells[0].innerHTML;

      window.location.href="edit.php?editid="+id;
    }
    function del(node)
    {
         var id = node.parentNode.parentNode.cells[0].innerHTML;
         window.location.href="del.php?delid="+id;
    }
    function new0()
    {
      window.location.href="add.php";
    }
        </script>
        <style>
        #biao{margin-top:100px;
          font-size:30px;
          margin-left:50px;
          }
        .q{margin-right:50%;}
        #end{text-align:right;
          margin-right:10%;}

        td{border:1px solid #87CEEB;

      }
        table{
           border:1px solid #87CEEB;
           width:80%;
           height:30%;
           text-align:center;
        }
            #tab{
                width: 80%;
                height: 50%;
                margin-left: 10%;


            }
        </style>
    </head>
    <body>
        <table id="tab">
    <thead>
    <div id=biao>
    <h3 style= text-align:center>会员信息列表</h3>
    </div>
        </thead>
            <tr>
                <td style="background-color: aquamarine"><a href="index.php" style="text-decoration:underline">会员管理</a></td>
                <td rowspan="5">
                    <div style = text-align:right>
   <form action="search.php" method="post" accept-charset="utf-8">
   <p class = q>
   <label>查询：
   <input style = font-size:20px type="text" value="" name="txt">
   <input style = font-size:20px type="submit" value="搜索">
    <input  style = font-size:20px type="button" name="btn" value="添加" onclick="new0()"/>
   </label>
   </p>
   </form>
   </div>

   <table align="center">

       <thead>
           <tr style= background-color:#A9E2F3>


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
       </thead>
       <tbody>

           <?php
           foreach($arr as $key =>$value ){
           ?>
           <tr>
           <td><?php echo $value[0];?></td>
            <td><?php echo $value['lastname'];?></td>
             <td><?php echo $value['firstname'];?></td>
              <td><?php echo $value['DD'];?></td>
               <td><?php echo $value['MM'];?></td>
                <td><?php echo $value['YY'];?></td>


            <td><?php echo $value['nation'];?></td>


            <td><?php echo $value['email'];?></td>


            <td><?php echo $value['phone'];?></td>
             <td><?php echo $value['password'];?></td>


            <td>
           <input style = font-size:20px type="button" name="edit" value="编辑" onclick="edit(this)">

<input style = font-size:20px type="button" name="delete" value="删除" onclick="del(this)">

   </td>




           </tr>
           <?php
           }
           ?>

       </tbody>
   </table>
  <div id=end>
      <a href="">首页</a>
      <a href="javascript:;" onclick="front()">上一页</a>
      <a href="javascript:;" onclick="next()">下一页</a>
      <a href="">末尾</a>
    </div>






    </div>
                </td>
            </tr>
            <tr>
                <td><a href="add.php">添加会员</a></td>
            </tr>
            <tr>
                <td><a href="del.php">删除会员</a></td>
            </tr>
            <tr>
                <td><a href="edit.php">编辑会员</a></td>
            </tr>
            <tr>
                <td><a href="search.php">查找会员</a></td>
            </tr>

        </table>
    </body>
</html>