<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>
    <!-- Basic need -->
    <title>دنیای فیلم و سریال</title>
    <link rel="icon" href="<?php $this->asset('image/imdb_logo.png') ?>" type="image/x-icon">
    <meta name="description" content="فیلم و سریال از بهترین سایت دانلود فیلم بهمراه جدیدترین فیلم های ایرانی  imdb">
    <meta name="keywords"
          content="پخش تریلر فیلم,فیلم,season,video, movie, film,online,تماشای آنلاین,فیل ,,فیلم های کمدی,جدیدترین فیلم ها,فیلم های جدید,بهترین فیلم,فیلم جدید,سریا,">
    <meta name="author" content="TEAM IMDB">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">
    <!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">
    
    <link rel="stylesheet" href="<?php $this->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/plugins.css') ?>">
    <link rel="stylesheet" href="<?php $this->asset('css/header.css') ?>">
    <script src="<?php $this->asset('js/jquery.js') ?>"></script>
    <script src="<?php $this->asset('js/plugins.js') ?>"></script>
    <script src="<?php $this->asset('js/plugins2.js') ?>"></script>
    <script src="<?php $this->asset('js/custom.js') ?>"></script>

</head>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="<?php $this->asset('image/logo.png') ?>" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!-- BEGIN | Header -->
<header class="ht-header">
    <div class="container">
        <nav class="navbar navbar-default navbar-custom">
            <div style="direction: rtl;background-color: black;"
                 class="MuiPaper-root MuiAppBar-root MuiAppBar-positionStatic MuiAppBar-colorPrimary jss2 MuiPaper-elevation4">
                <div class="MuiToolbar-root MuiToolbar-regular MuiToolbar-gutters">
                    <a class="jss17">
                        <button
                                class="MuiButtonBase-root MuiIconButton-root jss14 MuiIconButton-colorInherit MuiIconButton-edgeStart"
                                tabindex="0" type="button" aria-label="open drawer">
							<span class="MuiIconButton-label">
								<img src="<?php $this->asset('image/imdb_logo.png') ?>">
							</span>
                            <span class="MuiTouchRipple-root"></span>
                        </button>
                    </a>
                    <div class="jss8">
                        <div>
                            <!-- <a class="jss11">دسته بندی ها </a> -->
                            <a class="jss11">فیلم</a>
                            <!-- <a class="jss11">سریال</a> -->
                            <a class="jss11">بازیگران</a>
                            <a class="jss11">درباره ما </a>
                        </div>
                    </div>
                    <!-- top search form -->
                    <div class="top-search" style="margin-top: 10px; margin-right: 50px;" >
                        <a class="jss17" style="margin-right: 15px;">
                            <button
                                    class="MuiButtonBase-root MuiIconButton-root jss14 MuiIconButton-colorInherit MuiIconButton-edgeStart"
                                    tabindex="0" type="button" aria-label="open drawer">
								<span class="MuiIconButton-label">
									<img src="<?php $this->asset('image/search.png') ?>">
								</span>
                                <span class="MuiTouchRipple-root"></span>
                            </button>
                        </a>
                        <input type="text" placeholder="دنبال چی میگردی؟" style="width: 600px;height:35px ;" >
                    </div>
                    <!-- top search form -->
                    <div class="jss4" style="direction: ltr;">
                        <div class="jss74" style="direction: ltr;">
                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss75"tabindex="0" type="button">
                                <a class="MuiButton-label"style="color: white;" href="<?php $this->url('User/login') ?>">ورود</a>
                                <span class="MuiTouchRipple-root"></span>
                            </button>
                            <a class="MuiButton-label"style="color: white;">/</a>
                            <button class="MuiButtonBase-root MuiButton-root MuiButton-text jss75"tabindex="0" type="button">
                                <a class="MuiButton-label"style="color: white; font-siz" href="<?php $this->url('User/registration') ?>">ثبت‌نام</a>
                                <span class="MuiTouchRipple-root"></span>
                            </button>
                        </div>
                        <a class="jss15"></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- END | Header -->