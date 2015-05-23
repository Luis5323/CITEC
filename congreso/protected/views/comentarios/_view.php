<?php
/* @var $this ComentariosController */
/* @var $data Comentarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comentario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_comentario), array('view', 'id'=>$data->id_comentario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentario')); ?>:</b>
	<?php echo CHtml::encode($data->comentario); ?>
	<br />


</div>