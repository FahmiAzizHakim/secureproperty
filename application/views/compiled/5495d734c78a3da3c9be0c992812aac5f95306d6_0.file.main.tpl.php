<?php
/* Smarty version 3.1.30, created on 2018-01-06 04:14:31
  from "D:\www\secureproperty\application\views\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a503f176b0097_13643001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5495d734c78a3da3c9be0c992812aac5f95306d6' => 
    array (
      0 => 'D:\\www\\secureproperty\\application\\views\\main.tpl',
      1 => 1515208468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a503f176b0097_13643001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Secure Property - Integrated, Trust, Secure and Comfort</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
css/modern-business.css" rel="stylesheet">

  </head>

  <body>

	    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
image/logoo.png" style="height:70px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/about_us">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/event">Gallery Event</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/product">Listing</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
page/register">PELUANG USAHA</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    

    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; PT Dwitama Arsindo</p>
      </div>
      <!-- /.container -->
    </footer>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['assets_url']->value;?>
vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  </body>

</html><?php }
}
