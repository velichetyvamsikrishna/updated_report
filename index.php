<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Accessibility Daily status report" />
<meta name="author" content="Vamsi Krishna Velichety" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<title>Daily Status Report</title>
<style>
#body2 {
	background: #fafafa url(http://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}
h1,h2,h3,h4,h5,h6 {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
h1{
	font: 170% 'Helvetica Neue', helvetica, arial, sans-serif;
}
h2{
	font: 160% 'Helvetica Neue', helvetica, arial, sans-serif;
}
h3{
	font: 150% 'Helvetica Neue', helvetica, arial, sans-serif;
}
h4{
	font: 140% 'Helvetica Neue', helvetica, arial, sans-serif;
}
h5{
	font: 130% 'Helvetica Neue', helvetica, arial, sans-serif;
}
h6{
	font: 120% 'Helvetica Neue', helvetica, arial, sans-serif;
}
body {
	background: #fafafa url(http://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
}
strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}
caption{
	font-size: 15px;
	font-weight: bold;
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 14px;
	line-height: 24px;
	margin: 10px auto;
	text-align: left;
	width: 100%;
}	

th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

</style>
<script>
function view_test_results(){	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "view_test_results.php", true);
	xmlhttp.send();
	return false;
}
function upload_vso_data(){	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "upload_form.php", true);
	xmlhttp.send();
	return false;
}
function view_bugs_table(){	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "bugs_data.php", true);
	xmlhttp.send();
	return false;
}
function reporter(){	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "reporter.php", true);
	xmlhttp.send();
	return false;
}
function tester_status(){	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "tester_done.php", true);
	xmlhttp.send();
	return false;
}
</script>

<script>
function get_app_name(val,val2){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(val2).innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "get_app_name.php?app_id="+val, true);
	xmlhttp.send();
	return false;
}

</script>

<script>
function get_search_tp(val){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("search_tp_id").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "get_search_tp.php?search_date="+val, true);
	xmlhttp.send();
	return false;
}

function search_by_tp_date(){
	var search_date=search_form.search_date.value;
	var search_tp=search_form.search_tp.value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("search_by_date_tp").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "search_by_tp_date.php?search_date="+search_date+"&search_tp="+search_tp, true);
	xmlhttp.send();
	return false;
}

function by_app(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "by_app.php", true);
	xmlhttp.send();
	return false;
}
function app_last_test(app,plt){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("body2").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "app_last_test.php?app="+app+"&plt="+plt, true);
	xmlhttp.send();
	return false;
}

function test_history(){
	var app=document.getElementById("app_name_x").value;
	var plt=document.getElementById("platform").value;
	var sce=document.getElementById("scenario").value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("test_history").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "test_history.php?app_name="+app+"&platform="+plt+"&scenario="+sce, true);
	xmlhttp.send();
	return false;
}

function status_perf(){	
	var user=tester_perf.tester.value;
	var fro=tester_perf.search_from_date.value;
	var s_to=tester_perf.search_to_date.value;
	if(fro>s_to){
		alert("From Date should not be greater !");
		tester_perf.search_from_date.focus();
		return false;
	}
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("status_perf").innerHTML = xmlhttp.responseText;
		}
	};
	xmlhttp.open("GET", "status_perf.php?user="+user+"&fro="+fro+"&s_to="+s_to, true);
	xmlhttp.send();
	return false;
}
</script>

</head>

<body id="body" onload="view_bugs_table()">
<div id="nav_pins">
<nav style="border:1px solid #eee;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="color:white" href="index.php">Accessibility Status Report</a>
    </div>
    <div class="collapse navbar-collapse pull-right" >
	  <ul  class="nav navbar-nav">
		<li><a style="color:aqua" onclick="view_bugs_table()">Bugs Result</a></li>
		<li><a style="color:aqua"onclick="view_test_results()">Test Results</a></li>
		<li><a style="color:aqua" onclick="by_app()">Search By App</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container" id="body2" >
</div>
</body>
</html>
