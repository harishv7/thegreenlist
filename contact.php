<!DOCTYPE html>
<html>
    <?php
		include 'includes/header.php';
    ?>
    <body>
        <div class="cover">
            <?php
				include 'includes/navbar.php';
            ?>
            <div class="cover-image" style="background-image : url('https://pixabay.com/en/photos/download/blogger-336371_1920.jpg')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="text-inverse brand-heading">The Greenlist</h1>
                        <p class="text-inverse ">Re-think. Re-use. Re-cycle.</p>
                        <br>
                        <br>
                        <a href="#contact-section">"<button type="button" class="custom-btn contact-btn">Contact Us</button></a>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            $(document).ready(function(){
                 $('.contact-btn').click(function(){
                    $('.contact-form').fadeToggle(); 
                 });
            });
        </script>
        
        <div class="container contact-form" id="contact-section">
            <div class="row">
                <div class='col-md-12 center-block'>
                    <script type="text/javascript" src="http://form.jotform.me/jsform/51704357054452"></script>
                </div>
            </div>
        </div>
        
    </body>
     <?php
			include 'includes/footer.php';
        ?>

</html>