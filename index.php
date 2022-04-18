<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dist/rotating-slider.css">
 
    
</head>
<body>
    <header>
        <div class="header-container">
            <a href="#" class="logo">ЭТТП</a>
            <ul>
                <li><a href="">Главная</a></li>
                <li><a href="">Торги</a></li>
                <li><a href="">О Компании</a></li>
                <li><a href="register/register.html">Регистрация</a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
    </header>
       

<section>
    <div class="text">
            <span>Электронное</span> 
            <span>Торговое Пространство</span> 
            <span>для Производственных</span> 
            <span>Предприятий</span>
    </div>

</section>



<!-- <div class="rotating-slider-container">
    <div class="rotating-slider">
        <ul class="slides">
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Bayonetta</div>
                    <p>Bayonetta</p>
                </div>
            </li>        
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Lara Croft</div>
                    <p>Tomb Rider</p>
                </div>        
            </li>
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Aloy</div>
                    <p>Horizon Zero Dawn</p>
                </div>        
            </li>
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Ada Wong</div>
                    <p>Resident Evil</p>
                </div>    
            </li>            
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Senua</div>
                    <p>Hellblade</p>
                </div>
            </li>
            <li style="background-image: url(img/cassettetape-mockup-02.jpg);">
                <div class="slide-inner">
                    <div>Kat</div>
                    <p>Devil May Cry</p>
                </div>
            </li>        
        </ul>
    </div>
</div> -->


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="dist/jquery.rotating-slider.js"></script>
<script>
    $(function(){ 
        $('.rotating-slider').rotatingSlider({
            slideHeight : Math.min(360, window.innerWidth -80),
            slideWidth : Math.min(480, window.innerWidth - 80),
            afterRotationStart: function(){
                console.log('Rotating to slide '+($('.rotating-slider .active-slide').index() + 1));
            }
        });
    });
</script>
</script>
</body>
</html>