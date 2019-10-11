function validateForm() {
    for (i = 0; i < document.forms["contactForm"].getElementByClass("alert").length; i++) {
        if (document.forms["contactForm"][i].type === "text") {
            if (document.forms["contactForm"][i]value === "") {
                debugger;
                alert("Please fill out all the fields correctly.");
                return false;
            } 
        }
    }
}


