<?php /* Smarty version Smarty-3.1.7, created on 2017-08-07 05:01:16
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/PhoneDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4418047975987f41cc0b364-38201782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abc6ae60c244b955b738f324de66967ce97ca4ff' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/uitypes/PhoneDetailView.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4418047975987f41cc0b364-38201782',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5987f41cc3bf6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5987f41cc3bf6')) {function content_5987f41cc3bf6($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?>
<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>

<?php }} ?>