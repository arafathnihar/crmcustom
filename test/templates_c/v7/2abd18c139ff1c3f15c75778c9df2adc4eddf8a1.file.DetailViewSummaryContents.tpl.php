<?php /* Smarty version Smarty-3.1.7, created on 2017-08-05 06:16:03
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1090573411598562a303db38-94027505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2abd18c139ff1c3f15c75778c9df2adc4eddf8a1' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Project/DetailViewSummaryContents.tpl',
      1 => 1501698721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1090573411598562a303db38-94027505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_598562a304d58',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598562a304d58')) {function content_598562a304d58($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>