<?php
    $time_served = 0;

  //  while($time_served < 10) {
  //      $time_served++;
  //      echo "The prisoner has served {$time_served} years<br>";
   // }

    do{
        echo "The prisoner has served {$time_served} years<br>";
        $time_served++;
    }
    while($time_served < 10);
    echo "<br>";

    for($i = 0; $i < 5; $i++) {
        echo "The prisoner has {$i} more years to serve<br>";
    }

    echo "<br>";

    for($i = 10; $i > 0; $i--) {
        echo "The prisoner has {$i} more years to serve<br>";
        if($i > 5){
            continue;
        }
        if($i == 2) {
            echo "Paroled!";
            break;
        }
        echo "Going to a parole hearing...";
    }

    $cars_i_want = [];
    var_dump($cars_i_want);

    $cars_i_want = ['Aston Martin',
    'Bugatti',
    'Ferrari',
    'Lamborghini',
    'Maserati',
    'Mercedes',
    'Porsche',
    'Skoda'];

    var_dump($cars_i_want);
    echo "For myself I would buy $cars_i_want[1].<br>";
    echo "For my spouse I would buy $cars_i_want[3].<br>";
    $cars_i_want[4] = 'Smart';
    echo "Each of my kids will get a $cars_i_want[4].";

    $vehicles = [
        'Bicycle' => 50,
        'Car' => 150,
        'Train' => 110
    ];
    
    $messages = [
        'Preparing to do some stuff...',
        'Doing amazing stuff...',
        'Stuff is done.'
    ];
?>

<ol>
<?php foreach($cars_i_want as $car) :?>
    <li><?php echo $car;?></li>
<?php endforeach;?>
</ol>


<table>
    <tr>
        <th>Means of transport</th>
        <th>Max. speed (km/h)</th>
    <tr>
    <?php foreach($vehicles as $name => $speed):?>
    <tr>
        <td><?php echo $name;?></td>
        <td><?php echo $speed;?></td>
    </tr>
    <?php endforeach;?>
</table>
<?php if($messages):?>
<ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
    <?php foreach($messages as $messages):?>
        <li><?php echo $messages;?></li>
    <?php endforeach;?>
</ul>
<?php endif?>

