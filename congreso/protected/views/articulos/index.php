<?php
/* @var $this ArticulosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articuloses',
);

$this->menu=array(
	array('label'=>'Crear Articulos', 'url'=>array('create')),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Articuloses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
