<?php

    //1
    echo "<h1>images</h1>";

    //bit of code i found to move all file paths to an array  
    $path = "./img";

    $fileData = dir_to_array(new DirectoryIterator($path));

    function dir_to_array(DirectoryIterator $dir) {
    $data = array();
    foreach ($dir as $node) {
        if ( $node->isDir() && !$node->isDot() ) {
        $data[$node->getFilename()] = dir_to_array2(new DirectoryIterator($node->getPathname()));
        } else if( $node->isFile() ) {
        $data[] = $node->getFilename();
        }
    }
    return $data;
    }

    //echo every image

    foreach ($fileData as $image) {
        echo "<img src=\"img/".$image."\">";
    }


    //2
    echo "<br>";
    echo "<h1>tree</h1>";
    
    
    echo "<center>";
    for($i = 1; $i <= 9; $i++){
        for($j = 0; $j < $i; $j++){
            echo " * ";
        }
        echo "<br>";
    }
    echo "</center>";


    //3
    echo "<br>";
    echo "<h1>hoppelepee</h1>";


    for($x = 35; $x >= 25; $x--) {
        echo "hoppelepee";
    }	


    //4
    echo "<br>";
    echo "<h1>images, xmas edition</h1>";

    for ($i = 0; $i < 10; $i++) {
        if (fmod($i,2) == 1){
            $color = "green";
        }else{
            $color = "red";
        }

        echo "<img src=\"img/".$fileData[$i]."\" style=\"border-style: solid; border-color: ".$color.";\">";
    }

    //4
    echo "<br>";
    echo "<h1>busreis</h1>";

    function prijsberekening($leeftijd){
        if($leeftijd < 3){
            return 0;
        }elseif($leeftijd > 65 || $leeftijd <= 12){
            return 5;
        }else{
            return 10;
        }
    }

    echo "<p>Leeftijd: 10 - Prijs: $".prijsberekening(10)."</p>";
    echo "<p>Leeftijd: 2 - Prijs: $".prijsberekening(2)."</p>";
    echo "<p>Leeftijd: 65 - Prijs: $".prijsberekening(65)."</p>";
    echo "<p>Leeftijd: 12 - Prijs: $".prijsberekening(12)."</p>";

    //4
    echo "<br>";
    echo "<h1>Zwemclubs</h1>";

    echo "
    <style>
        .listelement {
            display: inline-block;
            width: 200px;
        }

        .img {
            width: 20px;
            padding-right: 2px;
        }
    </style>";

    $zwemclub = array (
        array("De Spartelkuikens", 25),
        array("De Waterbuffels", 32),
        array("Plonsmderin", 11),
        array("Bommetje", 23)
    ); 



    foreach ($zwemclub as $club) {

        echo "<div class=\"list\">";
            echo "<div class=\"listelement\">".$club[0]."</div>";
            echo "<div class=\"listelement\">".$club[1]."</div>";

            for ($i = 1; $i <= ($club[1]/5); $i++){
                echo "<img class=\"listelement, img\" src=\"img/bonsai.jpeg\" >";
            }

        echo "</div>";
    
    }

