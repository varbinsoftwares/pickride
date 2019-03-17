<?php
$this->load->view('layout/header');
?>
<style>
    #map {
        height: 500px;
    }
    /* Optional: Makes the sample page fill the window. */

    #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
    }
    #warnings-panel {
        width: 100%;
        height:10%;
        text-align: center;
    }
</style>
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
    <div class="container">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="<?php echo site_url("Shop/pickride"); ?>">Pick Ride</a><span>«</span></li>

                <li>Ride Detail</li>
            </ul>
        </div>
    </div>
</div>		
<!-- //breadcrumbs -->
<!-- Appointment -->
<div class="locations-w3-agileits">
    <div class="container">
        <div class="location-agileits" >
            <div class="loc-left">

                <div id="map"></div>
                &nbsp;
                <div id="warnings-panel"></div>
            </div>
            <div class="loc-right">


            </div>
            <div class="clearfix"> </div>
        </div>




    </div>
</div>
<?php
$this->load->view('layout/footer');
?>
<script>
    function initMap() {
        var markerArray = [];

        // Instantiate a directions service.
        var directionsService = new google.maps.DirectionsService;

        // Create a map and center it on Manhattan.
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 13,
            center: {lat: 40.771, lng: -73.974}
        });

        // Create a renderer for directions and bind it to the map.
        var directionsDisplay = new google.maps.DirectionsRenderer({map: map});

        // Instantiate an info window to hold step text.
        var stepDisplay = new google.maps.InfoWindow;

        // Display the route between the initial start and end selections.
        calculateAndDisplayRoute(
                directionsDisplay, directionsService, markerArray, stepDisplay, map);
        // Listen to change events from the start and end lists.
//        var onChangeHandler = function () {
//            calculateAndDisplayRoute(
//                    directionsDisplay, directionsService, markerArray, stepDisplay, map);
//        };
        //document.getElementById('start').addEventListener('change', onChangeHandler);
        //document.getElementById('end').addEventListener('change', onChangeHandler);
    }

    function calculateAndDisplayRoute(directionsDisplay, directionsService,
            markerArray, stepDisplay, map) {
        // First, remove any existing markers from the map.
        for (var i = 0; i < markerArray.length; i++) {
            markerArray[i].setMap(null);
        }
        console.log("======================");
        // Retrieve the start and end locations and create a DirectionsRequest using
        // WALKING directions.
        directionsService.route({
            origin: "<?php echo $data[0]['start_point']?>",
            destination: "<?php echo $data[0]['end_point']?>",
            travelMode: 'WALKING'
        }, function (response, status) {
            // Route the directions and pass the response to a function to create
            // markers for each step.
            if (status === 'OK') {
                document.getElementById('warnings-panel').innerHTML =
                        '<b>' + response.routes[0].warnings + '</b>';
                directionsDisplay.setDirections(response);
               // showSteps(response, markerArray, stepDisplay, map);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

//    function showSteps(directionResult, markerArray, stepDisplay, map) {
//        // For each step, place a marker, and add the text to the marker's infowindow.
//        // Also attach the marker to an array so we can keep track of it and remove it
//        // when calculating new routes.
//        var myRoute = directionResult.routes[0].legs[0];
//        for (var i = 0; i < myRoute.steps.length; i++) {
//            var marker = markerArray[i] = markerArray[i] || new google.maps.Marker;
//            marker.setMap(map);
//            marker.setPosition(myRoute.steps[i].start_location);
//            attachInstructionText(
//                    stepDisplay, marker, myRoute.steps[i].instructions, map);
//        }
//    }

//    function attachInstructionText(stepDisplay, marker, text, map) {
//        google.maps.event.addListener(marker, 'click', function () {
//            // Open an info window when the marker is clicked on, containing the text
//            // of the step.
//            stepDisplay.setContent(text);
//            stepDisplay.open(map, marker);
//        });
//    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAG-NpKiDnTrBNcGJGzXaC0ufdr1URu8A0&libraries=places&callback=initMap" async defer></script>
<script>