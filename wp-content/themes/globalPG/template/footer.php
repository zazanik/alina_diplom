</div><!--wrapper-->
<footer>
    <!--phone-footer-->
    <div class="phone-footer">
        <div class="container">
            <a href="tel:+995685109885"> + 995 685 10 98 85</a>
            <a href="tel: +995571088834"> + 995 571 08 88 34</a>
            <a href="mailto: info@globalpg.ru"> info@globalpg.ru</a>
        </div>
    </div>
    <div class="computer-footer">
        <div class="container">
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Выставки</a></li>
                <li><a href="#">КОМПАНИИ ПО НЕДВИЖИМОСТИ</a></li>
                <li><a href="#">Партнеры</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="global-copyright">
        <hr>
        <div>Создание сайта © Global Vision</div>
    </div>



    <!--modal window for partner detail form-->

    <div class="partners-details-form">
        <div class="container">
            <div class="modal_form">
<!--                <span class="modal_close"></span>-->
                <form action="#">
                    <h3>Запрос на сотрудничество</h3>
                    <label for="name-of-company">Название компании*</label>
                    <input required id="name-of-company" type="text" placeholder=""/>
                    <label for="LFF">Контактное лицо (ФИО)*</label>
                    <input required id="LFF" type="text" placeholder=""/>
                    <label for="telephon">Телефон*</label>
                    <input required id="telephon" type="tel" placeholder=""/>
                    <label for="email">E-mail*</label>
                    <input required id="email" type="email" placeholder=""/>
                    <textarea name="you message" id="message"></textarea>
                    <input class="button" type="submit" value="Отправить"/>
                </form>
            </div>
            <div class="overlay"></div>
        </div>
    </div>

    <!--modal window for ЗАказать услугу-->
    <div class="partners-details-form">
        <div class="container">
            <div class="modal_form">
                <!--                <span class="modal_close"></span>-->
                <form action="#">
                    <h3>Запрос на сотрудничество</h3>
                    <label for="name-of-company">Название компании*</label>
                    <input required id="name-of-company" type="text" placeholder=""/>
                    <label for="LFF">Контактное лицо (ФИО)*</label>
                    <input required id="LFF" type="text" placeholder=""/>
                    <label for="telephon">Телефон*</label>
                    <input required id="telephon" type="tel" placeholder=""/>
                    <label for="email">E-mail*</label>
                    <input required id="email" type="email" placeholder=""/>
                    <textarea name="you message" id="message"></textarea>
                    <input class="button" type="submit" value="Отправить"/>
                </form>
            </div>
            <div class="overlay"></div>
        </div>
    </div>

    <!--modal window for Запрос на участие -->

    <div class="partners-details-form request-to-participate">
        <div class="container">
            <div class="modal_form">
                <!--                <span class="modal_close"></span>-->
                <form action="#">
                    <h3>регистрация на участие в выставке</h3>
                    <label for="name-of-company">Название компании*</label>
                    <input required id="name-of-company" type="text" placeholder=""/>
                    <label for="LFF">Контактное лицо (ФИО)*</label>
                    <input required id="LFF" type="text" placeholder=""/>
                    <label for="telephon">Телефон*</label>
                    <input required id="telephon" type="tel" placeholder=""/>
                    <label for="email">E-mail*</label>
                    <input required id="email" type="email" placeholder=""/>
                    <label for="size">Размер желаемой выставочной площади*</label>
                    <input required id="size" type="text" placeholder=""/>
                    <label for="message">Ваше сообщение</label>
                    <textarea name="you message" id="message"></textarea>
                    <input class="button" type="submit" value="Отправить"/>
                </form>
            </div>
            <div class="overlay"></div>
        </div>
    </div>

    <!--modal window for Посетить выставку -->

    <div class="partners-details-form visit-participate">
        <div class="container">
            <div class="modal_form">
                <!--                <span class="modal_close"></span>-->
                <form action="#">
                    <h3>регистрация на посещение выставке</h3>
                    <label for="LFF">ФИО*</label>
                    <input required id="LFF" type="text" placeholder=""/>
                    <label for="telephon">Телефон*</label>
                    <input required id="telephon" type="tel" placeholder=""/>
                    <label for="email">E-mail*</label>
                    <input required id="email" type="email" placeholder=""/>
                    <label for="size">Цель посещения выставки*</label>
                    <input required id="size" type="text" placeholder=""/>
                    <label for="message">Ваше сообщение</label>
                    <textarea name="you message" id="message"></textarea>
                    <input class="button" type="submit" value="Отправить"/>
                </form>
            </div>
            <div class="overlay"></div>
        </div>
    </div>

</footer>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
</body>
</html>