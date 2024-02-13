<script type="text/javascript" src="/js/phone_mask.js"></script>
<div id="wrapper">
    <div id="header"></div>
    <div id="left">
        <div class="leftBlok">
            <h2>Скидки</h2>
            <h3>Пенсионерам</h3>
            <hr/>
            <h3>Инвалидам</h3>
            <hr/>
            <h3>Многодетным</h3>
            <hr/>
            <h3>Участникам боевых действий</h3>
            <hr/>
            <button id="submit-at" class="form-at-btn" onclick="window.dialog.showModal();">Подробнее</button>
        </div>
        <div class="leftBlok">
            <h2>Оплата</h2>
            <hr/>
            <h3>Наличные</h3>
            <hr/>
            <h3>Терминал</h3>
            <hr/>
            <h3>QR-код</h3>
            <hr/>
            <h3>Рассрочка</h3>
            <hr/>
            <h3>Кредит</h3>
            <button id="submit-at" class="form-at-btn" onclick="window.dialog.showModal();">Подробнее</button>
        </div>
        <div class="leftBlok">
            <h2>Дополнительно</h2>
            <hr/>
            <h3>Каждому покупателю сертификат со скидкой на следующий заказ, который можно подарить близким</h3>
            <button id="submit-at" class="form-at-btn" onclick="window.dialog.showModal();">Подробнее</button>
        </div>
    </div>

    <div id="right">
        <?php
        if(!isset($_POST['name']) and !isset($_POST['user_phone'])){
            ?> <form class="rightBlok" action="/index.php" method="post">
                <h2>Записаться на замер</h2>
                <h3>Имя</h3>
                <input type="text" name="name" placeholder="Имя" required>
                <h3>Номер телефона</h3>
                <input value="" class="tel" name="user_phone" placeholder="+7 (***) *** ** **" required>
                <input class="emailBtn" type="submit" value="Отправить">
            </form> <?php
        } else {
            require_once('php/phpmailer/PHPMailerAutoload.php');
            $mail = new PHPMailer;
            $mail->CharSet = 'utf-8';
            
            $name = $_POST['name'];
            $phone = $_POST['user_phone'];
            
            $mail->isSMTP();
            $mail->Host = 'smtp.timeweb.ru';  																							// Specify main and backup SMTP servers
            $mail->SMTPAuth = true;
            $mail->Username = '*********';
            $mail->Password = '*********';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            $mail->setFrom('*********');
            $mail->addAddress('*********');

            $mail->isHTML(true);
            
            $mail->Subject = 'Заявка с сайта "Окна для вас"';
            $mail->Body    = 'Имя: ' .$name . ' | Телефон: ' .$phone;
            $mail->AltBody = '';
            
            if(!$mail->send()) {
            echo 'Error';
            } else {
            echo '<form class="rightBlok"><h2>Заявка успешно оставлена</h2></form>';
            }
        }
        ?>
        <div class="rightBlok">
            <h2>Услуги</h2>
            <h3>Бесплатнай замер</h3>
            <hr/>
            <h3>Бесплатный расчёт конструкций</h3>
            <hr/>
            <h3>Бесплатная доставка</h3>
            <hr/>
            <h3>Монтаж и демонтаж</h3>
            <hr/>
            <h3>Подъем на этаж</h3
            <hr/>
            <button id="submit-at" class="form-at-btn" onclick="window.dialog.showModal();">Подробнее</button>
        </div>
    </div>