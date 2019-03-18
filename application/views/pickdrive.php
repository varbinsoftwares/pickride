<?php
$this->load->view('layout/header');
?>

<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="<?php echo site_url("Shop/index"); ?>">Home</a><span>«</span></li>

                <li>Pick Ride</li>
            </ul>
        </div>
    </div>
</div>		
<!-- //breadcrumbs -->
<!-- Appointment -->
<div class="locations-w3-agileits">
    <div class="container">
        <?php
        if($attr_value) {
        foreach ($attr_value as $key => $value) {
            ?> 
            <div class="location-agileits" >
                <div class="loc-left">
                    
<!--                    <h4>Person Name : <?php echo $value['person_name'] ?></h4>-->
                    <h4>Contact No. : <?php echo $value['contact_no'] ?></h4>
                    <p>Vehicle  Name : <?php echo $value['vehicle_name'] . '[' . $value['vehicle_no'] . ']' ?> </p>
                    <p>Start Point : <?php echo $value['start_point'] ?></p>
                    <p>End Point : <?php echo $value['end_point'] ?></p>
                    <p>Available Sits : <?php echo $value['available_sit'] ?></p>
                    <p>Pickup Date : <?php echo $value['off_date'] ?></p>
                    <p>Pickup Time : <?php echo $value['pickup_time'] ?></p>
                    <p>Ride Amount : <?php echo $value['offer_amount'] ?>/- Per Person <br/>
                    <a class="btn btn-success btn-sm pull-left" href="<?php echo site_url("Shop/drivemap/".$value['id'] ); ?>" ><i class="fas fa-eye"></i> View Map</a>
                        <?php
                        $session_data = $this->session->userdata('logged_in');

                        if ($value['contact_no'] == $session_data['mobile_no']) {
                            ?>
                            <button class="btn btn-primary btn-sm pull-right"  disabled><i class="fas fa-check"></i> Your Ride</button>

                        <?php
                        } else {
                            if ($value['stat'] == 1) {
                                ?>
                                <button class="btn btn-primary btn-sm pull-right" disabled><i class="fas fa-check"></i> Already Pick</button>

        <?php }else{ ?>
                            <button class="btn btn-primary btn-sm pull-right" href="#myModalNew<?php echo $key;?>" data-toggle="modal" ><i class="fas fa-check"></i> Pick Ride</button>

                        <?php }
                        
        } ?>
                    </p>
                </div>
              
                <div class="clearfix"> </div>
            </div>

            <!-- modal -->
            <div class="modal about-modal w3-agileits fade" id="myModalNew<?php echo $key;?>" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                        </div> 
                        <div class="modal-body login-page "><!-- login-page -->     
                            <div class="login-top sign-top">
                                <div class="agileits-login">
                                    <h5>Done Pickdrive</h5>

                                    <form action="#" method="post">
                                        <input type="hidden" name="offer_drive_id" value=" <?php echo $value['id'] ?>">
                                        <input type="hidden" name="picker_no" value=" <?php echo $session_data['mobile_no']?>">
                                        <input type="hidden" name="offer_no" value=" <?php echo $value['contact_no'] ?>">

                                        <div class="w3ls-submit"> 
                                            <input type="submit" name="confirm_pick_drive" value="Confirm Drive">  	
                                        </div>

                                    </form>

                                </div>  
                            </div>
                        </div>  
                    </div> <!-- //login-page -->
                </div>
            </div>
    
   
        <?php } }else{?>
            <h3>No Drive Available Now</h3>
        <?php }?>
    </div>
</div>

<?php
$this->load->view('layout/footer');
?>

  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG-NpKiDnTrBNcGJGzXaC0ufdr1URu8A0&callback=initMap" async defer></script>
