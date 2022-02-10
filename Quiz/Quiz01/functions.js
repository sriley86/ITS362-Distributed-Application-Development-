/* its362 quiz1 rileysharyl 01 20 2022 */

function popup() {
    var num1 = Number(prompt('Lets Multiply Numbers - Enter a Number:'));
    var num2 = Number(prompt('Enter another Number'));
    //var result = numOne * numTwo;

    var result = parseInt(num1) * parseInt(num2);
    document.getElementById("value").innerHTML = result;
}