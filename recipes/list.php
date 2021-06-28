<?php 
if ($handle = opendir('.')) {
  while (false !== ($entry = readdir($handle))) {
    if($entry != "." && $entry != ".." && $entry != "list.php") {
      echo "$entry\n";
    }
  }
  closedir($handle)
}
?>
