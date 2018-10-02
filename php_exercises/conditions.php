<?php
    $temperature = 36.5;
    $number = 42;
   

    function isHealthy($temp1, $temp2){
        $result = 0;
        if($temp2 == 'f') {
            $result = ($temp1-32)*(5/9);
        }
        return $result < 37? true : false;
    }

    function evenOrOdd($number){
        return $number%2? 'odd':'even';
    }

    function sayWeekday($day){
        return 'Today is '.$day;
    }

    function sayBirthday($bornYear){
        $this_year = 2018;
        $age = $this_year - $bornYear;
        return "I was born in {$bornYear} so this year I am celebrating my {$age} birthday";
    }
    function getTodaysProgramme($weather){
        if($weather != 'raining') {
            return "Let's go outside!";
        } elseif($weather == 'sunny') {
            return "Let's put on some sunblock";
        } elseif($weather == 'windy') {
            return "Let's put on a coat";
        }else {
            return "Let's stay indoors.";
        }
    }

    function assessHeight($height){
        if($height > 180) {
            return 'tall';
        } elseif($height < 180 && $height > 160) {
            return 'average';
        } else return 'small';
    }   

    function getLanguageUsage($lang){
        $lang = strtolower($lang);
        switch($lang){
            case 'php':
            case 'ruby':
            case 'python';
            return 'serverside';
            break;

            case 'javascript':
            return 'clientside';
            break;
            default:
            return "i don't know";
            break;
        }
    }

    $age = 25;
    $gender = 'female';
    $employed = true;
    function check($age, $gender, $employed){
        if($age < 25 && $age >= 18) {
            return 'young';
        }
        if($employed){
            return 'true';
        }
        if($age > 34 && !$employed){
            return 'not employed but middle-aged';
        }
        if($age < 18){
            return 'teenager';
        }
        if($age < 12 && $gender == 'female'){
            return 'girl';
        }
        if($age >= 18 && !$employed){
            return 'not employed but young';
        }
        if($age >= 60 && $employed && $gender == 'female'){
            return 'old enough and employed';
        }
        if(($gender == 'male' && $age > 20) || ($gender == 'female' && !$employed && $age >25)){
            return $gender.' '.$age.' '.$employed;
        }
    }
    

?>