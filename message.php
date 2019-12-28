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
  </ul>
        <div class="row">
            <div class="col-md-12">
                <h2 class="pb-3 align-left mbr-fonts-style display-2 align-center" style="color: #ED3567;">
                    MESSAGES
                </h2>
                <div id="accordion">
                    <div class="card">
                    <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseOne">
                        Collapsible Group Item #1
                        </a>
                    </div>
                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                        Collapsible Group Item #2
                    </a>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                        Collapsible Group Item #3
                        </a>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>