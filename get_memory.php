<?php
$total_memory = file_get_contents("./memory.cache");

print("Total Memory Used: " . $total_memory);
?>