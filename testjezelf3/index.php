<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>testjezelf3</title>
</head>
<body>
    <ul>
        <?php include_once("array.php"); ?>
        <?php foreach( $toDos as $toDo ): ?>
        <li <?php if($toDo['uren werk'] > 5){
                    echo "class='rood'";
                  } elseif($toDo['uren werk'] > 1){
                    echo "class='oranje'";
                  }else echo "class='groen'"; ?>>
                  
        <p><?php echo $toDo["beschrijving"] ?></p>
        <p><?php echo $toDo["uren werk"] ?></p>
        <p><?php echo $toDo["categorie"] ?></p></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>