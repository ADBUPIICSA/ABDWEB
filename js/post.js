$(document).ready(function(){
$("#asignar").click(function(){
var idcap = document.getElementById ( "idcap" ).value
var idemp = document.getElementById ( "idemp" ).innerText

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'idcapa='+ idcap + '&idempl1='+ idemp;
if(idcap==''||idemp=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "../RH/assign.php",
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