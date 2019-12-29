<?php
    $makeActiveMsg = 'active';
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
                <?php
                # Open database connection.
                require ( 'connect_db.php' ) ;

                # Retrieve items from 'register' database table.
                $q = "SELECT * FROM contact_message" ;
                $r = mysqli_query( $dbc, $q ) ;
                if ( mysqli_num_rows( $r ) > 0 )
                {
                    echo '<div id="accordion">';
                    while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
                    {
                        echo '<div class="card">
                        <div class="card-header">';
                        $id = $row['msgID'];
                        ?>
                            <a class="card-link" data-toggle="collapse" href="#collapse<php echo {$id}; ?>">
                        <?php
                            echo '#'.$row['msgID']. ' ' .$row['topic']. ' --> '. $row['msgDate'].
                            '</a>
                        </div>';
                        ?>
                        <div id="collapse<php echo {$id}; ?>" class="collapse" data-parent="#accordion">
                        <?php
                            echo '<div class="card-body">
                            <h3>' .$row['topic']. '</h3>
                            <p>' .$row['msgDate']. '</p>'
                            .$row['message']
                            .'<p>From: <i>' .$row['name']. '</i></p>
                            </div>
                        </div>
                        </div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<?php
    include_once('footer.html');
?>