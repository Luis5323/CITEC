<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->id_comentario,
);

$this->menu=array(
	array('label'=>'Lista de Comentarios', 'url'=>array('index')),
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
	array('label'=>'Actualizar Comentarios', 'url'=>array('update', 'id'=>$model->id_comentario)),
	array('label'=>'Eliminar Comentarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_comentario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Vista de Comentarios #<?php echo $model->id_comentario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_comentario',
		'nombre',
		'comentario',
	),
)); ?>
