<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $view_title?></title>
        <link rel=stylesheet href='bootstrap/css/bootstrap.css' type='text/css'>
    	<script language="javascript" type="text/javascript" src="include/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>


        <link rel="stylesheet" href="codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="codemirror/addon/fold/foldgutter.css">
        <link rel="stylesheet" href="codemirror/addon/dialog/dialog.css">
        <link rel="stylesheet" href="codemirror/theme/monokai.css">
        <script src="codemirror/lib/codemirror.js"></script>
        <script src="codemirror/addon/search/searchcursor.js"></script>
        <script src="codemirror/addon/search/search.js"></script>
        <script src="codemirror/addon/dialog/dialog.js"></script>
        <script src="codemirror/addon/edit/matchbrackets.js"></script>
        <script src="codemirror/addon/edit/closebrackets.js"></script>
        <script src="codemirror/addon/comment/comment.js"></script>
        <script src="codemirror/addon/wrap/hardwrap.js"></script>
        <script src="codemirror/addon/fold/foldcode.js"></script>
        <script src="codemirror/addon/fold/brace-fold.js"></script>
        <script src="codemirror/mode/clike/clike.js"></script>
        <script src="codemirror/mode/javascript/javascript.js"></script>
        <script src="codemirror/mode/javascript/javascript.js"></script>
        <script src="codemirror/keymap/sublime.js"></script>
        <script src="codemirror/keymap/vim.js"></script>
        <script src="codemirror/keymap/emacs.js"></script>
        <style type="text/css">
          .CodeMirror {border-top: 1px solid #eee; border-bottom: 1px solid #eee; line-height: 1.3; height: 500px}
          .CodeMirror-linenumbers { padding: 0 8px; }
        </style>


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

<div><!-- center -->
<?php
if(strpos($_SERVER['HTTP_USER_AGENT'],'MSIE'))
{
   $OJ_EDITE_AREA=false;
}


if($OJ_EDITE_AREA){
?>
<script language="Javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>
<?php }?>
<script src="include/checksource.js"></script>
<script src="include/jquery-latest.js"></script>


<form id=frmSolution action="submit.php" method="post"
    <?php if($OJ_LANG=="cn"){?>
     onsubmit="return checksource(document.getElementById('source').value);"
    <?php }?>
     >
    <div class="container">
        <div class="row">
    <?php if (isset($id)){?>
            <div class="col-md-2 col-md-offset-1">
                <label>Problem</label> <span class='label label-info'><b><?php echo $id?></b></span>
            </div>
            <input id=problem_id type='hidden'  value='<?php echo $id?>' name="id" >
    <?php }else{
    //$PID="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //if ($pid>25) $pid=25;
    ?>
    Problem <span class='label label-info'><b><?php echo chr($pid+ord('A'))?></b></span> of Contest <span class='label label-info'><?php echo $cid?></span>
    <input id="cid" type='hidden' value='<?php echo $cid?>' name="cid">
    <input id="pid" type='hidden' value='<?php echo $pid?>' name="pid">
    <?php }?>

            <div class="col-md-4 form-inline">
            <div class="form-group">
            <label for="language">Language:</label>
            <select class="form-control" id="language" name="language" onchange="getSelected(this)">
            <?php
            $lang_count=count($language_ext);

              if(isset($_GET['langmask']))
                    $langmask=$_GET['langmask'];
              else
                    $langmask=$OJ_LANGMASK;

              $lang=(~((int)$langmask))&((1<<($lang_count))-1);
            if(isset($_COOKIE['lastlang'])) $lastlang=$_COOKIE['lastlang'];
             else $lastlang=0;
            if(isset($_COOKIE['keymap'])) $keymap=$_COOKIE['keymap'];
             else $keymap = 'sublime';
            for($i=0;$i<$lang_count;$i++){
                            if($lang&(1<<$i))
                             echo"<option value=$i ".( $lastlang==$i?"selected":"").">
                                    ".$language_name[$i]."
                             </option>";
              }

            ?>


            </select>
                </div>
            </div>
            
            
            <div class="col-md-4 pull-right">
                <div class="btn-group" role="group" aria-label="...">
                
                <button class="btn <?php if($keymap == 'sublime') echo 'btn-success' ?>" type="button" id="sublime" value="sublime" onclick="keymap(this)">Sublime</button>
                
                <button class="btn <?php if($keymap == 'vim') echo 'btn-success' ?>" type="button" id="vim" value="vim" onclick="keymap(this)">VIM</button>                                                                                                                         
                <button class="btn <?php if($keymap == 'emacs') echo 'btn-success' ?>" type="button" id="emacs" value="emacs" onclick="keymap(this)">Emacs</button>
                </div>
            </div>
    </div> <!-- row -->
    
    <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <textarea style="width:80%" cols=180 rows=20 id="source" name="source"><?php echo $view_src?></textarea><br>
    </div>
    </div> <!-- row -->
        
    <div class="row">
    <div class="col-md-5 col-md-offset-1">
    <?php echo $MSG_Input?>:<textarea class="form-control" rows=5 id="input_text" name="input_text" ><?php echo $view_sample_input?></textarea>
    </div>
    <div class="col-md-5">
    <?php echo $MSG_Output?>:
    <textarea class="form-control" rows=5 id="out" name="out" >SHOULD BE:
    <?php echo $view_sample_output?>
    </textarea>
    </div>
    </div>
    <div class="row">
        <input id=Submit class="btn btn-info" type=button value="<?php echo $MSG_SUBMIT?>"  onclick=do_submit();>
        <input id=TestRun class="btn btn-info"  type=button value="<?php echo $MSG_TR?>" onclick=do_test_run();><span  class="btn"  id=result>状态</span>
        <input type=reset  class="btn btn-danger" value="重置">
    </div>
   
    
</div> <!-- container -->
    
</form>



<!-- <li><a class=active href="#">Sublimevar editor = CodeMirror.fromTextArea(document.getElementById("code")var editor = CodeMirror.fromTextArea(document.getElementById("code") bindings</a> -->


</div> <!-- center -->






<script>
 var sid=0;
 var i=0;
  var judge_result=[<?php
  foreach($judge_result as $result){
    echo "'$result',";
  }
?>''];
    var editor;

function print_result(solution_id)
{
sid=solution_id;
$("#out").load("status-ajax.php?tr=1&solution_id="+solution_id);

}

function fresh_result(solution_id)
{
    
    sid=solution_id;
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
         var tb=window.document.getElementById('result');
         var r=xmlhttp.responseText;
         var ra=r.split(",");
    //     alert(r);
    //     alert(judge_result[r]);
          var loader="<img width=18 src=image/loader.gif>";
         var tag="span";
         if(ra[0]<4) tag="span disabled=true";
         else tag="a";
         tb.innerHTML="<"+tag+" href='reinfo.php?sid="+solution_id+"' class='badge badge-info' target=_blank>"+judge_result[ra[0]]+"</"+tag+">";
         if(ra[0]<4)tb.innerHTML+=loader;
         tb.innerHTML+="Memory:"+ra[1]+"kb&nbsp;&nbsp;";
         tb.innerHTML+="Time:"+ra[2]+"ms";
         if(ra[0]<4)
            window.setTimeout("fresh_result("+solution_id+")",2000);
         else
            window.setTimeout("print_result("+solution_id+")",0);
            count = -1;
            document.getElementById("TestRun").disabled = false;
        }
        
        
      }
    xmlhttp.open("GET","status-ajax.php?solution_id="+solution_id,true);
    xmlhttp.send();
}

function getSID(){
  var ofrm1 = document.getElementById("testRun").document;
  var ret="0";
    if (ofrm1==undefined)
    {
        ofrm1 = document.getElementById("testRun").contentWindow.document;
        var ff = ofrm1;
       ret=ff.innerHTML;
   }
    else
    {
        var ie = document.frames["frame1"].document;
        ret=ie.innerText;
    }
  return ret+"";
}

var count=0;
function do_submit(){

// if(typeof(eAL) != "undefined"){   eAL.toggle("source");eAL.toggle("source");}

        var mark="<?php echo isset($id)?'problem_id':'cid';?>";
        var problem_id=document.getElementById(mark);

        if(mark=='problem_id')
                problem_id.value='<?php echo $id?>';
        else
                problem_id.value='<?php echo $cid?>';

        document.getElementById("frmSolution").target="_self";
        <?php if($OJ_LANG=="cn") echo "if(checksource(document.getElementById('source').value))";?>
        document.getElementById("frmSolution").submit();
     }
    
    
var  handler_interval;
function do_test_run(){
    editor.save();
        
    if($("#source").val() == "") return;

     if( handler_interval) window.clearInterval( handler_interval);
          var loader="<img width=18 src=image/loader.gif>";
          var tb=window.document.getElementById('result');
          tb.innerHTML=loader;
  // if(typeof(eAL) != "undefined"){   eAL.toggle("source");eAL.toggle("source");}

        var mark="<?php echo isset($id)?'problem_id':'cid';?>";
        var problem_id=document.getElementById(mark);
        problem_id.value=0;
        document.getElementById("frmSolution").target="testRun";
       // document.getElementById("frmSolution").submit();
    
        $.post("submit.php?ajax",$("#frmSolution").serialize(),function(data){fresh_result(data);});
        document.getElementById("TestRun").disabled=true;
        document.getElementById("Submit").disabled=true;
        count=8;
        handler_interval= window.setTimeout("resume();",1000);

}

  function resume(){
  	count--;
        var s=document.getElementById('Submit');
        var t=document.getElementById('TestRun');
        if(count<0){
  		s.disabled=false;
  		t.disabled=false;
                s.value="<?php echo $MSG_SUBMIT?>";
        	t.value="<?php echo $MSG_TR?>";
                if( handler_interval) window.clearInterval( handler_interval);
        }else{
        	s.value="<?php echo $MSG_SUBMIT?>("+count+")";
        	t.value="<?php echo $MSG_TR?>("+count+")";
                window.setTimeout("resume();",1000);

        }
  }
</script>
<script>
  var value = "";
  editor = CodeMirror.fromTextArea(document.getElementById("source"), {
    value: value,
    lineNumbers: true,
    mode: "text/x-csrc",
    keyMap: "sublime",
    autoCloseBrackets: true,
    matchBrackets: true,
    showCursorWhenSelecting: true,
    theme: "monokai",
    tabSize: 2
  });


    function getSelected(sel) {
         language = $( "#language option:selected" ).text();
         language = language.replace(/\s/g,'');
         switch (language) {
             case 'C':
             case 'Clang':
                 editor.setOption("mode","text/x-csrc");
                 break;
             case 'Clang++':
             case 'C++':
                 editor.setOption("mode","text/x-c++src");
                 break;
             case 'Java':
                 editor.setOption("mode","text/x-java");
                 break;
             case 'javaScript':
                 editor.setOption("mode","text/javascript");
                 break;
            case 'Obj-C':
                editor.setOption("mode","text/x-objectivec");
                break;
            case 'Scheme':
                editor.setOption("mode","text/x-scheme");
                break;
             default:
                editor.setOption("mode","text/x-c++src");
         }
    }

    function keymap(id) {
        document.cookie = "keymap=" + id.value;
        $("#sublime").removeClass("btn-success");
        $("#vim").removeClass("btn-success");
        $("#emacs").removeClass("btn-success");
        if(!id.classList.contains("btn-success"))
            id.classList.add("btn-success");
        editor.setOption("keyMap",id.value);
    }
</script>

</div><!--end main-->
</div><!--end wrapper-->
<?php require_once("oj-footer.php");?>
</body>
</html>
