<?php include 'header.php' ?>



<body>
    <header>
        <div class="container header-container">
            <a href="#" class="logo">ЭТТП</a>
            <ul>
              <li><a href="">Главная</a></li>
              <li><a href="">Торги</a></li>
              <li><a href="">О Компании</a></li>
              <li><a href="register/register.php">Регистрация</a></li>
              <li><a href="" class="header-btn">Вход</a></li>
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
                                        <input type="submit" value="Принять" />
                                    </p>
                                </select> 
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




<?php include 'footer.php' ?>
