<!DOCTYPE html>
<html lang="en">
	<head>
		<title>STAMFORD SCHEDULE</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
		<link rel="stylesheet" type="text/css" href="css/hover.css">
		<link rel="stylesheet" type="text/css" href="css/demo-page.css">
		<link rel="stylesheet" type="text/css" href="css/nv.d3.css">
		<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="js/sweet-alert.js"></script>
		<script type="text/javascript" src="js/d3.min.js"></script>
		<script type="text/javascript" src="js/nv.d3.js"></script>
		
		<script type="text/javascript" src="js/gpa.js"></script>

		<!--JQuery mobile list view of course code description (scripts) -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- -------------------------------------------------------- -->


	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<img src="images/stamford.png" height="150" width="148">
					<br><br>
				</div>
			</div> <!-- End of row -->

<!-- 			<div class="row">
				<div class="col-md-3 ">
					<p class="legend">Version: </p>
					<input type="text" class="form-control" id="name1"/>
				</div>
				<div class="col-md-3 ">
					<p class="legend">Academic Year: </p>
					<input type="text" class="form-control" id="name2"/>
				</div>
				<div class="col-md-3 ">
					<p class="legend">Term: </p>
					<input type="text" class="form-control" id="name3"/>
				</div> -->


				<div>
					<form class="form-inline">
					<div class="form-group"
					<label>Search</label> 
					<input type="search" class="form-control" id="userInput" onkeydown = "if (event.keyCode == 13)
					document.getElementById('searchButton').click()"/>
					<input type="button" value="Enter" id="searchButton"onclick="getUserInput()"/>
					</div>
					</form>
				</div> <!-- I modified this code to get user input -->


				<!-- START OF SEARCH CODE -->
				<ul id="searchList"></ul>
				<script>
					
			function getUserInput()
			{
				var userText = document.getElementById("userInput").value;

				if(userText == "ITE451"){
				courseJson.courses.Monday.eight.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Mon & Wed<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE448"){
					courseJson.courses.Monday.ten.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Mon & Wed<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE420"){
					courseJson.courses.Monday.twelve.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Mon & Wed<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE442"){
					courseJson.courses.Monday.fourteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Mon & Wed<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE221"){
					courseJson.courses.Monday.sixteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Mon & Wed<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}
					// END OF MONDAY
				else if(userText == "ITE201"){
					courseJson.courses.Tuesday.eight1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Tue & Thur<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE101"){
					courseJson.courses.Tuesday.ten1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Tue & Thur<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE475"){
					courseJson.courses.Tuesday.twelve1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Tue & Thur<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE220"){
					courseJson.courses.Tuesday.fourteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Tue & Thur<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE321"){
					courseJson.courses.Tuesday.sixteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Tue & Thur<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}
				//END OF TUESDAY
				else if(userText == "ITE120"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE231"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE390"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE331"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "ITE445"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}
				//END OF FRIDAY
				//START OF ROOM
				else if(userText == "2506"){
					courseJson.courses.Monday.sixteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Tuesday.eight1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>6:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.ten2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2208"){
					courseJson.courses.Tuesday.ten1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2502"){
					courseJson.courses.Tuesday.twelve1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.twelve2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.fourteen2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2504"){
					courseJson.courses.Monday.eight.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Tuesday.sixteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.sixteen2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2204"){
					courseJson.courses.Monday.ten.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Monday.twelve.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "1202"){
					courseJson.courses.Monday.fourteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2402"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "2406"){
					courseJson.courses.Tuesday.fourteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}
				//END OF ROOM NUMBER
				else if(userText == "Atikom" || userText == "atikom"){
					courseJson.courses.Monday.eight.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Tuesday.eight1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>8:30 - 10:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Mintra" || userText == "mintra"){
					courseJson.courses.Monday.ten.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Monday.fourteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Tuesday.fourteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Apiporn" || userText == "apiporn"){
					courseJson.courses.Monday.twelve.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.sixteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Chinthaka" || userText == "chinthaka"){
					courseJson.courses.Monday.sixteen.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>16:30 - 18:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Tuesday.ten1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Majiri" || userText == "majiri"){
					courseJson.courses.Tuesday.twelve1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>14:30 - 16:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.twelve2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>12:30 - 14:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Iyke" || userText == "iyke"){
					courseJson.courses.Friday.eight2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.ten2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}else if(userText == "Karl" || userText == "karl"){
					courseJson.courses.Tuesday.sixteen1.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
					courseJson.courses.Friday.fourteen2.forEach(function(item)
					{
						var monText = "";	
						monText = "<li>10:30 - 12:30 / Fri<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i></li>";
						document.getElementById("searchList").innerHTML += monText;
					});
				}


			};

				</script>
				<!-- END OF SEARCH CODE -->

			</div> <!-- End of row -->
			<br/>
			<div class="row">
				<div class="col-md-12 "><br>
					<p class="lead" id="web-name"></p>
					<table class="table">
						<tr>
							<th></th>
							<th>8:30 - 10:30</th>
							<th>10:30 - 12:30</th>
							<th>12:30 - 14:30</th>
							<th>14:30 - 16:30</th>
							<th>16:30 - 18:30</th>
						</tr>
						<tr>
							<td>Mon & Wed</td>
							<td id="class8mon"></td>
							<td id="class10mon"></td>
							<td id="class12mon"></td>
							<td id="class14mon"></td>
							<td id="class16mon"></td>
						</tr>
						<tr>
							<td>Tue & Thur</td>
							<td id="class8tue"></td>
							<td id="class10tue"></td>
							<td id="class12tue"></td>
							<td id="class14tue"></td>
							<td id="class16tue"></td>
						</tr>
						<tr>
							<td>Friday</td>
							<td id="class8fri"></td>
							<td id="class10fri"></td>
							<td id="class12fri"></td>
							<td id="class14fri"></td>
							<td id="class16fri"></td>
						</tr>
					</table>
				</div>
			</div> <!-- End of row -->
<!-- _________________________________________________________________________________________________________________________________ -->
<!--display course code description -->
			<div class="row">
				<div class="col-md-6 text-center" id="code-descriptions">
					
						
    							<h2>Course Codes Description</h2>
    			<form class="ui-filterable">
      				<input id="myFilter" data-type="search">
    			</form>
    				<ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">
						      <li>ITE451: Cloud Computing</li>
						      <li>ITE201: IT Service Desk & Incident Management ( Pre: ITE 101)</li>
						      <li>ITE120: Web Development I</li>
						      <li>ITE101: Introduction to Information Technology </li>
						      <li>ITE231 Fundamentals of System Administration ( Pre: ITE 221)</li>
						      <li>ITE420: Information Security (Pre: ITE 475)</li>
						      <li>ITE448: Current Topics in Mobile Computing (Pre: ITE 235)</li>
						      <li>ITE390: Business Intelligence Applications (Pre: STA 101,BUS 206</li>
						      <li>ITE442: Database Management Systems (Pre: ITE 321)</li>
						      <li>ITE220: Web Development II ( Pre: ITE 120)</li>
						      <li>ITE331: Multimedia Technologies (Pre: ITE 220)</li>
						      <li>ITE221: Programming I </li>
						      <li>ITE321: System Analysis, Design & Implementation (Pre:ITE222)</li>
						      <li>ITE445: Mobile Games Development (Pre: ITE 220)</li>
						    </ul>
				</div>

<!--display course code description -->				
				<div class="col-md-6 text-center" id="chart">

				<h2>Lecture Name</h2>
    			
    				<ul >
						      <li>Ajarn: Werayuth Charoenruengkit</li>
						      <li>Ajarn: Atikom Srivallop</li>
						      <li>Ajarn: Mintra Ruensuk</li>
						      <li>Ajarn: Karl Schindler</li>
						      <li>Ajarn: Iyke</li>
						      <li>Ajarn: Manjiri</li>
						      <li>Ajarn: Apiporn (Faith)</li>
						    </ul>
				</div>
				</div>

			</div>
<!-- _________________________________________________________________________________________________________________________________ -->
			 <!-- End of row -->
  	</div>
<script type="text/javascript">
	var courseJson = null;
	$.ajax({
		url: "http://localhost:80/WeekFinal/data2.json",
		dataType: "json",
		success: function(data){
			console.log(data);
			courseJson = data;
			document.getElementById("web-name").textContent = courseJson.app_name;

			//----------------------------------------------------------------------
			var monday = courseJson.courses.Monday;
			courseJson.courses.Monday.eight.forEach(function(item){
				var monText = "";	
				monText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class8mon").innerHTML += monText;
			});
			//----------------------------------------------------------------------
			var monday10 = courseJson.courses.Monday;
			courseJson.courses.Monday.ten.forEach(function(item){
				var monText = "";	
				monText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class10mon").innerHTML += monText;
			});
			//----------------------------------------------------------------------
			var monday12 = courseJson.courses.Monday;
			courseJson.courses.Monday.twelve.forEach(function(item){
				var monText = "";	
				monText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class12mon").innerHTML += monText;
			});
			//----------------------------------------------------------------------
			var monday14 = courseJson.courses.Monday;
			courseJson.courses.Monday.fourteen.forEach(function(item){
				var monText = "";	
				monText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class14mon").innerHTML += monText;
			});
			//----------------------------------------------------------------------
			var monday16 = courseJson.courses.Monday;
			courseJson.courses.Monday.sixteen.forEach(function(item){
				var monText = "";	
				monText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class16mon").innerHTML += monText;
			});
			//----------------------------------------------------------------------
			var tuesday8 = courseJson.courses.Tuesday;
			courseJson.courses.Tuesday.eight1.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class8tue").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var tuesday10= courseJson.courses.Tuesday;
			courseJson.courses.Tuesday.ten1.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class10tue").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var tuesday12 = courseJson.courses.Tuesday;
			courseJson.courses.Tuesday.twelve1.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class12tue").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var tuesday14 = courseJson.courses.Tuesday;
			courseJson.courses.Tuesday.fourteen1.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class14tue").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var tuesday16 = courseJson.courses.Tuesday;
			courseJson.courses.Tuesday.sixteen1.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class16tue").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var friday8 = courseJson.courses.Friday;
			courseJson.courses.Friday.eight2.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class8fri").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var friday10 = courseJson.courses.Friday;
			courseJson.courses.Friday.ten2.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class10fri").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var friday12 = courseJson.courses.Friday;
			courseJson.courses.Friday.twelve2.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class12fri").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var friday14 = courseJson.courses.Friday;
			courseJson.courses.Friday.fourteen2.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class14fri").innerHTML += tueText;
			});
			//----------------------------------------------------------------------
			var friday16 = courseJson.courses.Friday;
			courseJson.courses.Friday.sixteen2.forEach(function(item){
				var tueText = "";	
				tueText = "<p><b>" + item.room + "</b> "+ item.course_name + " : <i>"+item.lecturer+"</i>";
				document.getElementById("class16fri").innerHTML += tueText;
			});
			//----------------------------------------------------------------------



					},
		error: function(error){
			console.log(error.responseText);
		}
	})

</script>
	

		<!-- new line to display course code description :Ignore this code (Victor)

<script type="text/javascript">
	var codeJson = null;
	$.ajax({
		url: "http://localhost:8181/WeekFinal/description.json",
		dataType: "json",
		success: function(data){
			console.log(data);
			codeJson = data;
			
			document.getElementById("chart").textContent = codeJson.app_name;



			var classCode = codeJson.description.ite;
			codeJson.description.ite.code_0.forEach(function(item){
				var naMe = "";	
				naMe = item.code + " : " + item.name ;
				document.getElementById("chart").innerHTML += naMe;
			});

					},		
		error: function(error){
			console.log(error.responseText);
		}
	})

</script> -->




<?php include("includes/footer.php") ?>
</body>
</html>

<!-- I MOVED THE SCRIPT INTO THE HTML BODY -->






