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
                    ADMIN HOME
                </h2>
                <table class="table table-dark" style="color:#ED3567">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                        <td><button type="submit" style="padding:0px 15px; color:black; background-color: #ED3567; border-radius:5px;">View</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                        <td><button type="submit" style="padding:0px 15px; color:black; background-color: #ED3567; border-radius:5px;">View</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                        <td><button type="submit" style="padding:0px 15px; color:black; background-color: #ED3567; border-radius:5px;">View</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>