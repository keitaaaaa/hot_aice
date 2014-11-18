<h1>Photos upload</h1>

<?php echo $this->Form->create('Photo', array('action' => 'add', 'type' => 'file')); ?>
<fieldset>
<legend><?php echo __('Add Upload'); ?></legend>
<?php echo $this->Form->file('file'); ?>
</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
