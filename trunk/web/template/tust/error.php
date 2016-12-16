<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel=stylesheet href='bootstrap/css/bootstrap.css' type='text/css'>
	<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
<div id="wrapper">
	<?php require_once("oj-header.php");?>
<div id=main>
	<?php echo $view_errors?>
<div id=foot>

</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
<?php require_once("oj-footer.php");?>
</body>
</html>
