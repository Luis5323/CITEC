<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	$model->id_comentario=>array('view','id'=>$model->id_comentario),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Comentarios', 'url'=>array('index')),
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
	array('label'=>'Vista de Comentarios', 'url'=>array('view', 'id'=>$model->id_comentario)),
	array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Acutalizar Comentarios <?php echo $model->id_comentario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>