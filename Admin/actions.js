(function($) {
    "use strict"; 
  
    
    $(document).on('submit', '#login_form', function(event){
        event.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            url:"process_login.php",
            method:"post",
            data:formData,
            dataType:"JSON",
            success:function(data){
                console.log(data);
                window.location.href = 'vacancies.php'
                //can put notification action
            },
            error:function(data){
                console.log(data);
                window.location.href = 'sign-in.php'
            }
        });
    });
  
   })(jQuery); // End of use strict