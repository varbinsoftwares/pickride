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
<?php
foreach ($user_ride_data as $key => $value) {
    ?> 
    <div class="timings-w3ls">
        <h5>User Profile</h5>
        <ul>
            <li>Person name <span><?php echo $value['person_name'] ?></span></li>
            <li>Contact No.<span><?php echo $value['contact_no'] ?></span></li>

        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="form-agileits">
        <h3>Offer Drive Detail</h3>
        <hr>
        Pickup Point : <?php echo $value['pickup_point']; ?><br/>
        Pickup Date : <?php echo $value['off_date']; ?><br/>
        Pickup Time : <?php echo $value['pickup_time']; ?>

        <hr>
        <h3>
            <?php if ($value['picker']) { ?> 
                Pickup Drive List
            <?php } else { ?>
                No  Pickup Drive Found
            <?php } ?>
        </h3>
        <hr>
        <?php foreach ($value['picker'] as $key1 => $value1) { ?>
            <div class="">
                <h4><?php echo $value1['user_name'] ?></h4>
                <p><?php echo $value1['mobile_no'] ?></p>
                <p>
                <form action="#" method="post">
                    <?php if ($value1['status'] == 'Done') { ?>
                        <button class="btn btn-primary btn-sm" disabled><i class="fas fa-check"></i>Done Offer Ride</button>

                    <?php } else { ?>
                        <button class="btn btn-primary btn-sm" value="<?php echo $value1['id'] ?>" name="confirm_pick_drive_id" ><i class="fas fa-check"></i>Confirm Offer Ride</button>


                    <?php }
                    ?>  
                </form>
                </p>


            </div>
        <div class="clearfix"> </div>
        <?php }; ?>  
    </div>



<?php } ?>

<?php
$this->load->view('layout/footer');
?>