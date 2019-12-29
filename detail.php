<?php
    $makeActiveHome = 'active';
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
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h2 class="pb-3 align-left mbr-fonts-style display-2 align-center" style="color: #ED3567;">
                    FULL DETAIL
                </h2>
                <table class="table table-striped table-bordered" style="color:#ED3567;">
                   <tbody>
                    <tr>
                        <td>First Name</td>
                        <td>Doe</td>
                    </tr>
                    <tr>
                        <td>Other Name</td>
                        <td>Moe</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>Dooley</td>
                    </tr>
                    </tbody>
                </table>
                <div class="col-md-12 input-group-btn  mt-2 align-center">
                    <a href="admin_panel.php"><button type="submit" class="btn btn-primary btn-form display-4" value="Login">BACK</button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>