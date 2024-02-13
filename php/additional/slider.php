<?php
include_once 'php/db/db.php';
?>
<div class="slider-title">
    <h1>Готовые работы</h1>
</div>
<div class="slider-container">
    <div class="slider">
        <div class="slides">
            <?
            for ($id = 1; $id < 16; $id++) {
                $image = '/img/completed_works/' . $id . '.jpg';
                $id_slides = "slides__" . $id;
                $id_slides_next = "#slides__" . ($id - 1);
                $id_slides_prev =  "#slides__" . ($id + 1);

            ?>
                <div id="<? echo $id_slides ?>" class="slide">
                    <div>
                        <img src="<? echo $image ?>" alt="<? echo $id ?>">
                        <a class="slide__prev" href="<? echo $id_slides_next ?>" title="Next"></a>
                        <a class="slide__next" href="<? echo $id_slides_prev ?>" title="Next"></a>
                    </div>
                </div>
            <?
            }
            ?>
    </div>
</div>