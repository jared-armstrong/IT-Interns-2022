function setMinDate() {
    var tomorrow = new Date();
    tomorrow.setDate(tomorrow.getDate() + 1);
    tomorrow = new Date(tomorrow).toISOString().split('T')[0];

    var setMin = document.getElementById("setDate");
    setMin.min = tomorrow;
}

function toggleShowForms() {

    var formDisplay = document.querySelector(".wrapperGrid");

    if (formDisplay.style.display === "none") {
        formDisplay.style.display = "grid";
    } else {
        formDisplay.style.display = "none";
    }

    
}

function submitClear() {
    
    if(confirm("Are you sure you would like to make your changes?")) {
        alert("Changes Made Successfully");
    } else {
        alert("Changes Disregarded");
    }

    var formDisplay = document.querySelector(".wrapperGrid");

    if (formDisplay.style.display === "none") {
        formDisplay.style.display = "grid";
    } else {
        formDisplay.style.display = "none";
    }
}

function cancelClear() {
    var formDisplay = document.querySelector(".wrapperGrid");

    if (confirm("You are about to cancel your changes and will have to restart. Are you sure?")) {
        alert("Changes Disregarded");
        formDisplay.style.display = "none";
    } else {
        formDisplay.style.display = "grid";
    }
}

window.onload = setMinDate()