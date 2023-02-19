<?php

$name = 'Сергей'; // строка

$city = 'Щелково, Россия'; // строка

$profi = 'Тестировщик'; // строка

$email = 'email@gmail.com'; // строка

$phone = 895555555; // десятичное число

$age = 2022-1989;

$days = (2022-1989)*365;

$skills = [

'skill_name' => ['Adobe Photoshop', 'Фотография', 'Illustrator', 'Копирайтинг'],

'level' => [97, 83, 70, 80]

]

?>

<!DOCTYPE html>

<html>

<head>

<title>Мое резюме</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}

</style>

</head>

<body class="w3-light-grey">

<!-- Page Container -->

<div class="w3-content w3-margin-top" style="max-width:1400px;">

<!-- The Grid -->

<div class="w3-row-padding">

<!-- Left Column -->

<div class="w3-third">

<div class="w3-white w3-text-grey w3-card-4">

<div class="w3-display-container">

<img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">

<div class="w3-display-bottomleft w3-container w3-text-black">

<h2><?php echo $name; ?></h2>

</div>

</div>

<div class="w3-container">

<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profi; ?></p>

<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ?></p>

<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email ?></p>

<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone ?></p>

<p><i class="fa fa-hourglass-half fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $age ?> лет (<?php echo $days ?> дней)</p>

<hr>

<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>

<p><?php echo $skills['skill_name'][0]; ?></p>

<div class="w3-light-grey w3-round-xlarge w3-small">

<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][0]; ?>%"><?php echo $skills['level'][0]; ?>%</div>

</div>

<p><?php echo $skills['skill_name'][1]; ?></p>

<div class="w3-light-grey w3-round-xlarge w3-small">

<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][1]; ?>%">

<div class="w3-center w3-text-white"><?php echo $skills['level'][1]; ?>%</div>

</div>

</div>

<p><?php echo $skills['skill_name'][2]; ?></p>

<div class="w3-light-grey w3-round-xlarge w3-small">

<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][2]; ?>%"><?php echo $skills['level'][2]; ?>%</div>

</div>

<p><?php echo $skills['skill_name'][3]; ?></p>

<div class="w3-light-grey w3-round-xlarge w3-small">

<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills['level'][3]; ?>%"><?php echo $skills['level'][3]; ?>%</div>

</div>

<br>

<p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>

<p>Английский</p>

<div class="w3-light-grey w3-round-xlarge">

<div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>

</div>

<p>Испанский</p>

<div class="w3-light-grey w3-round-xlarge">

<div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>

</div>

<p>Немецкий</p>

<div class="w3-light-grey w3-round-xlarge">

<div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>

</div>

<br>

</div>

</div><br>

<!-- End Left Column -->

</div>

<!-- Right Column -->

<div class="w3-twothird">

<div class="w3-container w3-card w3-white w3-margin-bottom">

<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>

<div class="w3-container">

<h5 class="w3-opacity"><b>Фриланс</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Сентябрь 2020 — <span class="w3-tag w3-teal w3-round">Current</span></h6>

<p>Строительство, недвижимость, эксплуатация, проектирование, агентские услуги по недвижимости
</p>

<hr>

</div>

<div class="w3-container">

<h5 class="w3-opacity"><b>Парк-отель "Райки"</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Сентябрь 2019 — Сентябрь 2020</h6>

<p>Управляющий спортивно-развлекательным комплексом
Организация работы спортивно-развлекательного комплекса (горнолыжного склона, рыболовного озера и др. проведение массовых мероприятий).
</p>

<hr>

</div>

<div class="w3-container">

<h5 class="w3-opacity"><b>ООО "Модерн-Стиль А"</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> Май 2011 - Апрель 2018</h6>

<p>Старший менеджер по оптовым продажам
Оптовые продажи мебельной фурнитуры и комплектующих (Региональные продажи), контроль документооборота, выполнение плана продаж отдела, управление складом,контроль и развитие отдела продаж мебельной фурнитуры, подготовка отчетов работы отдела. 
</p><br>

</div>

</div>

<div class="w3-container w3-card w3-white">

<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>

<div class="w3-container">

<h5 class="w3-opacity"><b>gb.ru</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Учусь</h6>

<p>Программы Быстрый старт Тестировщик и Разработчик</p>

<hr>

</div>

<div class="w3-container">

<h5 class="w3-opacity"><b>Российский государственный университет туризма и сервиса, Москва (РГУТИС)</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2007 - 2011</h6>

<p>Менеджмент организации</p>

<hr>

</div>

<div class="w3-container">

<h5 class="w3-opacity"><b>Пл «ЩЮЦ» (Щелковский Учебный Центр)</b></h5>

<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2004 - 2007</h6>

<p>Менеджмент организации</p><br>

</div>

</div>

<!-- End Right Column -->

</div>

<!-- End Grid -->

</div>

<!-- End Page Container -->

</div>

<!-- Footer -->

<footer class="w3-container w3-teal w3-center w3-margin-top">

<p>Я в соц сетях.</p>

<i class="fa fa-pinterest-p w3-hover-opacity"></i>

<i class="fa fa-twitter w3-hover-opacity"></i>

<i class="fa fa-linkedin w3-hover-opacity"></i>

<!-- End footer -->

</footer>

</body>

</html>