<?php
/* Smarty version 3.1.43, created on 2022-08-19 16:29:01
  from 'C:\laragon\www\react\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ff901d4de923_51128409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd89da91c7af0ad96bb198d0f4352228cb9cb1a4b' => 
    array (
      0 => 'C:\\laragon\\www\\react\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1660911560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff901d4de923_51128409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\react\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\d8\\9d\\a9\\d89da91c7af0ad96bb198d0f4352228cb9cb1a4b_2.file.helpers.tpl.php',
    'uid' => 'd89da91c7af0ad96bb198d0f4352228cb9cb1a4b',
    'call_name' => 'smarty_template_function_renderLogo_150519841262ff901d3fd996_19639631',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_150519841262ff901d3fd996_19639631 */
if (!function_exists('smarty_template_function_renderLogo_150519841262ff901d3fd996_19639631')) {
function smarty_template_function_renderLogo_150519841262ff901d3fd996_19639631(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_150519841262ff901d3fd996_19639631 */
}
