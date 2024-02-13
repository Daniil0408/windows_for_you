<?
include_once 'php/db/db.php';
$title_top = DB::getValue("SELECT `title_top` FROM `main_page_blok_lower_title` WHERE `id` = '1'");
$title_lower = DB::getValue("SELECT `title_lower` FROM `main_page_blok_lower_title` WHERE `id` = '1'");
?>
<div class="additional">
    <div class="additional_text">
        <h1><? echo $title_top; ?></h1>
    </div>
<?
for ($id = 1; $id < 7; $id++) {
    $title1 = DB::getValue("SELECT `title` FROM `main_page_blok_lower` WHERE `id` = '$id'");
    $text1 = DB::getValue("SELECT `text` FROM `main_page_blok_lower` WHERE `id` = '$id'");
    $id++;
    $title2 = DB::getValue("SELECT `title` FROM `main_page_blok_lower` WHERE `id` = '$id'");
    $text2 = DB::getValue("SELECT `text` FROM `main_page_blok_lower` WHERE `id` = '$id'");
?>
    <div class="additional_blok2">
        <h1><? echo $title1; ?></h1>
        <hr/>
        <h2><? echo $text1; ?></h2>
    </div>
    <div class="additional_blok">
        <h1><? echo $title2; ?></h1>
        <hr/>
        <h2><? echo $text2; ?></h2>
    </div>
<?
}
?>
    <div class="additional_text2">
        <h1><? echo $title_lower; ?></h1>
    </div>
</div>
