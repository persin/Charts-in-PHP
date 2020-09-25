<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Abdullah Al Mamun Roni">
		
		<title>Morris Chart in PHP</title>
		
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body class="container-fluid">
		<div class="display-4 text-center text-info" style="font-size: 2.2em;"> morris charts data in PHP and MySQL </div>
	<hr>

<?php
	require_once('config/config.php');
	$config = new Connection;
	$morrisData = $config->fetchData('morris_chart_data');
	
	$morrisChart = '';
	$morrisDonut = '';
	
	foreach($morrisData AS $each)
	{
		$morrisChart .= "{year:'". $each["year"]."', income:". $each["income"].", expense:". $each["expense"].", profit:". $each["profit"]."}, ";
		
		$morrisDonut .= "{label:'". $each["name"]."', value:". $each["profit"]."}, ";
	}
	
	$morrisChart = substr($morrisChart, 0, -2);
	$morrisDonut = substr($morrisDonut, 0, -2);
	
?>

<div class="row">
	<div class="col-md-12 my-2">
		<div class="card text-center">
			<div class="card-header">
				Morris Bar Chart
			</div>
			<div class="card-body">
				<div id="barChart" style="height: 250px;"></div>
			</div>
		</div>
	</div>
	<div class="col-md-12 my-2">
		<div class="card text-center">
			<div class="card-header">
				Morris Line Chart
			</div>
			<div class="card-body">
				<div id="lineChart" style="height: 250px;"></div>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12 my-2">
				<div class="card text-center">
					<div class="card-header">
						Morris Area Chart
					</div>
					<div class="card-body">
						<div id="areaChart" style="height: 250px;"></div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="col-md-4">
		<div class="col-md-12 my-2">
			<div class="card text-center">
				<div class="card-header">
					Morris Pie Chart
				</div>
				<div class="card-body">
					<div id="donutChart" style="height: auto;"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>	
<script src="assets/js/libraries/morris/raphael.min.js"></script>
<script src="assets/js/libraries/morris/morris.min.js"></script>
<script>
	new Morris.Bar({
		element: 'barChart',
		data: [<?php echo $morrisChart; ?>],
		xkey: 'year',
		ykeys: ['income', 'expense', 'profit'],
		labels: ['Income', 'Expense', 'Profit'],
		hideHove: 'auto',
	});
	
	new Morris.Line({
		element: 'lineChart',
		data: [<?php echo $morrisChart; ?>],
		xkey: 'year',
		ykeys: ['income', 'expense', 'profit'],
		labels: ['Income', 'Expense', 'Profit'],
		hideHove: 'auto',
		lineColors: ['#FA709A', '#9FACE6']
	});
	
	new Morris.Area({
		element: 'areaChart',
		data: [<?php echo $morrisChart; ?>],
		xkey: 'year',
		ykeys: ['income', 'expense', 'profit'],
		labels: ['Income', 'Expense', 'Profit'],
		hideHove: 'auto',
		lineColors: ['#E0C3FC', '#8EC5FC']
	});
	
	new Morris.Donut({
		element: 'donutChart',
		data: [<?php echo $morrisDonut; ?>],
		labelColor: '#08AEEA',
		resize: true,
		colors: ['#C850C0', '#FFCC70', '#0093E9', '#80D0C7', '#E0C3FC', '#85FFBD', '#FBAB7E', '#FF2525', '#00838F', '#006064', '#08AEEA', '#FF2525', '#FFE53B', '#FF6A88'],
	});
</script>

</body>
</html>