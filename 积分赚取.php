<?php
$link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($link,'demo');
mysqli_query($link,"set names 'utf8'");
$strcount = "select count(Id) as count from pagecontent";        //数据库查询语句
       $result1 = mysqli_query($link,$strcount);
       $row1 = mysqli_fetch_row($result1);           //将结果以数组的形式反馈给result1
       $count = $row1[0];
       $endpage = ceil($count/3);
       if(isset($_GET['page']))
       {
       	$page = $_GET['page'];
       }
       else
       {
       	$page =1;
       }
       $str = "select * from pagecontent";    //查询语句在stu中进行查询
       if($page!="")
       {
       	$str .= " limit ".(($page-1)*3).",3";       //设置数据的条数
       }
       $result = mysqli_query($link,$str);
        $arr = array();
       while($row = mysqli_fetch_array($result))
        {
       	$arr[]=$row;
       }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>积分赚取（三级页面）</title>
<script>
function pageup()
		{
           var page=parseInt("<?php echo $page?>");
           if(page!=1)
           {
           	page-=1;
           }
           window.location.href="?page="+page;
		}
		function pagedown()
		{
         var page=parseInt("<?php echo $page;?>");
         var endpage = parseInt("<?php echo $endpage;?>");
         if(page!=endpage)
         {
         	page+=1;
         }
           window.location.href="?page="+page;

		}
</script>
</head>
<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/积分赚取.css">
<body style="height: 1000px">
	<div id="header">
		<div id="header-n">

			<div id="logo"><img src="images/logo.png" style="width: 180px;height: 19px;margin: 0"></div>
	          <div id="header-r">
			       <a class="login" href="登录.php" style="color: #000000">登录&nbsp;&nbsp; </a> |
					 <a class="login" href="立即加入.php" style="color: #000000">&nbsp;立即加入&nbsp;&nbsp; </a>|
					 <a class="login" href="查找预定.php" style="color: #000000">&nbsp;查找预订 </a> &nbsp;| <a class="login" style="color: #000000">&nbsp;简体中文 </a> &nbsp;| <a class="login" style="color: #000000">&nbsp;CNY</a><a href="账户资料.php?id=<?php echo $username?>" style="color: #000000">用户更改资料</a>
		     </div>
	  </div>
	</div>
	<div id="menu">
		<div id="menu-font">
		    <ul id="menu-u">
				<li><a href="会员权益.php">会员权益</a></li>
		        <li><a href="积分兑换.php">积分兑换</a></li>
                <li><a href="积分赚取.php">积分赚取</a></li>
                <li><a href="优惠礼遇.php">优惠</a></li>
                <li><a href="立即预定.php">立即预定</a></li>
                <li>合作伙伴</li>
			</ul>
		</div>
	</div>
	<div class="bread-zhuanqu">
		<div class="crubs">
		<span style="color: #ac8642"><a href="index.php">首页> </a> </span>
			<span>积分赚取</span>
		</div>
	</div>
<div class="section-1" style="height:650px;border:0px solid #000;">
	<div class="section-title">
		<p>赚取贵宾金环会奖励积分</p>
	</div>

	<div class="slick-list" style="width:1200px;border:0px solid #000;float:left;">
	<?php
	foreach ($arr as $key => $value)
	 {
	?>
		<div class="slick-list-box" style="float:left;">
			<div class="slick-list-box-card" style="">
		        <div class="card-image"><img src="images/<?php echo $value['img']?>" width="338px" height="169px"></div>
				<div class="card-title"><p><?php echo $value['caption']?></p></div>
				<div class="card-txt"><?php echo $value['content']?></div>
				<div class="card-button-1">
					<form>
						<input type="button" value="立即查看" class="card-button">
					</form>
				</div>
			</div>
			</div>
			<?php
         }
       ?>
</div>
<input type="button" class="card-button" onclick="pageup()" value="上一页" style="margin-left: 600px;">
<input type="button" class="card-button" onclick="pagedown()" value="下一页">

</div>
<div class="footer" style="position: relative;top: 120px;float:left;">
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
</html