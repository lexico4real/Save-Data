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
                    <form action="contact.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="z989lQIPVDn8X4bkWkX06aEM85LHFDtkTWntIjB9KrhsW8v1nM7Z/AlmTB8zg+pd+580954kTKmWuwByiN+n/aQd1K0FBFAUcFdmPs6aJ/kQROXvaH3kb87hMAAA9C5g">
                        <div class="row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                            <div class="col-12">
                                
                            </div>
                        </div>
                        <div class="dragArea row">
                            <div class="col-md-12  form-group" data-for="email">
                                <input type="email" name="email" placeholder="Email" data-form-field="Email" required="required" class="form-control input display-7" id="email-form4-i">
                            </div>
                            <div class="col-md-12  form-group" data-for="password">
                                <input type="password" name="password" placeholder="Password" data-form-field="Password" required="required" class="form-control input display-7" id="password-form4-i">
                            </div>
                            <div class="col-md-12 input-group-btn  mt-2 align-center">
                                <button type="submit" class="btn btn-primary btn-form display-4">LOGIN</button>
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