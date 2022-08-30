<?php
/* Smarty version 3.1.43, created on 2022-08-19 16:29:00
  from 'C:\laragon\www\react\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ff901cbd6d33_65008282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c2b67500fa15ff6430dd1b0a400f0ff8e85dda2' => 
    array (
      0 => 'C:\\laragon\\www\\react\\themes\\classic\\templates\\page.tpl',
      1 => 1660911561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff901cbd6d33_65008282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209563812762ff901cad2e57_68792178', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_10217364362ff901cad4673_21063725 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_195030517662ff901cad3a36_43520098 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10217364362ff901cad4673_21063725', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_108097543162ff901cbd1636_25389074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_212824636762ff901cbd2776_98165990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_22397639062ff901cbd08b9_61248783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108097543162ff901cbd1636_25389074', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212824636762ff901cbd2776_98165990', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_123705701062ff901cbd4d79_62237540 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_83995096862ff901cbd41f5_45886336 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123705701062ff901cbd4d79_62237540', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_209563812762ff901cad2e57_68792178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209563812762ff901cad2e57_68792178',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_195030517662ff901cad3a36_43520098',
  ),
  'page_title' => 
  array (
    0 => 'Block_10217364362ff901cad4673_21063725',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_22397639062ff901cbd08b9_61248783',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_108097543162ff901cbd1636_25389074',
  ),
  'page_content' => 
  array (
    0 => 'Block_212824636762ff901cbd2776_98165990',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_83995096862ff901cbd41f5_45886336',
  ),
  'page_footer' => 
  array (
    0 => 'Block_123705701062ff901cbd4d79_62237540',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195030517662ff901cad3a36_43520098', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22397639062ff901cbd08b9_61248783', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83995096862ff901cbd41f5_45886336', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
