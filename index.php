<?php
  session_start();
  include('./template/header.html');

  echo '<div id="presentation">
  	     <div class="container">
  		      <h2>Bienvenue sur le site de Figastik</h2>
  		         <p>Nous vendons des figurines à un prix imbattable Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  	     </div>'.'
        <div id="cat-produits">
  	     <div class="container">';

  $files = scandir('./products');
  $files = array_slice($files, 2, sizeof($files));
  foreach($files as $file){
    $text = file_get_contents('./products/'.$file);
    echo $text;
  }
  echo '</div></div>';
  include('./template/footer.html');


  if( isset($_GET['delFiche']) ){
    unlink('./products/'.$_GET['delFiche'].'.html');
  }
?>
