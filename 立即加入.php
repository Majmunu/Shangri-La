<?php

if(isset($_POST['submit']))
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
echo "location.href='登录.php'";
         echo '</script>';

    }else{
        echo "<script>alert('添加失败！');</script>";
    }
    mysqli_close($link);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>立即加入（二级页面）</title>
</head>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/立即加入.css">
<body style="height: 1000px">
    <div id="header" style="background-color: #f4f5f6">
        <div id="header-n">
            <div id="logo"><img src="images/立即加入logo.png" style="width: 104px;height: 27px;margin: 0"></div>
              <div id="header-r">
                     <a class="login" href="登录.php" style="color: #000000">登录&nbsp;&nbsp; </a> |
					 <a class="login" href="立即加入.php" style="color: #000000">&nbsp;立即加入&nbsp;&nbsp; </a>|
					 <a class="login" href="查找预定.php" style="color: #000000">&nbsp;查找预订 </a> &nbsp;| <a class="login" style="color: #000000">&nbsp;简体中文 </a> &nbsp;| <a class="login" style="color: #000000">&nbsp;CNY</a><a href="账户资料.php?id=<?php echo $username?>" style="color: #000000">用户更改资料</a>
             </div>
      </div>
    </div>
    <div class="liji-register">
        <h3 class="title-regular">加入贵宾金环会</h3>
        <p class="text-regular">加入我们屡获殊荣的忠诚计划，享受专属礼遇与奖励。</p>
    </div><form method="post">
    <div class="register-content">
        <div class="register-form">
            <div class="form-1">
                <div class="appellation">
                <label>称谓*</label>
                <select name="选择称谓" class="appe-opt">
                    <option> 先生</option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                    <option></option>
                </select>
                </div>
                <div class="lastname">
                    <label>姓氏*</label>
                    <input type="text" class="lastname-" name="lastname" value="<?php echo $lastname;?>">
                </div>
                <div class="lastname">
                    <label>名字*</label>
                    <input type="text" class="lastname-" name="firstname" value="<?php echo $firstname;?>">
                </div>
            </div>
            <div class="form-1">
                <div class="birth">
                    <label>出生日期*</label>
                    <input type="text" class="birth-" name="DD" value="<?php echo $DD;?>">

                </div>
                <div class="birth">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" class="birth-" name="MM" value="<?php echo $MM;?>">

                </div>
                <div class="birth">
                    <label>&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" class="birth-" name="YY" value="<?php echo $YY;?>">

                </div>
            </div>
            <div class="form-1">
                <label>国家或地区*</label>
                <input type="text" class="nation" name="nation" value="<?php echo $nation;?>"

            </div>
            <div class="form-1">
                <label>电邮*</label>
                <input type="text" class="email1" name="email" value="<?php echo $email;?>">
            </div>
            <div class="form-1">
                <label>手机号码*</label>
                <input type="text" class="email1" name="phone" value="<?php echo $phone;?>">
            </div>
            <div class="form-1">
            <label>密码*</label>
                <input type="password" class="email1" name="password" value="<?php echo $password;?>">
            </div>
            <div class="form-1">
            <label>重新输入密码*</label>
                <input type="password" class="email1">
            </div>
            <div class="form-1">
                <input type="submit" value="提交" class="submit-form" name="submit">
            </div>
        </div>
    </div></form>
    <div class="footer">
    <div class="links">
        <div class="links-link">
            <div class="link-1">
                <h6>查找或预定</h6>
               <p class="link-p"><a href="我们的目的地.php">我们的目的地</a></p>
				<p class="link-p"><a href="查找预定.php">>查找预定</a</p>
                <p class="link-p">会议与宴会</p>
                <p class="link-p">餐厅与酒吧</p>
            </div>
            <div class="link-1">
                <h6>贵宾金环会</h6>
                <p class="link-p">会员计划概述</p>
                <p class="link-p">加入贵宾金环会</p>
                <p class="link-p">我的账户</p>
                <p class="link-p">尚桌计划</p>
                <p class="link-p">常见问题</p>
            </div>
            <div class="link-1">
                <h6>关于香格里拉</h6>
                <p class="link-p">关于我们</p>
                <p class="link-p">我们的酒店品牌</p>
                <p class="link-p">香格里拉中心</p>
                <p class="link-p">香格里拉公寓</p>
                <p class="link-p">联络我们</p>
            </div>
            <div class="link-1">
                <h6></h6>
                <p class="link-p">投资咨询</p>
                <p class="link-p">职业发展</p>
                <p class="link-p">企业社会责任</p>
                <p class="link-p">新闻稿</p>
            </div>
        </div>
        <div class="app">
            <h6>开启无限精彩</h6>
            <p class="link-p">畅游寰宇，尽在掌中 </p>
            <div class="code">
                <div class="qr"><img src="images/footer_qrcode.png" width="84px" height="84px"></div>
                <div class="iphone"><img src="images/App-Store.png" width="110px" height="30px"></div>
                <div class="google"><img src="images/Google-Play-Icon.png" width="110px" height="30px"></div>
            </div>
            <div class="icon">
                <div class="icon-content"><img src="images/Facebook.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/Instagram.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/Twitter.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/YouTube.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/WeChat.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/Weibo.png" width="20px" height="20px;"></div>
                <div class="icon-content"><img src="images/Youku.png" width="20px" height="20px;"></div>
            </div>
        </div>
    </div>
    <div class="brand-logo">
        <div class="brand-logo-all">
           <div class="brand-logo-content"><img src="images/brand1.png" width="130px" height="60px"></div>
           <div class="brand-logo-content"><img src="images/brand2.png" width="130px" height="60px"></div>
           <div class="brand-logo-content"><img src="images/brand3.png" width="130px" height="60px"></div>
           <div class="brand-logo-content"><img src="images/brand4.png" width="130px" height="60px"></div>
           <div class="brand-logo-content"><img src="images/brand5.png" width="130px" height="60px"></div>
        </div>
    </div>
    <div class="statement">
        隐私条款 | 条款与细则 | 人身与财产安全 | 供应商行为准则
    </div>
    <div class="end">201824430639王琛琛</div>
</div>
</body>
</html>
