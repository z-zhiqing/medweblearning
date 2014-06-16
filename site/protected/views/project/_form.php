<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'enctype' => 'multipart/form-data'
    )
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'creator_id'); ?>
		<?php echo $form->textField($model,'creator_id'); ?>
		<?php echo $form->error($model,'creator_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'summary'); ?>
		<?php echo $form->textField($model,'summary',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'summary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facility'); ?>
		<?php echo $form->textField($model,'facility',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'facility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'authors'); ?>
		<?php echo $form->textField($model,'authors',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'authors'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'authors_training_level'); ?>
		<?php echo $form->textField($model,'authors_training_level',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'authors_training_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'authors_training_affil'); ?>
		<?php echo $form->textField($model,'authors_training_affil',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'authors_training_affil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mentors'); ?>
		<?php echo $form->textField($model,'mentors',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'mentors'); ?>
	</div>

	<div class="row">
			<?php echo $form->labelEx($model,'mentors'); ?>
            <?php
            $this->widget( 'xupload.XUpload', array(
                'url' => Yii::app( )->createUrl( "/site/upload"),
                //our XUploadForm
                'model' => $model,
                //We set this for the widget to be able to target our own form
                'htmlOptions' => array('id'=>'project-form'),
                'attribute' => 'file',
                'multiple' => true,
                //Note that we are using a custom view for our widget
                //Thats becase the default widget includes the 'form' 
                //which we don't want here
                //'formView' => 'application.views.Project._form',
                )    
            );
            ?>
        </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->