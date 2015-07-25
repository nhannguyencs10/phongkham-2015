<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

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
    <div  id = "wrapper">
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo 'index.php?' ?>"><i class="fa fa-fw fa-dashboard"></i>Trang Chủ</a>
                    </li>
                    
<!--                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>-->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Bài Viết <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo 'index.php?r=post'; ?>">Tất Cả Bài Viết</a>
                            </li>
                            <li>
                                <a href="<?php echo 'index.php?r=post/create'; ?>">Thêm Bài Viết</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> Bác Sĩ/Chuyên Gia <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo 'index.php?r=doctor'; ?>">Bác Sĩ/Chuyên Gia</a>
                            </li>
                            <li>
                                <a href="<?php echo 'index.php?r=doctor/create'; ?>">Thêm Bác Sĩ/Chuyên Gia</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i> Chuyên Khoa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo 'index.php?r=specialist'; ?>">Chuyên Khoa</a>
                            </li>
                            <li>
                                <a href="<?php echo 'index.php?r=specialist/create'; ?>">Thêm Chuyên Khoa</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#benhchuyenkhoa"><i class="fa fa-fw fa-arrows-v"></i> Bệnh Chuyên Khoa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="benhchuyenkhoa" class="collapse">
                            <li>
                                <a href="<?php echo 'index.php?r=specialist-sick'; ?>">Bệnh Chuyên Khoa</a>
                            </li>
                            <li>
                                <a href="<?php echo 'index.php?r=specialist-sick/create'; ?>">Thêm Bệnh Chuyên Khoa</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#postbenhchuyenkhoa"><i class="fa fa-fw fa-arrows-v"></i>Bài Viết Bệnh Chuyên Khoa <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="postbenhchuyenkhoa" class="collapse">
                            <li>
                                <a href="<?php echo 'index.php?r=post-sick'; ?>">Bài Viết Bệnh Chuyên Khoa</a>
                            </li>
                            <li>
                                <a href="<?php echo 'index.php?r=post-sick/create'; ?>">Thêm Bài Viết Bệnh Chuyên Khoa</a>
                            </li>
                        </ul>
                    </li>
<!--                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div  id = "page-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
