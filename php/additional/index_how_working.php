<link rel="stylesheet" href="/styles/index_how_working.css">
<?
include_once 'php/db/db.php';
$title = DB::getValue("SELECT `title` FROM `main_page_blok_top` WHERE `id` = '1'");
$text = DB::getValue("SELECT `text` FROM `main_page_blok_top` WHERE `id` = '1'");
?>
<div class="howWorking">
    <table>
        <tr><th><? echo $title; ?></th></tr>
    <?
    $pred=explode('.',$text);
    for ($i = 0; $i < count($pred)-1; $i++) {
        ?>
        <tr><td><? echo $pred[$i]; ?></td></tr>
        <?
    }
    ?>
    </table>
</div>