<?php

print_r($_FILES);
echo "Name =" .$_FILES['f']['name']."<br/>";
echo "Type =" .$_FILES['f']['type']."<br/>";
echo "Size =" .$_FILES['f']['size']."<br/>";

?>