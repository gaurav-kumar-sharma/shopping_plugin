<?php
$gender = $_GET['gender'];
// $productId = $_GET['productId'];
$gender = 'M';
?>
<html>
	<head>
		<script type="text/javascript" src='js/jQuery.min.js'></script>
		<style>
			input {
				width :40px;
			}
			div.male_measure_content input {
				position:relative;
				margin-left: -17px;
			}
			div.female_measure_content input {
				position:relative;
				margin-left: -17px;
			}
			.tabs {
				    width:100%;
				    display:inline-block;
				}
				 
				    /*----- Tab Links -----*/
				    /* Clearfix */
				    .tab-links:after {
				        display:block;
				        clear:both;
				        content:'';
				    }
				 
				    .tab-links li {
				        margin:0px 5px;
				        float:left;
				        list-style:none;
				    }
				 
			        .tab-links a {
			            padding:9px 15px;
			            display:inline-block;
			            border-radius:3px 3px 0px 0px;
			            background:lightgrey;
			            font-size:16px;
			            font-weight:600;
			            color:#4c4c4c;
			            transition:all linear 0.15s;
			        }
			 
			        .tab-links a:hover {
			            background:rgba(211, 211, 211, 0.44)
			            text-decoration:none;
			        }
				 li.active a, li.active a:hover {
				        background:rgba(211, 211, 211, 0.44);
				        color:#4c4c4c;
				    }
				 
				    /*----- Content of Tabs -----*/
				    .tab-content {
				        padding:15px;
				        border-radius:3px;
				        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
				        background:#fff;
				    }
				 
				        .tab {
				            display:none;
				        }
				 
				        .tab.active {
				            display:block;
				        }
				        div.male_measure_content {
				        	margin-bottom: 35px;
						}
						div.female_measure_content {
				        	margin-bottom: 35px;
						}
						div.slide_input {
							width: 285px;margin-left: 79px;margin-top: -38px;
						}
						div.male_measure_content span {
				        	top: -15px;
							left: 307px;
							position: relative;
						}
						div.female_measure_content span {
				        	top: -15px;
							left: 307px;
							position: relative;
						}
						div.female_measure_content span {
				        	top: -15px;
							left: 307px;
							position: relative;
						}
						div#manAvtar img{
							height:90%;
						}
						/* for virtual me page */
						div#frontWearingImage img {
							clip: rect(0, 216px, 470px, 31);
							position: absolute;
						 }
						div#backWearingImage img {
							height: 85%;
							margin-left: 67px;
							clip: rect(0, 148px, 324px, 24);
							position: absolute;
							margin-top: 73px;
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
			<div  border = '1' style= 'height:97%;width:45%;float:left;border: 1px solid red;'>
				<div border = '1' style= 'height:22%;width:100%;float:left;border: 1px solid green;'>
				<div style = 'height: 88px;'></div>
					<ul class="tab-links">
				        <li class="active" id = 'cmTab'><a href="#tab1" style = 'border-radius: 25px 0px 0px 25px;'>cm</a></li>
				        <li id = 'inchTab'><a href="#tab2" style = 'border-radius: 0px 25px 25px 0px;margin-left: -11px;'>inches</a></li>
				        
				    </ul>
				</div>
				<div border = '1' style= 'height:64%;width:100%;float:left;border: 1px solid blue;'>
					<div>
						
						<div id='maleMeasurement'  style = '<?php if($gender == 'F') {?>display:none; <?php } ?> margin-top: 45px;'>
							<div class = 'male_measure_content'>
								<label>HEIGHT</label>
								<div class = 'slide_input'>
								<input type="text" id = 'height' name = 'height'>
								<div id = "measurement_height"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'male_measure_content'>
								<label>NECK</label>
								<div class = 'slide_input'>
								<input type="text" id = 'neck' name = 'neck'>
								<div id = "measurement_neck"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'male_measure_content'>
								<label>CHEST</label><br/>
								<div class = 'slide_input'>
								<input type="text" id = 'chest' name = 'chest'><br/>
								<div id = "measurement_chest"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'male_measure_content'>
								<label>WAIST</label><br/>
								<div class = 'slide_input'>
								<input type="text" id = 'waist' name = 'waist'><br/>
								<div id = "measurement_waist"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'male_measure_content'>
								<label>ARM</label><br/>
								<div class = 'slide_input'>
								<input type="text" id = 'arm' name = 'arm'>
								<div id = "measurement_arm"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
						</div>
						<div id='femaleMeasurement' style = '<?php if($gender == 'M') {?>display:none; <?php } ?> margin-top: 45px;'>
							<div class = 'female_measure_content'>
							<label>HEIGHT</label>
							<div class = 'slide_input'>
								<input type="text" id = 'height' name = 'height'>
								<div id = "measurement_height"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'female_measure_content'>
							<label>BUST</label>
							<div class = 'slide_input'>
								<input type="text" id = 'bust' name = 'bust'>
								<div id = "measurement_bust"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'female_measure_content'>
							<label>HIPS</label>
							<div class = 'slide_input'>
							<input type="text" id = 'hips' name = 'hips'>
								<div id = "measurement_hips"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
							<div class = 'female_measure_content'>
							<label>WAIST</label>
							<div class = 'slide_input'>
							<input type="text" id = 'waist' name = 'waist'>
								<div id = "measurement_waist"></div><span class = 'spanMeasureType'>cm</span></div>
							</div>
						<div class = 'female_measure_content'>
							<label>ARM</label>
							<div class = 'slide_input'>
							<input type="text" id = 'arm' name = 'arm'>
								<div id = "measurement_arm"></div><span class = 'spanMeasureType'>cm</span></div>
						</div></div>
					</div>
				</div>
				<div>
						<input type = 'button' value = 'Show Virtual Me ' id = 'virtualBtn' style = 'width: 130px;'>
				</div>
			</div>
			<div  border = '1' style= 'height:97%;width:30%;float:left;border: 1px solid red;'>
				<div>
					<div id="manAvtar" style="display: block;">
				        <img src="images/avatar/man/stand.png" class="default" alt="" style="<?php if($gender == 'F') {?> display:none;  <?php } else {?> display: inline; <?php } ?>position: absolute;">
				        <img src="images/avatar/man/stand.png" class="height" alt="How to measure height" style="display: none;position: absolute;">
				        <img src="images/avatar/man/arm.png" class="arm" alt="How to measure arm" style="display: none;position: absolute;">
				        <img src="images/avatar/man/neck.png" class="neck" alt="How to measure neck" style="display: none;position: absolute;">
				        <img src="images/avatar/man/chest.png" class="chest" alt="How to measure chest" style="display: none;position: absolute;">
				        <img src="images/avatar/man/waist.png" class="waist" alt="How to measure waist" style="display: none;position: absolute;">
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
			<div  border = '1' style= 'height:97%;width:20%;float:left;border: 1px solid red;'>
				 
  <div id = 'sliderTooltip' style = 'position: relative;height: 10px;width:10px;border:1px solid black'> </div>
