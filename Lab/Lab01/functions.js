/* its362 lab01 rileysharyl 01 25 2022 */

function grades() {
    // assign variable and get value
    var labEntry = document.getElementById("labEntry").value;
    var quizEntry = document.getElementById("quizEntry").value;
    var examTotal = document.getElementById("examTotal").value;
    var projectEntry = document.getElementById("projectEntry").value;
    var extraEntry = document.getElementById("extraEntry").value;
    var particpationEntry = document.getElementById("particpationEntry").value;

    // calculate total weighted grade
    var labGradePercent = parseInt(labEntry) / 125 * .30;
    var quizGradePercent = parseInt(quizEntry) / 50 * .10;
    var examGradePercent = parseInt(examTotal) / 200 * .30;
    var projectGradePercent = parseInt(projectEntry) / 100 * .20;
    var extraCreditGradePercent = parseInt(extraEntry) / 25 * .05;
    var participationGradePercent = parseInt(particpationEntry) / 75 * .10;


    //add weighted grade categories to get total grade percent
    var totalGradePercent = (labGradePercent + quizGradePercent + examGradePercent + projectGradePercent +
        extraCreditGradePercent + participationGradePercent) * 100;

    if (totalGradePercent >= 90) {
        var letterGrade = 'A';
    } else if (totalGradePercent >= 80) {
        var letterGrade = 'B';
    } else if (totalGradePercent >= 70) {
        var letterGrade = 'C';
    } else if (totalGradePercent >= 60) {
        var letterGrade = 'D';
    } else {
        var letterGrade = 'F';
    }

    document.getElementById("finalPercent").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
}