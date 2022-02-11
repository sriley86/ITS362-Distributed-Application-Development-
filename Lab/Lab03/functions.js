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
    document.getElementById("finalPercent").innerHTML = "Your final grade is: " + totalGradePercent + "%\n" +
        "\nThe Letter Grade is: " + letterGrade;
}

// +++++++++++++++++++++++++++++++++function - upon entering the HTML items to be hiden from view+++++++++++++++++++++++++++++++++
$(document).ready(function() {
    //hide LAB scores table, entry rows  & add button - close button
    $("#labTable").hide();
    $("#labScore2 ").hide();
    $("#labScore3 ").hide();
    $("#labScore4").hide();
    $("#labScore5").hide();
    $("#addLabButton").hide();
    $("#closeButton").hide();

    //hide QUIZ scores table, entry rows  & add button - close button
    $("#quizTable").hide();
    $("#quizScore2").hide();
    $("#quizScore3").hide();
    $("#quizScore4").hide();
    $("#quizScore5").hide();
    $("#addQuizButton").hide();
    $("#closeButton").hide();

    //hide EXAM scores table, entry rows  & add button - close button
    $("#examTable").hide();
    $("#examScore2").hide();
    $("#addExamButton").hide();
    $("#closeButton").hide();

    //hide PROJECT scores table & add button - close button
    $("#projectTable").hide();
    $("#addProjectButton").hide();
    $("#closeButton").hide();

    //hide EXTRA CREDIT scores table & add button - close button
    $("#extraCreditTable").hide();
    $("#addExtraCreditButton").hide();
    $("#closeButton").hide();

    //hide PARTICIPATION scores table, entry rows  & add button - close button
    $("#participationTable").hide();
    $("#participationScore2").hide();
    $("#participationScore3").hide();
    $("#participationScore4").hide();
    $("#participationScore5").hide();
    $("#addParticipationButton").hide();
    $("#closeButton").hide();
});

//++++++++++++++++++++++++++++++++++++++++SHOW TABLES ON CLICK show scores BUTTON ++++++++++++++++++++++++++++++++++++++++++++++
// function - upon clicking Show Scores Button the LAB TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showLabTableButton").click(function() {
        $("#labTable").show();
        $("#addLabButton").show();
        $("#closeButton").show();

        // close all other tables
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
    });
});

// function - upon clicking Show Scores Button the QUIZ TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showQuizTableButton").click(function() {
        $("#quizTable").show();
        $("#addQuizButton").show();
        $("#closeButton").show();

        // hide any shown tables
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
    });
});

// function - upon clicking Show Scores Button the EXAM TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showExamTableButton").click(function() {
        $("#examTable").show();
        $("#addExamButton").show();
        $("#closeButton").show();

        // hide any shown tables
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
    });
});

// function - upon clicking Show Scores Button the PROJECT TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showProjectButton").click(function() {
        $("#projectTable").show();
        $("#addProjectButton").show();
        $("#closeButton").show();

        // hide any shown tables
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
    });
});

// function - upon clicking Show Scores Button the EXTRA CREDIT TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showExtraCreditTableButton").click(function() {
        $("#extraCreditTable").show();
        $("#addExtraCreditButton").show();
        $("#closeButton").show();

        // hide any shown tables
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
    });
});

// function - upon clicking Show Scores Button the PARTICIPATION TABLE,
//       Add Button and Close Button come into view
$(document).ready(function() {
    $("#showParticipationTableButton").click(function() {
        $("#participationTable").show();
        $("#addParticipationButton").show();
        $("#closeButton").show();

        // hide any shown tables
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
    });
});
// +++++++++++++++++++++++++++++++++++++++++++++CLOSE BUTTON hide ++++++++++++++++++++++++++++++++++++++++++++++++++++
// function - upon clicking Close Button the Table in 
//      view will be hidden
$(document).ready(function() {
    $("#closeButton").click(function() {
        // hide Lab table and add button
        $("#labTable").hide();
        $("#addLabButton").hide();
        // hide Quiz table and add button
        $("#quizTable").hide();
        $("#addQuizButton").hide();
        // hide Exam table and add button
        $("#examTable").hide();
        $("#addExamButton").hide();
        // hide Project table and add button
        $("#projectTable").hide();
        $("#addProjectButton").hide();
        // hide Extra Credit table and add button
        $("#extraCreditTable").hide();
        $("#addExtraCreditButton").hide();
        // hide Participation table and add button
        $("#participationTable").hide();
        $("#addParticipationButton").hide();
        // hide close button
        $("#closeButton").hide();



    });
});

//+++++++++++++++++++++++++++++++ADD BUTTON++++++++++++++++++++++++++++++++++++++++++++++++++++
// function - click on the add button to add to score and to show another entry box
// Lab scores (4)
$(document).ready(function() {
    l = 2;
    $("#addLabButton").click(function() {

        $('#labScore' + l + '').show();
        l++;
        if (l > 6) {
            $("#addLabButton").hide();
        }
    });
});

// Quiz scores (4)
$(document).ready(function() {
    o = 2;
    $("#addQuizButton").click(function() {

        $('#quizScore' + o + '').show();
        o++;
        if (o > 6) {
            $("#addQuizButton").hide();
        }
    });
});

// Exam scores (1)
$(document).ready(function() {
    v = 2;
    $("#addExamButton").click(function() {

        $('#examScore' + v + '').show();
        v++;
        if (v > 3) {
            $("#addExamButton").hide();
        }
    });
});

// Participation scores (4)
$(document).ready(function() {
    e = 2;
    $("#addParticipationButton").click(function() {

        $('#participationScore' + e + '').show();
        e++;
        if (e > 6) {
            $("#addParticipationButton").hide();
        }
    });
});