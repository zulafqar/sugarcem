<?php /* Smarty version 2.6.11, created on 2017-03-03 06:17:50
         compiled from modules/ACLRoles/EditAllBody.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/ACLRoles/EditAllBody.tpl', 89, false),)), $this); ?>
<form method='POST' name='EditView' id='ACLEditView'>
<input type='hidden' name='record' value='<?php echo $this->_tpl_vars['ROLE']['id']; ?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='return_record' value='<?php echo $this->_tpl_vars['RETURN']['record']; ?>
'>
<input type='hidden' name='return_action' value='<?php echo $this->_tpl_vars['RETURN']['action']; ?>
'>
<input type='hidden' name='return_module' value='<?php echo $this->_tpl_vars['RETURN']['module']; ?>
'> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " id="SAVE_HEADER"> &nbsp;
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"   class='button' accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" type='button' name='save' value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class='button' onclick='aclviewer.view("<?php echo $this->_tpl_vars['ROLE']['id']; ?>
", "All");'>
</p>
<p>
</p>
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
<TR id="ACLEditView_Access_Header">
<td id="ACLEditView_Access_Header_category"></td>

<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?>
	<td align='center' id="ACLEditView_Access_Header_<?php echo $this->_tpl_vars['ACTION_NAME']; ?>
"><div align='center'><b><?php echo $this->_tpl_vars['ACTION_LABEL']; ?>
</b></div></td>
<?php endforeach; else: ?>

          <td colspan="2">&nbsp;</td>

<?php endif; unset($_from); ?>
</TR>
<?php echo '

	'; ?>

<?php $_from = $this->_tpl_vars['CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CATEGORY_NAME'] => $this->_tpl_vars['TYPES']):
?>


	<?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] != 'Users'): ?>

	<TR id="ACLEditView_Access_<?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
">
	<td nowrap width='1%' id="ACLEditView_Access_<?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
_category"><b>
	<?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] == 'Users'): ?>
	   <?php echo $this->_tpl_vars['MOD']['LBL_USER_NAME_FOR_ROLE']; ?>

	<?php elseif (! empty ( $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] )): ?>
	   <?php echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']]; ?>

	<?php else: ?>
        <?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>

	<?php endif; ?>
	</b></td>
	<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?>
		<?php $this->assign('ACTION_FIND', 'false'); ?>
		<?php $_from = $this->_tpl_vars['TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTIONS']):
?>
			<?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
?>
				<?php if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']): ?>
					<td nowrap width='<?php echo $this->_tpl_vars['TDWIDTH']; ?>
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
_<?php echo $this->_tpl_vars['ACTION_NAME']; ?>
">
					<div  style="display: none" id="<?php echo $this->_tpl_vars['ACTION']['id']; ?>
">
					<?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] == $this->_tpl_vars['APP_LIST']['moduleList']['Users'] && $this->_tpl_vars['ACTION_LABEL'] != $this->_tpl_vars['MOD']['LBL_ACTION_ADMIN']): ?>
					<select DISABLED name='act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' id = 'act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' onblur="document.getElementById('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
');" >
                    <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ACTION']['accessOptions'],'selected' => $this->_tpl_vars['ACTION']['aclaccess']), $this);?>

                    </select>
					<?php else: ?>
					<select name='act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' id = 'act_guid<?php echo $this->_tpl_vars['ACTION']['id']; ?>
' onblur="document.getElementById('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
');" >
					<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['ACTION']['accessOptions'],'selected' => $this->_tpl_vars['ACTION']['aclaccess']), $this);?>

					</select>
					<?php endif; ?>
					</div>
					<?php if ($this->_tpl_vars['ACTION']['accessLabel'] == 'dev' || $this->_tpl_vars['ACTION']['accessLabel'] == 'admin_dev'): ?>
					   <div class="aclAdmin"  id="<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link" onclick="aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
')"><?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
</div>
					<?php else: ?>
                       <div class="acl<?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
"  id="<?php echo $this->_tpl_vars['ACTION']['id']; ?>
link" onclick="aclviewer.toggleDisplay('<?php echo $this->_tpl_vars['ACTION']['id']; ?>
')"><?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
</div>
                    <?php endif; ?>
					</td>
					<?php $this->assign('ACTION_FIND', 'true'); ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['ACTION_FIND'] == 'false'): ?>
			<td nowrap width='<?php echo $this->_tpl_vars['TDWIDTH']; ?>
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $this->_tpl_vars['CATEGORY_NAME']; ?>
_<?php echo $this->_tpl_vars['ACTION_NAME']; ?>
">
			<div><font color='red'>N/A</font></div>
			</td>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</TR>


    <?php endif; ?>


<?php endforeach; else: ?>
    <tr> <td colspan="2">No Actions Defined</td></tr>
<?php endif; unset($_from); ?>
</TABLE>
<div style="padding-top:10px;">
&nbsp;<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " id="SAVE_FOOTER"> &nbsp;
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"   class='button' type='button' name='save' value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class='button' onclick='aclviewer.view("<?php echo $this->_tpl_vars['ROLE']['id']; ?>
", "All");'>
</div>
</form>