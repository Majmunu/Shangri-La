<?php
     if(isset($_GET['delid']))
     {
        $delid = $_GET['delid'];
     }
     else
     {
        $delid ="";
     }
     $link=mysqli_connect("localhost","root","root");
        mysqli_select_db($link,"demo");
        mysqli_query($link,"set names 'utf8'");
        if($delid!="")
        {
            $str = "delete from registered where id = ".$delid;
            $result = mysqli_query($link,$str);
            if($result)
            {
                echo "<script>alert('删除成功！');</script>";

                echo "<script>window.location.href='index.php';</script>";
            }
            else
            {
                echo "<script>alert('删除失败！');</script>";
            }
        }
        else
        {
            echo "<script>alert('删除失败！');</script>";
            echo "<script>window.location.href='index.php';</script>";
        }
        mysqli_close($link);
?>