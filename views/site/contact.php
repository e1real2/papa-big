<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use app\models\Contact;
$this->title = 'НАШИ КОНТАКТЫ';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $contact = Contact::find()->orderBy(['id'=>SORT_DESC])->one();?>
<div class="site-contact">
    <h2><?= Html::encode($this->title) ?></h2>
    <div class="row">
        <div class="col">
            <p><?=$contact->description;?></p>
        </div>
    </div>
        <div class="row">
            <div class="col"><div id="map" style="width:100%; height:400px"></div></div>
        </div>
</div>
<script type="text/javascript">
    var map;

    DG.then(function () {
        map = DG.map('map', {
            center: [<?=$contact->map_lat;?>, <?=$contact->map_long;?>],
            zoom: 13
        });
        DG.marker([<?=$contact->map_lat;?>,<?=$contact->map_long;?>]).addTo(map).bindPopup(<?=$contact->map_text;?>);
    });
</script>
