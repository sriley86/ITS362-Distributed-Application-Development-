/* its362 lab02 rileysharyl 01 30 2022 */

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
    moveIt(totalGradePercent);
}

function moveIt(totalGradePercent) {
    if (totalGradePercent >= 90) {

        window.location.assign("https://www.pnw.edu/purdue-university-northwest-students-earn-fall-semester-deans-list-honors-2021/");
    } else if (totalGradePercent >= 80) {
        window.location.href = "gradeB.html";
    } else if (totalGradePercent >= 70) {
        window.location.href = "gradeC.html";
    } else if (totalGradePercent >= 60) {
        window.location.href = "gradeD.html";
    } else {
        window.location.href = "gradeF.html";
    }

    // document.getElementById("finalPercent").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
    //     "\nThe Letter Grade is: " + letterGrade;
}

function homePage() {
    window.location.href = "lab02.html";


}