<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParticipantesActividadess'=>array('index'),
	'View'=>array('view', 'id_participante'=>$model->id_participante, 'id_actividad'=>$model->id_actividad),
	'Update',
);

$this->menu=array(
	array('label'=>'List ParticipantesActividades', 'url'=>array('index')),
	array('label'=>'Create ParticipantesActividades', 'url'=>array('create')),
	array('label'=>'View ParticipantesActividades', 'url'=>array('view', 'id_participante'=>$model->id_participante, 'id_actividad'=>$model->id_actividad)),
	array('label'=>'Manage ParticipantesActividades', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
