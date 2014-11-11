<?php $this->Html->script('jquery-1.7.2.min', array('inline' => false )); ?>

<h1>Photos</h1>
<?php foreach($photos as $photo): ?>

<?php echo $this->Html->image($photo['Photo']['name'], array('width' => '150')); ?>

<?php $this->Html->scriptStart(array('inline'=>false)); ?>
$(ducument).ready(function(){
});
<?php $this->Html->scriptEnd(); ?>


<?php endforeach; ?>
