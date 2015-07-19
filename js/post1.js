$(document).ready(function(){
$("#asignar").click(function(){
var idcomp = document.getElementById ( "idcomp" ).value
var idemp = document.getElementById ( "idemp" ).innerText

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'idcomp='+ idcomp + '&idempl1='+ idemp;
if(idcomp==''||idemp=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "../RH/assign1.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});