<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creator_id')); ?>:</b>
	<?php echo CHtml::encode($data->creator_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('summary')); ?>:</b>
	<?php echo CHtml::encode($data->summary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facility')); ?>:</b>
	<?php echo CHtml::encode($data->facility); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('authors')); ?>:</b>
	<?php echo CHtml::encode($data->authors); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authors_training_level')); ?>:</b>
	<?php echo CHtml::encode($data->authors_training_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('authors_training_affil')); ?>:</b>
	<?php echo CHtml::encode($data->authors_training_affil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mentors')); ?>:</b>
	<?php echo CHtml::encode($data->mentors); ?>
	<br />

	*/ ?>

</div>