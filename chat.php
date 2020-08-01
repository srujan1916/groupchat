<?php
    header("Content-type:text/event-stream");
    ob_start();
    ob_flush();
    flush();
	$file = fopen("chat.txt","r");
            echo "event:updateChat\n";
        
	$chat = fread($file,filesize("chat.txt"));
        echo "data:".$chat."\n\n";
	//ftruncate($file,0);
        ob_end_flush();
        flush();
    
?>



