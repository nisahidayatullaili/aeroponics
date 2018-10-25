<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="refresh" content="10" > -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/bootstrap.min.css" crossorigin="anonymous">

    <!-- <link href="bootstrap.css" rel="stylesheet"> -->
	<!-- <link href="http://localhost:8080/aeroponics/assets/bootstrap/switch/dist/css/bootstrap2/bootstrap-switch.css" rel="stylesheet">

	<script src="<?php echo base_url()?>assets/jquery/jquery-2.1.4.min.js"></script>
	<script src="http://localhost:8080/aeroponics/assets/bootstrap/switch/dist/js/bootstrap-switch.js"></script>
	 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome.min.css" crossorigin="anonymous">
  </head>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<body>

<style>
		.col-md-4{
			margin-top : 20px;
		}
		.col-md-6{
			margin-top : 20px;
		}

		h3.events{

		  margin-top: 2%;
		  text-align: center;
		  font-size: 210%;
		  color: white;
		  font-family: "OptionSans", sans-serif;
    	  font-weight: normal;
    	  padding-bottom: 3%;
		}

		
		.layer {
		    background-color: rgba(0, 0,0, 0.3);
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    -webkit-animation: screenFlash 1s ; /* Safari 4+ */
			-moz-animation:    screenFlash 1s ; /* Fx 5+ */
			-o-animation:      screenFlash 1s ; /* Opera 12+ */
			animation:         screenFlash 1s ; /* IE 10+, Fx 29+ */
		}
		 
		body {

			  background: url('http://localhost:8080/aeroponics/assets/img/bg.jpg') no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
		.row.top-buffer{
			margin-top:20px;

		}
		.onoffswitch {
			margin-left: 35%;
		    position: relative; width: 90px;
		    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
		}
		.onoffswitch-checkbox {
		    display: none;
		}
		.onoffswitch-label {
		    display: block; overflow: hidden; cursor: pointer;
		    border: 2px solid #999999; border-radius: 20px;
		}
		.onoffswitch-inner {
		    display: block; width: 200%; margin-left: -100%;
		    transition: margin 0.3s ease-in 0s;
		}
		.onoffswitch-inner:before, .onoffswitch-inner:after {
		    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
		    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
		    box-sizing: border-box;
		}
		.onoffswitch-inner:before {
		    content: "ON";
		    padding-left: 10px;
		    background-color: #34A7C1; color: #FFFFFF;
		}
		.onoffswitch-inner:after {
		    content: "OFF";
		    padding-right: 10px;
		    background-color: #EEEEEE; color: #999999;
		    text-align: right;
		}
		.onoffswitch-switch {
		    display: block; width: 18px; margin: 6px;
		    background: #FFFFFF;
		    position: absolute; top: 0; bottom: 0;
		    right: 56px;
		    border: 2px solid #999999; border-radius: 20px;
		    transition: all 0.3s ease-in 0s; 
		}
		.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
		    margin-left: 0;
		}
		.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
		    right: 0px; 
		}

		.header1{

			background-color: rgba(0, 0,0, 0.3);	
		    width: 1366px;
		    height: auto;
		    position: relative;
			float: left;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		.vidPoss{
			margin-left: 50px;
		}


		@-webkit-keyframes screenFlash {
		  0%   { opacity: 0; }
		  100% { opacity: 1; }
		}
		@-moz-keyframes screenFlash {
		  0%   { opacity: 0; }
		  100% { opacity: 1; }
		}
		@-o-keyframes screenFlash {
		  0%   { opacity: 0; }
		  100% { opacity: 1; }
		}
		@keyframes screenFlash {
		  0%   { opacity: 0; }
		  100% { opacity: 1; }
		}

</style>
<div class="layer">
<div class="container">
	<div class="row">
	   <div class="col text-center">
		   <div class="header1">
		      <h3 class="events"> (Moenic) Monitoring  Aeroponic With Raspberry Pi </h3>
		   </div>
	   </div>
	</div>


			


	<div class="row">
		<?php
		// $value=array();
			foreach ($data as $val) {
				// echo "<div class='col-sm-3'> Humidity = ". $value['humidity']=$val->humidity.'</div></div>';
				// echo "<div class='col-sm-3'> Water Tank Status = ". $value['water']=$val->water.'</div>';
				// echo "<div class='col-sm-3'> Mist Duration = ". $value['mist_duration']=$val->mist_duration.'</div>';
				// echo "<div class='col-sm-3'> Delay = ". $value['mist_delay']=$val->mist_delay.'</div>';
				

		?>

		<div class="row text-center" id="monitor">
	

		
        <div class="col-md-4">
          <div class="card">
          

            <img class="card-img-top" src="<?php echo base_url()?>/assets/img/humidity.png" alt="">

            <div class="card-body">
             
              <h4 class="card-title">Humidity</h4>
              <h4><p class="card-text"> <?php echo $val->humidity; ?></p></h4>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo base_url()?>/assets/img/water.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Water Pump</h4>
              <h4><p class="card-text"> <?php echo $val->water; ?></p></h4>
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="<?php echo base_url()?>/assets/img/mistWater.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Mist Spread Schedule</h4>
				<div class="onoffswitch">
					    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch"   
						<?php 
								if($val->mist_status=='ON'){
									echo "checked";
								}else{
									echo "";
								}
						 ?>
						}
					    onclick="check()">
					    <label class="onoffswitch-label" for="myonoffswitch">
					        <span class="onoffswitch-inner"></span>
					        <span class="onoffswitch-switch"></span>
					    </label>
					</div>

              <h7><p class="card-text"> <?php echo round($val->mist_duration/60,2);echo ' minute';  ?> / Distance  <?php echo round($val->mist_delay/60,2);echo ' minute'; ?> 
              
              	
              </p> </h7>
              	
		             
            	
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->
            </div>
          </div>
        </div>
			

      </div>

	</div>
	<?php }?>
  <!-- Content here -->

 <div class="row top-buffer">


  	 <div class="col-md-6">
          <div class="card">
            <!-- <img class="card-img-top" src="<?php echo base_url()?>/assets/img/mistD.png" alt=""> -->
            <div class="card-body">
              <h4 class="card-title">Create Scedule</h4>
              <hr>

	              <div id="control">
			  		<form method="POST">

			  		<div class="form-group">

						<div class="form-group">
					    <h6><label for="exampleInputEmail1">Mist Duration</label></h6>

					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mist Duration" name="duration">
					    
					    	<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="mist_duration" value="minute"> Minute
							  </label>
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="mist_duration" value="second"> Second
							  </label>
							</div>

					    
					  </div>


					  <div class="form-group">
					    <h6><label for="exampleInputEmail1">Mist Delay</label></h6>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mist Delay" name="delay">
					    
					    	<div class="form-check form-check-inline">
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="mist_delay" value="minute"> Minute
							  </label>
							  <label class="form-check-label">
							    <input class="form-check-input" type="radio" id="inlineCheckbox1" name="mist_delay" value="second"> Second
							  </label>
							</div>
					    
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>

					</div>
					</form>
		  		</div>

              <!-- <h4><p class="card-text"> <?php echo $val->mist_duration; ?></p></h4> -->
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->


            </div>
          </div>
        </div>
		
		<div class="col-md-6">
          <div class="card">
            <!-- <img class="card-img-top" src="<?php echo base_url()?>/assets/img/mistD.png" alt=""> -->
            <div class="card-body">
              <h5 class="card-title">Live Stream</h5>

	              <div id="control">
			  		<iframe src="" width="100%" height="270px"></iframe>
		  		</div>
		  	<div class="vidPoss">
				<div class="onoffswitch">
					    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="video"   
						<?php 
								if($val->video_status=='ON'){
									echo "checked";
								}else{
									echo "";
								}
						 ?>
						}
					    onclick="video()">
					    <label class="onoffswitch-label" for="video">
					        <span class="onoffswitch-inner"></span>
					        <span class="onoffswitch-switch"></span>
					    </label>
					</div>
			</div>
              <!-- <h4><p class="card-text"> <?php echo $val->mist_duration; ?></p></h4> -->
            </div>
            <div class="card-footer">
              <!-- <a href="#" class="btn btn-primary">Find Out More!</a> -->


            </div>
          </div>
        </div>
	  	
		
	</div>



		</div>
	</div>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->


	<script src="<?php echo base_url() ?>assets/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/popper.min.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap.min.js"></script>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script> -->
    <script>
    	var xmlhttp = new XMLHttpRequest();

    	$(document).ready(function(){
    		setInterval(function(){    			
    			$('#monitor').load(window.location.href+"/monitor/dataku");
    		}, 1000);    		
    	});

    	function check() {
    		// alert('a');
    			if(document.getElementById("myonoffswitch").checked==true){
    				saveData('ON');
    				// document.getElementById("myonoffswitch").inerHTML=
    			}else{
    				saveData('OFF');
    			}
		}		
		
		function saveData(val){
			

				   data = "status="+val;
                   xmlhttp.open("POST",window.location.href+"/api/statusMist",true);
                   xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                   xmlhttp.send(data);

		  }

		  function video(){
		  		if(document.getElementById("video").checked==true){
    				saveDataVid('ON');

    				// document.getElementById("myonoffswitch").inerHTML=
    			}else{
    				saveDataVid('OFF');
    			}
		  }

		  function saveDataVid(val){
			

				   data = "status="+val;
                   xmlhttp.open("POST",window.location.href+"/api/statusVideo",true);
                   xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                   xmlhttp.send(data);

		  }


    </script>
  </body>

</html>