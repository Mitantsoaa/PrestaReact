<?php
/* Smarty version 3.1.43, created on 2022-08-19 16:29:00
  from 'C:\laragon\www\react\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62ff901c28df92_46224306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36537e3c7468526b3e970e6c44e42928674ede1b' => 
    array (
      0 => 'C:\\laragon\\www\\react\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1660911560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff901c28df92_46224306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '168699794162ff901c2719d1_14937985';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182895385862ff901c28b4f5_18808654', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_182895385862ff901c28b4f5_18808654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_182895385862ff901c28b4f5_18808654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
