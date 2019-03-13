<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <title>CLI CONSOLE</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
            <script type="text/javascript">
              function hideinfo1() {setTimeout(function(){$('.hideinfo1').toggle('slow')},3333);}  
              function utf8_to_b64(str) {return window.btoa(unescape(encodeURIComponent(str)));}
        function b64_to_utf8(str) {return decodeURIComponent(escape(window.atob(str)));} 
      
            </script>
    <style type="text/css">
      .constext {
        border:none !important;
        background:#555 !important;       
        float: left !important;
        margin-top: -10px;
        color: #fff;
        margin-left: 1%;
      }
      .cons1{float:left;}
      .cons2{float:left;width:97%}
    </style>        
</head>
<body>
  <?php
   $cmd ="php ".$_SERVER['DOCUMENT_ROOT']. "/wp-cli.phar --info";
   exec ($cmd, $output, $return);
    if (!$return) {

 ?>

<div style="padding: 10px;overflow: hidden;">
   <div class="row">
      <center><h4>WP-CLI command console (Beta)</h4></center>
   </div>
 <div class="row">
    <div class="row card">
      <div class="row"><h5 style="padding:10px;">1. Тестирование библиотеки</h5></div>
        <div class="input-field col s3">
          <input id="info" name="info" onkeypress="cr0()" onkeydown="cr0()" onclick="cr0()" type="text" class="validate" value=" --info">
          <label for="info">Отправить тест или выполнить другую команду</label>
        </div>
      <div class="col s2">
        <a onclick="goWpCli('gowpinfo');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>  
        <div style="padding:10px; clear:both;" class="reswpinfo"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpinfo"></div>
        <div class="progress progressgowpinfo" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        
        <script type="text/javascript">
           function cr0(th) {
        var gotxt =  $('#info').val();          
        $('.reswpinfo').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpinfo').html(gotxt);
      } setTimeout(function(){cr0();},1111);
        </script>
      </div>


<!--wp cli block-->
      <div class="row card">
        <div class="row"><h5 style="padding:10px;">2. Загрузка новой версии WP</h5></div>
        <div class="input-field col s3">
          <input id="pathinstal" name="pathinstal" onkeypress="cr1()" onkeydown="cr1()" onclick="cr1()" type="text" class="validate" value="">
          <label for="pathinstal">Установить указать имя директории</label>
        </div>
      <div class="col s2">
        <a onclick="goWpCli('gowpinst');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>  
        <div style="padding:10px; clear:both;" class="reswpinst"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpinst"></div>
        <div class="progress progressgowpinst" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        
        <script type="text/javascript">
           function cr1(th) {
            var comand = " core download ";
        var gotxt =  $('#pathinstal').val();  
        if (gotxt==""||gotxt==" "||gotxt==undefined) {    
          $('.reswpinst').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+comand+"</span>");
          gotxt = utf8_to_b64(comand);
          gotxt = utf8_to_b64(gotxt);
          gotxt = gotxt.replace('==', '');
          gotxt = gotxt.replace('=', '');
          $('.gowpinst').html(gotxt);
        }else{  
          gotxt = comand+" --path="+gotxt;      
          $('.reswpinst').html("Будет поcлан запрос типа><span style='#4caf50'> php wp core download "+gotxt+"</span>");
          gotxt = utf8_to_b64(gotxt);
          gotxt = utf8_to_b64(gotxt);
          gotxt = gotxt.replace('==', '');
          gotxt = gotxt.replace('=', '');
          $('.gowpinst').html(gotxt);
        }
      } setTimeout(function(){cr1();},1111);
        </script>
      </div>
<!--wp cli block end-->

