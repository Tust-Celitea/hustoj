<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='bootstrap/css/bootstrap.css' type='text/css'>
	<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
    <script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
    <script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
   <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
 
     <link rel="next" href="submitpage.php?<?php

        if ($pr_flag){
		echo "id=$id";
	}else{
		echo "cid=$cid&pid=$pid&langmask=$langmask";
	}

        ?>">
</head>
<body>
<div id="wrapper">
	<?php
	if(isset($_GET['id']))
		require_once("oj-header.php");
	else
		require_once("contest-header.php");

	?>
<div id=main>

	<?php

	if ($pr_flag){
		echo "<title>$MSG_PROBLEM $row->problem_id. -- $row->title</title>";
		echo "<center><h2>$id: $row->title</h2>";
	}else{
		$PID="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		echo "<title>$MSG_PROBLEM $PID[$pid]: $row->title </title>";
		echo "<center><h2>$MSG_PROBLEM $PID[$pid]: $row->title</h2>";
		$id=$row->problem_id;
	}
	echo "<span class=green>$MSG_Time_Limit: </span>$row->time_limit Sec&nbsp;&nbsp;";
	echo "<span class=green>$MSG_Memory_Limit: </span>".$row->memory_limit." MB";
	if ($row->spj) echo "&nbsp;&nbsp;<span class=red>Special Judge</span>";
	echo "<br><span class=green>$MSG_SUBMIT: </span>".$row->submit."&nbsp;&nbsp;";
	echo "<span class=green>$MSG_SOVLED: </span>".$row->accepted."<br>";
	
	echo "<br/>";
    if ($pr_flag){
        echo "<a href='submitpage.php?id=$id' class='btn btn-primary btn-lg' role='button'>$MSG_SUBMIT</a>";
	}else{
		echo "<a href='submitpage.php?cid=$cid&pid=$pid&langmask=$langmask'class='btn btn-primary btn-lg' role='button'>$MSG_SUBMIT</a>";
	}
    echo "&nbsp&nbsp<a href='problemstatus.php?id=".$row->problem_id."' class='btn btn-lg btn-success' role='button'>$MSG_STATUS</a>";
	echo "&nbsp&nbsp<a href='bbs.php?pid=".$row->problem_id."$ucid' class='btn btn-lg btn-info'>$MSG_BBS</a>";
	  if(isset($_SESSION['administrator'])){
      require_once("include/set_get_key.php");
      ?>
      [<a href="admin/problem_edit.php?id=<?php echo $id?>&getkey=<?php echo $_SESSION['getkey']?>" >Edit</a>]
      [<a href="admin/quixplorer/index.php?action=list&dir=<?php echo $row->problem_id?>&order=name&srt=yes" >TestData</a>]
      <?php

    }

	echo "</center>";
    echo "<br/>";
    echo "<div class='container theme-showcase' role='main'><div class='jumbotron'><div class='container'><h2>$MSG_Description</h2><div class=content>".$row->description."</div></div></div></div>";
    echo '<br/><br/><div class="container theme-showcase"><div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><h2>'.$MSG_Input.'</h2></h3>
            </div>
            <div class="panel-body">
              <h3>'.$row->input.'
            </h3></div>
          </div>';
	
    echo '<div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><h2>'.$MSG_Output.'</h2></h3>
            </div>
            <div class="panel-body">
              <h3>'.$row->output.'</h3>
            </div>
          </div>';



	$sinput=str_replace("<","&lt;",$row->sample_input);
  $sinput=str_replace(">","&gt;",$sinput);
	$soutput=str_replace("<","&lt;",$row->sample_output);
  $soutput=str_replace(">","&gt;",$soutput);
  if($sinput) {
    echo '<br/><br/><div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><h2>'.$MSG_Sample_Input.'</h2></h3>
            </div>
            <div class="panel-body">
              <h3>'.$sinput.'</h3>
            </div>
          </div>';
  }
  if($soutput){
	
    echo '<div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><h2>'.$MSG_Sample_Output.'</h2></h3>
            </div>
            <div class="panel-body">
              <h3>'.$soutput.'</h3>
            </div>
          </div>';
  }
  if ($pr_flag||true)
		
    echo '<br/><br/><div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><h2>'.$MSG_HINT.'</h2></h3>
            </div>
            <div class="panel-body">
              <h3>'.nl2br($row->hint).'</h3>
            </div>
          </div>';
	if ($pr_flag)
		
    	echo "<br/><br/><h2>$MSG_Source</h2><p><a href='problemset.php?search=$row->source' class='btn btn-lg btn-success' role='button'>".nl2br($row->source)."</a></p>";
	echo "<center>";
	echo "<br/><br/>";
	if ($pr_flag){
		echo "[<a href='submitpage.php?id=$id'>$MSG_SUBMIT</a>]";
	}else{
		echo "[<a href='submitpage.php?cid=$cid&pid=$pid&langmask=$langmask'>$MSG_SUBMIT</a>]";
	}
	echo "[<a href='problemstatus.php?id=".$row->problem_id."'>$MSG_STATUS</a>]";

	echo "[<a href='bbs.php?pid=".$row->problem_id."$ucid'>$MSG_BBS</a>]";
	echo "<br/><br/><br/><br/><br/><br/><br/>";
	if(isset($_SESSION['administrator'])){
      require_once("include/set_get_key.php");
  ?>
     [<a href="admin/problem_edit.php?id=<?php echo $id?>&getkey=<?php echo $_SESSION['getkey']?>" >Edit</a>]
      [<a href="admin/quixplorer/index.php?action=list&dir=<?php echo $row->problem_id?>&order=name&srt=yes" >TestData</a>]
     <?php
  }
  echo "</center>";
	?>
<div id=foot>

</div><!--end showcase>
</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
<?php require_once("oj-footer.php");?>
</body>
</html>
