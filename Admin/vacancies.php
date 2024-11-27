<?php 
// Include necessary files
include "header.php"; 

// Define the get() function
function get($key) {
    return isset($_GET[$key]) ? $_GET[$key] : null;
}
?>

<!-- //header-ends -->
<style>
/* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f7fa;
    margin: 0;
    padding: 20px;
}

/* Container Styles */
#page-wrapper {
    background: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

/* Panel Styles */
.panel {
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 20px;
}

/* Panel Heading */
.panel-heading {
    background-color: #007bff;
    color: #ffffff;
    padding: 15px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

/* Form Styles */
.form-control1 {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Textarea Styles */
textarea {
    resize: vertical;
}

/* Button Styles */
input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Label Styles */
label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
}

/* Responsive Styles */
@media (max-width: 768px) {
    .col-md-8 {
        width: 100%;
        padding: 0;
    }

    .form-control1 {
        padding: 8px;
    }

    input[type="submit"] {
        width: 100%;
    }
}
</style>

<div id="page-wrapper">
    <div class="graphs">
        <h3 class="blank1">Post Vacancies</h3>
        <div class="xs">
            <div class="col-md-8 inbox_right">
                <div class="Compose-Message">               
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Post Vacancies 
                        </div>
                        <?php if(get("success")): ?>
                            <div>
                                <?=App::message("success", "Vacancy saved Successfully!")?>
                            </div>
                        <?php endif; ?>
                        <div class="panel-body panel-body-com-m">
                            <form class="com-mail" action="save-vacancies.php" method="post" enctype="multipart/form-data">
                                <label>Vacancy Title : </label>
                                <input type="text" name="vacancy_title" class="form-control1 control3" placeholder="Vacancy Title">
                                
                                <label>Vacancy Detail : </label>
                                <textarea rows="6" id="body" name="vacancy_detail" class="form-control1 control2"></textarea>
                                <script>
                                    CKEDITOR.replace('body');
                                </script>
                                
                                <label>Add Photo</label>
                                <input type="file" name="photo" class="form-control1 control3" accept=".jpg,.png,.jpeg">
                                
                                <label>Upload Document (Word/PDF):</label>
                                <input type="file" name="document" class="form-control1 control3" accept=".doc,.docx,.pdf">
                                
                                <hr>
                                <input type="submit" value="Submit Vacancy">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>