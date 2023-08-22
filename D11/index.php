<?php 

$names = [
    'Charlotte',
    'Megan',
    'Sophie',
    'Emily',
    'Jessica',
    'Lucy',
    'Chloe',
    'Olivia',
    'Hannah',
    'Ellie',
    'Katie',
    'Ella',
    'Amelia',
    'Amy',
    'Holly',
    'Grace',
    'Alice',
    'Daisy',
    'Isabella',
    'Paige',
    'Caitlin',
    'Anna',
    'Leah',
    'Millie',
    'Molly',
    'Oliver',
    'Joseph',
    'Harry',
    'Joshua',
    'James',
    'William',
    'Samuel',
    'Daniel',
    'Jack',
    'Thomas',
    'Matthew',
    'Luke',
    'Ethan',
    'Lewis',
    'Benjamin',
    'Mohammed',
    'Callum',
    'Alexander',
    'Louis',
    'Harrison',
    'Edward',
    'Brandon',
    'Jacob',
    'Michael',
    'Liam'
];

$data = [];
$bars = mt_rand(5, 15);
for ($i = 0; $i < $bars; $i++) {
    shuffle($names);
    $data[] = [
        'name' => array_pop($names),
        'value' => mt_rand(50, 500),
        'color' => sprintf('#%06X', mt_rand(0, 0xFFFFFF)),
    ];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="labels">
            <small>500</small>
            <small>400</small>
            <small>300</small>
            <small>200</small>
            <small>100</small>
            <small>0</small>
        </div>
        <div class="graph">
            <?php
                foreach($data as $row) {
                    echo '<div class="column" style="position: relative; height: ' . $row['value'] . 'px; background-color: ' . $row['color'] . ';">
                        <span style="position: absolute; bottom: -' .  strlen($row['name']) + 40 .'px; transform: rotate(90deg);">'. $row['name'] . '</span>
                    
                    </div>';
                }
            ?>
        </div>
    </div>
</body>
</html>

<style>
.container {
    margin: 1rem auto;
    width: 600px;
    height: 500px;
}

.graph {
    height: 100%;
    width: 95%;
    border-left:  1px solid black;
    border-bottom:  1px solid black;
    margin-left: auto;
    display: flex;
    justify-content: start;
    align-items: end;
    gap: 20px;
}

.column {
    width: 70px;
    height: 10px;
}

.labels {
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 500px;
}

.labels > small {
    font-weight: bold;
}
</style>