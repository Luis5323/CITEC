<?php
/* @var $this ComentariosController */
/* @var $model Comentarios */

$this->breadcrumbs=array(
	'Comentarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista de Comentarios', 'url'=>array('index')),
	array('label'=>'Crear Comentarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comentarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Comentarios</h1>

<div class="col-md-6">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comentarios-grid',
	'dataProvider'=>$modelGrid->search(),
	'filter'=>$modelGrid,
	'columns'=>array(
		'id_comentario',
		'nombre',
		'comentario',
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
    <h3 class="panel-title">Nuevo Comentario</h3>
  </div>
  <div class="panel-body">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
  </div>
</div>

</div>

