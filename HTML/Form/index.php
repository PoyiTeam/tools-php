<?php

$ac = "";
$pw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["ac"])) {
        $ac = test_input($_POST["ac"]);
    }
    if (!empty($_POST["pw"])) {
        $pw = test_input($_POST["pw"]);
    }
}

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