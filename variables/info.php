<?php phpinfo(); 
    $my_greeting = "Hello, world!";
    $first_name = 'Zhadyra';
    $last_name = 'Zhan';
?>

<h4>First name: <?php echo $first_name?></h4>
<?php
    define('SERVER_SOFTWARE','Apache');
    define('MY_OS', 'MacOs');
?>
<h4>
<?php echo 'This server is running on '+ SERVER_SOFTWARE;?>
</h4>
<h4>
    <?php echo 'My operating system is '+ MY_OS;?>
  </h4>