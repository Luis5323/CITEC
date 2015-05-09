<?php
/* @var $this ActividadesController */
/* @var $model Actividades */

$this->breadcrumbs=array(
	'Actividades'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Actividades', 'url'=>array('index')),
	array('label'=>'Create Actividades', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actividades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actividades-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_actividad',
		'id_tipo',
		'id_evento',
		'nombre',
		'fecha_inicio',
		'fecha_fin',
		/*
		'lugar',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
</div>

<div class="col-md-5">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Nueva Actividad</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>

</div>
