
<?php

	function connectstagetest()
    {
        $base = mysql_connect('localhost','root','');
        mysql_select_db ('stagetest', $base);
    }
?>
