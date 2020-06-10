<html>
    <head>
        <meta charset="UFT-8">
        <title></title>
    </head>
    <body>
        <?php
        $file= file_get_contents("count.txt");
        $counts=$file;
        
        echo"Visitor No. $counts";
        $countsnew=$counts+1;
        
        $filenew=fopen("count.txt", "w");
        
        fwrite($filenew, $countsnew);
        
        
        ?>
    </body>
<html>
