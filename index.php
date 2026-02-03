<?php
$dir = '.'; // Current directory
$files = scandir($dir);
echo "<ul>";
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li><a href=\"$file\">$file</a></li>";
    }
}
echo "</ul>";
?>