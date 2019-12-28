<?php
    $page_title = 'Register' ;
    include_once('header.html');


    require_once('connect_db.php');
    if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
    {
        # Insert first name.
        $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'fname' ] ) ) ;

        # Insert other name.
        $on = mysqli_real_escape_string( $dbc, trim( $_POST[ 'oname' ] ) ) ;

        # Insert last name.
        $ln = mysqli_real_escape_string( $dbc, trim( $_POST[ 'lname' ] ) ) ;

        # Insert gender.
        $g = mysqli_real_escape_string( $dbc, trim( $_POST[ 'gender' ] ) ) ;

        # Insert email address:
        $e = mysqli_real_escape_string( $dbc, trim( $_POST[ 'email' ] ) ) ;

        # Insert date of birth.
        $db = mysqli_real_escape_string( $dbc, trim( $_POST[ 'dob' ] ) ) ;

        # Insert address1.
        $ad1 = mysqli_real_escape_string( $dbc, trim( $_POST[ 'address1' ] ) ) ;

        # Insert address2.
        $ad2 = mysqli_real_escape_string( $dbc, trim( $_POST[ 'address2' ] ) ) ;

        # Insert city.
        $ct = mysqli_real_escape_string( $dbc, trim( $_POST[ 'city' ] ) ) ;

        # Insert state
        $st = mysqli_real_escape_string( $dbc, trim( $_POST[ 'state' ] ) ) ;

        # Insert country.
        $ctr = mysqli_real_escape_string( $dbc, trim( $_POST[ 'country' ] ) ) ;

        # Insert phone1.
        $ph1 = mysqli_real_escape_string( $dbc, trim( $_POST[ 'phone1' ] ) ) ;

        # Insert phone2.
        $ph2 = mysqli_real_escape_string( $dbc, trim( $_POST[ 'phone2' ] ) ) ;

        # Insert next of kin.
        $nk = mysqli_real_escape_string( $dbc, trim( $_POST[ 'nok' ] ) ) ;

        # Insert note.
        $n = mysqli_real_escape_string( $dbc, trim( $_POST[ 'note' ] ) ) ;


        $q = "SELECT regID FROM register WHERE email='$e'" ;
        $r = @mysqli_query ( $dbc, $q ) ;
        if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'This email is linked to a record already. <a href="register.php">Register</a>' ;

        $q = "INSERT INTO register (firstName, otherName, lastName, gender, email, dob, address1, address2, city, state, country, phoneNo1, phoneNo2, nok, note, regDate) VALUES ('$fn', '$on', '$ln', '$g', '$e', '$db', '$ad1', '$ad2', '$ct', '$st', '$ctr', '$ph1', '$ph2', '$nk', '$n', NOW() )";
        $r = @mysqli_query ( $dbc, $q ) ;
        
        # Close database connection.
        mysqli_close($dbc);
    }
?>


<section class="header15 cid-rLAY5DW7OJ mbr-fullscreen mbr-parallax-background" id="header15-f">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container">
        <div class="row">
            
                <div class="form-container col-lg-12 col-sm-8">
                    <div class="media-container-column" data-form-type="formoid">
                        <!---Formbuilder Form--->
                        <form action="https://save-data.php/" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="dIbVba7+ttPk0+hxXrJmb7JlcOjh/MWsNO6BzO/VT6DgWcC5J+qtWTiMqR+BGqIod1mLuVnsMG9BMqym+ZBYhaB/yDh6dAmDgtAgVAk2VtaLXbcru9lNTbiwlknnciOU">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                </div>
                            </div>
                            <h1 class="align-center">Fill the form below</h1><br>
                        <div class="row">
                            <div class="dragArea col-lg-4">
                                <div class="col-md-12 form-group " data-for="fname">
                                    <input type="text" name="first_name" placeholder="First Name" data-form-field="FName" required="required" class="form-control px-3 display-7" id="fname-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="oname">
                                    <input type="text" name="other_name" placeholder="Other Name" data-form-field="OName" class="form-control px-3 display-7" id="oname-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="lname">
                                    <input type="text" name="last_name" placeholder="Last Name" data-form-field="LName" required="required" class="form-control px-3 display-7" id="lname-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="gender">
                                    <select name="gender" data-form-field="Gender" required="required" class="form-control px-3 display-7" id="gender-header15-f">
                                        <option value="male">Choose your gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-12 form-group " data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control px-3 display-7" id="email-header15-f">
                                </div>
                                
                            </div>
                            <div class="dragArea col-lg-4">
                                <div class="col-md-12 form-group " data-for="dob">
                                    <input type="date" name="dob" value="2018-07-22" data-form-field="dob" required="required" class="form-control px-3 display-7" id="dob-header15-f" max = "2005-12-31">
                                </div>
                                <div class="col-md-12 form-group " data-for="address1">
                                    <input type="text" name="address1" placeholder="Address Field 1" data-form-field="address" required="required" class="form-control px-3 display-7" id="address1-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="address2">
                                    <input type="text" name="address2" placeholder="Address Field 2" data-form-field="address2" class="form-control px-3 display-7" id="address2-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="city">
                                    <input type="text" name="city" placeholder="City" data-form-field="City" required="required" class="form-control px-3 display-7" id="city-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="state">
                                    <input type="text" name="state" placeholder="State" data-form-field="state" required="required" class="form-control px-3 display-7" id="state-header15-f">
                                </div>
                                
                            </div>
                            <div class="dragArea col-lg-4">
                                <div class="col-md-12 form-group " data-for="country">
                                    <input type="text" name="country" placeholder="Country" data-form-field="Country" required="required" class="form-control px-3 display-7" id="country-header15-f">
                                    <input type="hidden" id="latitude_input" />
                                    <input type="hidden" id="longitude_input" />
                                </div>
                                <div class="col-md-12 form-group " data-for="phone1">
                                    <input type="phone1" name="phone1" placeholder="Phone Number 1" data-form-field="phone1" required="required" class="form-control px-3 display-7" id="phone1-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="phone2">
                                    <input type="text" name="phone2" placeholder="Phone Number 2" data-form-field="phone2" class="form-control px-3 display-7" id="phone2-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="nok">
                                    <input type="text" name="nok" placeholder="Next of Kin" data-form-field="nok" required="required" class="form-control px-3 display-7" id="nok-header15-f">
                                </div>
                                <div class="col-md-12 form-group " data-for="note">
                                    <input type="text" name="note" placeholder="Note: Optional" data-form-field="Note" class="form-control px-3 display-7" id="note-header15-f">
                                </div>
                                
                            </div>
                        </div>
                            <div class="col-md-12 input-group-btn align-center">
                                <button type="submit" class="btn btn-secondary btn-form display-4">SUBMIT</button>
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