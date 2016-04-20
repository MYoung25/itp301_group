<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>LA Weather</title>

<link rel="stylesheet" type="text/css" href="main.css" />
<script type="text/javascript" src="jscharts.js"></script>

</head>

<body>

<header>
Los Angeles Weather
</header>

<aside>
<br/>
<br/>
<div id="chartcontainer">
</div>

<p>
In the graph above you can see the average temperatures in Fahrenheit over the past week in LA
</p>

</aside>

<aside2>
<br/>
<br/>
<div id="chart3">
</div>

<p>
In the graph above you can see the high temperatures in Fahrenheit over the past week in LA
</p>
</aside2>

<article>

<h2> Weather over time in Los Angeles </h2>

<p>The Los Angeles metropolitan area averages year-round moderate-to-warm weather. The climate is classified as a Mediterranean climate, which is a type of dry subtropical climate, characterized by seasonal changes in rainfall—with a dry summer and a winter rainy season—but relatively modest transitions in temperature. Under the modified Köppen climate classification, the coast is classified as Csb and the inland areas as Csa.
</p>

<p>
The Los Angeles area is also subject to the phenomena typical of a microclimate. As such, the daytime temperatures can vary as much as 36 °F (20 °C) between inland areas such as the San Fernando Valley and San Gabriel Valley versus the coastal Los Angeles Basin.
</p>

<p>
While on most days in Los Angeles the temperature rises above 70 degrees Fahrenheit, the city rarely gets sizzling hot.
</p>

<p>
It never gets really cold in Los Angeles. Typically every day of the year has a high of over 50 degrees.
</p>


<h3> More weather sites: </h3>


<a href="http://www.accuweather.com/"> AccuWeather.com</a> <br/>
<a href="http://www.intellicast.com/">	Intellicast.com </a> <br/>
<a href="http://www.weather.gov/"> Weather.gov</a> <br/>
<a href="https://www.wunderground.com/"> WunderGround.com </a><br/>


</article>




<script type="text/javascript">
var monday = 20;
var tuesday = 30;
var myData1 = [<?php 

	require "DB_connect.php";

	$SQL_temp = "SELECT temp FROM weather";
	$SQL_time = "SELECT time FROM weather";
	$SQL_date = "SELECT date FROM weather";

	$temp_results = $mysqli->query($SQL_temp);
	if(!$temp_results){
		exit("SQL ERROR: " . $mysqli->error);
	}

	$time_results = $mysqli->query($SQL_time);
	if(!$time_results){
		exit("SQL ERROR: " . $mysqli->error);
	}

	$date_results = $mysqli->query($SQL_date);
	if(!$date_results){
		exit("SQL ERROR: " . $mysqli->error);
	}

	while($row = mysqli_fetch_array($temp_results)){
			echo "['". $x ."','" . $row['temp'] . "'],";
	}
	?>];

// convert temperature string to integer
for(var i=0; i < myData1.length; i++){
	var number = parseInt(myData1[i][1]);
	myData1[i][1] = number;
}


	var myChart = new JSChart('chartcontainer', 'line');
	myChart.setDataArray(myData1);
	myChart.draw();
	

	var myData = [<?php 
		for($y = 0; $y < 8; $y++){

			// variable to seperate dates
			$date = 109 + $y;
			// first day of data was 4/*19*
			$d = 19;
			// add $y to the date to seperate days
			$d += $y;
			// pull results from only the current $date
			$SQL_high = "SELECT temp FROM weather WHERE date LIKE " . $date;
			$high_results = $mysqli->query($SQL_high);
				if(!$high_results){
					exit("SQL ERROR: " . $mysqli->error);
				}
			// 
			while($row = mysqli_fetch_array($high_results)){
				echo "['". $d . "','" . $row['temp'] . "'],";
			}
		}?>];

	for(var i=0; i < myData.length; i++){
		var number = parseInt(myData[i][1]);
		myData[i][1] = number;
	}

	var date = 19;

	for(var i=0; i < myData.length; i++){
		if(myData[i][0] == date){
			console.log(myData[i][1]);
		}
	}





	var myChart = new JSChart('chart3', 'bar');
	myChart.setDataArray(myData);
	myChart.draw();
	
	
</script>
</body>
</html>