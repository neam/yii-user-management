<?
$this->breadcrumbs=array(
	'Manage text settings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

?>

<div class="form">

<? $form=$this->beginWidget('CActiveForm', array(
	'id'=>'yum-text-settings-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('/textsettings/_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?
	$url = array('yumTextSettings/admin');
	echo CHtml::Button(Yum::t( 'Cancel'), array('submit' => $url)); ?>&nbsp;

	<? echo CHtml::submitButton(Yum::t( 'Update')); ?>
	</div>

<? $this->endWidget(); ?>

</div><!-- form -->
