<link rel="stylesheet" href="../../styles/index.css">
<link rel="stylesheet" href="../../styles/top_menu.css">
<link rel="stylesheet" href="../../styles/mainMenu.css">
<link rel="stylesheet" href="../../styles/dialog.css">
<link rel="stylesheet" href="../../styles/header.css">
<link rel="stylesheet" href="../../styles/category_page.css">
<link rel="stylesheet" href="../../styles/profile.css">
<link rel="stylesheet" href="../../styles/responsive.css">
<link rel="stylesheet" href="../../styles/footer.css">
<link rel="stylesheet" href="../../styles/header_responsive2.css">

<?php
include_once '../db/db.php';
include '../additional/dialog.php';
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
}
$value = DB::getValue("SELECT `name` FROM `main_card` WHERE `id` = '$id'");
$image = '/img/category_image/' . $id . '.png';
?>
<?php
include '../header/menu.php';
include '../header/header.php';
include '../header/mainMenu.php';
include '../additional/left_or_right_card.php';
?>
<div id="content">
    <div class="osnova">
        <div class="oknoBg">
            <div class="oknoText">
                <h1><?print_r($value)?></h1>
            </div>
            <div class="lineRight"></div>
            <div class="lineLeft"></div>
            <div class="okno">
                <h1>.</h1>
                <div class="oknoImg"><? echo "<img src='$image'>"?></div>
                <hr class="lineOkno"/>
                <button id="submit-at" class="main-form-at-btn" onclick="window.dialog.showModal();">Уточнить цену</button>
            </div>
        </div>
        <?php
        include '../additional/profile.php';
        ?>
    </div>
</div>
<?php
include '../footer/footer.php';
?>