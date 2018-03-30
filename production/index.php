<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "declaration";
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
</head>
<body>
<?php 
    $sql = "SELECT v.n_passport, v.nom, v.prenom, v.nationalite, i.val_chiffre, vd.n_voyage FROM voyageur AS v 
            JOIN formulaire AS f ON v.n_passport = f.n_passport 
            JOIN importations AS i ON i.id_formulaire = f.id_formulaire 
            JOIN voyage AS vd ON vd.n_voyage = f.n_voyage ";

$data =array();
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $data[] = $row;   
            echo "<table>";
            echo "<tr>";
                echo "<td>". $row['nom'].' '.$row['prenom'] ."</td>";
                echo "<td>". $row['n_passport']."</td>";
                echo "<td>". $row['nationalite']."</td>";
                echo "<td>". $row['n_voyage']."</td>";
                echo "<td>". $row['n_voyage']."</td>";
                echo "<td>". $row['val_chiffre']."</td>";
            echo "</tr>";
            echo "</table>";
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
print json_encode($data);
// Close connection
mysqli_close($link);        
?>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
$(document).ready(function(){
	$.ajax({
		url: "http://localhost/web%20project%206/production/custom.php",
		method: "GET",
		success: function(data) {
            console.log(data);
        }
    })
});
var data = {
  labels: ["January", "February", "March", "April", "May", "June", "July","August", "November", "December"],
  datasets: [
      {
          label: "Sodium intake",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [165, 159, 180, 181, 156, 155, 140]
      },
      {
          label: "Sugar intake",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [128, 148, 140, 119, 186, 127, 190]
      }
  ]
}

var ctx = new Chart(document.getElementById("myChart").getContext("2d")).Line(data);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script src="../vendors/jquery/dist/jquery.min.js"></script>
</body>
</html>