<!--wp cli block-->
      <div class="row card">
        <div class="row"><h5 style="padding:10px;">3. Настройка базы</h5></div>
        <div class="input-field col s2">
          <input id="dbname" name="dbname" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="">
          <label for="dbname">Имя базы</label>
        </div>
        <div class="input-field col s2">
          <input id="dbuser" name="dbuser" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="">
          <label for="dbuser">Имя пользователя базы</label>
        </div>
        <div class="input-field col s1">
          <input id="dbpass" name="dbpass" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="">
          <label for="dbpass">Пароль базы</label>
        </div>
        <div class="input-field col s1">
          <input id="dbhost" name="dbhost" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="localhost">
          <label for="dbhost">Хост базы</label>
        </div>
        <div class="input-field col s1">
          <input id="dbprefix" name="dbprefix" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="wp_">
          <label for="dbprefix">Префикс</label>
        </div>
        <div class="input-field col s3">
          <input id="path" name="path" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="">
          <label for="path">Путь(куда)</label>
        </div>
        <div class="input-field col s2">
          <input id="other" name="other" onkeypress="cr2()" onkeydown="cr2()" onclick="cr2()" type="text" class="validate" value="">
          <label for="other">Дополнительно</label>
        </div>  
         <div class="col s2">
          <a onclick="goWpCli('gowpconfig');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>
        <div style="padding:10px; clear:both;" class="reswpconfig"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpconfig"></div>
        <div class="progress progressgowpconfig" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        <script type="text/javascript">
           function cr2(th) {
            var path = $('#path').val();
        var gotxt =  " core config --dbname="+$('#dbname').val();
          gotxt += " --dbuser="+$('#dbuser').val();
          gotxt += " --dbpass="+$('#dbpass').val();
          gotxt += " --dbhost="+$('#dbhost').val();
          gotxt += " --dbprefix="+$('#dbprefix').val();
          gotxt += " "+$('#other').val();         
          if (path!=""&&path!=" "&&path!=undefined) {gotxt += ' --path="'+path+'" ';}
        $('.reswpconfig').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpconfig').html(gotxt);
      } 
        </script>
      </div>
<!--wp cli block end-->

<!--wp cli block-->
  <div class="row card">
        <div class="row">
          <h5 style="padding:10px;">4. Установка WP 
            <label>
              <input type="checkbox" name="wpdircomf" class="filled-in act_check myltys" value="0"  />
              <span>Установить как мультисайт?</span>
            </label>
          </h5>
          
      </div>
        <div class="input-field col s2">
          <input id="url" name="url" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="url">Адрес url сайта</label>
        </div>
        <div class="input-field col s2">
          <input id="titles" name="titles" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="titles">Имя title сайта</label>
        </div>
        <div class="input-field col s2">
          <input id="admin_user" name="admin_user" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="admin_user">Логин к админке</label>
        </div>
        <div class="input-field col s2">
          <input id="admin_email" name="admin_email" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="admin_email">Эмейл админа</label>
        </div>

        <div class="input-field col s2">
          <input id="path2" name="path2" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="path2">Путь(куда)</label>
        </div>
        <div class="input-field col s2">
          <input id="other2" name="other2" onkeypress="cr3()" onkeydown="cr3()" onclick="cr3()" type="text" class="validate" value="">
          <label for="other2">Дополнительно</label>
        </div>  
         <div class="col s2">
          <a onclick="goWpCli('gowpinstall');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>
        <div style="padding:10px; clear:both;" class="reswpinstall"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpinstall"></div>
        <div class="progress progressgowpinstall" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        <script type="text/javascript">
           function cr3(th) {
            var path2 = $('#path2').val();
            var myltadd = "install";
            var myltys = $('.myltys').val();
            if (myltys=='1') {myltadd = "multisite-install";}
        var gotxt =  " core "+myltadd+" --url="+$('#url').val();
          gotxt += " --title='"+$('#titles').val()+"'";
          gotxt += " --admin_user="+$('#admin_user').val();
          gotxt += " --admin_email="+$('#admin_email').val();
          gotxt += " "+$('#other2').val();  
          if (path2!=""&&path2!=" "&&path2!=undefined) {gotxt += ' --path="'+path2+'" ';}       
        $('.reswpinstall').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpinstall').html(gotxt);
      } 
        </script>
    </div>
<!--wp cli block end-->

