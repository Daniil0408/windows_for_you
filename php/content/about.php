<link rel="stylesheet" href="../../styles/index.css">
<link rel="stylesheet" href="../../styles/top_menu.css">
<link rel="stylesheet" href="../../styles/mainMenu.css">
<link rel="stylesheet" href="../../styles/dialog.css">
<link rel="stylesheet" href="../../styles/header.css">
<link rel="stylesheet" href="../../styles/category_page.css">
<link rel="stylesheet" href="../../styles/about.css">
<link rel="stylesheet" href="../../styles/footer.css">
<link rel="stylesheet" href="../../styles/responsive.css">
<link rel="stylesheet" href="../../styles/header_responsive2.css">

<?php
include_once '../db/db.php';
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
                <h1>О компании</h1>
            </div>
            <div class="lineRight"></div>
            <div class="lineLeft"></div>
            <div class="about">
                <h1>.</h1>
                <h2 class="aboutText">Компания уже 10 лет работает от завода изготовителя с лучшим европейским оборудованием.<br>Продукция проходит контроль качества и имеет сертификаты качества.</h2>
                <hr class="lineAbout"/>
                <button id="submit-at" class="main-form-at-btn" onclick="window.dialog.showModal();">Узнать больше</button>
            </div>
        </div>
    </div>
</div>
<?php
include '../footer/footer.php';
?>
