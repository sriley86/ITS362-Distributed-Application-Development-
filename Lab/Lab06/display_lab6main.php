<?php
	$num1 = filter_input(INPUT_POST, 'num1');
	$num2 = filter_input(INPUT_POST, 'num2');
	$symbol = filter_input(INPUT_POST, 'symbol');


   if (empty($num1)){
        $error_msg = 'WARNING: Number Required';
    } else if($num1 <= 0){
            $error_msg = 'WARNING: Number must greater than 0.';
    } else if (empty($num2)){
    $error_msg = 'WARNING: Number Required';
    } else if ($num2 <= 0){
        $error_msg = 'WARNING: Number must greater than 0.';
    } else if (empty($symbol)){
        $error_msg = 'WARNING: Calculator Symbol Required';
    } else{
        $error_msg = '';
    }

    if($error_msg != ''){
        include('lab6main.php');
        exit();
    }

	if($symbol == '+')
    {
        $result = $num1 + $num2;
    }
    else if($symbol == '-')
    {
        $result = $num1 - $num2;
    }
     else if($symbol == '*')
    {
        $result = $num1 * $num2;
    }
    else if($symbol == '/')
    {
        $result = $num1 / $num2;
    }
    else if($symbol == '**')
    {
        $result = $num1 ** $num2;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>ITS362 Lab06 March 5 2022</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <main>
        <h1>ITS362 Lab06 Server-Side Scripting I <br><br>Calculator Results</h1>

        <label>Number Entered:</label>
        <span><?php echo htmlspecialchars($num1); ?></span><br>

        <label>Number Entered:</label>
        <span><?php echo htmlspecialchars($num2); ?></span><br>

        <label>Calculator Symbol Entered:</label>
        <span><?php echo htmlspecialchars($symbol); ?></span><br>

        <label>Result:</label>
        <span><?php echo $result; ?></span><br>

    </main>
</body>
<br><br>
        <footer>
            Copyright &copy; Sharyl Riley 2022
        </footer>
</html>