<!--wp cli block-->
    <div class="row card">
        <div class="row">
          <h5 style="padding:10px;">4. Установка плагина 
            <label>
              <input type="checkbox" name="deact" class="filled-in act_check plygdeact" value="0"  />
              <span>Удалить</span>
            </label>
          </h5>
          
      </div>
        <div class="input-field col s2">
          <input id="pluginname" name="pluginname" onkeypress="cr4()" onkeydown="cr4()" onclick="cr4()" type="text" class="validate" value="">
          <label for="pluginname">Имя плагина</label>
        </div>

        <div class="input-field col s2">
          <input id="path3" name="path3" onkeypress="cr4()" onkeydown="cr4()" onclick="cr4()" type="text" class="validate" value="">
          <label for="path3">Путь(куда)</label>
        </div>
        <div class="input-field col s2">
          <input id="other3" name="other3" onkeypress="cr4()" onkeydown="cr4()" onclick="cr4()" type="text" class="validate" value="">
          <label for="other3">Дополнительно</label>
        </div>  
         <div class="col s2">
          <a onclick="goWpCli('gowpinstallpl');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>
        <div style="padding:10px; clear:both;" class="reswpinstallpl"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpinstallpl"></div>
        <div class="progress progressgowpinstallpl" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        <script type="text/javascript">
           function cr4(th) {
            var path3 = $('#path3').val();
            var pluginname = $('#pluginname').val();
            var myltadd = "plugin install";
            var activated = "--activate";
            var myltys2 = $('.plygdeact').val();
            if (myltys2=='1') {activated = "";myltadd = "plugin delete";}
        var gotxt =  " "+myltadd+"  "+pluginname+" "+activated+" ";   
          gotxt += " "+$('#other3').val();  
          if (path3!=""&&path3!=" "&&path3!=undefined) {gotxt += ' --path="'+path3+'" ';}       
        $('.reswpinstallpl').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpinstallpl').html(gotxt);
      } 
        </script>
    </div>
<!--wp cli block end-->
  

<!--wp cli block-->
  <div class="row card">
        <div class="row">
          <h5 style="padding:10px;">5. Установка темы 
            <label>
              <input type="checkbox" name="deact" class="filled-in act_check tmygdeact" value="0"  />
              <span>Удалить</span>
            </label>
          </h5>
          
      </div>
        <div class="input-field col s2">
          <input id="themname" name="themname" onkeypress="cr5()" onkeydown="cr5()" onclick="cr5()" type="text" class="validate" value="">
          <label for="themname">Имя темы</label>
        </div>

        <div class="input-field col s2">
          <input id="path4" name="path4" onkeypress="cr5()" onkeydown="cr5()" onclick="cr5()" type="text" class="validate" value="">
          <label for="path4">Путь(куда)</label>
        </div>
        <div class="input-field col s2">
          <input id="other4" name="other4" onkeypress="cr5()" onkeydown="cr5()" onclick="cr5()" type="text" class="validate" value="">
          <label for="other4">Дополнительно</label>
        </div>  
         <div class="col s2">
          <a onclick="goWpCli('gowpinstalltm');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>
        <div style="padding:10px; clear:both;" class="reswpinstalltm"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpinstalltm"></div>
        <div class="progress progressgowpinstalltm" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        <script type="text/javascript">
           function cr5(th) {
            var path3 = $('#path3').val();
            var themname = $('#themname').val();
            var myltadd = "theme install";
            var activated = "--activate";
            var myltys2 = $('.tmygdeact').val();
            if (myltys2=='1') {activated = "";myltadd = "theme delete";}
        var gotxt =  " "+myltadd+"  "+themname+" "+activated+" ";   
          gotxt += " "+$('#other3').val();  
          if (path3!=""&&path3!=" "&&path3!=undefined) {gotxt += ' --path="'+path3+'" ';}       
        $('.reswpinstalltm').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpinstalltm').html(gotxt);
      } 
        </script>
    </div>
<!--wp cli block end-->


