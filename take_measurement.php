<?php
$gender = $_GET['gender'];
// $productId = $_GET['productId'];
// $gender = 'M';
?>
<html>
	<head>
		<script type="text/javascript" src='js/jQuery.min.js'></script>
		<style>
			
		</style>
	</head>
	<body>
		<div border = '1' style= 'height:99%;width:99%;<!-- border: 1px solid black; -->'>
			<div  border = '1' style= 'height:97%;width:32%;float:left;border: 1px solid red;'>
				<div border = '1' style= 'height:22%;width:100%;float:left;border: 1px solid green;'>

				</div>
				<div border = '1' style= 'height:64%;width:100%;float:left;border: 1px solid blue;'>
					<div>
					
						<div id='maleMeasurement' <?php if($gender == 'F') {?>style = 'display:none' <?php } ?>>
							<label>HEIGHT</label>
							<input type="text" id = 'height' name = 'height'><br/>

							<label>NECK</label>
							<input type="text" id = 'neck' name = 'neck'><br/>

							<label>CHEST</label>
							<input type="text" id = 'chest' name = 'chest'><br/>

							<label>WAIST</label>
							<input type="text" id = 'waist' name = 'waist'><br/>

							<label>ARM</label>
							<input type="text" id = 'arm' name = 'arm'>
						</div>
						<div id='femaleMeasurement' <?php if($gender == 'M') {?>style = 'display:none' <?php } ?>>
							<label>HEIGHT</label>
							<input type="text" id = 'height' name = 'height'><br/>

							<label>BUST</label>
							<input type="text" id = 'bust' name = 'bust'><br/>

							<label>HIPS</label>
							<input type="text" id = 'hips' name = 'hips'><br/>

							<label>WAIST</label>
							<input type="text" id = 'waist' name = 'waist'><br/>

							<label>ARM</label>
							<input type="text" id = 'arm' name = 'arm'>
						</div>
					</div>
				</div>
				<div>
						<input type = 'button' value = 'Show Virtual Me '>
				</div>
			</div>
			<div  border = '1' style= 'height:97%;width:32%;float:left;border: 1px solid red;'>
				<div>
					<div id="manAvtar" style="display: block;">
				        <img src="images/avatar/man/stand.png" class="default" alt="" style="<?php if($gender == 'F') {?> display:none;  <?php } else {?> display: inline; <?php } ?>position: absolute;height: 80%;">
				        <img src="images/avatar/man/stand.png" class="height" alt="How to measure height" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/man/arm.png" class="arm" alt="How to measure arm" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/man/neck.png" class="neck" alt="How to measure neck" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/man/chest.png" class="chest" alt="How to measure chest" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/man/waist.png" class="waist" alt="How to measure waist" style="display: none;position: absolute;height: 80%;">
				    </div>

				    <div id="womanAvtar" style="display: block;">
				        <img src="images/avatar/woman/stand.png" class="default" alt="" style="<?php if($gender == 'M') {?> display:none;  <?php } else {?> display: inline; <?php } ?>position: absolute;height: 80%;">
				        <img src="images/avatar/woman/stand.png" class="height" alt="How to measure height" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/woman/arm.png" class="arm" alt="How to measure arm" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/woman/bust.png" class="bust" alt="How to measure neck" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/woman/hips.png" class="hips" alt="How to measure chest" style="display: none;position: absolute;height: 80%;">
				        <img src="images/avatar/woman/waist.png" class="waist" alt="How to measure waist" style="display: none;position: absolute;height: 80%;">
				    </div>
				</div>
			</div>
			<div  border = '1' style= 'height:97%;width:32%;float:left;border: 1px solid red;'></div>
		</div>

	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			var measureName;
			console.log($("div#maleMeasurement").find("input"));
			$("div#maleMeasurement").find("input").focus(function(){
				measureName = $(this).attr('id');
				$("#manAvtar").find("img").hide();
				$("#manAvtar").find("img."+measureName).show();
			});
			$("div#maleMeasurement").find("input").blur(function(){
				$("#manAvtar").find("img").hide();
				$("#manAvtar").find("img.default").show();
			});

			$("div#femaleMeasurement").find("input").focus(function(){
				measureName = $(this).attr('id');
				$("#womanAvtar").find("img").hide();
				$("#womanAvtar").find("img."+measureName).show();
			});
			$("div#femaleMeasurement").find("input").blur(function(){
				$("#womanAvtar").find("img").hide();
				$("#womanAvtar").find("img.default").show();
			});

		});
	</script>
</html>


