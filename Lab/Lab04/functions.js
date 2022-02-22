/* its362 lab01 rileysharyl 01 25 2022 */

function grades() {
    // assign variable using the logiacal || to set the initial value to zero then get value
    var labEntry1 = document.getElementById("labEntry1").value || 0;
    var labEntry2 = document.getElementById("labEntry2").value || 0;
    var labEntry3 = document.getElementById("labEntry3").value || 0;
    var labEntry4 = document.getElementById("labEntry4").value || 0;
    var labEntry5 = document.getElementById("labEntry5").value || 0;
    var labTotal = parseInt(labEntry1) + parseInt(labEntry2) + parseInt(labEntry3) + parseInt(labEntry4) + parseInt(labEntry5);
    var quizEntry1 = document.getElementById("quizEntry1").value || 0;
    var quizEntry2 = document.getElementById("quizEntry2").value || 0;
    var quizEntry3 = document.getElementById("quizEntry3").value || 0;
    var quizEntry4 = document.getElementById("quizEntry4").value || 0;
    var quizEntry5 = document.getElementById("quizEntry5").value || 0;
    var quizTotal = parseInt(quizEntry1) + parseInt(quizEntry2) + parseInt(quizEntry3) + parseInt(quizEntry4) + parseInt(quizEntry5);
    var examEntry1 = document.getElementById("examEntry1").value || 0;
    var examEntry2 = document.getElementById("examEntry2").value || 0;
    var examTotal = parseInt(examEntry1) + parseInt(examEntry2)
    var projectTotal = document.getElementById("projectEntry").value || 0;
    var extraCreditTotal = document.getElementById("extraCreditEntry").value || 0;
    var participationEntry1 = document.getElementById("participationEntry1").value || 0;
    var participationEntry2 = document.getElementById("participationEntry2").value || 0;
    var participationEntry3 = document.getElementById("participationEntry3").value || 0;
    var participationEntry4 = document.getElementById("participationEntry4").value || 0;
    var participationEntry5 = document.getElementById("participationEntry5").value || 0;
    var participationTotal = parseInt(participationEntry1) + parseInt(participationEntry2) + parseInt(participationEntry3) + parseInt(participationEntry4) + parseInt(participationEntry5)

    // calculate total weighted grade
    var labGradePercent = parseInt(labTotal) / 125 * .30;
    var quizGradePercent = parseInt(quizTotal) / 50 * .10;
    var examGradePercent = parseInt(examTotal) / 200 * .30;
    var projectGradePercent = parseInt(projectTotal) / 100 * .20;
    var extraCreditGradePercent = parseInt(extraCreditTotal) / 25 * .05;
    var participationGradePercent = parseInt(participationTotal) / 25 * .10;


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
    // displays the total score by assignment type in the main table
    document.getElementById("labScoreTotal").innerHTML = labTotal;
    document.getElementById("quizScoreTotal").innerHTML = quizTotal;
    document.getElementById("examScoreTotal").innerHTML = examTotal;
    document.getElementById("projectScoreTotal").innerHTML = projectTotal;
    document.getElementById("extraCreditScoreTotal").innerHTML = extraCreditTotal;
    document.getElementById("participationScoreTotal").innerHTML = participationTotal;
    // displays final grade percent and letter at the bottom of the HTML
    document.getElementById("finalPercent1").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent2").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent3").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent4").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent5").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent6").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
    document.getElementById("finalPercent7").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
}

$(document).ready(function() {
    grades();
});
setInterval(grades, 1000);

// +++++++++++++++++++++++++++++++++function TABS+++++++++++++++++++++++++++++++++
$(function() {
    $('#tabs').tabs();
});

// +++++++++++++++++++++++++++++++++function TOOLTIP+++++++++++++++++++++++++++++++++

$(function() {
    $('#labEntry1').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#labEntry2').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#labEntry3').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#labEntry4').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#labEntry5').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#quizEntry1').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#quizEntry2').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#quizEntry3').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#quizEntry4').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#quizEntry5').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#examEntry1').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#examEntry2').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#projectEntry').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#extraCreditEntry').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#participationEntry1').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#participationEntry2').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#participationEntry3').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#participationEntry4').tooltip({
        track: true //boolean, by default its false
    });
});
$(function() {
    $('#participationEntry5').tooltip({
        track: true //boolean, by default its false
    });
});

//+++++++++++++++++++++++++++++++REMOVE BUTTON++++++++++++++++++++++++++++++++++++++++++++++++++++
// function - click on the add button to add to score and to show another entry box
// Lab scores (4)
$(document).ready(function() {

    $("#removeLastLabButton").click(function() {
        $("#labScore5").hide();
        document.getElementById('labEntry5').value = "0"; //credit to Quinten Ozahanics for figuring out this code 


    });
});


// Quiz scores (4)
$(document).ready(function() {
    $("#removeLastQuizButton").click(function() {
        $("#quizScore5").hide();
        document.getElementById('quizEntry5').value = "0"; //credit to Quinten Ozahanics for figuring out this code 

    });
});

// Exam scores (1)
$(document).ready(function() {
    $("#removeLastExamButton").click(function() {
        $("#examScore2").hide();
        document.getElementById('examEntry2').value = "0"; //credit to Quinten Ozahanics for figuring out this code 

    });
});

// Participation scores (4)
$(document).ready(function() {
    $("#removeLastParticipationButton").click(function() {
        $("#participationScore5").hide();
        document.getElementById('participationEntry5').value = "0"; //credit to Quinten Ozahanics for figuring out this code 

    });
});