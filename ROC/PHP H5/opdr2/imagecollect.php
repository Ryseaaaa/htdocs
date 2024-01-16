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
    echo "<div class=\"optionContainer\">";
    echo "<input type=\"checkbox\" id=\"select.".$img."\" name=\"select.".$img."\">";
    echo "<label for=\"select.".$img."\"><img class=\"imageUnselected\" id=\"".$img."\"  for=\"".$img."\" onclick=\"selectImage('".$img."')\" value=\"\" src=\"img/".$img."\"></label>";
    echo "</div>";
}

?>


