
  <?php
  
  
  $host = "localhost"; 	
$name = "root";  
$pass = "";  
$dbname = "motors"; // هنا اكتب اسم قاعده البيانات بين العلامتين
$connection = mysqli_connect($host,$name,$pass,$dbname);

mysqli_query($connection,"set character_set_server='utf8'");
mysqli_query($connection,"set names 'utf8'");

if (!$connection) {
	die();
}




$get_news_sql = "SELECT * FROM `data2`";

 $get_news_sql = mysqli_query($connection, $get_news_sql);
            while ($row = mysqli_fetch_array($get_news_sql)) {
              	echo $row['button_value']; 
            
            }
          ?>




