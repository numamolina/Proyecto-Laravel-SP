$(document).ready(function(){
    // Configura las máscaras de entrada para los campos que las necesiten
    $('[data-mask]').inputmask();




function validateForm() {
    var flag = true;

    // Validación de cada campo
    if ($('#name').val() == "")
        flag = checkedInputOrFields("name");
    if ($('#username').val() == "")
        flag = checkedInputOrFields("username");
    if ($('#first_name').val() == "")
        flag = checkedInputOrFields("first_name");
    if ($('#last_name').val() == "")
        flag = checkedInputOrFields("last_name");
    if ($('#email').val() == "") {
        flag = checkedInputOrFields("email");
    } else {
        flag = validateEmail($('#email').val());
    }
    if ($('#password').val() == "")
        flag = checkedInputOrFields("password");
    if ($('#role').val() == "")
        flag = checkedInputOrFields("role");
    if ($('#dni').val() == "")
        flag = checkedInputOrFields("dni");

    // Validación del campo de archivo (avatar)
    var archivoInput = document.getElementById('avatar');
    var archivoRuta = archivoInput.value;
    var extPermitidas = /(.png|.gif|.jpg|.jpeg)$/i;
    if (!extPermitidas.exec(archivoRuta)){
        archivoInput.value = "";
        flag = checkedInputOrFields("avatar");
    }

    // Validación del campo de dirección (address)
    if ($('#address').val() == "")
        flag = checkedInputOrFields("address");

    // Validación del campo de móvil (mobile)
    if ($('#mobile').val() == "")
        flag = checkedInputOrFields("mobile");

    // Validación del campo de fecha de nacimiento (date_of_birth)
    if ($('#date_of_birth').val() == "")
        flag = checkedInputOrFields("date_of_birth");

    return flag;
}

function checkedInputOrFields(classOrIdJquery) {
    // Establece el atributo 'required' en true para el campo
    $(`#${classOrIdJquery}`).attr('required', true);
    // Cambia el color del texto a rojo para resaltar el campo obligatorio
    $(`#${classOrIdJquery}`).css('color', 'red');
    return false;
}

function validateEmail(email) {
    // Utiliza una expresión regular para validar la estructura del correo electrónico
    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
    return emailRegex.test(email);
}
});