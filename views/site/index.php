<section class="carousel-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?=Yii::$app->request->baseUrl?>/img/2.jpeg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Слайд 1</h5>
                    <p>Описание</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?=Yii::$app->request->baseUrl?>/img/5.jpeg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Слайд 2</h5>
                    <p>Описание</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?=Yii::$app->request->baseUrl?>/img/6.jpeg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Слайд 3</h5>
                    <p>Описание</p>
                </div>
            </div>
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