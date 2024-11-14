<?php
namespace Freelas\Controller;

use Smarty\Smarty;

class Site{

    function inicio(){
        $smarty = new Smarty;
        $smarty ->assign('titulo','Sobre');
        $smarty ->assign('view', '../view/Site/inicio.tpl');
        # roda o template
        $smarty->display('../template/template1.tpl');


    }
    function sobre(){
        $smarty = new Smarty;
        $smarty ->assign('titulo','Sobre');
        $smarty ->assign('view', '../view/Site/sobre.tpl');
        # roda o template
        $smarty->display('../template/template1.tpl');
    }

}