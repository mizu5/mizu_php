<?php 
$filename = 'readme.txt';
if (is_readable($filename)) {
	echo 'The file is writeable';
} else {
	echo 'The file is not writeable';
}
?>