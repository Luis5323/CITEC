<?php echo $msg;?>

<div class="form">
<?php $form = $this->beginWidget('CActiveForm',
	array(
		'method' => 'POST',
		'action' => Yii::app()->createUrl('site/recuperarpassword'),
		'enableClientValidation' => true,
		'clientOptions'=> array(
			'validateOnSubmit'=>true,
			)
		));

?>
<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	
	<div class="row">
		<?php
		echo $form->labelEx($model, 'captcha');
		$this->widget('CCaptcha',array('buttonLabel'=>'Actualizar Codigo'));
		echo $form->textField($model,'captcha');
		?>
		<div class="text-info">
		por favor, introduce el teexto que ves en la imagen.
		</div>
		<?php echo $form->error($model,'captcha',array('class'=>'text-error'));?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('Recuperar password', array('class'=>'btn btn-primary'));?>
	</div>



<?php $this->endWidget();?>
</div>