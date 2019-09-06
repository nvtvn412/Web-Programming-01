let exp = 1e-9;
window.onload = () => {
    let inputY = document.getElementsByName("valueY")[0];
    let form = document.getElementById("myform");    

    inputY.oninput = (e) => {
        let y = inputY.value;
        if (y == "") {
            e.target.setCustomValidity("Input required");
        } else {
            y = y.replace(',', '.');
            if (isNaN(y)) {
                e.target.setCustomValidity("Y must be a number");
            } else if (y < -5-exp || y > 3+exp) {
                e.target.setCustomValidity("Y must be inside range[-5;3]");
            } else {
                e.target.setCustomValidity("");
            }
        }
    }
    form.onsubmit = (e) => {
        if (inputY.value == "") {
            inputY.setCustomValidity("Input required")
            inputY.validationMessage = "Input required";
            e.preventDefault();
        }
    }
}