window.onload = (registerForm) => {
    validateInput(document.getElementById("name"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste Meno!";
        }
        if (value.length > 100) {
            return "Meno musí mať menej ako 100 znakov!";
        }

        var hasNumber = /\d/;
        if (hasNumber.test(value))
        {
            return "Meno nesmie obsahovať čísla!";
        }
    });

    validateInput(document.getElementById("firstName"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste Meno!";
        }
        if (value.length > 100) {
            return "Meno musí mať menej ako 100 znakov!";
        }

        var hasNumber = /\d/;
        if (hasNumber.test(value))
        {
            return "Meno nesmie obsahovať čísla!";
        }
    });

    validateInput(document.getElementById("lastName"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste Meno!";
        }
        if (value.length > 100) {
            return "Meno musí mať menej ako 100 znakov!";
        }

        var hasNumber = /\d/;
        if (hasNumber.test(value))
        {
            return "Meno nesmie obsahovať čísla!";
        }
    });

    validateInput(document.getElementById("email"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste e-mailovú adresu!";
        }
        if (value.length > 50) {
            return "E-mailová adresa musí mať menej ako 50 znakov!";
        }
        let re = new RegExp('^\\S+@\\S+\\.\\S+$');
        if (!re.test(value)) {
            return "E-mail je v nesprávnom tvare."
        }
    });


    validateInput(document.getElementById("password"), function (value = null){
        if (value == null || value.length == 0) {
            return "Nezadali ste heslo!";
        }
        if (value.length < 8 || value.length > 20) {
            return "Heslo musí 8 až 20 znakov!";
        }
        var hasNumber = /\d/;
        if (!hasNumber.test(value) || !isUpper(value))
        {
            return "Heslo musí obsahovať aspoň jedno veľké písmeno a číslo";
        }
    });

}