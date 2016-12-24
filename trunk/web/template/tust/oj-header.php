<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <?php $ACTIVE="btn-warning";?>
        <li>
          <a  class='btn'  href="<?php echo $OJ_HOME?>"><i class="icon-home"></i>
          <?php echo $MSG_HOME?>
          </a>
        </li>
          <!-- <li><a  class='btn <?php if ($url==$OJ_BBS.".php") echo " $ACTIVE";?>'  href="bbs.php"><?php echo $MSG_BBS?></a></li> -->

          <li>
              <a  class='btn <?php if ($url=="problemset.php") echo " $ACTIVE";?>' href="problemset.php"><?php echo $MSG_PROBLEMS?></a>
          </li>

        <!-- <li> <a  class='btn <?php if ($url=="submitpage.php") echo " $ACTIVE";?>' href="submitpage.php"><?php echo "编辑器"?></a></li> -->
          <!-- <i class="icon-pencil"></i><?php echo "编辑器"?></a> -->
          <li>
              <a class='btn <?php if ($url=="status.php") echo "  $ACTIVE";?>' href="status.php"> <?php echo $MSG_STATUS?> </a>
          </li>

          <li>
              <a class='btn <?php if ($url=="ranklist.php") echo "  $ACTIVE";?>' href="ranklist.php"><?php echo $MSG_RANKLIST?></a>
          </li>
          <!-- <li><i class="icon-signal"></i><?php echo $MSG_RANKLIST?></a></li> -->

          <li>
              <a class='btn <?php if ($url=="contest.php") echo "  $ACTIVE";?>'  href="contest.php"><?php echo $MSG_CONTEST?></a>
          </li>


          <li>
              <a class='btn <?php if ($url=="recent-contest.php") echo " $ACTIVE";?>' href="recent-contest.php"><?php echo "$MSG_RECENT_CONTEST"?></a>
          </li>
          <!-- <li><i class="icon-share"></i><?php echo "$MSG_RECENT_CONTEST"?></a></li> -->

          <li>
              <a class='btn <?php if ($url==(isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php")) echo " $ACTIVE";?>' href="<?php echo isset($OJ_FAQ_LINK)?$OJ_FAQ_LINK:"faqs.php"?>"><?php echo "$MSG_FAQ"?>
              </a>
          </li>
      </ul>

      <ul id=profile class="nav navbar-nav navbar-right">
            <script src="include/profile.php?<?php echo rand();?>" ></script>

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
<div class="alert alert-info col-md-offset-2 col-md-8">
  <strong>通知!</strong>  <?php echo $view_marquee_msg?>
</div>
</div>

<div id=subhead>

<br>
<!--
<script type="text/javascript"
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
-->
