<?php
    $firstname = "Kian";
    $posts = [["picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/towhidzaman/128.jpg",
               "name" => "Joris",
               "place" => "East River Park",
               "city" => "Brooklyn, NY",
               "time" => 1455799935],
              
              ["picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg",
               "name" => "Lissa",
               "place" => "Rubirosa",
               "city" => "New York, NY",
               "time" => 1455799920],
              
              ["picture" => "https://s3.amazonaws.com/uifaces/faces/twitter/vladarbatov/128.jpg",
               "name" => "Lissa",
               "place" => "Blue Bottle Coffee",
               "city" => "South of Market, San Fransisco",
               "time" => 1455799838]
             ];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: Helvetica;
        }
        article {
            display: flex;
            padding-bottom: 1em;
        }
        article h3 {
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0.4em;
        }
        
        article img {
            width: 80px;
            padding-right: 1em;
        }
    </style>
</head>
<body>
    <section class="timeline">
        <?php foreach( $posts as $post ): ?>
        <article>
           <div>
                <img src="<?php echo $post[picture] ?>" alt="">
            </div>
            <div>
                <h3><?php echo $post["name"] ?></h3>
                <div><?php echo $post["place"] ?></div>
                <div><?php echo $post["city"] ?></div>
                <div><?php echo date("H:i:s", $post["time"]) ?></div>
            </div>
        </article>
        <?php endforeach; ?>
    </section>
</body>
</html>