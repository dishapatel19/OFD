<?php
    if(isset($_GET['id']))
    {
        echo $id=$_GET['id'];
    }
    else
    {
        echo "<h1>No data Avalible</h1>";
    }
?>