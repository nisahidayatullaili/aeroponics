	
		<?php
		// $value=array();
			foreach ($data as $val) {
				// echo "<div class='col-sm-3'> Humidity = ". $value['humidity']=$val->humidity.'</div></div>';
				// echo "<div class='col-sm-3'> Water Tank Status = ". $value['water']=$val->water.'</div>';
				// echo "<div class='col-sm-3'> Mist Duration = ". $value['mist_duration']=$val->mist_duration.'</div>';
				// echo "<div class='col-sm-3'> Delay = ". $value['mist_delay']=$val->mist_delay.'</div>';
				

		?>


       
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
