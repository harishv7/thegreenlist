<!DOCTYPE html>
<html>
    <?php
include 'includes/header.php';
    ?>

    <body>
        <?php
include 'includes/customnavbar.php';
        ?>

        <script>
            jQuery(document).ready(function ($) {
                var options = { $AutoPlay: true };
                var jssor_slider1 = new $JssorSlider$('slider1_container', options);
            });
        </script>
        <div class='row'>
            <div class='col-md-6'>
                <div id="slider1_container" class="center-block" style="position: relative; top: 0px; left: 0px; width: 800px; height: 300px;">
                    <!-- Slides Container -->
                    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
                        <div><img u="image" src="assets/images/carousel/monitor-23352_640.png"/>
                            <p class="pic-text">Monitor</p>
                        </div>
                        <div><img u="image" src="assets/images/carousel/slider-154174_1280.png" />
                            <p class="pic-text">Phone</p>
                        </div>
                        <div><img u="image" src="assets/images/carousel/sofa-645381_640.jpg" />
                            <p class="pic-text">Sofa Set</p>
                        </div>
                        <div><img u="image" src="assets/images/carousel/sofa-645384_640.jpg" />
                            <p class="pic-text">Sofa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Welcome to the Greenlist donation gallery.</h4>
            </div>
        </div>

    </body>
    <?php
include 'includes/footer.php';
    ?>

</html>