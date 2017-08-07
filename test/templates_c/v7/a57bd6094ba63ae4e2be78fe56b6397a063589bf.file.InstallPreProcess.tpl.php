<?php /* Smarty version Smarty-3.1.7, created on 2017-08-02 19:08:48
         compiled from "/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118944849659821530f0b600-43310236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a57bd6094ba63ae4e2be78fe56b6397a063589bf' => 
    array (
      0 => '/var/www/vtigercrm/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118944849659821530f0b600-43310236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59821530f15f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59821530f15f4')) {function content_59821530f15f4($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>