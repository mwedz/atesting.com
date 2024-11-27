<?php
session_start();
include('connect.php');

$a = $_POST['vacancy_title'];
$b = $_POST['vacancy_detail'];

// Check if the file input exists and has no errors
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
    $file_name = strtolower($_FILES['file']['name']);
    $file_ext = substr($file_name, strrpos($file_name, '.'));
    $prefix = 'efac_' . md5(time() * rand(1, 9999));
    $file_name_new = $prefix . $file_ext;
    $path = '../uploads/' . $file_name_new;

    // Attempt to move the uploaded file
    if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
        // Prepare SQL statement
        $sql = "INSERT INTO vacancies (vacancy_title, vacancy_detail, file, date, document) VALUES (:a, :b, :c, :d, now())";
        $q = $db->prepare($sql);
        $success = $q->execute(array(':a' => $a, ':b' => $b, ':c' => $file_name_new, ':d' => $file_name_new));

        // Redirect based on success
        if ($success) {
            header("Location: vacancies.php?success=true");
        } else {
            header("Location: vacancies.php?failed=true");
        }
    } else {
        // Handle file move failure
        header("Location: vacancies.php?upload_failed=true");
    }
} else {
    // Handle case when file input is not set or has errors
    header("Location: vacancies.php?file_error=true");
}
?>