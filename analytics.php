<?php include("includes/header.php"); ?>



<?php include("includes/navigation.php"); ?>

<?php 


$query1 = "SELECT * FROM staff_sec_a";
$result1 = mysqli_query($connection, $query1);
$staff_count = mysqli_num_rows($result1);

$query2 = "SELECT * FROM citical_mass";
$result2 = mysqli_query($connection, $query2);
$citical_mass_count = mysqli_num_rows($result2);

$query3 = "SELECT * FROM citation";
$result3 = mysqli_query($connection, $query3);
$citation_count = mysqli_num_rows($result3);

$query4 = "SELECT * FROM pg_student";
$result4 = mysqli_query($connection, $query4);
$pg_student_count = mysqli_num_rows($result4);

$query5 = "SELECT * FROM patents";
$result5 = mysqli_query($connection, $query5);
$patents_count = mysqli_num_rows($result5);

$query6 = "SELECT * FROM ug_student";
$result6 = mysqli_query($connection, $query6);
$ug_student_count = mysqli_num_rows($result6);

$query7 = "SELECT * FROM library";
$result7 = mysqli_query($connection, $query7);
$library_count = mysqli_num_rows($result7);

?>


<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Analytics</h1>
        </div>
    </div>


    <div class="row">
    	
    	<div class="col-lg-12">
    		<div id="piechart" style="width: 900px; height: 500px;"></div>
    	</div>
    	<script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {

	        var data = google.visualization.arrayToDataTable([
	          ['MyRA IMS', 'Data Entry'],	        
	          ['Section A',     <?php echo $staff_count ?>],
	          ['Section B',      <?php echo $citical_mass_count ?>],
	          ['Section C',  <?php echo $citation_count ?>],
	          ['Section D',     <?php echo $pg_student_count ?>],
	          ['Section E',      <?php echo $patents_count ?>],
	          ['Section G',  <?php echo $ug_student_count ?>],
	          ['Section H',  <?php echo $library_count ?>],

	        ]);

	        var options = {
	          title: 'Data entry for MyRA IMS'
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

	        chart.draw(data, options);
	      }
	    </script>
    </div>



<?php include("includes/navigation.php"); ?>



<?php include("includes/footer.php"); ?>
