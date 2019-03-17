<?php
use app\models\SliderItems;
use app\models\ThreeCard;
use app\models\History;
use app\models\HistoryCards;

?>
<section class="carousel-section">
    <div id="papa-caurosel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#papa-caurosel" data-slide-to="0" class="active"></li>
            <li data-target="#papa-caurosel" data-slide-to="1"></li>
            <li data-target="#papa-caurosel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $slider_items = SliderItems::find()->orderBy(['order_number'=> SORT_ASC])->all();?>
            <?php foreach ($slider_items as $key=>$slider_item):?>
            <div class="carousel-item <?= $key===0 ? 'active' : ''?>">
                <img class="d-block w-100" src="<?= $slider_item->imgUrl() ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?= $slider_item->title; ?></h5>
                    <p><?= $slider_item->description;?></p>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <a class="carousel-control-prev" href="#papa-caurosel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#papa-caurosel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="best-section">
    <div class="row p-4">
        <?php $three_cards = ThreeCard::find()->limit(3)->orderBy(['order_number'=>SORT_ASC, 'id' => SORT_DESC])->all();?>
        <?php if($three_cards):?>
        <?php foreach($three_cards as $three_card):?>
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="<?=$three_card->imgUrl();?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-white"><?=$three_card->title;?></h5>
                    <p style="color: black;"><?=$three_card->description;?></p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <?php endif;?>
    </div>
</section>
<section class="history-section pt-2">
    <?php $history = History::find()->orderBy(['id'=>SORT_DESC])->one();?>
    <div class="history-text p-2">
        <h3 class="text-center"><?=$history ? $history->title : '';?></h3>
        <p class="text-center"><?=$history ? $history->description : '';?></p>
    </div>
    <?php $history_cards = HistoryCards::find()->orderBy(['order_number'=>SORT_ASC])->limit(3)->all();?>
    <div class="row p-4">
        <?php if($history_cards):?>
            <?php foreach($history_cards as $history_card):?>
            <div class="col-md-4 pt-2">
                <a class="history-card-link" href="<?=$history_card->url;?>">
                <div class="card" style="border: none">
                    <img style="border:none;border-top-left-radius: 0;border-top-right-radius: 0;" class="card-img-top w-100" src="<?=$history_card->imgUrl();?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center"><?=$history_card->title;?></h5>
                    </div>
                </div>
                </a>
            </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</section>
<style type="text/css">
    .card-title {
        color: black;
    }
    .history-card-link:hover {
            color: #ffc107;
    }
</style>