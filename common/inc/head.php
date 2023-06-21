<?php
	//include $_SERVER['DOCUMENT_ROOT']."/manager/common/db.php";

	//$sql = mq("select * from company");
	//$company = $sql->fetch_array();
?>
<!doctype html>
<html lang="ko">
<head>
	<title>제이엠</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta name="title" content="제이엠">
	<meta name="Subject" content="제이엠에 오신것을 환영합니다.">
	<meta name="keywords" content="금형, 제조, 제이엠, JIM">
	<meta name="Descript-xion" content="제이엠에 오신것을 환영합니다.">
	<meta name="Description" content="제이엠에 오신것을 환영합니다.">
	<meta name="Publisher" content="chingooplus">
	<meta name="Other Agent" content="chingooplus">
	<meta name="Distribution" content="chingooplus">
	<meta name="Copyright" content="chingooplus">
	<meta name="Author" content="chingooplus">
	<meta name="Robots" content="ALL"><!--로봇대응-->
	<!-- left_naver start -->
	<meta name="left_naver-site-verification" content="c349731bec9b45dc08ff278872c051d2008c245c" />
	<!-- left_naver end -->
	<!-- webmaster start -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="제이엠">
	<meta property="og:site_name" content="제이엠">
	<meta property="og:description" content="제이엠에 오신것을 환영합니다.">
	<meta property="og:url" content="https://chingoo1005.cafe24.com/">
	<meta property="og:image" content="/common/img/thumbnail.jpg">
	<!-- webmaster end -->
	<!-- app start-->
	<meta property="al:ios:url" content="applinks://docs">
	<meta property="al:ios:app_store_id" content="12345">
	<meta property="al:ios:app_name" content="App Links">
	<meta property="al:android:url" content="applinks://docs">
	<meta property="al:android:app_name" content="App Links">
	<meta property="al:android:package" content="org.applinks">
	<meta property="al:web:url" content="http://applinks.org/documentation">
	<!-- app end-->
			
    <link rel="stylesheet" href="/common/css/common.css">
    <link rel="stylesheet" href="/common/css/index.css">
    <link rel="stylesheet" href="/common/css/sub.css">
    <link rel="stylesheet" href="/common/css/animate.min.css">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap">
	<link rel="shortcut icon" href="common/img/favicon.ico" type="image/x-icon">
    <script src="/common/js/jquery.min.js"></script>
    <script src="/common/js/script.js"></script>
    <script src="https://kit.fontawesome.com/752719d0a1.js" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			cont_gallery_list_img();
			$(".mobileMenu").click(function(){
				$(this).toggleClass("mobileMenu_open");
				if ( $(this).is(".mobileMenu_open") ) {
					$(".mainMenu").addClass("mainMenu_open");
				} else {
					$(".mainMenu").removeClass("mainMenu_open");
				}
			});
		});
		$(window).resize(function() {
			cont_gallery_list_img();
		});
		function cont_gallery_list_img(){
			$(".cont_gallery_list > ul > li").each(function() {
				if ( $(this).find(".cont_gallery_list_img").length ) {
					$(this).find(".cont_gallery_list_img").css("width", $(this).width() );
				};
				if ( $(this).find(".cont_gallery_list_img_height").length ) {
					$(this).find(".cont_gallery_list_img_height").css("height", $(this).width() );
				} else {
					$(this).find(".cont_gallery_list_img").css("height", $(this).width() );
				};
			});
		};
	</script>
</head>
<body>
<div class="wrap">
	<header>
		<div class="header">
			<div class="logo">
				<a href="/">
					<img src="/common/img/logo_1.png" alt="logo image">
				</a>
			</div>
			<nav class="mainMenu">
				<div class="mainMenu_logo m">
					<img src="/common/img/logo.png">
				</div>
				<ul class="top_menu_list">
					<li><a href="/company/about/">회사소개</a></li>
					<li><a href="/product/?product_type=1">제품정보</a></li>
					<li><a href="/contact/">견적문의</a></li>
					<li><a href="/notice/">공지사항</a></li>
				</ul>
			</nav>
			<div class="mobileMenu">
				<a class="menu_hamburger link">
					<span class="f_hamburger"></span> 
					<span class="s_hamburger"></span>
					<span class="t_hamburger"></span>
				</a>
			</div>
		</div>
    </header>