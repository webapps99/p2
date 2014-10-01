

<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>


    <title>Chris Nystrom P2 - DWA15 Portfolio</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='password.css' type='text/css'>



</head>
<body>


<?php include('content.php'); ?>


<div id="steps" class="steps">




    <h3>Using the xkcd Password Generator</h3>
    <p>The xkcd Password Generator is based on the cartoon at <a href="http://xkcd.com/936/" title="Password Strength cartoon">xkcd.com</a> about password strength.
        Passwords are easier to remember when generated based on a random sequence of words.  Options exist on this password generator to choose the number of words in the
        password string, make the first letter of each word uppercase, add a symbol at the end of the password string and add a number at the end of the password string.


    <ol>
        <li>Set the options:
            <ul>
                <li>Choose number of words: Indicates how many random words will be chosen to generate the password. Range is 1-9, Default is 1</li>
                <li>First Letter Uppercase: If on, the first letter of each word in the password will be capitalized. Default is off.</li>
                <li>Add a symbol: If on, a symbol character is appended to the end of the password. Default is off.</li>
                <li>Add a number: If on, a number between 1 and 9 will be appended to the end of the password. Default is off.</li>
             </ul>
        </li>
        <li>Push the Generate button.</li>
        <li>The generated password is displayed.</li>
    </ol>


</div>



</body>
</html>