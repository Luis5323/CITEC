<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParticipantesActividadess'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List ParticipantesActividades', 'url'=>array('index')),
	array('label'=>'Create ParticipantesActividades', 'url'=>array('create')),
	array('label'=>'Update ParticipantesActividades', 'url'=>array('update', 'id_participante'=>$model->id_participante, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Delete ParticipantesActividades', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id_participante'=>$model->id_participante, 'id_actividad'=>$model->id_actividad),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ParticipantesActividades', 'url'=>array('admin')),
);
?>

<h1>View ParticipantesActividades</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_participante',
		'id_actividad',
		'asistio',
	),
)); ?>
