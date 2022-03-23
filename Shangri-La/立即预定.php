<?php
$link = mysqli_connect("localhost", "root", "root");
mysqli_select_db($link,'demo');
mysqli_query($link,"set names 'utf8'");
$str1 = "select * from wineshop";
$result = mysqli_query($link,$str1);
$arr = array();
while($row = mysqli_fetch_array($result))
{
	$arr[] = $row;

if($_POST['sub'])
{
$txt = $_POST['txt'];
$strsearch = "select * from wineshop where caption like '%".$txt."%'";
$result2 = mysqli_query($link,$strsearch);
$arr = array();
while($row = mysqli_fetch_array($result2))
{
	$arr[] = $row;
}
}
}
mysqli_close($link);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>预定(二级页面）</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/积分赚取.css">
<link rel="stylesheet" href="css/优惠礼遇.css">
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
		<span style="color: #ac8642"><a href="index.php">首页></a> </span>
			<span>立即预定</span>
		</div>
	</div>
	<div class="search-offer">
	<form action="" method="post">
		<p>搜索优惠
		<input type="text" class="input-text" placeholder="输入酒店、城市或目的地" name="txt">
			<input type="submit" class="input-submit" value="搜索" name="sub">
		</p>
		</form>
	</div>
	<div class="sort">
		排序
	</div>
	<div class="slick-list">
	 <?php
            foreach ($arr as $key => $value)
            {
            	# code..
		   ?>
		<div class="slick-list-box">

			<div class="slick-list-box-card" style="float:left;">
		        <div class="card-image"><img src="images/<?php echo $value['img']?>" width="338px" height="169px"></div>
				<div class="card-title"><p><?php echo $value['caption']?></p></div>
				<div class="card-txt" style="font-size: 12px"><?php echo $value['content']?></div>
				<div class="card-button-1">
					<form>
						<input type="button" value="立即预定" class="card-button">
					</form>
				</div>
			</div>

		</div>
<?php
		}
			?>
	</div>


	<div class="footer" style="margin-top: 200px">
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
