<?php 
    $my_greeting = "Hello, world!";
    $first_name = 'Zhadyra';
    $last_name = 'Zhan';
    $year_of_birth = '1992';
    $height = '160cm';
?>

<h4>First name: <?php echo $first_name?></h4>
<h4>Last name: <?php echo $last_name?></h4>
<h4>Year of birth: <?php echo $year_of_birth?></h4>
<h4>Height: <?php echo $height?></h4>

<?php
    define('SERVER_SOFTWARE','Apache');
    define('MY_OS', 'MacOs');
    echo 'This server is running on '. SERVER_SOFTWARE.'.<br>';
    echo 'My operating system is '. MY_OS;
    
?>
  