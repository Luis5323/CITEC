<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_participante'); ?>
		<?php echo $form->textField($model,'id_participante'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'id_actividad'); ?>
		<?php echo $form->textField($model,'id_actividad'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'asistio'); ?>
		<?php echo $form->textField($model,'asistio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
