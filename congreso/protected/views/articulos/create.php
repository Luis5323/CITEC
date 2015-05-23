<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Articulos', 'url'=>array('index')),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Crear Articulos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>