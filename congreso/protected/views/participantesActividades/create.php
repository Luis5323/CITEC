<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParticipantesActividadess'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ParticipantesActividadess', 'url'=>array('index')),
    array('label'=>'Manage ParticipantesActividades', 'url'=>array('admin')),
);
?>

<h1>Create ParticipantesActividades</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model,'id_actividad'=>$id_actividad,
	    	'id_user'=>$id_user)); ?>
