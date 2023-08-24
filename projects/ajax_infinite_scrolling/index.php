<?php 
require_once '../../lib/parsedown-1.7.4/Parsedown.php';
$parsedown = new Parsedown();

echo "<a href=\"ajax_scroll\">Infinte Scrolling Project</a>";
echo "<p>". $parsedown->text(file_get_contents('infinite-scrolling.md')) . "</p>"; 
?>