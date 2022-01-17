window.onload = (editProfile) => {
    validateInput(document.getElementById("newpassword"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste nové heslo";
        }
        if (value.length < 8 || value.length > 20) {
            return "Heslo musí mať  8 až 20 znakov!";
        }
        var hasNumber = /\d/;
        if (!hasNumber.test(value) || !isUpper(value))
        {
            return "Heslo musí obsahovať aspoň jedno veľké písmeno a číslo";
        }
    });
    validateInput(document.getElementById("oldpassword"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste pôvodné heslo";
        }
    });
    validateInput(document.getElementById("password"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste pôvodné heslo";
        }
    });
}