window.onload = () => {
    validateInput(document.getElementById("name"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Meno musí byť zadaný!";
        }
        if (value.length > 50) {
            return "Meno musí mať menej ako 50 znakov!";
        }
    });

    validateInput(document.getElementById("image"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Obrázok musí byť zadaný!";
        }
    });

    validateInput(document.getElementById("gender"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Pohlavie musí byť zadané!";
        }
        if (value.length > 5) {
            return "Pohlavie musí mať menej ako 5 znakov!";
        }
    });


    validateInput(document.getElementById("breed"), function (value = null) {
        if (value == null || value.length == 0) {
            return "Rasa musí byť zadaná!";
        }

    });


}