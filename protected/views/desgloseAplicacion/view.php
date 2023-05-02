<?php
/* @var $this DesgloseAplicacionController */
/* @var $model DesgloseAplicacion */

$this->breadcrumbs=array(
	'Desglose aplicacions'=>array('index'),
	'Detalle',
);
?>

<?php $this->headers = ' Detalle Desglose aplicacion'; ?>
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
			'name'=>'aplicacion_id',
			'type'=>'raw',
			'value'=>$model->Aplicacions->aplicacion,
		),
				array(
			'name'=>'item_id',
			'type'=>'raw',
			'value'=>$model->Items->item,
		),
				'respuesta',
		'observaciones',
	),
)); ?>
<br>