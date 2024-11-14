<?php
namespace Freelas\Controller;

use Freelas\Model\Usuario as UsuarioModel;
use Smarty\Smarty;

class Usuario{

    public function listar(){
        echo 'Chamou listar usuário';
        $usuarios = UsuarioModel :: lista();
        $smarty = new Smarty;
        # variáveis  para o template
        $smarty->assign('titulo', 'Lista de Usuários');
        #enviar a var de usuarios
        $smarty->assign('usuarios', $usuarios);
        #variável com o nome da view
        $smarty->assign('view', '../view/Usuario/listar.tpl');
        #roda o template
        $smarty->display('../template/template1.tpl');
        
        
    }

}