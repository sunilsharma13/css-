<?php
$color = array (
              "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
            "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
            "holes" => array ( "First", "fi" => "Second", "Third")
        );
        echo "<pre>";
        print_r($color);
        echo "</pre>";
        /* if i want to print Red and First */
            echo $color[holes][0],"<br>";
            echo $color[color][a];

?>