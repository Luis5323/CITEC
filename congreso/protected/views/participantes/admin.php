<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participantes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Participantes</h1>

<div class="col-md-6">

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participantes-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_participante',
		'nombres',
		'apellidos',
		'email',
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
    <h3 class="panel-title">Nuevo Participante</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>

</div>

