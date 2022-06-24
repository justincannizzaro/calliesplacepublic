



<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="images/calliepictures/iconWork.png" style="width: 7%"/>
		<img src="images/calliepictures/iconWork2.png" style="width: 7%"/>
		<img src="images/calliepictures/iconWork3.png" style="width: 7%"/>
		<h1 style="text-align: center">
			-dev- Callie's Place! -dev-
		</h1>
		<div>
			<img onclick="" id="calliePic1" src="images/calliepictures/1.jpg" style="width: 47%">
			<img onclick="" id="calliePic2" src="images/calliepictures/2.jpg" style="width: 47%">
		</div>
		<div>
			<img onclick="" id="calliePic3" src="images/calliepictures/3.jpg" style="width: 47%">
			<img onclick="" id="calliePic4" src="images/calliepictures/4.jpg" style="width: 47%">
		</div>
		<div>
			<img onclick="" id="calliePic5" src="images/calliepictures/5.jpg" style="width: 47%">
			<img onclick="" id="calliePic6" src="images/calliepictures/6.jpg" style="width: 47%">
		</div>

		<script>
			var fadeValue = 0.0;				
			function goToGame(){
				document.getElementById('blackoutDiv').style.display='block';			
				setInterval(fadeOut,16);
			}
			function fadeOut(){
				fadeValue+=.02;
				document.getElementById('blackoutDiv').style.opacity=fadeValue;
				if(fadeValue>.97){
					window.location.href = 'http://localhost:8000/elementary/';
				}			
			}
		</script>
	</body>
</html>
