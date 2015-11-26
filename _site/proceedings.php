<?php
$url = $_REQUEST['http://users.sussex.ac.uk/~thm21/ICLI_proceedings/ICLI-2014-Proceedings.pdf'];
if (preg_match('/\b(https?|ftp):\/\/*/', $url) !== 1) die;
echo (file_get_contents($url));
?>