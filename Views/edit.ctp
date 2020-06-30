<h3>Update</h3>
<?php echo $this->Form->create($post);?>
<?php echo $this->Form->input('title');?>

<h3>Description</h3>
<?php echo $this->Form->input('description');?>

<?php echo $this->Form->button(__('Update Post'));?>
<?php echo $this->Form->end();?>
