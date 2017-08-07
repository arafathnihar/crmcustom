<?php /* Smarty version Smarty-3.1.7, created on 2017-08-05 06:16:02
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1601303650598562a2c40d78-95451470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da338689f60e0f1fd802619261478d7757e32b1e' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/ModuleSummaryView.tpl',
      1 => 1501698721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1601303650598562a2c40d78-95451470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_598562a2c55ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598562a2c55ab')) {function content_598562a2c55ab($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>