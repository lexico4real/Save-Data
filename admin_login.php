<?php
    $page_title = 'Admin Login' ;
    include_once('header.html');
?>

<section class="mbr-section form4 cid-rLAZIDX1vo" id="form4-i">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2 align-center" style="color: #ED3567;">
                    ADMIN LOGIN
                </h2>
                <div data-form-type="">
                    <!---Formbuilder Form--->
                    <form action="login_action.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form">
                        <div class="row">
                            <div class="col-12">
                                <?php
                                    if ( isset( $errors ) && !empty( $errors ) )
                                    {
                                        echo '<div class="alert alert-danger">
                                                <strong>Alert!</strong> Wrong email/password!!!
                                            </div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-12  form-group" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control input display-7" id="email-form4-i">
                            </div>
                            <div class="col-md-12  form-group" data-for="password">
                                <input type="password" name="pass" placeholder="Password" data-form-field="Password" required="required" class="form-control input display-7" id="password-form4-i">
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4" value="Login">LOGIN</button>
                            </div>
                            <div class="col-md-12  form-group" style="text-align:center">Not an Admin? Request an Admin privilege <a href="#">here</a> </div>
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