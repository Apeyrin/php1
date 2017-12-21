<?php
  session_start();
  include('./template/header.html');
  include('./template/connexion.html');
  include('./template/footer.html');

  if( isset($_POST['submit']) ){
    $json = file_get_contents('log.json');
    $log = json_decode($json);
    foreach( $log as $key => $right ){
      foreach( $right as $username => $pwd ){
        if( $username == $_POST['username'] ){
          if( $pwd == $_POST['pwd']){
            if($key == 'user'){
              $_SESSION['user'] = 'user';
            }else{
              $_SESSION['user'] = 'admin';
            }
          }
        }
      }
    }
  }
?>
