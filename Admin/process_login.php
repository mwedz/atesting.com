<?php 

include 'connect.php'; // Ensure this file opens a connection properly
session_start();

// Ensure the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function clean($str) {
    global $conn; // Use the global connection
    $str = @trim($str);
    return mysqli_real_escape_string($conn, $str); // Sanitize input
}

// Sanitize the POST values
$login = clean($_POST['username']);
$password = clean($_POST['password']);

  // Hash the password using MD5
  $hashedPassword = md5($password);

// Input Validations
$errmsg_arr = [];
$errflag = false;

if ($login == '') {
    $errmsg_arr[] = 'Username missing';
    $errflag = true;
}
if ($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
}

// If there are input validations, redirect back to the login form
if ($errflag) {
    // Handle errors
    echo '<script language="javascript">';
    echo "alert('" . implode("\\n", $errmsg_arr) . "');";
    echo "window.location.href='sign-in.php';";
    echo '</script>';
    exit();
}

// Create query
$qry = "SELECT * FROM table_admin WHERE username='$login' AND password='$password'";
$result = mysqli_query($conn, $qry);

// Check whether the query was successful or not
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Login Successful
        session_regenerate_id();
        $member = mysqli_fetch_assoc($result);
        $_SESSION['SESS_MEMBER_ID'] = $member['id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['name'];
        $_SESSION['SESS_LAST_NAME'] = $member['email'];
        $_SESSION['SESS_PRO_PIC'] = $member['file'];
        session_write_close();
        header("location: index.php");
        exit();
    } else {
        // Handle login failure
        echo '<script language = "javascript">';
        // echo "window.location.href='login.php'"; 
        echo "alert('Something went wrong, Enter correct details');window.location.href='sign-in.php'";
         echo '</script>';
          exit;
         // echo "<script language = 'javascript'> alert('Wrong Details');'</script>";
        }
	}else {
		die("Query failed");
	}

// Close the connection after all operations are complete
//mysqli_close($conn);
?>