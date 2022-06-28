

function toggleShowForms() {

    var formDisplay = document.getElementById("formHolder");

    if (formDisplay.style.display === "none") {
        formDisplay.style.display = "grid";
    } else {
        formDisplay.style.display = "none";
    }

    
}

function submitClear() {
    
    var txt;
    if(confirm("Are you sure you would like to make your changes?")) {
        alert("Changes Made Successfully");
    } else {
        alert("Changes Disregarded");
    }

    var formDisplay = document.getElementById("formHolder");

    if (formDisplay.style.display === "none") {
        formDisplay.style.display = "grid";
    } else {
        formDisplay.style.display = "none";
    }
}