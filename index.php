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
<section class="buy">
    <div class="container">
        <div class="head">
            <div class="buyDiv selected">
                <input type="radio" name="buyrent" class="tt" id="buy">
                <label for="buy">Покупка</span>
            </div>
            <div class="rentDiv">
                <input type="radio" name="buyrent" class="tt" id="rent">
                <label for="rent">Аренда</span>
            </div>
        </div>
        <div class="bottom">
            <div class="fromBuyDiv">
                <div class="complex">
                    <span>Комплекс</span>
                    <select name="e" id="e"></select>
                </div>
                <div class="kvartira">
                    <span>Квартира</span>
                    <div class="selection">
                        <div>
                            <input type="checkbox" name="studio" id="studio">
                            <label for="studio">Студия</label>
                        </div>
                        <div>
                            <input type="checkbox" name="two" id="two">
                            <label for="two">2 Спальни</label>
                        </div>
                        <div>
                            <input type="checkbox" name="one" id="one">
                            <label for="one">1 Спальня</label>
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
</section>
<?php include './src/components/TheFooter.php'; ?>
