<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Пример веб-страницы</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>jQuery</h1>

    <h2>Hyunday solarys</h2>
<!-- Комментарий -->
    <div id="imgHolder" class="imageCar">
        <img src="/images/blue.jpg" alt="картинка" >

        <div class="model-summary">
            <div class="modelName">Hunday Solaris</div>
            <div class="modelSpecs" id="modelSpecs"></div>
            <div class="modelPrice" id="modelPrice"></div>
            <div class="modelPrice" id="modelPriceUSD">USD</div>
            <div class="button">Заказать</div>
        </div>

    </div>

    <form action="#" id="autoForm">
        <h3>Настрой автомобиля под себя:</h3>
        <div class="row">
            <div class="col-1-of-3" id="block1">
                <h4>Двигатель:</h4>
                <div class="form-block ">
                    <input type="radio" name="engine" id="engine1400" value="624900" checked/>
                    <label for="engine1400">1.4 (100 л.с.)</label>
                </div>
                <div class="form-block ">
                    <input type="radio" name="engine" id="engine1600" value="735900"/>
                    <label for="engine1600">1.6 (125 л.с.)</label>
                </div>
            </div>

            <div class="col-1-of-3" id="block2">
                <h4>Коробка передач:</h4>
                <div class="form-block ">
                    <input type="radio" name="transmission" id="transmission6MT" value="0" checked/>
                    <label for="transmission6MT">Ручная 6 ступеней (6МТ)</label>
                </div>
                <div class="form-block ">
                    <input type="radio" name="transmission" id="transmission6AT" value="125000"/>
                    <label for="transmission6AT">Автомат 6 ступеней (6АТ)</label>
                </div>
            </div>

            <div class="col-1-of-3" id="block3">
                <h4>Пакет (дополнительные опции):</h4>
                <div class="form-block ">
                    <input type="radio" name="package" id="packageActive" value="0" checked/>
                    <label for="packageActive">Active </label>
                </div>
                <div class="form-block ">
                    <input type="radio" name="package" id="packageActivePlus" value="85000"/>
                    <label for="packageActivePlus">Active Plus (Кондеционер)</label>
                </div>
                <div class="form-block ">
                    <input type="radio" name="package" id="packageComfort" value="130000"/>
                    <label for="packageComfort">Comfort (Климатконтроль)</label>
                </div>
            </div>
        </div>

        <h4>Цвет</h4>

        <div id="colorSelector" class="colorSelector" >
                <div class="colorItem colorBlue" data-img-path="/images/blue.jpg"></div>
                <div class="colorItem colorRed" data-img-path="/images/red.jpg"></div>
                <div class="colorItem colorBlack" data-img-path="/images/black.jpg"></div>
                <div class="colorItem colorBeige" data-img-path="/images/beige.jpg"></div>
                <div class="colorItem colorOrange" data-img-path="/images/orange.jpg"></div>
            </div>
    </form>

</body>

    <script src="libs/jquery/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"> </script>

</html>
