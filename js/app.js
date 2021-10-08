$(document).ready(function(){
    $('#btn').on('click',function(e){
            e.preventDefault();
   
    var user =$("#email").val();
    var password  =$('#password').val();
    var phone =$('#phone').val();
    

    $.ajax({
        url: "/dashboard/facebook/includes/signup.php",
				type: "POST",
				data: {
					user: user,
					password: password,
					phone: phone
				},
                success: function(data) {
                    alert("sucess");
                 },
                 
    })
});
})