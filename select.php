<?php
    include "conn.php";

    $query = "SELECT id FROM chas WHERE estado = 1;";
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if ($result = mysqli_query($conn, $query)) {
        while ($row = mysqli_fetch_row($result)){
            foreach ($row as $h){
                echo ($h);
            }
        }
        mysqli_free_result($result);
    }
?>