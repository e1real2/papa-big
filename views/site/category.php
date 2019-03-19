<?php
/**
 * Created by PhpStorm.
 * User: Yesbol
 * Date: 17.03.2019
 * Time: 10:36
 */

use app\models\Category;
?>


<section>
    <h2>Каталог</h2>
    <?php $categoryes = Category::find()->all(); ?>
    <?php if($categoryes):?>
    <?php foreach ($categoryes as $category):?>
    <!--
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?=$category->imgUrl();?>" alt="">
        <div class="card-body">
            <h4 class="h4"><?=$category->name;?></h4>
            <p class="card-text"><?=$category->description;?></p>
        </div>
    </div>-->
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <a href="#fake-url">
                    <img class="card-img-top" src="<?=$category->imgUrl();?>" alt="">
                    <div class="card-body">
                        <h4 class="h4"><?=$category->name;?></h4>
                        <p class="card-text"><?=$category->description;?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <style>
        .card {
            max-width: 18rem;
            margin: 0 auto;
        }
        .card img {
            object-fit: cover;
            height: 18rem;
        }
        .card a {
            text-decoration: none;
            color: #000;
        }
        .card a:hover,.card a:visited, .card a:active {
            color: #343a40;
        }
    </style>
    <?php endforeach;?>
    <?php endif;?>
</section>