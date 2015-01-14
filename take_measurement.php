<?php
$gender = $_GET['gender'];
// $productId = $_GET['productId'];
// $gender = 'M';
?>
<html>
	<head>
		<script type="text/javascript" src='js/jQuery.min.js'></script>
		<style>
			input {
				width :20px;
			}
			div.male_measure_content input {
				position:relative;
			}
		</style>
		
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="js/jquery-ui.js"></script>
    <style type="text/css">
    #slider { margin: 10px; }
  </style>
	</head>
	<body>
		<div border = '1' id= 'measurementContent' style= 'height:99%;width:99%;<!-- border: 1px solid black; -->'>
			<div  border = '1' style= 'height:97%;width:32%;float:left;border: 1px solid red;'>
				<div border = '1' style= 'height:22%;width:100%;float:left;border: 1px solid green;'>

				</div>
				<div border = '1' style= 'height:64%;width:100%;float:left;border: 1px solid blue;'>
					<div>
					
						<div id='maleMeasurement' <?php if($gender == 'F') {?>style = 'display:none' <?php } ?>>
							<div class = 'male_measure_content'>
								<label>HEIGHT</label>
								<input type="text" id = 'height' name = 'height'><br/>
								<div id = "measurement_height"></div>
							</div>
							<div class = 'male_measure_content'>
								<label>NECK</label>
								<input type="text" id = 'neck' name = 'neck'><br/>
								<div id = "measurement_neck"></div>
							</div>
							<div class = 'male_measure_content'>
								<label>CHEST</label>
								<input type="text" id = 'chest' name = 'chest'><br/>
								<div id = "measurement_chest"></div>
							</div>
							<div class = 'male_measure_content'>
								<label>WAIST</label>
								<input type="text" id = 'waist' name = 'waist'><br/>
								<div id = "measurement_waist"></div>
							</div>
							<div class = 'male_measure_content'>
								<label>ARM</label>
								<input type="text" id = 'arm' name = 'arm'>
								<div id = "measurement_arm"></div>
							</div>
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
						<input type = 'button' value = 'Show Virtual Me ' id = 'virtualBtn'>
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
			<div  border = '1' style= 'height:97%;width:32%;float:left;border: 1px solid red;'>
				 
  <div id = 'sliderTooltip' style = 'position: relative;height: 10px;width:10px;border:1px solid black'> </div>
<div id="slider"></div>
Seek To : <input id="seekTo1" type="text" value="10" /> <input id="seekTo2" type="text" value="50" />
<input id="update" type="button" value="Update" />
Current Value : <span id="val">0 - 50</span>
			</div>
		</div>
		<div id = 'virtualMe' style= 'height:99%;width:99%;border: 1px solid black;'>
			<div style = 'height:20%;border: 1px solid black;'></div>
			<div style = 'height:70%;border: 1px solid black;'> <!-- style = 'position: relative;z-index: 211;top: 73px;left: 70px;' --> 
				<img src = 'images/garments-line.png' style = 'width: 100%;' >	
				<div id = hangedProd style= ''>
					<div style = 'position: relative;float:left;margin-left:-10%'>
<!-- 						<label>30</label> -->
						<div style = 'margin-left: 44%;'>36</div>
						<img src = 'images/hanger-left-prod.png' style = 'height: 70%;'>
					</div>
					<div style = 'position: relative;float:left;margin-left:-10%'>
						<div style = 'margin-left: 44%;'>36</div>
						<img src = 'images/hanger-left-prod.png' style = 'height: 70%;'>
					</div>
					<div style = 'position: relative;float:left;margin-left:-10%'>
					<div style = 'margin-left: 44%;'>36</div>
						<img src = 'images/hanger-left-prod.png' style = 'height: 70%;'>
					</div>
				</div>
				
				<div style = 'position: relative;z-index: 200;top: -82%;left: 10%;width: 20%;float:left'>
					<img src = 'images/front_36.png' id="front36" style = 'height:130%'>
					<!--  <img src = 'images/front_38.png' id="front38" style = 'height:130%'>
					<img src = 'images/front_40.png' id="front40" style = 'height:130%'>
					<img src = 'images/front_42.png' id="front42" style = 'height:130%'>
					<img src = 'images/front_44.png' id="front44" style = 'height:130%'>-->
				</div>
				<div style = 'position: relative;z-index: 229;top: -80%;left: 3%;width: 50%;background: url("images/mirror.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);float: left;'>
					<img src = 'images/back_36.png' id="back36" style = 'height: 97%;margin-left: 79px;'>
					<!--  <img src = 'images/front_38.png' id="front38" style = 'height:130%'>
					<img src = 'images/front_40.png' id="front40" style = 'height:130%'>
					<img src = 'images/front_42.png' id="front42" style = 'height:130%'>
					<img src = 'images/front_44.png' id="front44" style = 'height:130%'>-->
				</div>
			</div>	
		</div>
		

	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			var measureName;
// 			console.log($("div#maleMeasurement").find("input"));
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
			var minRange,maxRange,measure;
			var tab = 1;//1 for cm and  2 for inches
			$("div.male_measure_content").each(function(ele){
				 alert("hello");
				measure = $(this).find("input").attr('id');
				if(measure == 'height') {
					if(tab == 1){
						minRange = 152;
						maxRange = 205;
					} else {
						minRange = 150;
						maxRange = 188;
					}
				} else if(measure == 'neck') {
					if(tab == 1){
						minRange = 35;
						maxRange = 48;
					} else {
						minRange = 14;
						maxRange = 19;
					}
				} else if(measure == 'chest') {
					if(tab == 1){
						minRange = 78;
						maxRange = 132;
					} else {
						minRange = 31;
						maxRange = 51;
					}
				} else if(measure == 'waist') {
					if(tab == 1){
						minRange = 64;
						maxRange = 130;
					} else {
						minRange = 26;
						maxRange = 51;
					}
				} else if(measure == 'arm') {
					if(tab == 1){
						minRange = 60;
						maxRange = 90;
					} else {
						minRange = 24;
						maxRange = 35;
					}
				}
				console.log($(this).find("#measurement_"+measure).attr('id'));
				$(this).find("#measurement_"+measure).empty().slider ( {
		              range: 'max',
		              min: minRange,
		              max: maxRange,
		              step: 1,
		              value:1,
		              slide: function(event, ui){
		                  $("input#"+measure).css({
		                      left:(ui.value*100)/maxRange +'%',
		                      
		                   });
		                  $("input#"+measure).val(ui.value);
		              },
	          });
			});
		var maxRange = 200
          $("#slider").slider(
          {
              range: 'max',
              min: 20,
              max: maxRange,
              step: 1,
              value:1,
//               change: showValue,
              slide: function(event, ui){
                  $("#sliderTooltip").css({
                      left:(ui.value*100)/maxRange +'%',
                      
                   });
                  $("#sliderTooltip").html(ui.value);
              },
          });
         /*  $("#update").click(function () {
              $("#slider").slider("option", "values", [$("#seekTo1").val(), $("#seekTo2").val()]);

          });
          function showValue(event, ui) {
              $("#val").html(ui.values[0] + " - " + ui.values[1]);
          } */

          $("#virtualBtn").click(function(){
              $("#measurementContent").hide();
              $("#virtualMe").show();

          });
		      

		});
	</script>
</html>

