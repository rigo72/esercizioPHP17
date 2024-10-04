<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $num = rand(10,20);
    $lista=[];
    $colori=["red", "brown", "blue", "purple", "green"];

    for($i=0;$i<=$num;$i++){
        array_push($lista, $i);        
    }
    echo "<ol>";
    foreach($lista as $elem){
        $numCol = rand(0,4);
        echo "<li style='color:{$colori[$numCol]};'>$elem</li>";
    }
    ?>
</body>
</html>