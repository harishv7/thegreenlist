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
            <div class="cover-image" style="background-image : url('https://c1.staticflickr.com/7/6107/6347903993_4d1370e4d8_b.jpg')"></div>
            <div class="container">
                <div class="row  greenlist-intro">
                    <div class="col-md-12 text-center">
                        <h1 class="text-inverse brand-heading">The Greenlist</h1>
                        <p class="text-inverse">Re-think. Re-use. Re-cycle.</p>
                        <br>
                        <br>
                        <a href='#greenlist-sec'><button type="button" class="custom-btn greenlist-btn">Greenlist your item</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section greenlist-section" id="greenlist-sec">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>What do you want to do?</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center addnew-text">
                    <button type="button" class="custom-btn-2 fa fa-plus-circle fa-5x hvr-pop reuse-btn"></button> 
                    <p class="body-text limit-width text-center center-block"><br> I am looking to put forward my items in working condition for others to <strong>reuse</strong>.</p>
                </div>
                <div class="col-md-6 text-center addnew-text">
                    <button type="button" class="custom-btn-2 fa fa-plus-circle fa-5x hvr-pop recycle-btn"></button> 
                    <p class="body-text limit-width text-center center-block"><br> I have an item in non-working condition that I want to <strong>recycle</strong>.</p>
                </div>
            </div>

            <script>
                $(document).ready(function(){
                    $('.reuse-btn').click(function(){
                        $('.recycle-items').fadeOut();
                        $('.reuse-items').fadeToggle(); 
                    });
                    $('.recycle-btn').click(function(){
                        $('.reuse-items').fadeOut();
                        $('.recycle-items').fadeToggle(); 
                    });
                    $( "#datepicker" ).datepicker();
                    $("#timepicker").timepicker();
                    $.fn.bootstrapSwitch.defaults.onText = "Yes";
                    $.fn.bootstrapSwitch.defaults.offText = "No";
                    $("[name='my-checkbox']").bootstrapSwitch();
                    
                });
            </script>

            <!-- Reuse items -->
            <div class='container'>
                <div class="row reuse-items">
                    <hr>
                    <div class="row">
                        <div class='col-md-12 text-center'>
                            <h1>Give your item to someone else to reuse.</h1>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6 center-block">
                            <label for="comment">Upload Pics:</label>
                            <!-- Change /upload-target to your upload address -->
                            <form action="/upload-target" class="dropzone"></form>
                        </div>
                    </div>
                    <br>
                    <div class='row'>
                        <div class="col-md-6 center-block">
                            <form role="form">
                                <div class="form-group">
                                    <label for="sel1">Select list:</label>
                                    <select class="form-control" id="sel1">
                                        <option>Electronic</option>
                                        <option>Furniture</option>
                                        <option>Books (Textbooks, Storybooks etc.)</option>
                                        <option>Others (Plastic Products, etc.)</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Description:</label>
                                    <textarea class="form-control" rows="3" id="comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Pick-up Location:</label>
                                    <textarea class="form-control" rows="1" id="comment"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Date:</label>
                                    <input type="text" id="datepicker">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Time:</label>
                                    <input id="timepicker" type="text">
                                </div> 
                                <br>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <!-- Recycle items -->
            <div class="container recycle-items">
                <hr>
                <div class="row">
                    <div class='col-md-12 text-center'>
                        <h1>Recycle your item.</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 center-block">
                        <form role="form">
                            <div class="form-group">
                                <label for="sel1">Select list:</label>
                                <select class="form-control" id="sel1">
                                    <option>Electronic Items</option>
                                    <option>Furniture</option>
                                    <option>Paper Products</option>
                                    <option>Plastic Products</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Workable condition?</label>
                                <div class="radio">
                                    <input type="checkbox" name="my-checkbox" checked>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </body>
    <?php
include 'includes/footer.php';
    ?> 
</html>
