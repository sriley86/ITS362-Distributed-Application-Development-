<?php
    session_start();

    require('../model/database.php');
    require('../model/students_db.php');
    include 'view/header.php';

    if(isset($_POST["login"]))
    {
        if(empty($_POST["uname"]) || empty($_POST["pass"]))
        {
            $errorMsg = '<p style="color: lavendar; font-size: 24pt;"> ERROR: Username and Password cannot be blank </p>';
        }


        else
        {
            $query = "SELECT * FROM users WHERE username = :uname AND password = :pass";
            $statement = $db->prepare($query);
            $statement->execute(

                array('uname' => $_POST["uname"],
                      'pass' => $_POST["pass"])

            );

            $counter = $statement->rowCount();

            if($counter > 0){
                $_SESSION["uname"] = $_POST["uname"];
                header("Location: ../user/index.php");
            } else {
                $errorMsg = '<p style="color: lavendar; font-size: 24pt;"> ERROR: Username and/or password are incorrect! </p>';
            }       
        }
    }

?>

<head>
<link rel="stylesheet" type="text/css"
          href="../main.css">
</head>
 <main>
        <body>
            <secton>
                <h1> Login: Users Only</h1>
                    <form method="POST">
                        Enter Username: <input type="text" name="uname">
                        <br><br>
                        Enter Password: <input type="password" name="pass">
                        <br><br>
                        <input type="submit" value="Login" name="login">  
                    </form>
                    <form action='../index.php'> <input type='submit'value='Home Page'></form>
                            <?php
                                if(isset($errorMsg)){
                                    echo '<span>' . $errorMsg . '</span>';
                                }
                            ?>
            </secton>
        </body>
    </main>
<?php include '../view/footer.php'; ?>