<!--wp cli block-->
<div class="row card">
        <div class="row">
          <h5 style="padding:10px;">6. Экспорт базы</h5>
          
      </div>
        <div class="input-field col s2">
          <input id="bcfilename" name="bcfilename" onkeypress="cr6()" onkeydown="cr6()" onclick="cr6()" type="text" class="validate" value="">
          <label for="bcfilename">Имя файла</label>
        </div>

        <div class="input-field col s2">
          <input id="other5" name="other5" onkeypress="cr6()" onkeydown="cr6()" onclick="cr6()" type="text" class="validate" value="">
          <label for="other5">Дополнительно</label>
        </div>  
         <div class="col s2">
          <a onclick="goWpCli('gowpbc');"  class="waves-effect waves-light btn-large">Выполнить</a>
      </div>
        <div style="padding:10px; clear:both;" class="reswpbc"></div>
        <div style="font-size: 10px;padding:10px; clear:both;overflow: hidden;" class="gowpbc"></div>
        <div class="progress progressgowpbc" style="display: none;">
        <div class="indeterminate"></div>
      </div>
        <script type="text/javascript">
           function cr6(th) {
            var bcfilename = $('#bcfilename').val();
        var gotxt = " db export ";  
            if (bcfilename!=""&&bcfilename!=" "&&bcfilename!=undefined) {gotxt += '"'+bcfilename+'.sql" ';} 
          gotxt += " "+$('#other5').val();  
          
        $('.reswpbc').html("Будет поcлан запрос типа><span style='#4caf50'> php wp "+gotxt+"</span>");
        gotxt = utf8_to_b64(gotxt);
        gotxt = utf8_to_b64(gotxt);
        gotxt = gotxt.replace('==', '');
        gotxt = gotxt.replace('=', '');
        $('.gowpbc').html(gotxt);
      } 
        </script>
    </div>
<!--wp cli block end-->

  </div>
</div>
 </form>
  <!-- Modal Trigger -->
  <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a> -->
<div class="fixed-action-btn direction-top" >
<a class="btn-floating btn-large waves-effect waves-light black"  onclick="$('.modal').modal('open');"><i class="material-icons">web_asset</i></a>
</div>
 <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content" style="background: #555;color: #fff;">
   <p><span class="cons1"> > </span> 
    <span class="cons2">
      <input type="text" class="constext" style="width: 97%; margin-top: -10px;margin-left: 1%;" name="constext">
      <i style="float:left;cursor:pointer;" onclick="goWpCliVal('constext');" class="material-icons">send</i>
    </span>
   </p>
      <p class="cons3" style="clear:both;"></p>
    </div>
    <div class="modal-footer" style="height: 17px;
    background: #4e4e4e;">
    <div class="progress progressconstext" style="display: none;">
        <div class="indeterminate"></div>
      </div>
     <!--  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a> -->
    </div>
  </div>
 <?php 

        echo "<div class='hideinfo1'>";
        echo "".var_dump($output)."<p style='color:green;font-size:1em'>works</p> ";
      echo "</div><img style=\"display: none;\"  onload=\"hideinfo1()\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\">";
  } else {
      echo "Please put wp-cli.phar in the root of the site.";
  }


 ?>
 <script type="text/javascript">
  $('.act_check').change(function() {      
            if (this.checked) { $(this).val('1');
          } else {$(this).val('0'); }     
        });
  function goWpCli(cls){
    var bsval = $('.'+cls+'').html();
    $('.progress'+cls+'').show();
    var goclass = cls.replace('gowp', '');

    var reswpi = $('.reswp'+goclass+'').find('span').html();

    reswpi = reswpi.replace('php', ''); 

    $('.constext').val(reswpi);
    $.get( "wp-clicmd.php",{ wpcomf: 1, wpval: bsval }, function( data ) {
      $('.progress'+cls+'').hide();
      $('.modal').modal('open');
      $('.cons3').html('Server> '+data);
    });
  }

  function goWpCliVal(cls){
       var bsval = $('.'+cls+'').val();
            bsval = bsval.replace('wp', '');
            bsval = utf8_to_b64(bsval);
        bsval = utf8_to_b64(bsval);
        bsval = bsval.replace('==', '');
        bsval = bsval.replace('=', '');   
    $('.progress'+cls+'').show();
    // var gospan = $('. span').htmtl();
    $.get( "wp-clicmd.php",{ wpcomf: 1, wpval: bsval }, function( data ) {
      $('.progress'+cls+'').hide();
      $('.modal').modal('open');
      $('.cons3').html('Server> '+data);
    });
  }
  setInterval(function() {
        cr0();cr1();cr2();cr3();cr4();cr5();cr6();
  },999);
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, options);
    });   
    $(document).ready(function(){
      $('.modal').modal();
    }); 
  
 </script>
</body>
</html>