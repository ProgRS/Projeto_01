<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Projeto 01</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavra-chave,do,meu,site">
    <meta name="description" content="Descrição do meu web site">
    <meta charset="utf-8">
  </head>
  <body>

    <?php
     $url = isset($_GET['url'])? $_GET['url'] : 'home' ;
        switch ($url) {
          case 'sobre':
            echo '<target target="sobre" />';
            break;
            case 'servicos':
              echo '<target target="servicos" />';
            break;
          
        }
    ?>

    <header>
    <div class="center">
      <div class="logo left"><a href="/">Luís</a></div><!-- -->
          <nav class="desktop right">
            <ul>          
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
          </nav>

          <nav class="mobile right">
            <div class="botao-menu-mobile">
                  <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <ul>          
                <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
            </ul>
          </nav>       
          <div class="clear"></div> <!--clear-->
      </div><!--center-->
    </header>

    <?php

          if(file_exists('pages/'.$url.'.php')){
                include('pages/'.$url.'.php');
          }else{            
            if($url != 'sobre' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
          }else{
            include('pages/home.php');
          }
        }
    ?>


    <footer <?php if(isset($pagina404) &&  $pagina404 == true) echo 'class="fixed"'; ?>>
      <div class="center">
          <p>Todos os direitoos reservados</p>
      </div><!-- center -->

    </footer>
     <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
     <script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

     <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>

     <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    

        <?php
          if($url == 'home' || $url == ''){
        ?>
        <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
        <?php } ?>
        

        <?php
          if($url == 'contato'){
        ?>
        <?php } ?>
    
 </body>

</html>