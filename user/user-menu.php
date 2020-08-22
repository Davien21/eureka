<!-- This page has been stripped of whitespaces -->
<!-- because of a "cannot modify header error" please retain format-->
<?php
function user_menu($active_page,$breadcrumb,$default_header=true) {
$l1=$l2=$l3=$l4=$l5=$l6 = '';
if ($active_page === 'home') {
$l1 = "class='active'";
}else if ($active_page === 'lessons') {
$l2 = "class='active'";
}else if ($active_page === 'assignments') {
$l3 = "class='active'";
}else if ($active_page === 'quiz') {
$l4 = "class='active'";
}else if ($active_page === 'groups') {
$l5 = "class='active'";
}else if ($active_page === 'profile') {
$l6 = "class='active'";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Eureka - Create online Classes With Unlimited Student </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="theme-color" content="#059B55">
<meta name="author" content="Eureka">
<meta name="description" content="Set up a Hospital Management System and invite your staff.">

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" media="all" />
<link rel="stylesheet" type="text/css" href="../assets/css/dashboard.css" media="all" />
<link rel="stylesheet" type="text/css" href="../assets/css/utility.css" media="all" />
<link rel="stylesheet" type="text/css" href="../assets/css/extra-responsive.css" media="all" />
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" media="all" />

<!-- <link rel="icon" href="assets/images/logo.png" /> -->

</head>

<body class="raleway-a">
<!--        Mobile Header -->
<header class="">
<nav  class="mobile-nav navbar d-md-none navbar-light flex-column">
<div id="side-nav" class="py-2 d-flex fixed-top w-100 px-3 green-bg paper-box-shadow">
<a class="navbar-brand upper-case" href=".//" title="Go to Home Page">
<span class="text-white ">Eureka</span>
<!-- <span class="">Pal</span> -->
</a>
<span class="nav-toggler ml-auto" title="Toggle menu">
<img class="menu-svg " src="../assets/imgs/svgs/menu-alt.svg">
</span>
<aside class="side-menu-overlay ">
<div class="side-menu bg-white d-flex flex-column px-3 ">
<div class="d-flex justify-content-between align-items-center">
<a class="navbar-brand upper-case " href=".//" title="Go to Home Page">
	<span class="green-txt">Eureka</span>
</a>
<span class="nav-toggler close-btn d-inline-block" title="Toggle menu">
	<img class="menu-svg " src="../assets/imgs/svgs/close.svg">
</span>
</div>
<ul class=" bg-white mt-4" id="links-li">
<li class="nav-item px-xl-2 active">
	<a class="nav-link px-0 mt-2 border-top" href="./" > Home </a>
</li>
<li class="nav-item px-xl-2 active">
	<a class="nav-link px-0 mt-2 border-top"  href="../profile"> Account Profile </a>
</li>
<li class="nav-item px-xl-2 active">
	<a class="nav-link px-0 mt-2 border-top" href="../settings"> Settings </a>
</li>
<li class="nav-item px-xl-2 active">
	<a class="nav-link px-0 mt-2 border-top" href="../backends/logout"> Logout </a>
</li>
</ul>


</div>


</div>
</aside>
</div>
</nav>
</header>
<!--        End of Mobile Header-->

<div class="container-fluid">
<div class="row">

<aside class="col-md-3 d-sm-none d-md-block sidebar" id="side-nav">
<div class="brand-name">
<a href="./">
<h2> Eureka 
    <div> ( User Dashboard ) </div>
</h2>
</a>
</div>
<ul class="nav-links" class="">
<li <?=$l1?> ><a class="d-block" href="./" > Home </a></li>
<li <?=$l6?> ><a class="d-block" href="./profile"> Account Profile </a></li>
<li <?=$l5?> ><a class="d-block" href="./settings"> Settings </a></li>   
<li <?=$l5?> ><a class="d-block" href="./backends/logout"> Logout </a></li>   
</ul>
</aside>
<section class="col-md-9 offset-md-3 col-xs-12" id="main-content">
<?php
if($default_header) {
?>
<header>
<nav aria-label="breadcrumb" role="navigation" class="row mb-3 pl-3">
<ol class="breadcrumb col-8 col-lg-9 m-0">
<li class="breadcrumb-item"><a href="./">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page"><?=$breadcrumb?></li>
</ol>
<div class="col d-flex align-items-center">
<img src="../assets/imgs/svgs/email.svg" class="tiny-svg ml-auto ml-sm-0 " alt="messages" title="View Messages">
<a href="../backends/logout" class="btn btn-danger ml-auto d-none d-sm-inline-block"><b> Logout </b></a>
</div>
</nav>
</header>
<?php
}
?>
<?php
}
function make_footer () {
?>
<footer class="align-self-center">
<div class="small row flex-co text-center text-sm-left">
<span class="col-12 col-sm-auto">&copy; <?=date("Y")?> All Rights Reserved.</span>
<span class="col-12 col-sm-auto mt-1 mt-sm-0">
<a class="my-0" href="pricing.html" target="_blank">Pricing</a>
</span>
<span class="col-12 col-sm-auto my-2 my-sm-0"> Powered by <b>SchoolSuiteNg</b></span>
</div>
</footer>
<?php
}
?>