<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
<header>
        <div class="header-container">
            <a href="#" class="logo">ЭТТП</a>
            <ul>
                <li><a href="../index.html">Главная</a></li>
                <li><a href="shop/shop.php">Торги</a></li>
                <li><a href="">О Компании</a></li>
                <li><a href="signin/signin.php">Вход</a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
    </header>

<!-- ------------------------------------------------------------------------------------- -->

    <section>
        <div class="container filter-and-shop" id="block_lots">

<!-- ------------------------------------------------------------------------------------- -->   

            <div class="item1-filter">
                <div class="search">
                    <div class="search-description">
                        <p>Поиск по ключевым словам:</p>
                    </div>
                    <div class="d1">
                        <form>
                        <input  type="search" id="search" placeholder="Search..." >
                        <button type="submit"></button>
                        </form>
                      </div>
                </div>
               
                
                    <div class="region">
                        <div class="region-description">
                        <p>Сортировка по региону:</p>
                        </div>
                        <div class="d2">
                            <form>
                                <p>
                                    <select name="regionid" >
                                        <option value="s1">Брянская обл.</option>
                                        <option value="s2" selected>Московская обл.</option>
                                        <option value="s3">Калужская обл.</option>
                                        <option value="s4">Республика Ялта</option>
                                        <option value="s5">Республика Ялта</option>
                                        <option value="s6">Республика Ялта</option>
                                        <option value="s7">Республика Ялта</option>
                                    </p>
                                </select> 
                                <input type="submit" value="Принять" />
                            </form> 
                        </div>
                    </div>
                

                <div class="data">
                    <div class="input-label">
                        <label>
                            <div class="data-description">
                                <p>Сортировка по дате:</p>
                            </div>
                            <input type="text" id="datepicker" value="Выбрать дату:">
                            <input type="submit" value="Принять" />
                        </label>
                      </div>
                </div>

            </div>

<!-- ------------------------------------------------------------------------------------- -->

            <div class="item2-shop">



            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
