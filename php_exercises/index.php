<a href="http://www.my-portfolio.test:8080/" target = '_blank'>my_portfolio</a>
<?php

   include 'functions.php';
   include 'conditions.php';

   $my_name = 'Zhadyra';
   $num = (integer)$my_name;
   $bool = (boolean)$my_name;
   var_dump($num);
   var_dump($bool);

   $height = 160.2;
   $height2 = (integer)$height;
   $height3 = (string)$height;
   $height4 = (boolean)$height;

   $weekday = 'Tuesday';
   $year_of_birth = 1992;

   $weather = 'windy';

   var_dump($height2);
   var_dump($height3);
   var_dump($height4);

   echo headline('Headline');
   echo in2cm(12);
   echo '<br>';
   echo celsiusToFahrenheit(100);
   echo '<br>';
   
   if(isHealthy(298, 'f')){
       echo '1';
   } else {
       echo '0';
   }
   echo '<br>';
   echo evenOrOdd(13).'<br>';
   echo sayWeekday($weekday).'<br>';
   echo sayBirthday($year_of_birth).'<br>';
   echo getTodaysProgramme($weather).'<br>';

   echo assessHeight(160).'<br>';

   echo getLanguageUsage('PHP');
?>