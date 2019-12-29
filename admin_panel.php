<?php
    $makeActiveHome = 'active';
    # Access session.
    session_start() ;

    # Redirect if not logged in.
    if ( !isset( $_SESSION[ 'adminID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

    $page_title = 'Admin Panel' ;
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
                <?php
                     echo '<table class="table table-dark" style="color:#ED3567;">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>First Name</th>
                             <th>Last Name</th>
                             <th>Email</th>
                             <th>Detail</th>
                         </tr>
                     </thead>';
                            # Open database connection.
                            require ( 'connect_db.php' ) ;

                            # Retrieve items from 'register' database table.
                            $q = "SELECT * FROM register" ;
                            $r = mysqli_query( $dbc, $q ) ;
                            if ( mysqli_num_rows( $r ) > 0 )
                            {
                            echo '<tbody>';
                            while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
                            {
                                echo '<tr><td>' .$row['regID'] .'</td>
                                <td>' .$row['firstName']. '</td>
                                <td>' .$row['lastName']. '</td>
                                <td>' .$row['email']. '</td>
                                <td data-toggle="tooltip" title="View full detail"><a href="detail.php"><button type="submit" style="padding:0px 15px; color:black; background-color: #ED3567; border-radius:5px;">View</button></a></td></tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                        }
                mysqli_close( $dbc ) ; 
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>