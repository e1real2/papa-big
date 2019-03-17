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
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?=$category->imgUrl();?>" alt="">
        <div class="card-body">
            <h4 class="h4"><?=$category->name;?></h4>
            <p class="card-text"><?=$category->description;?></p>
        </div>
    </div>
    <?php endforeach;?>
    <?php endif;?>
</section>