<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="view">
	<b>
	<?php echo CHtml::link(">> ", array('view', 
	'id_participante'=>$data->id_participante, 'id_actividad'=>$data->id_actividad)); ?><br/></b>
	
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_participante')); ?>:</b>
	<?php echo CHtml::encode($data->id_participante); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('id_actividad')); ?>:</b>
	<?php echo CHtml::encode($data->id_actividad); ?><br />
	
    <b><?php echo CHtml::encode($data->getAttributeLabel('asistio')); ?>:</b>
	<?php echo CHtml::encode($data->asistio); ?><br />
</div>
