<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Comentarios', 'url'=>array('index')),
	array('label'=>'Administrar Comentarios', 'url'=>array('admin')),
);
?>

<h1>Crear Comentarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>