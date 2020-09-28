<div class="container-fluid">
  <div class="row">

<?php
  $ra = rand(10,25);  
  for ($x = 0; $x < $ra; $x++) {
    $color = substr(md5(rand()), 0, 6);
    echo "<div class='col-sm mx-2'>";
      echo "<div class='item-mess'>";
        echo "<a href=''>";
        echo "<img src='' style='background-color: #{$color};' width='220' height='200' alt=''>";
        echo "<div class='item-mess-cont'>";
          echo "<div class='item-mess-des'>";
            echo "<h3>Titulo {$x}</h3>";
            echo "<p>dd/mm/aa</p>";
          echo "</div>";
          echo "<div class='item-mess-ico'>";
            echo "<i class='far fa-play-circle fa-lg'></i>";
          echo "</div>";
        echo "</div>";
        echo "</a>";
      echo "</div>";
    echo "</div>";
  }
?>

  </div>
</div>
