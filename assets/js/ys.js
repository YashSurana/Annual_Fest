$(document).ready(function(){
	$("#go").click(function(){
		var e_id=$("#searchId").val();
		 $.post("myDbConnection.php", {EmpId: e_id}, function(result){
            $("#team").html(result);
        });
	});
});