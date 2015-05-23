<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,$id_user->nombres); ?>
        <?php echo $form->textField($model,'id_participante',array('value'=>$id_user->id_participante)); ?>
        <?php echo $form->error($model,'id_participante'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,$id_actividad->nombre); ?>
        <?php echo $form->textField($model,'id_actividad',array('value'=>$id_actividad->id_actividad)); ?>
        <?php echo $form->error($model,'id_actividad'); ?>
    </div>
	
	
    <!--<div class="row">
        <?php echo $form->labelEx($model,'asistio'); ?>
        <?php echo $form->textField($model,'asistio'); ?>
        <?php echo $form->error($model,'asistio'); ?>
    </div>-->
	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Registrarse'); ?>
    </div>

    <?php 
        // echo $id_user->nombres; ?>

<?php $this->endWidget(); ?>

</div><!-- form --> 
