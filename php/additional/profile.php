<div class="profile">
    <div class="profileText">
        <h1>Профиль</h1>
    </div>
    <?
    include_once '../db/db.php';
    $id = 1;
    while ($id<6) {
        $name = DB::getValue("SELECT `name` FROM `profile` WHERE `id` = '$id'");
        $size = DB::getValue("SELECT `size` FROM `profile` WHERE `id` = '$id'");
        $name_image = DB::getValue("SELECT `name_image` FROM `profile` WHERE `id` = '$id'");
        $specifications = DB::getValue("SELECT `specifications` FROM `profile` WHERE `id` = '$id'");
        $image = "profile/" . $name_image;
        $id = $id + 1;

    ?>
        <div class="main">
            <img src="/img/<? echo $image ?>">
            <div class="profile-text">
                <h2><? echo $name ?></h2>
                <h3><? echo $size ?></h3>
                <hr class="line"/>
            </div>
            <button id="submit-at" class="profile-form-at-btn">Уточнить цену</button>
        </div>
        <div class="specifications">
            <h1>Характеристики</h1>
            <?

            $pred=explode('.',$specifications);
            for ($i = 0; $i < count($pred)-1; $i++) {
            ?>
                <h2><? echo $pred[$i]; ?></h2>
                <hr/>
            <?
            }
            ?>
        </div>
    <?
    }
    ?>
</div>
