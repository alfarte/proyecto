function iniciar(){
    if (document.form.password.value=='12345' && document.form.nombre.value=='admin' && document.form.loginn.value=='admin'){ 
            document.form.submit(); 
        } 
        else{ 
             alert("Porfavor ingrese, nombre de usuario y contraseña correctos."); 
        } 
    } 
    
var modal = document.getElementById('ingreso');


window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}

