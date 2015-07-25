<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.html">Dental Clinic</a>
			</div>
			<div class="header-icons">
				<ul>
					<li><a href="#" class="facebook"> </a></li>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="in"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="header-bottom-right">
				<ul>
					<li class="mail"><a href="mailto:info@example.com">admin@youremail.com</a></li>
					<li class="phone"><span> </span></li>
					<li class="num">2460 898 898</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
							<li class="active"><a href="#">TRANG CHỦ</a></li>
							<li><a href="<?php echo 'index.php?r=post/intro' ?>">GIỚI THIỆU</a></li>
							<li><a href="<?php echo 'index.php?r=post/intro' ?>">ĐỘI NGŨ CHUYÊN GIA</a></li>
							<li><a href="<?php echo 'index.php?r=post/equipment' ?>">THIẾT BỊ</a></li>
							<li><a href="<?php echo 'index.php?r=post/care' ?>">CHĂM SÓC SỨC KHỎE</a></li>
							<li><a href="<?php echo 'index.php?r=post/intro' ?>">LIÊN HỆ</a></li>
							<!--<li><a href="contact.html">Contact Us</a></li>-->
						  </ul>
<!--						   <form class="navbar-form navbar-left" role="search">
							<div class="form-group">
							  <input type="text" class="form-control" placeholder="Type your text here...">
							</div>
							<button type="submit" class="btn btn-default searc" aria-label="Left Align">
								<span> </span>
							</button>
						  </form>-->
						</div><!-- /.navbar-collapse -->
					</nav>

			</div>
		</div>
	</div>
<!-- //banner -->

        <div class="container">
            
       
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>
     <div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s"></div>
    <footer class="footer">
        <div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>patients & Visitors</h3>
					<ul>
						<li><a href="#">Find a Doctor</a></li>
						<li><a href="#">Information For patients</a></li>
						<li><a href="#">Information For visitors</a></li>
						<li><a href="#">Pay Hospital Bills In Online</a></li>
						<li><a href="#">Financial Services</a></li>
						<li><a href="#">Our Commitment to</a></li>
						<li><a href="#">Quality Care</a></li>
						<li><a href="#">Events</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>research</h3>
					<ul>
						<li><a href="#">Reaserch Highlights</a></li>
						<li><a href="#">Resources For Professionals</a></li>
						<li><a href="#">Finding Opportunities</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>education & Training</h3>
					<ul>
						<li><a href="#">Patient Health Library</a></li>
						<li><a href="#">Residency & Fellowship</a></li>
						<li><a href="#">Information</a></li>
						<li><a href="#">Nursing Professional</a></li>
						<li><a href="#">Development</a></li>
						<li><a href="#">Professional Training</a></li>
						<li><a href="#">Professional Development</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h3>community</h3>
					<ul>
						<li><a href="#">Community Health & Wellness</a></li>
						<li><a href="#">Community Relations</a></li>
						<li><a href="#">Community Services & Resources</a></li>
						<li><a href="#">Community Reports</a></li>
						<li><a href="#">News & Events</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-grds">
				<ul>
					<li><a href="#">Privacy Policy |</a></li>
					<li><a href="contact.html">Sitemap |</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
				<p>Copyright © 2015 Dental Clinic. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
