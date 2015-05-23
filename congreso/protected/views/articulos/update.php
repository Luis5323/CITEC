<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articuloses'=>array('index'),
	$model->id_articulo=>array('view','id'=>$model->id_articulo),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Articulos', 'url'=>array('index')),
	array('label'=>'Crear Articulos', 'url'=>array('create')),
	array('label'=>'Vista de Articulos', 'url'=>array('view', 'id'=>$model->id_articulo)),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Acutalizar Articulos <?php echo $model->id_articulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>