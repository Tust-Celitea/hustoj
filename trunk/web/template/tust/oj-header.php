<div id=subhead>
<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $OJ_NAME ?></a>
    </div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <div class="nav navbar-nav">
      <?php $ACTIVE="btn-warning";?>
      <li>
        <a  class='btn'  href="<?php echo $OJ_HOME?>"><i class="icon-home"></i>
        <?php echo $MSG_HOME?>
        </a>
      </li>
        <li>
            <a  class='btn <?php if ($url==$OJ_BBS.".php") echo " $ACTIVE";?>'  href="bbs.php"><?php echo $MSG_BBS?></a>
        </li>

        <li>
            <a  class='btn <?php if ($url=="problemset.php") echo " $ACTIVE";?>' href="problemset.php"><?php echo $MSG_PROBLEMS?></a>
        </li>

     <!-- <li> <a  class='btn <?php if ($url=="submitpage.php") echo " $ACTIVE";?>' href="submitpage.php"><?php echo "编辑器"?></a></li> -->
        <!-- <i class="icon-pencil"></i><?php echo "编辑器"?></a> -->
        <li><a class='btn <?php if ($url=="status.php") echo "  $ACTIVE";?>' href="status.php"> <?php echo $MSG_STATUS?> </a></li>

        <li><a class='btn <?php if ($url=="ranklist.php") echo "  $ACTIVE";?>' href="ranklist.php"><?php echo $MSG_RANKLIST?></a></li>
        <!-- <li><i class="icon-signal"></i><?php echo $MSG_RANKLIST?></a></li> -->

        <li><a class='btn <?php if ($url=="contest.php") echo "  $ACTIVE";?>'  href="contest.php"><?php echo checkcontest($MSG_CONTEST)?></a></li>
        <!-- <li><i class="icon-fire"></i><?php echo checkcontest($MSG_CONTEST)?></a></li> -->

        <li><a class='btn <?php if ($url=="recent-contest.php") echo " $ACTIVE";?>' href="recent-contest.php"><?php echo "$MSG_RECENT_CONTEST"?></a></li>
        <!-- <li><i class="icon-share"></i><?php echo "$MSG_RECENT_CONTEST"?></a></li> -->

        <li><a class='btn <?php if ($url==(isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php")) echo " $ACTIVE";?>' href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>"><?php echo "$MSG_FAQ"?></a></li>
        <!-- <li><i class="icon-info-sign"></i><?php echo "$MSG_FAQ"?></a></li> -->


    <ul id=profile class="nav navbar-nav navbar-right">
            <script src="include/profile.php?<?php echo rand();?>" ></script>

    </ul>
      </ul>


        <?php if(isset($OJ_DICT)&&$OJ_DICT&&$OJ_LANG=="cn"){?>

        <span div class='sr-only'  style="color:1a5cc8" id="dict_status"></span>

                      <script src="include/underlineTranslation.js" type="text/javascript"></script>
                      <script type="text/javascript">dictInit();</script>
        <?php }?>
    </div><!--end div navbar-->
</div>


</nav>
</div><!--end subhead-->
<!--
<div id=broadcast class="container">
<marquee id=broadcast scrollamount=1 direction=up scrolldelay=250 onMouseOver='this.stop()' onMouseOut='this.start()';>
  <?php echo $view_marquee_msg?>
</marquee>
</div> -->


<div class="alert alert-info">
  <strong>Info!</strong>  <?php echo $view_marquee_msg?>
</div>

<br>
<script type="text/javascript"
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
