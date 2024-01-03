<?php

$ac = "";
$pw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ac"])) {
        //$nameErr = "Name is required";
    } else {
        $ac = test_input($_POST["ac"]);
    }
    if (empty($_POST["pw"])) {
        // $nameErr = "Name is required";
    } else {
        $pw = test_input($_POST["pw"]);
    }
}

// $ac = $_POST["ac"];
// $pw = $_POST["pw"];

// var_dump($_POST);
// echo "<br>";
// var_dump($_SERVER["SCRIPT_FILENAME"]);

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<form method="post" action="<?php
// echo htmlspecialchars($_SERVER["PHP_SELF"]);
echo "/tools-php/Form/PostToMySQL.php";
?>">
    <label for="ac">ac</label><br>
    <input type="text" id="ac" name="ac" value=<?php echo $ac; ?>><br>
    <label for="pw">pw</label><br>
    <input type="text" id="pw" name="pw" value=<?php echo $pw; ?>><br><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>