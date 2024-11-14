<?php
/* Smarty version 5.4.1, created on 2024-11-14 00:06:15
  from 'file:/opt/lampp/htdocs/marilia/Freelas/template/../view/Usuario/listar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673530e78aaad0_17711735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcf98638b3881fdb243e94b5c8b7bddf0c2f8817' => 
    array (
      0 => '/opt/lampp/htdocs/marilia/Freelas/template/../view/Usuario/listar.tpl',
      1 => 1731539096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673530e78aaad0_17711735 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/opt/lampp/htdocs/marilia/Freelas/view/Usuario';
?><!-- /view/Usuario/listar.tpl -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('usuarios'), 'u');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('u')->value) {
$foreach0DoElse = false;
?>
  <tr>
    <td><?php echo $_smarty_tpl->getValue('u')->id;?>
</td>
    <td><?php echo $_smarty_tpl->getValue('u')->nome;?>
</td>
    <td><?php echo $_smarty_tpl->getValue('u')->email;?>
</td>

    </tr>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    
  </tbody>
</table><?php }
}
