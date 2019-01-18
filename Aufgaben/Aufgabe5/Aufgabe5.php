<!DOCKTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
  <style type="text/css">
  table th {
    position:sticky;
    top:0;
    background-color: #FFFFFF;
  }
  h1 {
    background-color: #FFA07A;
  }
  </style>

  <title>Aufgabe 5</title>

  <?php
  function zufzahl($max, $anzahl, $stellen) {
    echo "<table class='table table-light table-striped'>
      <thead>
        <tr>
          <th>Zufallszahl</th>";
          for ($i=1; $i<=$stellen; $i++) {
            echo "<th> erste ".$i." Stellen</th>";
          }
          echo "
        </tr>
      <thead>
      <tbody>";
    for ($i=1; $i<=$anzahl; $i++) {
      $zzahl = rand(1,$max);
      if ($zzahl<1000) echo "<tr style='background-color:#00FFFF'>";
      else if ($zzahl>=1000 && $zzahl<10000) echo "<tr style='background-color:#FEEF8A'>";
      else if ($zzahl>=10000 && $zzahl<100000) echo "<tr style='background-color:#D3D3D3'>";
      else if ($zzahl>=100000) echo "<tr style='background-color:#8FBC8F'>";
      echo "<td>".$zzahl."</td>";
      for ($j=1; $j<=$stellen;$j++) {
        echo "<td>".abschneiden($zzahl, $j)."</td>";
      }
      echo "</tr>";
    }
    echo "
    </tbody>
    </table>";
  }

  function abschneiden ($zahl,$stellen=2) {
    $base = pow(10,$stellen);
    return $zahl -($zahl % $base);
  }
  ?>
  </head>

  <body>
    <div class="container-fluid">
    <h1><b>Zufallszahlen</b></h1>
     <div>
        <?php zufzahl(20000, 20, 4); ?>
     </div>
  </body>
</html>