<div id="slider"></div>
Seek To : <input id="seekTo1" type="text" value="10" /> <input id="seekTo2" type="text" value="50" />
<input id="update" type="button" value="Update" />
Current Value : <span id="val">0 - 50</span>
			</div>
		</div>
		<div id = 'virtualMe' style= 'display:none;height:99%;width:99%;border: 1px solid black;'>
			<div style = 'height:20%;border: 1px solid black;'></div>
			<div style = 'height:70%;border: 1px solid black;'> <!-- style = 'position: relative;z-index: 211;top: 73px;left: 70px;' --> 
				<img src = 'images/garments-line.png' style = 'width: 100%;' >	
				<div id = 'hangedProd' style= 'position: relative;left: 10%;margin-right:2%'>
					<div style = 'position: relative;float:left;margin-left:-10%;margin-top: -3%'>
<!-- 						<label>30</label> -->
						<div style = 'margin-left: 44%;'>36</div>
						<img src = 'images/hanger-left-prod.png' prodSize = '36' style = 'height: 70%;'>
					</div>
					<div style = 'position: relative;float:left;margin-left:-15%;margin-top: -2%'>
						<div style = 'margin-left: 44%;'>38</div>
						<img src = 'images/hanger-left-prod.png' prodSize = '38' style = 'height: 70%;'>
					</div>
					<div style = 'position: relative;float:left;margin-left:-15%;margin-top: -1%'>
					<div style = 'margin-left: 44%;'>40</div>
						<img src = 'images/hanger-left-prod.png' prodSize = '40' style = 'height: 70%;'>
					</div>
				</div>
				
				<div id = 'frontWearingImage' style = 'position: relative;z-index: 200;top: -74%;margin-left: 70px;width: 20%;float:left;height: 485px;'>
					<img src = 'images/front_36.png' id="front36" style = 'height:150%'>
					<img src = 'images/front_38.png' id="front38" style = 'height:150%;display:none;'>
					<img src = 'images/front_40.png' id="front40" style = 'height:150%;display:none;'>
					<img src = 'images/front_42.png' id="front42" style = 'height:150%;display:none;'>
					<img src = 'images/front_44.png' id="front44" style = 'height:150%;display:none;'>
				</div>
				<div id = 'backWearingImage' style = 'margin-left: -46px;height: 560px;position: relative;z-index: 75;top: -80%;width: 50%;background: url("images/mirror.png") no-repeat scroll 0 0 rgba(0, 0, 0, 0);float: left;'>
					<img src = 'images/back_36.png' id="back36" style = 'height: 85%;margin-left: 10%;'>
					<img src = 'images/back_38.png' id="back38" style = 'height: 85%;margin-left: 10%;display:none;'>
					<img src = 'images/back_40.png' id="back40" style = 'height: 85%;margin-left: 10%;display:none;'>
					<img src = 'images/back_42.png' id="back42" style = 'height: 85%;margin-left: 10%;display:none;'>
					<img src = 'images/back_44.png' id="back44" style = 'height: 85%;margin-left: 10%;display:none;'>
				</div>
			</div>	
		</div>
		

	</body>
	<script type="text/javascript">
	var tab = 1;
	var minRange,maxRange,measure;
	var measureName;
		$(document).ready(function(){
			
			
			$("#cmTab").click(function(){
				tab = 1;
				$(this).attr('class','active')
				$("#inchTab").attr('class','');
				<?php if ($gender == 'M'){?>
				changeMeasurement('div.male_measure_content');
				<?php } else {?>
				changeMeasurement('div.female_measure_content');
				<?php }?>
				$("span.spanMeasureType").html("cm");
				
			});
			$("#inchTab").click(function(){
				tab = 2;
				$(this).attr('class','active');
				$("#cmTab").attr('class','');
				<?php if ($gender == 'M'){?>
				changeMeasurement('div.male_measure_content');
				<?php } else {?>
				changeMeasurement('div.female_measure_content');
				<?php }?>
				$("span.spanMeasureType").html("in.");
				
			});
			$("div#maleMeasurement").find("div.male_measure_content").mouseover(function(){
				measureName = $(this).find("input").attr('id');
				$("#manAvtar").find("img").hide();
				$("#manAvtar").find("img."+measureName).show();
			});
			$("div#femaleMeasurement").find("div.female_measure_content").mouseover(function(){
				
				measureName = $(this).find("input").attr('id');
				$("#womanAvtar").find("img").hide();
				$("#womanAvtar").find("img."+measureName).show();
// 				alert(measureName);
			});
			
			<?php if ($gender == 'M'){?>
			changeMeasurement('div.male_measure_content');
			<?php } else {?>
			changeMeasurement('div.female_measure_content');
			<?php }?>
			console.log($("div#hangedProd"));
			console.log($("div#hangedProd").find("img[prodSize]"));
			$("div#hangedProd").find("img[prodSize]").click(function(){
				prodSize = $(this).attr('prodSize');
				$("div#frontWearingImage").find("img").hide();
				$("div#frontWearingImage").find("img#front"+prodSize).show();

				$("div#backWearingImage").find("img").hide();
				$("div#backWearingImage").find("img#back"+prodSize).show();
				
			});
		        
          $("#virtualBtn").click(function(){
              $("#measurementContent").hide();
              $("#virtualMe").show();

          });
		      

		});

		function changeMeasurement(selector){
			var gender = '<?php echo $gender;?>';
			$(selector).each(function(ele){
				measure = $(this).find("input").attr('id');
				if(measure == 'height') {
					if(tab == 1){
						minRange = 152;
						maxRange = 205;
					} else {
						minRange = 60;
						maxRange = 80;
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
						minRange = 25;
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
				$(this).find('input#'+measure).attr('minRange',minRange);
				$(this).find('input#'+measure).attr('maxRange',maxRange);
				console.log($(this).find("#measurement_"+measure).attr('id'));
// 				$(this).find("#measurement_"+measure).click(function(){
// 					$(this).siblings('input').focus();
// 				});
				sliderSetVal = 1;
				measurementFlag  = $("span.spanMeasureType").html();
				if (tab == 1 && measurementFlag == 'in.') {
					tempVal = $(this).find('input#'+measure).val();
					sliderSetVal = Math.floor(tempVal/0.39370);
				} else if (tab == 2 && measurementFlag == 'cm') {
					tempVal = $(this).find('input#'+measure).val();
					sliderSetVal = Math.floor(tempVal*0.39370);
				} else {
					sliderSetVal  = $(this).find('input#'+measure).val();
				}
				var slider = $(this).find("#measurement_"+measure);
				$(this).find("#measurement_"+measure).empty().slider ( {
		              range: 'max',
		              min: minRange,
		              max: maxRange,
		              step: 1,
		              value:sliderSetVal,
		              slide: slideSlider,
		              change:slideSlider,
	          });
			$(this).find("#measurement_"+measure).siblings("input").blur(function(){
				var enteredMeasure = $(this).val();
				if(isNaN(enteredMeasure)) {
					enteredMeasure = 0;
				}
                  $(slider).slider("option", "value",enteredMeasure).slideSlider();
            });
			});
		}
		function slideSlider(event, ui) {
			min = $(this).siblings("input").attr('minRange');
            max = $(this).siblings("input").attr('maxRange');
            $(this).siblings("input").css({
                
                left:(ui.value-min)*100/(max-min) +'%',
                
             });
            $(this).siblings("input").val(ui.value);
            
		}
	</script>
</html>