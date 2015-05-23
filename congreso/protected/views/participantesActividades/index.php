<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParticipantesActividadess',
);

$this->menu=array(
	array('label'=>'Create ParticipantesActividades', 'url'=>array('create')),
	array('label'=>'Manage ParticipantesActividades', 'url'=>array('admin')),
);
?>

<h1>ParticipantesActividadess</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
