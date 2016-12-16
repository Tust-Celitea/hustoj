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

<form action=login.php method=post class="form-horizontal">
    <center>
      <div class="form-group">
        <label for="username" class="col-sm-2 control-label"><?php echo $MSG_USER_ID?>:</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="inputEmail3" placeholder="User Name" name="user_id" >
        </div>
      </div>

    <div class="form-group">
      <label for="password" class="col-sm-2 control-label"><?php echo $MSG_PASSWORD?>:</label>
      <div class="col-sm-5">
        <input  name="password" type="password" class="form-control" id="password" >
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Sign in</button>
    </div>
  </div>
<a href="lostpassword.php">Lost Password</a>

        <!-- <tr><td width=240><?php echo $MSG_USER_ID?>:<td width=200><input style="height:24px" name="user_id" type="text" size=20></tr> -->
        <!-- <tr><td><?php echo $MSG_PASSWORD?>:<td><input name="password" type="password" size=20 style="height:24px"></tr> -->
        <!-- <?php if($OJ_VCODE){?> -->
                <!-- <tr><td><?php echo $MSG_VCODE?>:</td> -->
                        <!-- <td><input name="vcode" size=4 type=text style="height:24px"><img alt="click to change" src=vcode.php onclick="this.src='vcode.php?'+Math.random()">*</td> -->
                <!-- </tr> -->
                <!-- <?php }?> -->
        <!-- <tr><td colspan=3><input name="submit" type="submit" size=10 value="Submit"> -->
        <!-- <a href="lostpassword.php">Lost Password</a> -->

      </center>
</form>

<div id=foot>


</div><!--end foot-->
</div><!--end main-->
</div><!--end wrapper-->
<?php require_once("oj-footer.php");?>
</body>
</html>
