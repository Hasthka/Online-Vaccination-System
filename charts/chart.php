<?php
$con = mysqli_connect("localhost","root","","test");
if($con){
    
}
?>
<html>
  <head>
  <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['situation', 'contribution'],
          <?php
          $sql = "SELECT * FROM contribution";
          $fire = mysqli_query($con,$sql);
          while ($result = mysqli_fetch_assoc($fire)){
              echo"['".$result['situation']."',".$result['contribution']."],";

          }

          ?>


        ]);

        var options = {
          title: 'Vaccination Rate of Sri Lanka'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body>
  <div class="container" >
 
  </div>
    
    <div id="piechart" class ="chartsty"></div>
    
    
  </body>
</html>
