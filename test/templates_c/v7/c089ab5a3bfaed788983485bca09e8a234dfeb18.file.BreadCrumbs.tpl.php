<?php /* Smarty version Smarty-3.1.7, created on 2017-08-05 06:37:13
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/BreadCrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21077537895985679908a907-22320612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c089ab5a3bfaed788983485bca09e8a234dfeb18' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/BreadCrumbs.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21077537895985679908a907-22320612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BREADCRUMB_ID' => 0,
    'BREADCRUMB_LABELS' => 0,
    'INDEX' => 0,
    'FIRSTBREADCRUMB' => 0,
    'ADDTIONALCLASS' => 0,
    'ACTIVESTEP' => 0,
    'CRUMBID' => 0,
    'ZINDEX' => 0,
    'STEPTEXT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_598567991076a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_598567991076a')) {function content_598567991076a($_smarty_tpl) {?>

<div id="<?php echo $_smarty_tpl->tpl_vars['BREADCRUMB_ID']->value;?>
" class="breadcrumb">
	<ul class="crumbs">
		<?php $_smarty_tpl->tpl_vars['ZINDEX'] = new Smarty_variable(9, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['STEPTEXT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STEPTEXT']->_loop = false;
 $_smarty_tpl->tpl_vars['CRUMBID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['STEPTEXT']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['STEPTEXT']->iteration=0;
 $_smarty_tpl->tpl_vars['STEPTEXT']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['STEPTEXT']->key => $_smarty_tpl->tpl_vars['STEPTEXT']->value){
$_smarty_tpl->tpl_vars['STEPTEXT']->_loop = true;
 $_smarty_tpl->tpl_vars['CRUMBID']->value = $_smarty_tpl->tpl_vars['STEPTEXT']->key;
 $_smarty_tpl->tpl_vars['STEPTEXT']->iteration++;
 $_smarty_tpl->tpl_vars['STEPTEXT']->index++;
 $_smarty_tpl->tpl_vars['STEPTEXT']->first = $_smarty_tpl->tpl_vars['STEPTEXT']->index === 0;
 $_smarty_tpl->tpl_vars['STEPTEXT']->last = $_smarty_tpl->tpl_vars['STEPTEXT']->iteration === $_smarty_tpl->tpl_vars['STEPTEXT']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['first'] = $_smarty_tpl->tpl_vars['STEPTEXT']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumbLabels']['last'] = $_smarty_tpl->tpl_vars['STEPTEXT']->last;
?>
			<?php $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['index'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_variable($_smarty_tpl->tpl_vars['INDEX']->value+1, null, 0);?>
			<li class="step <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['first']){?> first <?php echo $_smarty_tpl->tpl_vars['FIRSTBREADCRUMB']->value;?>
 <?php }else{ ?> <?php echo $_smarty_tpl->tpl_vars['ADDTIONALCLASS']->value;?>
 <?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumbLabels']['last']){?> last <?php }?> <?php if ($_smarty_tpl->tpl_vars['ACTIVESTEP']->value==$_smarty_tpl->tpl_vars['INDEX']->value){?>active<?php }?>"
				id="<?php echo $_smarty_tpl->tpl_vars['CRUMBID']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
" style="z-index:<?php echo $_smarty_tpl->tpl_vars['ZINDEX']->value;?>
">
				<a href="#">
					<span class="stepNum"><?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
</span>
					<span class="stepText" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['STEPTEXT']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
				</a>
			</li>
			<?php $_smarty_tpl->tpl_vars['ZINDEX'] = new Smarty_variable($_smarty_tpl->tpl_vars['ZINDEX']->value-1, null, 0);?>
		<?php } ?>
	</ul>
</div><?php }} ?>