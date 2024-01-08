<script src="imagecollect.js"></script>
<?php
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

foreach($fileData as $img){
    
    echo "<img class=\"image\" src=\"img/".$img."\">";

}
?>
