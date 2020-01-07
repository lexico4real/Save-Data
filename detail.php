<?php
    $makeActiveHome = 'active';
    # Access session.
    session_start() ;

    # Redirect if not logged in.
    if ( !isset( $_SESSION[ 'adminID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

    $page_title = 'Admin Login' ;
    include_once('admin_header.html');
    $id=$_GET['regID'];
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
                <?php
                
            echo '<table class="table table-striped table-bordered" style="color:#ED3567;">';
            # Open database connection.
            require ( 'connect_db.php' ) ;

            # Retrieve items from 'register' database table.
            $q = "SELECT * FROM register WHERE regID = '$id'" ;
            $r = mysqli_query( $dbc, $q ) ;
            if ( mysqli_num_rows( $r ) > 0 )
            {
            echo '<tbody>';
            while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
            {
                echo'<tr>
                        <td></td>
                        <td>'; echo'<img src="images/'.$row["img"].'" height="300px" width="300px">'; echo'</td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>'.$row['firstName'].'</td>
                    </tr>
                    <tr>
                        <td>Other Name</td>
                        <td>'.$row['otherName'].'</td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>'.$row['lastName'].'</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>'.$row['gender'].'</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>'.$row['email'].'</td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>'.$row['dob'].'</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>'.$row['address1']. ' '.$row['address2']. ', '.$row['city']. ', '.$row['state']. ', '. $row['country'].'</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>'.$row['phoneNo1'].'</td>
                    </tr>
                    <tr>
                        <td>Next of Kin</td>
                        <td>'.$row['nok'].'</td>
                    </tr>
                    <tr>
                        <td>Date/Time Registered</td>
                        <td>'.$row['regDate'].'</td>
                    </tr>';
            }
                    echo '</tbody>';
        }
                echo '</table>';
                ?>
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