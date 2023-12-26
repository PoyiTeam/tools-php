<?php
    $data = 1 + 2 - 3 * 4 / 5;
    
    var_dump($data);
    echo "<br>";

    $data = 2**3;
    var_dump($data);
    echo "<br>";

    $data = 1;
    $data += 1; // $data++
    var_dump($data);
    echo "<br>";

    $data = 2;
    $data *= 3;
    var_dump($data);
    echo "<br>";

    $data = 2;
    $data **= 3;
    var_dump($data);
    echo "<br>";

    $data = 1;
    $data .= 10;
    var_dump($data);
    echo "<br>";
    $data .= 12;
    var_dump($data);
    echo "<br>";

    // comparison operators
    var_dump(1 == 1, 1 == "1"); // compare value
    echo "<br>";
    var_dump(1 === 1, 1 === "1"); // compare value and data type
    echo "<br>";
    var_dump(1 != 1, 1 != "1"); // compare value
    echo "<br>";
    var_dump(1 !== 1, 1 !== "1"); // compare value and data type
    echo "<br>";
    var_dump(2<3,2>3,2<=3,2>=3);
    echo "<br>";

    // error control operator
    @var_dump((string) [1]); // ignore warning
    echo "<br>";
    // increment operator

    $data = 3;
    $data ++;
    var_dump($data);
    echo "<br>";
    $data = 3;
    var_dump($data++);  // 先 return to function 再執行 ++
    echo "<br>";
    var_dump($data);
    echo "<br>";
    $data = 3;
    var_dump(++$data);  // 先執行 ++ 再 return to function 
    echo "<br>";

    // logical operator
    var_dump(true && true);    // and
    echo "<br>";
    var_dump(true || false);    // or
    echo "<br>";
    $myLogic = true;
    var_dump(!$myLogic);
    echo "<br>";
    // logical operator會由左而右執行，如果遇到false，則往後的判斷直接忽視
    var_dump(true && true);    // true
    var_dump(true && false);   // false
    var_dump(false && true);   // false 
    var_dump(false && false);  // false, 邏輯上是 true, 但是第一個false後續不執行

    // https://www.php.net/manual/en/language.operators.precedence.php
?>