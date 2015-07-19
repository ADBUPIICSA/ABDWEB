$(document).ready(function() {
        $(".delete").click(function(){
        
        
        var del_id = $(this).attr("id");
        var info = 'id='+del_id;
        if(confirm("Desea eliminar este registro?")){
            $.ajax({
                type: "POST",
                url: "../RH/delete_applicant.php",
                data: info,
                success: function(result){ alert(result); location.reload() } 
            });
        }
        return false; 
        }); 
        });