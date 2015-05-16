<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'ParticipantesActividadess'=>array('index'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List ParticipantesActividadess', 'url'=>array('index')),
	//array('label'=>'Create ParticipantesActividades', 'url'=>array('create')),
);

/*Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('participantesActividadesgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Registrar Actividad</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'participantesActividadesgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id_participante',
        'id_actividad',
        'asistio',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("participantesActividades/view/", 
                                            array("id_participante"=>$data->id_participante, "id_actividad"=>$data->id_actividad
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("participantesActividades/update/", 
                                            array("id_participante"=>$data->id_participante, "id_actividad"=>$data->id_actividad
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("participantesActividades/delete/", 
                                            array("id_participante"=>$data->id_participante, "id_actividad"=>$data->id_actividad
											))',
                ),
            ),
        ),
    ),
)); ?>
