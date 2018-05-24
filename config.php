<?php
//Arquivo de configuração com dados do banco MySQL
   $DB_SERVER   = "127.0.0.1";
   $DB_USERNAME = "root";
   $DB_PASSWORD = "";
   $DB_DATABASE = "projetointegrado";
   $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
   if (!$db) {
    echo "Error: Unable to connect to MySQL." . mysqli_connect_error();
}