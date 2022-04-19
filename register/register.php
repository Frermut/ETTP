<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        <div class="signupFrm">
            <div class="form">
              <h1 class="title">Регистрация</h1>
        
              <div class="inputContainer">
                <input 
                type="email"
                class="emailTitle" 
                name="email" 
                placeholder="a"  
                required>
                <label for="" class="label">Почта</label>
              </div>

              <div class="inputContainer">
                <input 
                type="text" 
                class="nameCompanyTitle" 
                name="nameCompany" 
                placeholder="a"  
                required>
                <label for="" class="label">Название фирмы</label>
              </div>

              <div class="inputContainer">
                <input 
                type="text" 
                class="loginTitle" 
                name="login" 
                placeholder="a"  
                required>
                <label for="" class="label">Логин</label>
              </div>
        
              <div class="inputContainer">
                <input 
                type="text" 
                class="nameTitle" 
                name="name" 
                placeholder="a"  
                required>
                <label for="" class="label">Имя</label>
              </div>

              <div class="inputContainer">
                <input 
                type="text" 
                class="surnameTitle" 
                name="surname" 
                placeholder="a"  
                required>
                <label for="" class="label">Фамилия</label>
              </div>

              <div class="inputContainer">
                <input 
                type="text" 
                class="tinTitle"
                minlength="12" 
                maxlength="12"
                pattern="^\S{12,}$" 
                autocomplete="off" 
                name="tin" 
                placeholder="a"  
                required>
                <label for="" class="label">Инн</label>
              </div>
        
              <div class="inputContainer">
                <input
                name="password_two"
                type="password_two" 
                pattern="^\S{8,}$" 
                onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Должно быть не менее 8 символов' : ''); 
                if(this.checkValidity()) form.password_two.pattern = this.value;" 
                class="password_twoTitle" 
                placeholder="a" 
                minlength="8"  
                required>
                <label for="" class="label">Пароль</label>
              </div>
        
              <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
              <div class="inputContainer">
                <input 
                name="password" 
                type="password" 
                pattern="^\S{8,}$" 
                onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Пожалуйста, введите тот же пароль, что и выше' : '');" 
                class="passwordTitle"   
                placeholder="a" 
                minlength="8" 
                required>
                <label for="" class="label">Подтвердите пароль</label>
              </div>
        
              <input type="submit" class="submitBtn" value="Зарегистрироваться">

              <a href="../index.html" style="display:block;">Вернуться на главную</a>
              <a href="../signin/signin.php">Войти</a>
            </div>
          </div>
    </main>

    
    <script>
        $(document).ready(function(){
          $('input.submitBtn').on('click', function(){
            var emailValue = $('input.emailTitle').val();
            var nameCompanyValue = $('input.nameCompanyTitle').val();
            var loginValue = $('input.loginTitle').val();
            var nameValue = $('input.nameTitle').val();
            var surnameValue = $('input.surnameTitle').val();
            var tinValue = $('input.tinTitle').val();
            var passwordValue = $('input.passwordTitle').val();
            
            //отправка в some.php
            $.ajax({
              method: "POST",
              url: "some.php",
              data: { 'email': emailValue, 'nameCompany':nameCompanyValue, 'login': loginValue, 'name': nameValue, 'surname':surnameValue , 'tin':tinValue,  'password': passwordValue  }
            })
              .done(function( msg ) {
                alert( "Data Saved: " + msg );
              });
          })
        });
    </script>
</body>
</html>

