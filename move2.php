<?php

/**
 * @author kem parson
 * @copyright 2016
 */
$i=0;
$dir = "media/import/";
if (is_dir($dir)){
  if ($dh = opendir($dir)){
     while (($file = readdir($dh)) !== false){
        $dir=$file['0'];
        $dir2=$file['1'];
       // $ending = explode(".",$file);
        //$ending = $ending['0'];
        
    $path="media/catalog/product/$dir/$dir2/$file";
    $path=strtolower($path);
    $origin="media/import/$file";
    echo copy($origin,$path);
    echo "</br>";
  
   echo "</br>";
    
   // echo $path;
    
    }
    
    
    
    }
}

?>