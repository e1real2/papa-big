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
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1 title">
            <h2>Каталог</h2>
        </div>
    </div>
    <?php $categoryes = Category::find()->all(); ?>

    <div class="row">
        <div class="col-sm-12▌ col-md-12 col-lg-12">
            <?php if($categoryes):?>
        <?php foreach ($categoryes as $category):?>
            <figure class="new_card">
                <img src="<?=$category->imgUrl();?>" alt="sample71"/>
                <figcaption>
                    <h3><?=$category->name;?></h3>
                    <p>
                        <?=$category->description;?>
                    </p><a href="#">Просмотреть</a>
                </figcaption>
            </figure>
        <?php endforeach;?>
            <?php endif;?>
        </div>
    </div>
</section>

<style>
    /* заголовок */
    @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900);
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,800);
    .title h1 {
        color:#FFF;
        font-weight:800;
        font-family: 'Source Sans Pro', sans-serif;
        text-transform:uppercase;
        dispay:block;
        width:100%;
        text-align:center;
        padding:.8em 0;
        margin:5em 0 0;
        border:solid 1px rgba(255,255,255,.2);
        position:relative;
        text-shadow:0px 1px 2px #000;
    }

    .title h1:before, .title h1:after, .title h1 span:before, .title h1 span:after {
        content:"";
        display:block;
        width:16px;
        height:16px;
        position:absolute;
    }
    .title h1:before {
        border-right:solid 1px #FFF;
        border-bottom:solid 1px #FFF;
        left:-16px;
        top:-16px;
    }
    .title h1:after {
        border-left:solid 1px #FFF;
        border-bottom:solid 1px #FFF;
        right:-16px;
        top:-16px;
    }
    .title h1 span:before {
        border-right:solid 1px #FFF;
        border-top:solid 1px #FFF;
        left:-16px;
        bottom:-16px;
    }
    .title h1 span:after {
        border-left:solid 1px #FFF;
        border-top:solid 1px #FFF;
        right:-16px;
        bottom:-16px;
    }
    /* заголовок */

    figure.new_card {
        display: inline;
        font-family: 'Raleway', Arial, sans-serif;
        position: relative;
        overflow: hidden;
        margin: 3px;
        min-width: 220px;
        max-width: 310px;
        width: 100%;
        background: #000000;
        color: #333;
        text-align: left;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    }
    figure.new_card * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
    }
    figure.new_card img {
        max-width: 100%;
        vertical-align: top;
    }
    figure.new_card figcaption {
        position: relative;
        background-color: #ffffff;
        padding: 20px 25px 50px;
    }
    figure.new_card h3 {
        position: absolute;
        bottom: 100%;
        text-transform: uppercase;
        padding: 0px 25px;
        line-height: 44px;
        margin: 0;
        left: 0;
        font-weight: 400;
        background-color: #000000;
        color: #ffffff;
    }
    figure.new_card h3 span {
        font-weight: 800;
    }
    figure.new_card h3:before {
        position: absolute;
        left: 100%;
        border-style: solid;
        border-width: 44px 0 0 12px;
        border-color: transparent transparent transparent #000000;
        content: '';
        top: 0;
    }
    figure.new_card p {
        font-size: 0.8em;
        font-weight: 500;
        text-align: left;
        margin: 0;
        line-height: 1.6em;
    }
    figure.new_card .price {
        position: absolute;
        top: 0;
        right: 0;
        color: #ffffff;
        background-color: #000000;
        padding: 0 10px;
        line-height: 40px;
        font-weight: 800;
    }
    figure.new_card .price:before {
        position: absolute;
        right: 100%;
        border-style: solid;
        border-width: 0 12px 40px 0;
        border-color: transparent #000000 transparent;
        content: '';
        top: 0;
    }
    figure.new_card a {
        text-decoration: none;
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: #000000;
        line-height: 40px;
        padding: 0 10px;
        color: #ffffff;
        font-weight: 800;
        font-size: 0.9em;
        text-transform: uppercase;
    }
    figure.new_card a:before {
        position: absolute;
        right: 100%;
        border-style: solid;
        border-width: 0 0 40px 12px;
        border-color: transparent transparent #000000;
        content: '';
        top: 0;
    }
    figure.new_card.blue {
        background-color: #2472a4;
    }
    figure.new_card.blue h3,
    figure.new_card.blue a,
    figure.new_card.blue .price {
        background-color: #2472a4;
    }
    figure.new_card.blue .price:before {
        border-color: transparent #2472a4 transparent;
    }
    figure.new_card.blue h3:before {
        border-color: transparent transparent transparent #2472a4;
    }
    figure.new_card.blue a:before {
        border-color: transparent transparent #2472a4;
    }
    figure.new_card.red {
        background-color: #ab3326;
    }
    figure.new_card.red h3,
    figure.new_card.red a,
    figure.new_card.red .price {
        background-color: #ab3326;
    }
    figure.new_card.red .price:before {
        border-color: transparent #ab3326 transparent;
    }
    figure.new_card.red h3:before {
        border-color: transparent transparent transparent #ab3326;
    }
    figure.new_card.red a:before {
        border-color: transparent transparent #ab3326;
    }
    figure.new_card.orange {
        background-color: #d67118;
    }
    figure.new_card.orange h3,
    figure.new_card.orange a,
    figure.new_card.orange .price {
        background-color: #d67118;
    }
    figure.new_card.orange .price:before {
        border-color: transparent #d67118 transparent;
    }
    figure.new_card.orange h3:before {
        border-color: transparent transparent transparent #d67118;
    }
    figure.new_card.orange a:before {
        border-color: transparent transparent #d67118;
    }
    figure.new_card:hover img,
    figure.new_card.hover img {
        -webkit-transform: scale(1.01);
        transform: scale(1.01);
    }

</style>