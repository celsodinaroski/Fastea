<?php
  include("../../../../../conn.php");
  $inserir = mysqli_query($conn, "UPDATE chas SET estado=1 WHERE id=1");
?>
