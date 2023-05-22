<?php
include 'exercise_2.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
    <h3>Check if vowel or consonant</h3>
    <?php
    echo checkIfVowelOrConsonant('b').'<br/>';
    echo convertDigitToWord(231).'<br/>';
    echo isDivisibleByThree(3).'<br/>';
    echo isDivisibleByThree(5).'<br/>';
    echo implode(", ", deleteDuplicate(["one","one","two"])).'<br/>';
    echo isArmstrongNumber(153).'<br/>';
    echo isArmstrongNumber(370).'<br/>';

    ?>

    <p>1. Using IF...ELSE statement, write a code that check if given string is more than 5 characters. (5pts)</p>
    <?php
    $word1 = 'class';
    $word2 = 'kodego';
    $word3 = 'top';


    if (strlen($word1) > 5) {
        echo "<p>The word " . $word1 . " is greater than 5</p>";
    } else {
        echo "<p>The word " . $word1 . " is not greater than 5</p>";
    }

    if (strlen($word2) > 5) {
        echo "<p>The word " . $word2 . " is greater than 5</p>";
    } else {
        echo "<p>The word " . $word2 . " is not greater than 5</p>";
    }

    if (strlen($word3) > 5) {
        echo "<p>The word " . $word3 . " is greater than 5</p>";
    } else {
        echo "<p>The word " . $word3 . " is not greater than 5</p>";
    }
    ?>

    <br>
    <p>2. There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item. (5pts)</p>
    <?php
    $quantity1 = 70;
    $quantity2 = 100;
    $price1 = 35;
    $price2 = 30;

    $deal1_cost = ($price1 / $quantity1) * 100;
    $deal2_cost = ($price2 / $quantity2) * 100;

    if ($deal1_cost < $deal2_cost) {
        $best_deal = 1;
        $total_cost = $deal1_cost;
    } else {
        $best_deal = 2;
        $total_cost = $deal2_cost;
    }

    echo "<p>The best deal to purchase the item is Deal $best_deal. </p>";
    echo "<p>Total cost: $" . $total_cost . " per item</p>";
    ?>

    <br>
    <p>3. Using SWITCH CASE statement, write a code that determine the number of days in a given month. Return "invalid" if the operator is invalid. (10pts)</p>
    <?php
    $monthName = 'March';
    switch ($monthName) {
        case 'January':
        case 'March':
        case 'May':
        case 'July':
        case 'August':
        case 'October':
            echo "<p>There are 31 days in $monthName</p>";
            break;
        case 'February':
            echo "<p>There are 28 days in $monthName</p>";
            break;
        case 'April':
        case 'June':
        case 'September':
        case 'November':
            echo "There are 30 days in $monthName";
            break;
        default:
            echo "Invalid";
            break;
    }
    ?>

    <br>
    <p>4. Write a program to loop over the given JSON data. Display the values via loops or recursion. (10pts)</p>
    <?php
    $students = '[{"name" : "John Garg","age"  : "15","school" : "Ahlcon Public school"},
    {"name" : "Smith Soy","age"  : "16","school" : "St. Marie school"},
    {"name" : "Charle Rena","age"  : "16","school" : "St. Columba school"}]';

    $studentsArray = json_decode($students, true);

    foreach ($studentsArray as $student) {
        echo "Name: " . $student['name'] . "<br>";
        echo "Age: " . $student['age'] . "<br>";
        echo "School: " . $student['school'] . "<br><br>";
    }
    ?>

    <p>5. Write a division table program using the for loop. (10pts)</p>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <?php
                for ($dividend = 0; $dividend <= 10; $dividend++) {
                    if ($dividend > 0) {
                        echo "<td>" . $dividend . "</td>";
                    } else {
                        echo "<td></td>";
                    }
                    for ($divisor = 1; $divisor <= 10; $divisor++) {
                        if ($dividend > 0) {
                            $result = $divisor / $dividend;
                        } else {
                            $result = $divisor;
                        }
                        echo "<td>" . round($result, 1) . "</td>";
                    }
                    echo "</tr><tr>";
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>

</html>