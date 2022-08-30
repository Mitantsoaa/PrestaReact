<?php
/* Smarty version 3.1.43, created on 2022-08-19 16:29:00
  from 'C:\laragon\www\react\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ff901c939e11_10838747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '440f697f77a62e9359fab668aca18a75894936a1' => 
    array (
      0 => 'C:\\laragon\\www\\react\\themes\\classic\\templates\\index.tpl',
      1 => 1660911560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff901c939e11_10838747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145821330062ff901c9341c4_00088227', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_139563401962ff901c934dc2_58578688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_168256682062ff901c937e00_95529829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_117334175062ff901c936d60_33383353 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168256682062ff901c937e00_95529829', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_145821330062ff901c9341c4_00088227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_145821330062ff901c9341c4_00088227',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_139563401962ff901c934dc2_58578688',
  ),
  'page_content' => 
  array (
    0 => 'Block_117334175062ff901c936d60_33383353',
  ),
  'hook_home' => 
  array (
    0 => 'Block_168256682062ff901c937e00_95529829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139563401962ff901c934dc2_58578688', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117334175062ff901c936d60_33383353', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
