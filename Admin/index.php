


<?php 


session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // User is not logged in, redirect to sign-in page
    header('Location: sign-in.php');
    exit;
}

// If logged in, display the content of index.php



// Include the database connection (assuming it's already in your connect.php)
include('connect.php'); // Uncomment this line if needed

// Include header
include "header.php"; 
//include "sign-in.php"; 
?>

<div id="page-wrapper">
    <div class="graphs">
        <div class="col_3">
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="fa fa-users"></i>
                    <div class="stats">
                      <h5>45 </h5>
                      <div class="grow">
                        <p>Registered</p>
                      </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="fa fa-comment"></i>
                    <div class="stats">
                        <?php
                        // Query to get total vacancies
                        $result = $db->prepare("SELECT count(*) as total FROM vacancies");
                        $result->execute();
                        $row = $result->fetch();
                        ?>
                        <h5><?php echo $row['total']; ?> </h5>
                        <div class="grow grow1">
                            <p>Total News</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="fa fa-eye"></i>
                    <div class="stats">
                        <?php
                        // Query to get total events
                        $result = $db->prepare("SELECT count(*) as total FROM news");
                        $result->execute();
                        $row = $result->fetch();
                        ?>
                        <h5><?php echo $row['total']; ?></h5>
                        <div class="grow grow3">
                            <p>Total Events</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 widget">
                <div class="r3_counter_box">
                    <i class="fa fa-inbox"></i>
                    <div class="stats">
                        <?php
                        // Query to get total admins
                        $result = $db->prepare("SELECT count(*) as total FROM table_admin");
                        $result->execute();
                        $row = $result->fetch();
                        ?>
                        <h5><?php echo $row['total']; ?> </h5>
                        <div class="grow grow2">
                            <p>Total Admins</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

        <!-- Additional content goes here -->

    </div>
</div>

<?php include "footer.php"; ?>