<?php 
  include("../../../../../conn.php");
  $r = 1;
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }

  while($result  = mysqli_query($conn, "SELECT estado FROM chas WHERE id =1")) {
    $row = mysqli_fetch_row($result);
    
    foreach ($row as $h){
      echo ("<div style='visibility: hidden'>$h</div>");
    }

    if($h == 1){
      $r = 1;
    }else if($h == 0){
      $r = 0;
      break;
    }

    mysqli_free_result($result);
  }
?>

<html>

  <script>

    function ler(){
      leitura = "<?php $h;?>"; // le valor da variavel $h do php e passa pra javascript 
      
      if(leitura == 0){
        window.location.href = "../Finish/index.php";
      }else if (leitura == 1){
        console.log(leitura);
      }
    }

    window.setInterval(ler(), 1000);

  </script>

</html>