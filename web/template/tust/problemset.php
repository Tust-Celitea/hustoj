<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $view_title?></title>
	<link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
	<link rel=stylesheet href='bootstrap/css/bootstrap.css' type='text/css'>
	<script language="javascript" type="text/javascript" src="include/jquery-latest.js"></script>
	<script language="javascript" type="text/javascript" src="include/jquery.flot.js"></script>
	<script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div id="wrapper">
	<?php require_once("oj-header.php");?>
<div id=main>
<script type="text/javascript" src="include/jquery-latest.js"></script>
<script type="text/javascript" src="include/jquery.tablesorter.js"></script>
<script type="text/javascript">
$(document).ready(function()
    {
        $("#problemset").tablesorter();
    }
);
</script>

<h3 align='center'>
        <?php
    for ($i=1;$i<=$view_total_page;$i++){
		if ($i>1) echo '&nbsp;';
		if ($i==$page) echo "<span class=red>$i</span>";
		else echo "<a href='problemset.php?page=".$i."'>".$i."</a>";
	}
        ?>

</h3>

<div class="container">
<div class="row">
  	<div class="col-md-4 text-right">
	  	<form class="form-inline" action="problem.php">
			<div class="form-group">
    			<label for="id">Problem ID</label>
				<input class="search-query" type='text' name='id' size="5">
				<button class="btn btn-primary" type='submit'>Go</button>
  			</div>
		</form>
  	</div>
  	<div class="col-md-8 text-center">
		<form class="form-inline">
			<input type="text" name="search" class="input-large search-query form-control">
			<button type="submit" class="btn btn-primary"><?php echo $MSG_SEARCH?></button>
		</form>
	</div>
</div>

<div class="row">
	<table id='problemset' class='table table-striped table-hover text-center'>
	    <thead>
	    	<tr>
        		<th width='5'></th>
      			<th width='10%' ><A><?php echo $MSG_PROBLEM_ID?></A></th>
		        <th class="text-center"><?php echo $MSG_TITLE?></th>
		        <th width='10%'><?php echo $MSG_SOURCE?></th>
		        <th style="cursor:hand" width="10%"><?php echo $MSG_AC?></th>
		        <th style="cursor:hand" width="10%"><?php echo $MSG_SUBMIT?></th>
		    </tr>
	    </thead>
		<tbody>
		<?php
		$cnt=0;
		foreach($view_problemset as $row){
			if ($cnt)
				echo "<tr class='oddrow'>";
			else
				echo "<tr class='evenrow'>";
			foreach($row as $table_cell){
				echo "<td>";
				echo "\t".$table_cell;
				echo "</td>";
			}

			echo "</tr>";

			$cnt=1-$cnt;
		}
		?>
		</tbody>
	</table>
</div>
</div>


</div><!--end main -->
</div><!--end wrappe r-->
	<?php require_once("oj-footer.php");?>
</body>
</html>
