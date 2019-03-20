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
    <p class="h3 text-center"><?=$this->title;?></p>
    <div class="divider div-transparent m-2"></div>
    <div class="row">
        <div class="col" >
            <p><?=$contact->description;?></p>
        </div>
    </div>
        <div class="row">
            <div class="col"><div id="map" style="width:100%; height:400px"></div></div>
        </div>
</div>
<script type="text/javascript">
    var map;
    let lat = "<?=$contact->map_lat;?>";
    let long = "<?=$contact->map_long;?>";
    let text = "<?=$contact->map_text;?>";

        DG.then(function () {
            map = DG.map('map', {
                center: [lat, long],
                zoom: 16
            });
            DG.marker([lat,long]).addTo(map).bindPopup(text);
        });


</script>
