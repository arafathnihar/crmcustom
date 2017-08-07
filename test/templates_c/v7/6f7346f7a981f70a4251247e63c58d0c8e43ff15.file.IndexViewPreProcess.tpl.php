<?php /* Smarty version Smarty-3.1.7, created on 2017-08-05 06:37:12
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4993981459856798cf01a3-26972629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f7346f7a981f70a4251247e63c58d0c8e43ff15' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Reports/IndexViewPreProcess.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4993981459856798cf01a3-26972629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59856798d42f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59856798d42f6')) {function content_59856798d42f6($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate ("modules/Reports/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div class="clearfix main-container"><div><div class="editViewPageDiv viewContent"><div class="reports-content-area"><?php }} ?>