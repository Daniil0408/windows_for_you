<link rel="stylesheet" href="../../styles/index.css">
<link rel="stylesheet" href="../../styles/top_menu.css">
<link rel="stylesheet" href="../../styles/mainMenu.css">
<link rel="stylesheet" href="../../styles/dialog.css">
<link rel="stylesheet" href="../../styles/header.css">
<link rel="stylesheet" href="../../styles/category_page.css">
<link rel="stylesheet" href="../../styles/lamination.css">
<link rel="stylesheet" href="../../styles/responsive.css">
<link rel="stylesheet" href="../../styles/footer.css">
<?php
include '../additional/dialog.php';
include '../header/menu.php';
include '../header/header.php';
include '../header/mainMenu.php';
include '../additional/left_or_right_card.php';
?>
<div id="content">
    <div class="osnova">
        <div class="oknoBg">
            <div class="oknoText">
                <h1>Ламинация профиля</h1>
            </div>
            <div class="lineRightLamination"></div>
            <div class="lineLeftLamination"></div>
            <div class="lamination">
                <div class="oknoImg"><img src='/img/category_image/lamination.png'></div>
                <hr class="lineLamination"/>
                <button id="submit-at" class="main-form-at-btn" onclick="window.dialog.showModal();">Уточнить цвет</button>
            </div>
        </div>
    </div>
</div>
<?php
include '../footer/footer.php';
?>