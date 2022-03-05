<?php
    if(!isset($num1)) {$num1 = '';}
    if(!isset($num2)) {$num2 = '';}
    if(!isset($symbol)) {$symbol = '';}
?>
<!DOCTYPE html>
<html>
<head>
    <title>ITS362 Lab06 March 5 2022</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <h1>ITS362 Lab06 Server-Side Scripting I <br><br>Simple Calculator</h1>
        <?php if(!empty($error_msg)) { ?>
                <p class="error"><?php echo $error_msg; ?></p>
            <?php } ?>
        <form action="display_lab6main.php" method="post">

            <div id="data">
                <label>Enter a Number:</label>
                <input type="text" name="num1"><br>

                <label>Enter a Number:</label>
                <input type="text" name="num2"><br>
                <ul>
                    <ol> Addition: + </ol> 
                    <ol> Substraction: - </ol>   
                    <ol> Multiplication: * </ol>
                    <ol> Division: / </ol>
                    <ol> Exponentiation: ** </ol>
                </ul>

                <label>Enter Calculator Symbol:</label>
                <input type="text" name="symbol"><br>
            </div>
            <br>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>

        </form>
    </main>
</body>
<br><br>
        <footer>
            Copyright &copy; Sharyl Riley 2022
        </footer>
</html>