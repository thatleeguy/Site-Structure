<?
// =======================================
// = Lets find out why this shit is slow =
// =======================================

$start=microtime();
$start=explode(" ",$start);
$start=$start[1]+$start[0];
$url_segment = explode("/", $_SERVER['REQUEST_URI']);

$base_url = 'http://localhost/';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>

<title></title>

<!--favicon-->
<link rel="shortcut icon" href="" />

<!--metatags-->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content=" " />
<meta name="Author" content="" />

<!-- Javascript -->
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript" charset="utf-8"></script>

<!-- CSS -->
<link rel="stylesheet" type="text/css" media="all" href="/assets/css/style.css" />

</head>

<body>
	
	<div id="wrapper">
		
		<div id="header">
			<ul id="navigation">
				<li><a href="/" title="Home" <? if($url_segment[1] == ""){?>class="active"<?}?> >Home</a></li>
				<li><a href="/our_company" title="Our Company" <? if($url_segment[1] == "our_company"){?>class="active"<?}?>>Our Company</a></li>
				<li><a href="/products" title="Products" <? if($url_segment[1] == "products"){?>class="active"<?}?>>Products</a></li>
				<li><a href="/store_locator" title="Store Locator" <? if($url_segment[1] == "store_locator"){?>class="active"<?}?>>Store Locator</a></li>
				<li><a href="/retailers" title="Retailers" <? if($url_segment[1] == "retailers"){?>class="active"<?}?>>Retailers</a></li>
				<li><a href="/contact" title="contact" <? if($url_segment[1] == "contact"){?>class="active"<?}?>>contact</a></li>
			</ul>
		</div><!-- /header -->
		<div id="content">			