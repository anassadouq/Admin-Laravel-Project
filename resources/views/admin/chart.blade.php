@extends('layouts.app')
@section('content')
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>DonutChart</title>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>

	<div style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-primary">
					<div class="panel-body" align="center">
						<div id="donut_chart"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var students = <?php echo json_encode($students); ?>;
			var options = {
				chart : {
					renderTo : 'donut_chart',
					plotBackgroundColor : null,
					plotBorderWidth : null,
					plotShadow : false,
				},
				title :{
					text:"Pourcentage des classes dans l'écoles"
				},
				tooltip:{
					pointFormat : '{series.name}: <b> {point.percentage:.2f}%</b>',
					percentageDecimals:2,
				},
				plotOptions:{
					pie:{
						allowPointSelect:true,
						cursor:'pointer',
						dataLabels:{
							enabled:true,
							color:'#000000',
							connectColor:'#000000',
							formatter:function(){
								return '<b>' + this.point.name + '</b>: ' + this.y + ' (' + this.percentage.toFixed(2) + '%)';
							}
						},
						innerSize: '50%', // add this line to create a donut chart
					}
				},
				series:[{
					type:'pie', // Change this to 'pie'
					name:'Student'
				}],
				credits: {
					enabled: false
				}
			}
			myarray = [];
			$.each(students, function(index, val) {
				myarray[index] = [val.classe,val.count];
			});
			options.series[0].data = myarray;
			chart = new Highcharts.Chart(options);
		});
	</script>
@endsection