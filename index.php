<?php include './src/components/TheHeader.php'; ?>

<div class="container">
    <div class="container--holder">
        <div class="t">
            <div class="head">
                <h1>Недвижимость за рубежом</h1>
            </div>
            <div class="body">
                <h2>Для инвестиций, жизни и отдыха</h2>
                <h2>Гарантированный доход <span>6-12%</span> в год</h2>
                <h2>Объекты лучших застройщиков</h2>
            </div>
            <div class="foot">
                <h4>Наши специалисты подберут Вам идеальное предложение</h4>
                <button>Подобрать</button>
            </div>
        </div>
    </div>
</div>

<div class="buy">
    <div class="container">
        <div class="head">
            <div class="buyDiv selected">
                <input type="radio" name="buyrent" class="tt" id="buy">
                <label for="buy">Покупка</label>
            </div>
            <div class="rentDiv">
                <input type="radio" name="buyrent" class="tt" id="rent">
                <label for="rent">Аренда</label>
            </div>
        </div>
        <div class="bottom">
            <div class="fromBuyDiv">
                <div class="complex">
                    <label>Комплекс</label>
                    <select name="e" id="e"></select>
                </div>
                <div class="kvartira">
                    <label>Квартира</label>
                    <div class="selection">
                        <div>
                            <input type="checkbox" name="studio" id="studio">
                            <label for="studio">Студия</label>
                        </div>
                        <div>
                            <input type="checkbox" name="one" id="one">
                            <label for="one">1 Спальня</label>
                        </div>
                        <div>
                            <input type="checkbox" name="two" id="two">
                            <label for="two">2 Спальни</label>
                        </div>

                        <div>
                            <input type="checkbox" name="three" id="three">
                            <label for="three">3 Спальни</label>
                        </div>
                    </div>
                </div>
                <div class="search">
                    <button>Поиск</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="info">
    <div class="info-container">
        <div class="text">
            <h1 class="title">
                FORT NOKS
            </h1>
            <span>
                - крупнейший застройщик на черноморском побережье и управляющая компания Болгарии.
            </span>
            <span>
                Наши апартаменты находятся на берегу моря. Курорты Елените, Святой Влас, Солнечный берег, Равда – идеальные места для летнего отдыха. Рядом старинный город Несебр, 35-40 км до аэропорта Бургас, 80-90 км да аэропорта Варна; аквапарки Солнечного Берега, Елените, Равды, Несебара – в нескольких минутах езды. По мнению пользователей сайтов tripadvisor и booking, жилые комплексы Форт Нокс – лучшие на побережье Болгарии, с самыми высокими оценками и отличными отзывами гостей.
            </span>
            <span>
                Мы предлагаем рассрочку на год без удорожания (первый взнос от 10 %).
            </span>
        </div>
        <div class="image">
            <img src="src/images/info.png" alt="">
        </div>
    </div>
</div>

<div class="infotwo">
    <div class="infotwo-container">
        <div class="left">
            <div class="left-investors">
                <h1>Инвесторам</h1>
                <span>
                Мы предлагаем проверенные стратегии инвестирования в зарубежную недвижимость. Стратегию подбираем под бюджет, уровень риска и уровень доходности
                </span>
            </div>
            <div class="left-life">
                <h1>
                    Для жизни и отдыха
                </h1>
                <span>
                    Мы предлагаем проверенные стратегии инвестирования в зарубежную недвижимость. Стратегию подбираем под бюджет, уровень риска и уровень доходности
                </span>
            </div>
        </div>
        <div class="right">
            <div class="rent"></div>
            <div class="text">
                <span>Годовой доход</span>
            </div>
            <div class="investition"></div>
        </div>
    </div>
</div>

<div class="whywe">
    <div class="whywe-container">
        <h1>Почему мы?</h1>
        <div class="items">
            <div class="item">
                <div class="head"><?php include './src/icons/percentageIcon.php'; ?></div>
                <div class="body">Беспроцентная рассрочка</div>
                <div class="foot">Наш банк предлагает беспроцентную рассрочку всем покупателям</div>
            </div>
            <div class="item">
                <div class="head"><?php include './src/icons/iconShield.php'; ?></div>
                <div class="body">Официальный представитель Fort Noks</div>
                <div class="foot">Наш банк предлагает беспроцентную рассрочку всем покупателям</div>
            </div>
            <div class="item">
                <div class="head"><?php include './src/icons/handshakeIcon.php'; ?></div>
                <div class="body">Выгодные условия сделки</div>
                <div class="foot">Наш банк предлагает беспроцентную рассрочку всем покупателям</div>
            </div>
            <div class="item">
                <div class="head"><?php include './src/icons/handshakeIcon.php'; ?></div>
                <div class="body">Выгодные условия сделки</div>
                <div class="foot">Наш банк предлагает беспроцентную рассрочку всем покупателям</div>
            </div>
            <div class="item">
                <div class="head"><?php include './src/icons/handshakeIcon.php'; ?></div>
                <div class="body">Выгодные условия сделки</div>
                <div class="foot">Наш банк предлагает беспроцентную рассрочку всем покупателям</div>
            </div>
        </div>
    </div>
</div>

<div class="form">
    <div class="form-container">
        <form>
            <input type="text" id="name"  placeholder="Имя *" name="name">
            <input type="tel"  id="tel" placeholder="Телефон *" name="phone" class="trrw">
            <input type="email"id="email" placeholder="Почта *" name="email">
            <input type="text" id="text" placeholder="Сообщение" name="text">
            <div>
                <input type="checkbox" name="licence" id="licence" class="acceptLicense">
                <label for="licence">Я даю согласие на обработку персональных данных в соответствии с Политикой Конфиденциальности</label>
            </div>
            <button class="sendmail" type="submit">Отправить</button>
        </form>
        <div class="image">
            <img src="src/images/form.png" alt="">
        </div>
    </div>
</div>
<script src="/src/scripts/burgerMenu.js"></script>
<?php include './src/components/TheFooter.php'; ?>