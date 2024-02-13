<?
include_once 'php/db/db.php';
$title = DB::getValue("SELECT `title` FROM `main_page_blok_top` WHERE `id` = '1'");
$text = DB::getValue("SELECT `text` FROM `main_page_blok_top` WHERE `id` = '1'");
?>
<div class="index_additional_top">
    <h1><? echo $title; ?></h1>
    <hr/>
    <?
    $pred=explode('.',$text);
    for ($i = 0; $i < count($pred)-1; $i++) {
        ?>
        <h2><? echo $pred[$i]; ?></h2>
        <hr/>
        <?
    }
    ?>
</div>
