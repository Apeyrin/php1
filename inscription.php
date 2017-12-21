<?php
  session_start();
  include('./template/header.html');
  include('./template/inscription.html');
  include('./template/footer.html');

  if( isset($_POST['submit']) ){
    $json = file_get_contents('./log.json');
    $log = json_decode($json, true);

    $log['user'][$_POST['username']] = $_POST['pwd'];

    //$newlog = json_encode($log);
    //file_put_contents('./log.json', $newlog, FILE_APPEND);
  }
?>
