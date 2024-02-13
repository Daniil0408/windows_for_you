<script type="text/javascript" src="/js/phone_mask.js"></script>
<dialog id="dialog">
    <h2>Заказать звонок</h2>
    <?php
    if(!isset($_POST['name']) and !isset($_POST['user_phone'])){
        ?> <form action="/index.php" method="post">
            <h3>Имя</h3>
            <input type="text" name="name" placeholder="Имя" required>
            <h3>Номер телефона</h3>
            <input value="" class="tel" type="text" name="user_phone" placeholder="+7 (***) *** ** **" required>
            <input class="emailBtn" type="submit" value="Отправить">
            <h3 class="ili">или</h3>
            <h3 class="ili">Позвонить/написать в What&rsquo;s app</h3>
            <img class="whatsappIcon" src="/img/svg/whatsapp.svg" width="20" height="20" alt="image description">
            <h4 class="whatsappText">What’s app:</h4>
            <a class="whatsapp" href="https://wa.me/номер">+7(902)734-33-1</a>

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
            $mail->Username = '********';
            $mail->Password = '********';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            
            $mail->setFrom('********');
            $mail->addAddress('********');

            $mail->isHTML(true);
            
            $mail->Subject = 'Заявка с сайта "Окна для вас"';
            $mail->Body    = 'Имя: ' .$name . ' | Телефон: ' .$phone;
            $mail->AltBody = '';
            
            if(!$mail->send()) {
            echo 'Error';
            } else {
            echo 'Заявка успешно оставлена';
            }
    }
    ?>
    <button onclick="window.dialog.close();" aria-label="close" class="x">❌</button>
</dialog>
