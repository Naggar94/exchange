<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <title><?= Yii::$app->params['system_name'] ?></title>

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/plugins/font-awesome/css/font-awesome.min.css']) ?>" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/plugins/simple-line-icons/simple-line-icons.min.css']) ?>" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/plugins/bootstrap/css/bootstrap.min.css']) ?>" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/plugins/uniform/css/uniform.default.css']) ?>" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css']) ?>" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?= Url::to(['web/plugins/global/css/components.min.css']) ?>" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?= Url::to(['web/plugins/global/css/plugins.min.css']) ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?= Url::to(['web/plugins/layouts/layout4/css/layout.min.css']) ?>" rel="stylesheet" type="text/css" />
        <link href="<?= Url::to(['web/plugins/layouts/layout4/css/themes/light.min.css']) ?>" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= Url::to(['web/plugins/layouts/layout4/css/custom.min.css']) ?>" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN CORE PLUGINS -->
        <script src="<?= Url::to(['web/plugins/global/plugins/jquery.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/bootstrap/js/bootstrap.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/js.cookie.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/jquery.blockui.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/uniform/jquery.uniform.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js']) ?>" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?= Url::to(['web/plugins/global/scripts/app.min.js']) ?>" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?= Url::to(['web/plugins/layouts/layout4/scripts/layout.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/layouts/layout4/scripts/demo.min.js']) ?>" type="text/javascript"></script>
        <script src="<?= Url::to(['web/plugins/layouts/global/scripts/quick-sidebar.min.js']) ?>" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo  bg-blue">
                    <a href="#">
                        <img src="<?= Url::to(['web/plugins/layouts/layout2/img/logo-default.png']) ?>" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span> 
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                        
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-extended dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="<?= Url::to(['web/plugins/layouts/layout/img/avatar3_small.jpg']) ?>" />
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->

        <div class="clearfix"> </div>

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-hover-submenu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        
                        <li class="nav-item ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=Url::to(['employee/index']) ?>" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Employees</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=Url::to(['attendance/index']) ?>" class="nav-link nav-toggle">
                                <i class="icon-like"></i>
                                <span class="title">Attendance</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=Url::to(['reports/index']) ?>" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Reports</span>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="<?=Url::to(['settings/index']) ?>" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Settings</span>
                            </a>
                        </li>

                    </ul>
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END CONTENT -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <?= $content ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $this->endPage() ?>
