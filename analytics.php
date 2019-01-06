<?php include("includes/header.php"); ?>



<?php include("includes/navigation.php"); ?>

<?php 


$query1 = "SELECT * FROM staff_sec_a";
$result1 = mysqli_query($connection, $query1);
$staff_count = mysqli_num_rows($result1);

$query2 = "SELECT * FROM ug_student";
$result2 = mysqli_query($connection, $query2);
$ugstudent_count = mysqli_num_rows($result2);

$query3 = "SELECT * FROM pg_student";
$result3 = mysqli_query($connection, $query3);
$pgstudent_count = mysqli_num_rows($result3);

 ?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Analytics</h1>
        </div>
    </div>


    <div class="row">
    	
    	<div class="col-lg-12">
    		<h1>Section A</h1>
    		<div id="piechart" style="width: 900px; height: 500px;"></div>
    	</div>
    	<script type="text/javascript">
	      google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {

	        var data = google.visualization.arrayToDataTable([
	          ['Section A', 'Data Entry'],
	          ['Staff',     <?php echo $staff_count ?>],
	          ['Undergraduate Student',      <?php echo $ugstudent_count ?>],
	          ['Postgraduate Student',  <?php echo $pgstudent_count ?>],
	        ]);

	        var options = {
	          title: 'Data entry for Section A'
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

	        chart.draw(data, options);
	      }
	    </script>
    </div>

  
</div>


<?php include("includes/footer.php"); ?>
