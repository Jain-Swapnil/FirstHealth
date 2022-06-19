<?php

	define('DB_SERVER',"sql200.epizy.com");
	define('DB_USERNAME',"epiz_31990349");
	define('DB_PASSWORD',"1RwqXpf2sj458Ys");
	define('DB_DATABASE',"epiz_31990349_logiccoders");
	
	$connect = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
?>