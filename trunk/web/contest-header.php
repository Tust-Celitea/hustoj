<?php
    require_once('./include/cache_start.php');


	require_once('./include/db_info.inc.php');

  if(isset($OJ_LANG)){
		require_once("./lang/$OJ_LANG.php");
	}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel=stylesheet href='./include/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
    <link rel=stylesheet href='include/css/bootstrap.css' type='text/css'>
    <script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript" src="include/js/bootstrap.js"></script>
</head>
<?php if(isset($_GET['cid']))
	$cid=intval($_GET['cid']);
if (isset($_GET['pid']))
	$pid=intval($_GET['pid']);
?>

<!-- <table width=100% class=toprow><tr align=center> -->
<ul class="nav nav-tabs nav-justified">
	<li><a href='./'><?php echo $MSG_HOME?></a></li>
	<li><a href='./bbs.php?cid=<?php echo $cid?>'><?php echo $MSG_BBS?></a></li>
	<li><a href='./contest.php?cid=<?php echo $cid?>'><?php echo $MSG_PROBLEMS?></a></li>
	<li><a href='./contestrank.php?cid=<?php echo $cid?>'><?php echo $MSG_STANDING?></a></li>
	<li><a href='./status.php?cid=<?php echo $cid?>'><?php echo $MSG_STATUS?></a></li>
	<li><a href='./conteststatistics.php?cid=<?php echo $cid?>'><?php echo $MSG_STATISTICS?></a></li>
</ul>
<!-- </tr></table> -->

<?php
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"./admin/msg.txt");

?>
<div id=broadcast>
<marquee id=broadcast scrollamount=1 direction=up scrolldelay=250 onMouseOver='this.stop()' onMouseOut='this.start()';>
  <?php echo $view_marquee_msg?>
</marquee>
</div><!--end broadcast-->
