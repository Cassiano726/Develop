<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace JCS\Controllers;

use JCS\Models\Model;
use JCS\Views\View;
/**
 * Description of Controller
 *
 * @author jerem
 */
class Controller {
    
    #Para acessar os métodos ou funções da classe é necessário defir-las como static! E usar ::
    public function index() {
        
        #echo "<br/>Este texto está sendo instanciado pela classe controller!!!<br/><br/>";
        
        #Acho que aqui seria melhor criar um contrutor mais vamos lá.
        $model = new Model();
        $views = new View();
        $views->render($model->getTex());
    }
}
