<?php include "template/header.php"; ?>
<a class="up-line" href="javascript:history.back();">
    <div class="container">
        <div class="text">Назад</div>
    </div>
</a>

<div class="contact-us">
    <?php include "template/baner-top.php"?>
    <div class="container">
        <div class="clearfix">
            <div class="info-cont">
                <h2>Адреса</h2>
                <p>Киев</p>
                <p>ул. Красноармейская 10</p>
                <p>офис 120</p>
                <p>02094</p>
                <h2>e-mail</h2>
                <p>global@gmail.com</p>
                <p>global@gmail.com</p>
                <h2>телефон</h2>
                <p>+ 380 93 65 74 576</p>
                <p> + 380 93 65 74 576</p>
                <p>044 456 33 54</p>
                <p>044 456 33 54</p>
            </div>
            <div class="form-cont clearfix">
                <h2>форма обратной связи</h2>
                <form action="#">
                    <label for="LFF">ФИО*</label>
                    <input required id="LFF" type="text" placeholder=""/>
                    <label for="telephon">Телефон*</label>
                    <input required id="telephon" type="tel" placeholder=""/>
                    <label for="email">E-mail*</label>
                    <input required id="email" type="email" placeholder=""/>
                    <label for="message">Ваше сообщение</label>
                    <textarea name="you message" id="message"></textarea>
                    <div class="text">*Поле обязательно для заполнения</div>
                    <input class="button" type="submit" value="Отправить"/>
                </form>
            </div>
        </div>
        <div id="map" class="clearfix">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1123.0110860318046!2d37.673889257064644!3d55.74074373839797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1458566255032"  width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php include "template/baner-bottom.php"; ?>
<?php include "template/footer.php"; ?>