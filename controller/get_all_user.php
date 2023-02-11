<?php
require("db_connection.php");
try{
    $queryGetAllAccounts = "Select * From user";
    $results = mysqli_query($connect, $queryGetAllAccounts);
    while($row = mysli_fetch_array($results))
{
    print_r($row);
}
} catch (\Throwable $th) {
    echo $th;
}