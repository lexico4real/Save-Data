<?php
    $page_title = 'Contact' ;
    include_once('header.html');
?>

<section class="mbr-section form4 cid-rLAZIDX1vo" id="form4-i">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d63422.468922759865!2d3.334242526608638!3d6.533768565299514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.4985447999999995!2d3.3592165!4m5!1s0x103b92cd12b89285%3A0xee670a134865fbed!2sKosofe%2C%20Lagos%2C%20Nigeria!3m2!1d6.569080199999999!2d3.379308!5e0!3m2!1sen!2sus!4v1580483221835!5m2!1sen!2sus" allowfullscreen=""></iframe></div>
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2" style="color: #2609F2;">
                    Drop a Message
                </h2>
                <div>
                    <div class="icon-block pb-3 align-left">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                        <h4 class="icon-block__title align-left mbr-fonts-style display-5">
                            Don't hesitate to contact us
                        </h4>
                    </div>
                    <div class="icon-contacts pb-3">
                        <h5 class="align-left mbr-fonts-style display-7">
                            Ready for offers and cooperation
                        </h5>
                        <p class="mbr-text align-left mbr-fonts-style display-7">
                            Phone: 01 293 0704 <br>
                            Email: dejidoherty@gmail.com
                        </p>
                    </div>
                </div>
                <div data-form-type="">
                    <!---Formbuilder Form--->
                    <form action="contact.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="z989lQIPVDn8X4bkWkX06aEM85LHFDtkTWntIjB9KrhsW8v1nM7Z/AlmTB8zg+pd+580954kTKmWuwByiN+n/aQd1K0FBFAUcFdmPs6aJ/kQROXvaH3kb87hMAAA9C5g">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div class="col-12">
                                <?php
                                    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
                                    {
                                      # Connect to the database.
                                      require ('connect_db.php'); 
                                    
                                      # name.
                                      $nm = mysqli_real_escape_string( $dbc, trim( $_POST[ 'name' ] ) ) ;
                                    
                                      # phone.
                                      $tp = mysqli_real_escape_string( $dbc, trim( $_POST[ 'topic' ] ) ) ;
                                    
                                      # email address:
                                      $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ;

                                      # message:
                                      $m = mysqli_real_escape_string( $dbc, trim( $_POST[ 'message' ] ) ) ;
                                      
                                      # On success insert msg into 'contact_message' database table.
                                      $q = "INSERT INTO contact_message (name, topic, email, message) VALUES ('$nm', '$tp', '$e', '$m')";
                                        $r = @mysqli_query ( $dbc, $q ) ;
                                        
                                        echo '<div class="alert alert-success">
                                                            <strong>Success!</strong> Thanks for your message. We will get back to you shortly!!!
                                                        </div>';
                                        # Close database connection.
                                        mysqli_close($dbc); 
                                    
                                        exit();
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-6  form-group" data-for="name">
                                <input type="text" name="name" placeholder="Your Name" data-form-field="Name" required="required" class="form-control input display-7" id="name-form4-i">
                            </div>
                            <div class="col-md-6  form-group" data-for="topic">
                                <input type="text" name="topic" placeholder="Subject" data-form-field="Topic" required="required" class="form-control input display-7" id="topic-form4-i">
                            </div>
                            <div data-for="email" class="col-md-12  form-group">
                                <input type="text" name="email" placeholder="Email" data-form-field="Email" class="form-control input display-7" required="required" id="email-form4-i">
                            </div>
                            <div data-for="message" class="col-md-12  form-group">
                                <textarea name="message" placeholder="Message" data-form-field="Message" class="form-control input display-7" id="message-form4-i" required="required"></textarea>
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-form display-4" style="background: #4dfa09">SEND MESSAGE</button>
                            </div>
                        </div>
                    </form><!---Formbuilder Form--->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>