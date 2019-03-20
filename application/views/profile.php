<?php
$this->load->view('layout/header');
?>
<!-- Appointment -->
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="<?php echo site_url("Shop/index"); ?>">Home</a><span>«</span></li>

                <li>Profile</li>
            </ul>
        </div>
    </div>
</div>		
<!-- //breadcrumbs -->
<div class="timings-w3ls">
    <h5>User Profile</h5>
    <ul>
        <li>Name<span style="color:white;"><?php echo $user_data->user_name; ?></span></li>
        <li>Contact No.<span style="color:white;"><?php echo $user_data->mobile_no; ?></span></li>
        <li> 
            <button class="btn btn-primary btn-sm " href="#profileModal" data-toggle="modal" >
                <i class="fas fa-check"></i> Update Profile</button>
        </li>

        <!-- modal -->
        <div class="modal about-modal w3-agileits fade" id="profileModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div> 
                    <div class="modal-body login-page "><!-- login-page -->     
                        <div class="login-top sign-top">
                            <div class="agileits-login">
                                <h5>Update Profile</h5>

                                <form action="#" method="post">
                                    <input type="text" name="user_name" placeholder="Enter Name">

                                    <div class="w3ls-submit"> 
                                        <input type="submit" name="update_profile" value="Update Profile">  	
                                    </div>

                                </form>

                            </div>  
                        </div>
                    </div>  
                </div> <!-- //login-page -->
            </div>
        </div>
    </ul>
</div>

<div class="well well-sm" style="margin:10px 5px 10px 5px">
    <!--<input type="text" id="positionval" style="width: 100%"/>-->
    <div class="row">
        <form method="post" action="#" class="col-xs-6">
            <input type = "submit" name="starttracking"  class="btn btn-lg btn-success"  value = "Start Tracking"  <?php echo $trackingstatus=='Yes'?'disabled':'';?>/>
        </form>
        <form method="post" action="#"  class="col-xs-6">
            <input type = "submit" name="stoptracking"  class="btn btn-lg pull-right btn-danger" <?php echo $trackingstatus=='No'?'disabled':'';?>  value = "Stop Tracking"/>
        </form>
    </div>

</div>

<?php
foreach ($user_ride_data as $key => $value) {
    ?> 

    <div class="clearfix"></div>
    <div class="form-agileits">
        <h3>Offer Drive Detail</h3>
        <hr>
        Vehicle Name : <span><?php echo $value['vehicle_name']; ?></span><br/>
        Vehicle No : <span><?php echo $value['vehicle_no']; ?></span><br/>
        Start Point : <span><?php echo $value['start_point']; ?></span><br/>
        End Point : <span><?php echo $value['end_point']; ?></span><br/>
        Pickup Date :<span> <?php echo $value['off_date']; ?></span><br/>
        Pickup Time : <span><?php echo $value['pickup_time']; ?></span><br/>
        Available Sit: <span><?php echo $value['available_sit']; ?></span><br/>
        Amount: <span><?php echo $value['offer_amount']; ?> Per Person

            <hr>
            <h3 style="margin-bottom:10px;">
                <?php if ($value['picker']) { ?> 
                    <span>Pickup Drive List</span>
                <?php } else { ?>
                    <span style="color:  red">No  Pickup Drive Found</span>
                <?php } ?>
            </h3>

            <?php foreach ($value['picker'] as $key1 => $value1) { ?>
                <div class="">
                    <h4><?php echo $value1['user_name'] ?></h4>
                    <p><?php echo $value1['mobile_no'] ?></p>

                    <form action="#" method="post">
                        <?php if ($value1['status'] == 'Done') { ?>

                            <button class="btn btn-danger btn-sm" value="<?php echo $value1['id'] . '+' . $value1['mobile_no'] ?>" name="cancel_drive"><i class="fas fa-trash"></i>Cancel Ride</button>

                        <?php } else { ?>
                            <button class="btn btn-primary btn-sm" value="<?php echo $value1['id'] . '+' . $value1['mobile_no'] ?>" name="confirm_pick_drive_id" ><i class="fas fa-check"></i>Confirm  Ride</button>


                        <?php }
                        ?>  
                    </form>



                </div>
                <div class="clearfix"> </div>
            <?php }; ?>  
    </div>



<?php } ?>

<?php
$this->load->view('layout/footer');
?>
