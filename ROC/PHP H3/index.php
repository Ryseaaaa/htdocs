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
    echo "<h1>color rings</h1>";

    for ($i = 0; $i < 10; $i++) {
        if (fmod($i,2) == 1){
            $color = "green";
        }else{
            $color = "red";
        }

        echo "<img src=\"img/".$fileData[$i]."\" style=\"border-style=solid; border-color=".$color.";\">";
    }