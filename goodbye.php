<?php
    # Access session.
    session_start() ;

    # Redirect if not logged in.
    if ( !isset( $_SESSION[ 'adminID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

    $page_title = 'Admin Login' ;
    include_once('admin_header.html');
?>

<section class="mbr-section form4 cid-rLAZIDX1vo" id="form4-i">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <h2 class="pb-3 align-left mbr-fonts-style display-2 align-center" style="color: #ED3567;">
                    LOGGED OUT
                    <?php
                        $_SESSION = array() ;
  
                        # Destroy the session.
                        session_destroy() ;
                        
                        # Display body section.
                        echo '<h1 style="text-align:center">Goodbye!</h1><p style="text-align:center"><a href="admin_login.php">Login</a></p>' ;
                    ?>
                </h2>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>