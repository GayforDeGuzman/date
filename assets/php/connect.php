<?php
    //Gagamitin natin ang object oriented approach, para maintindihan mo ;)

    //Change kung iba ang user at password at database.
    $conn = new mysqli("127.0.0.1", "root", "", "lickedit");
    if (!$conn){
        echo "Could not connect to MySQL server.";
        exit();
    }
?>