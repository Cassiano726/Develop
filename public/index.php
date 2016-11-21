<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

chdir(dirname(__DIR__));


require 'vendor/autoload.php';
require 'templates/header.php';
require 'templates/menu.php';



#usando namespaces
use JCS\Controllers\Controller;

#JCS\Ola::mundo();
#JCS\Controllers\Controller::index();
?>

<div id="conteudo">
    <?php
    if (!isset($_GET['page'])){/* Na 1° versão desse código foi usado o <PHP if(!$_GET['page']).. */
        
        JCS\Ola::mundo();
        #JCS\Controllers\Controller::index();

           
    }else{
        require_once("src/JCS/{$_GET['page']}.php"); //Lembrar que pode implementar dessa forma.
    }
    //require_once($_GET['page'].".php");
    // require $_GET['page']."php";
    /* Concatenação usando o (.)Ponto - Ele fala pra navegação.
      /* menu caso exista uma página .php sem ser a home.php! Então mostre ela aqui concatenando. */
    ?>
</div>
<?php require('templates/footer.php'); ?>
