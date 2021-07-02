<?php
require 'db_connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta name="robots" content="index, follow" />
    <meta name="title" content="ETU “LETI digital and scientific educational platform”" />
    <meta name="keywords" content="LETI,ETU digital,scientifc,educational,platform"/>

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="appform.css">

     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

    <title>Digital Educational Platform</title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple1.png" />
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
  </head>
  <body>

    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://etu.ru/assets/files/ru/universitet/korporativnyj-stil/logo-krug-gold.png" alt=""/>
                        <h3>Добро Пожаловать</h3>
                        <p>Пожалуйста, заполните форму.</p>
                        <a href="index.html" style="color:white;">Главная Сайт</a>
                        <a href="profile.html" style="color:white;">Наш Команда </a> 
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Благодарим вас за проявленный интерес присоединиться к нашей команде разработчиков</h3>
                                <form action="inserteappform.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="first_name" placeholder="Имя *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="last_name" placeholder="Фамилия*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="М" checked>
                                                    <span> Мужской </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Ж">
                                                    <span>Женский </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email_app" placeholder="Ваш Почта *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone_empl" class="form-control" placeholder="Ваш Телефон номер *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="applied_job">
                                                <option class="hidden"selected disabled>Пожалуйста, выберите Вакансию</option>
                                                <option value="Development Manager">Руководитель разработки</option>
                                                <option value="Service Developer">Разработчик сервиса</option>
                                                <option value="testing Engineer">Инженер по тестированию</option>
                                                <option value="Junior Developer">Научный руководитель</option>
                                            </select>
                                        </div>
                                        <input type="submit" name="save" class="btnApply"  value="Apply">
                                    </div>

                                    </div>
                                    </form>
                                </div>
                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            

             <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
  </body>
  </html>