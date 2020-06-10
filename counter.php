<?php
    $counter = file_get_contents('countlog.txt') + 1;
    file_put_contents('countlog.txt', $counter);

// Output the updated count.
echo "{$counter} hits\n";
?>
