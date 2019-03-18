<?php
$this->load->view('layout/header');
?>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="<?php echo site_url("Shop/index"); ?>">Home</a><span>«</span></li>

                <li>Confirmed Drive</li>
            </ul>
        </div>
    </div>
</div>		
<!-- //breadcrumbs -->
<div class="appointment">
    <div class="container">
      
        <?php
        if($result) {
        foreach ($result as $key => $value) {
            ?>
            <div class="timings-w3ls">
                <h5>Confirmed Drive</h5>
                <ul>
<!--                    <li>Person name <span><?php echo $value['person_name'] ?></span></li>-->
                    <li>Contact No.<span><?php echo $value['contact_no'] ?></span></li>
                    <li>Vehicle Name<span><?php echo $value['vehicle_name'] ?></span></li>
                    <li>Start Point <span><?php echo $value['start_point'] ?></span><br/></li><br/>
                    <li>End Point<span><?php echo $value['end_point'] ?></span></li><br/>

                    <li>Pickup Time <span><?php echo $value['pickup_time'] ?></span></li>
                    <li>Amount<span><?php echo $value['offer_amount'] ?>/- Per person</span></li>
                </ul>
            </div>

            <?php
        } }else{
        ?>
        <h5>You have no any confirmed drive</h5>
        <?php }?>
    </div>
</div>

<?php
$this->load->view('layout/footer');
?>
