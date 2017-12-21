<?php
  session_start();
  if( isset($_SESSION['user']) && $_SESSION['user'] == 'admin'){
    include('./template/header.html');
    include('./template/addproduct.html');
    include('./template/footer.html');

    if( isset($_POST['submit']) ){
      $fileName = $_POST['name'];
      file_put_contents('./products/'.$fileName.'.html',
      '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="produit">'
        .'<a href="#">'.
        '<h3>'.$fileName.'</h3>'.
        '<img src="'.$_POST['image'].'" alt="'.$fileName.'" width="200" height="200">
        </a>'.
        '<p>'.$_POST['description'].'</p>'.
        '<p>'.$_POST['prix'].'€</p>'.
        '<form method="get" action"#">'.
        '<input type="hidden" value="'.$fileName.'" name="delFiche">'.
        '<button type="submit" class="btn btn-primary btn-sm">Supprimer '.
        '<i class="fa fa-trash" aria-hidden="true" ></i>'
        .'</button>'.
        '</form>'.
        '<form method="get" action"#">'.
        '<input type="hidden" value="'.$fileName.'" name="addToCart">'.
        '<input type="hidden" value="'.$_POST['prix'].'" name="prix">'.
        '<button type="submit" class="btn btn-primary btn-sm">Ajouter au panier '.
        '<i class="fa fa-shopping-cart" aria-hidden="true"></i></i>'
        .'</button>'.
        '</form>'.
        '</div>'.'</div>');
    }
  }else{
    header('location: index.php');
    die();
  }

?>
