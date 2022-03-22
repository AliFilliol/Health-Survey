function validateQuestionMinimal() {
   
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    
    if (!value) {
        
        setWarning("Please fill with your Value");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
       
        if (!sliderHasChanged()) {
            setWarning("Please change the position of the Slider.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Please choose, before moving on.");
            return false;
        }
    }
    else {
        
        let value = inputElement.value;

       
        if (!value) {
            
            setWarning("Please fill with your Value.");
            return false;
        }
    }
}



function validateNumber() {

    let value = document.getElementById("number-text").value;
 
    if (value == "") {
        setWarning("Please fill with a number.");

        return false;
    }

}


function validateRadio(radioName) {
    let radioBottons = document.getElementsByName(radioName);

    for (let i = 0; i < radioBottons.length; i++) {
        let radioBtn = radioBottons[i];

        if (radioBtn.checked == true) {
            return true;
        }

    }
    setWarning("Please choose an Option");
    return false;

}



function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}
