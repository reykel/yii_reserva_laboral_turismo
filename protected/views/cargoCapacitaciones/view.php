<?php
/* @var $this CargoCapacitacionesController */
/* @var $model CargoCapacitaciones */

$this->breadcrumbs=array(
	'Cargo capacitaciones'=>array('index'),
	'Detalle',
);
?>

<?php $this->headers = ' Detalle Cargo capacitaciones'; ?>
<div  align="left">
    <a id ='btn_return' title='Regresar...' data-toggle='tooltip' href= <?php echo Yii::app()->user->returnUrl; ?> class='btn btn-default btn-round btn-large alert-info'>
        <span><i class="glyphicon glyphicon-chevron-left red"></i></span>
    </a>
</div>
<br>

<?php $this->widget('ext.bootstrap.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'escala_capacitacion_id',
			'type'=>'raw',
			'value'=>$model->Escala_capacitacions->escala_capacitacion,
		),
				array(
			'name'=>'cargo_id',
			'type'=>'raw',
			'value'=>$model->Cargos->cargo,
		),
				'valor',
	),
)); ?>
<br>