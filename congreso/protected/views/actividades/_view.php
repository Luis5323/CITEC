<?php
/* @var $this ActividadesController */
/* @var $data Actividades */
?>


	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_actividad), array('view', 'id'=>$data->id_actividad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_evento')); ?>:</b>
	<?php echo CHtml::encode($data->id_evento); ?>
	<br />-->



<div class="col-md-5">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo CHtml::encode($data->nombre); ?></h3>
  </div>
  <div class="panel-body">
   
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar')); ?>:</b>
	<?php echo CHtml::encode($data->lugar);?>
	
	<br />
	<?php //echo $data->id_actividad;
		//echo Yii::app()->user->id;?>

	<?php echo CHtml::link('Registrarse',array('participantesActividades/create',
                                         'id_actividad'=>$data->id_actividad,
                                         'id_user'=>Yii::app()->user->id,
                                        )); ?>

  </div>
</div>

</div>
