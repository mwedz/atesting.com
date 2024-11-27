<?php










	include'../connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM vacancies WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-vacancies.php?success=true");
        }else{
            header("location:all-vacancies.php?failed=true");
        } 
		
?>