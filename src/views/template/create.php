<?php
use yii\helpers\Html;

/**
 * @var yii\web\View                        $this
 * @var navatech\email\models\EmailTemplate $model
 */
$this->title                   = Yii::t('email', 'Create Email Template');
$this->params['breadcrumbs'][] = [
	'label' => $this->title,
	'url'   => ['index'],
];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navatech-email">
	<div class="row">
		<div class="col-sm-12">

			<h1><?= Html::encode($this->title) ?></h1>

			<?= $this->render('_form', [
				'model' => $model,
			]) ?>

		</div>
	</div>
</div>
