<?php
use app\models\SliderItems;

?>
<section class="carousel-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100" src="--><?//=Yii::$app->request->baseUrl?><!--/img/5.jpeg" alt="Second slide">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Слайд 2</h5>-->
<!--                    <p>Описание</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="carousel-item">-->
<!--                <img class="d-block w-100 h-100" src="--><?//=Yii::$app->request->baseUrl?><!--/img/3.jpeg" alt="Third slide">-->
<!--                <div class="carousel-caption d-none d-md-block">-->
<!--                    <h5>Слайд 3</h5>-->
<!--                    <p>Описание</p>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<section class="best-section">
    <div class="row p-4">
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-white">Card title</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-white">Card title</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-white">Card title</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="history-section pt-2">
    <div class="history-text p-2">
        <h3 class="text-center">Наша история, традиции, технологии</h3>
        <p class="text-center">Посмотрите почему миллионы профессионалов по всему миру выбрали инструмент DEWALT. На
            основе богатой истории и проверенного качества мы стремимся создавать высокотехнологичные и
            инновационные продукты.</p>
    </div>
    <div class="row p-4">
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-2">
            <div class="card">
                <img class="card-img-top w-100" src="{% static "main/5.jpeg" %}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
            </div>
        </div>
    </div>
</section>