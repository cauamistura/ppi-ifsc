var panel_content;
var num1 = 0;
var num2 = 0;
var operator = "";
var result = 0;

function add() {
    result = num1 + num2;
}

function subtract() {
    result = num1 - num2;
}

function multiply() {
    result = num1 * num2;
}

function divide() {
    result = num1 / num2;
}

function clear() {
    num1 = 0;
    num2 = 0;
    result = 0;
    operator = "";
    panel_content ="";
    updateDisplay(result);
}

function updateDisplay(value) {
    document.getElementById("result-panel").innerHTML = value;
}


function handleClick(event) {
    var btnValue = event.target.innerHTML;

    if (btnValue >= "0" && btnValue <= "9") {
        if (operator === "") {
            num1 = num1 * 10 + parseInt(btnValue);
            panel_content = num1;
            updateDisplay(panel_content);
        } else {
            num2 = num2 * 10 + parseInt(btnValue);
            panel_content = panel_content + operator + " " + num2;
            updateDisplay(panel_content);
        }
    } else if (btnValue === "+") {
        operator = "+";
    } else if (btnValue === "-") {
        operator = "-";
    } else if (btnValue === "*") {
        operator = "*";
    } else if (btnValue === "/") {
        operator = "/";
    } else if (btnValue === "=") {
        if (operator === "+") {
            add();
        } else if (operator === "-") {
            subtract();
        } else if (operator === "*") {
            multiply();
        } else if (operator === "/") {
            divide();
        }

        panel_content = panel_content + " = " + result;
        updateDisplay(panel_content);

        num1 = result;
        num2 = 0;
        operator = "";
        panel_content = "";
    } else if (btnValue === "C") {
        clear();
    }
}

var buttons = document.getElementsByTagName("button");

for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", handleClick);
}