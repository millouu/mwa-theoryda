<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📒 Ez PHP Reference</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div style="background-color: white;box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);margin-bottom:30px">
        <h1 style="margin:20px 50px 0px 50px;">📒 Ez PHP Reference</h1>
        <p style="margin:10px 50px 20px 50px;">✒️ SRISHTI CHAURASIA 20BBS0081</p>
    </div>
    <div class="container">
        <div class="card">
            <div class="card_heading">
                <h3>Numbers and Strings</h3>
            </div>
            <div>
                <p class="desc">
                    Numbers are numeric data types used for mathematical operations, while strings are sequences of characters used for text manipulation in PHP.
                </p>
            </div>
            <div>
                <?php
                $number = 42;
                $string = "Good Morning!";
                echo "Number: $number<br>";
                echo "String: $string<br><br>";

                $string1 = "Hello, world!";
                $string2 = "Hello, universe!";
                $substring = "world";

                // Compare two strings
                echo "string1 is 'Hello, world!'   string 2 is 'Hello, universe!'";
                echo "<br><b>Using strcmp</b><br>";
                $compareResult = strcmp($string1, $string2);
                if ($compareResult === 0) {
                    echo "The two strings are equal.";
                } elseif ($compareResult < 0) {
                    echo "The first string comes before the second one.";
                } else {
                    echo "The second string comes before the first one.";
                }

                echo "<br>";

                // Find the position of a substring
                echo "<br><b>Using strpos</b><br>";
                echo "Searching for 'world' in string1<br>";
                $position = strpos($string1, $substring);
                if ($position !== false) {
                    echo "The substring '$substring' was found at position $position in the first string.";
                } else {
                    echo "The substring '$substring' was not found in the first string.";
                }


                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Literals and Variables</h3>
            </div>
            <div>
                <p class="desc">
                    Literals in PHP are fixed, constant values that represent data types, such as integers, floating-point numbers, and strings.
                    Variables are named containers used to store and manipulate data in PHP, providing flexibility and dynamic data handling.
                </p>
            </div>
            <div style="display: flex; gap:50px">
                <?php
                $lit1 = 299;
                $lit2 = 3.14;
                $lit3 = "Hiya";
                echo "<div>";
                echo "<h4>b. Literals</h4>";
                echo "Integer Literal: $lit1<br>";
                echo "Float Literal: $lit2<br>";
                echo "String Literal: $lit3<br><br>";
                echo "</div>";
                // c. Variables
                $name = "Millie";
                $age = 21;
                echo "<div>";
                echo "<h4>c. Variables</h4>";
                echo "Name: $name<br>";
                echo "Age: $age<br><br>";
                echo "</div>";
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Operators</h3>
            </div>
            <div>
                <p class="desc">
                    Operators are symbols or words used to perform operations on variables or values, such as addition, subtraction, and comparison.
                </p>
            </div>
            <div style="display: flex; gap:50px">
                <?php
                // Arithmetic Operators
                $a = 10;
                $b = 4;
                echo "<div>";
                echo "<b>a is 10    b is 4 </b><br>";
                echo "a + b = " . ($a + $b) . "<br>";
                echo "a - b = " . ($a - $b) . "<br>";
                echo "a * b = " . ($a * $b) . "<br>";
                echo "a / b = " . ($a / $b) . "<br>";
                echo "a % b = " . ($a % $b) . "<br>";
                echo "a ** b = " . ($a ** $b) . "<br>";
                echo "</div>";
                // Assignment Operators
                $x = 5;
                $y = 3;

                echo "<div>";
                echo "<b>x is 5    y is 3</b> <br>";
                $x += $y;
                echo "x += y: " . $x . "<br>";

                $x -= $y;
                echo "x -= y: " . $x . "<br>";

                $x *= $y;
                echo "x *= y: " . $x . "<br>";

                $x /= $y;
                echo "x /= y: " . $x . "<br>";

                $x %= $y;
                echo "x %= y: " . $x . "<br>";
                echo "</div>";
                // Logical Operators
                echo "<div>";
                $bool1 = true;
                $bool2 = false;
                echo "<b>bool1 is true    bool2 is false</b> <br>";
                echo "bool1 && bool2: " . ($bool1 && $bool2 ? "true" : "false") . "<br>";
                echo "bool1 || bool2: " . ($bool1 || $bool2 ? "true" : "false") . "<br>";
                echo "!bool1: " . (!$bool1 ? "true" : "false") . "<br>";
                echo "</div>";
                ?>

            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Control Statement: If Else</h3>
            </div>
            <div>
                <p class="desc">
                    Control statements in PHP, like if-else and loops, control the flow of program execution based on conditions or iterations. <br>
                    <br> <b>Here we assign grade based on the score using if elseif else statements </b>
                </p>
            </div>
            <div>
                <?php
                $score = 82;

                if ($score >= 90) {
                    $grade = "A";
                } elseif ($score >= 80) {
                    $grade = "B";
                } elseif ($score >= 70) {
                    $grade = "C";
                } elseif ($score >= 60) {
                    $grade = "D";
                } else {
                    $grade = "F";
                }

                echo "Score: $score<br>";
                echo "Grade: $grade";
                ?>

            </div>
        </div>

        <div class="card">
            <div class="card_heading">
                <h3>Control Statement: Switch</h3>
            </div>
            <div>
                <p class="desc">
                    A switch statement in PHP is a control structure that allows you to test a variable against multiple possible values and execute different code blocks based on the matching value. <br>
                    <br> <b>Here we pass Sunday to the switch statement </b>
                </p>
            </div>
            <div>
                <?php
                $day = "Sunday";

                switch ($day) {
                    case "Monday":
                        echo "It's the start of the workweek.";
                        break;
                    case "Tuesday":
                        echo "It's the second day of the week.";
                        break;
                    case "Wednesday":
                        echo "It's midweek.";
                        break;
                    case "Thursday":
                        echo "The weekend is almost here.";
                        break;
                    case "Friday":
                        echo "It's Friday! Time to relax.";
                        break;
                    default:
                        echo "It's the weekend or an invalid day.";
                }

                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Looping Statements: While and Do While</h3>
            </div>
            <div>
                <p class="desc">
                    While loops and for loops are used for general iteration, whereas do-while loops are useful when you want to ensure the loop runs at least once.
                </p>
            </div>
            <div style="display: flex; gap:50px;">
                <?php
                $counter = 1;
                echo "<div>";
                echo "<b>While Loop</b><br>";
                while ($counter <= 3) {
                    echo "Iteration $counter.<br>";
                    $counter++;
                }
                echo "</div>";
                echo "<div>";
                echo "<b>Do While Loop</b><br>";
                $counter = 1;
                do {
                    echo "Iteration $counter.<br>";
                    $counter++;
                } while ($counter <= 3);

                echo "</div>";

                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Looping Statements: For and For Each</h3>
            </div>
            <div>
                <p class="desc">
                    The foreach loop is specifically designed for iterating through arrays and other iterable data structures.
                </p>
            </div>
            <div style="display: flex; gap:50px;">
                <?php
                $counter = 1;
                echo "<div>";
                echo "<b>For Loop</b><br>";
                for ($i = 1; $i <= 5; $i++) {
                    echo "Iteration $i.<br>";
                }
                echo "</div>";
                echo "<div>";
                echo "<b>For Each</b><br>";
                $fruits = array("grapes", "watermelon", "mango", "lytchee");
                foreach ($fruits as $fruit) {
                    echo "I like $fruit.<br>";
                }
                echo "</div>";

                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Functions</h3>
            </div>
            <div>
                <p class="desc">
                    In PHP, a function is a reusable block of code that performs a specific task. It encapsulates a series of statements and can take input parameters and return values. <br><br><b>Here's a small PHP function to find the factorial of a number:</b>
                </p>
            </div>
            <div>
                <?php
                function factorial($n)
                {
                    return ($n <= 1) ? 1 : $n * factorial($n - 1);
                }

                // Example usage:
                $number = 5;
                $result = factorial($number);
                echo "The factorial of $number is $result.";
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Functions: Default Arguments</h3>
            </div>
            <div>
                <p class="desc">
                    In PHP, you can create a function with default arguments by assigning default values to function parameters. Here's an example of a small function that calculates the area of a rectangle with default values for width and height:
                </p>
            </div>
            <div>
                <?php
                function calculateRectangleArea($width = 5, $height = 3)
                {
                    return $width * $height;
                }

                $defaultArea = calculateRectangleArea();
                $customArea = calculateRectangleArea(8, 4);

                echo "Default Area: $defaultArea<br>";
                echo "Custom Area: $customArea<br>";

                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Functions: Calling Methods</h3>
            </div>
            <div>
                <p class="desc">
                    In PHP, parameters are passed by value by default, meaning a copy of the argument is passed into the function. However, you can explicitly pass parameters by reference to modify the original variable.
                </p>
            </div>
            <div>
                <?php
                function cbr(&$text)
                {
                    $text .= ' (called by reference)';
                }

                function cbv($text)
                {
                    $text .= ' (modified)';
                }

                $value = "Original Text";
                cbv($value);
                echo "Call by Value: $value <br>";
                cbr($value);
                echo "Call by Reference: $value";
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Arrays</h3>
            </div>
            <div>
                <p class="desc">
                    An array in PHP is a data structure that can hold multiple values or elements. Each element is associated with an index. <br> <br> PHP supports both <b>indexed arrays (numeric indices)</b> and <b>associative arrays (string indices)</b>. Arrays in PHP are versatile and can be used to store and manipulate collections of data.
                </p>
            </div>
            <div>
                <?php
                $fruits = array("grapes", "watermelon", "mango", "lytchee");

                // Accessing elements by index
                echo "<b>Accessing elements by index</b><br>";
                echo "$fruits[0]: " . $fruits[0] . "<br>";
                echo "$fruits[2]: " . $fruits[2] . "<br>";

                echo "<br><b>Iterating through the array</b><br>";
                foreach ($fruits as $fruit) {
                    echo $fruit . ", ";
                }
                ?>
            </div>
        </div>
        <div class="card">
            <div class="card_heading">
                <h3>Associative Arrays</h3>
            </div>
            <div>
                <p class="desc">
                    An associative array in PHP is a collection of key-value pairs that allows you to associate unique keys with corresponding values for efficient data retrieval and organization.
                </p>
            </div>
            <div>
                <?php
                $colors = array("red" => "APPLE", "green" => "GUAVA", "blue" => "BLUEBERRY", "yellow" => "BANANA");
                $colors["brown"] = "CHIKOO";
                echo "<br><b>Accessing element using foreach</b><br>";
                foreach ($colors as $value) {
                    echo "$value <br>";
                }
                echo "<br><b>Accessing element using key</b><br>";
                echo $colors["brown"];
                ?>
            </div>
        </div>
        <div class="big_card">
            <div class="card_heading">
                <h3>Form Control</h3>
            </div>
            <div>
                <p class="desc">Here, we will create a form to input values, and then display those values in a table. There is also a button to delete records. We will be using POST method to use the values entered in the form</p>
            </div>
            <div style="margin-top: 30px;">
                <div style="display: flex; gap:50px;">

                    <?php
                    $userArray = array();

                    // Check if the form has been submitted
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve form data
                        $firstName = $_POST["first_name"];
                        $lastName = $_POST["last_name"];
                        $username = $_POST["username"];

                        // Create an object and add it to the array
                        $user = new stdClass();
                        $user->first_name = $firstName;
                        $user->last_name = $lastName;
                        $user->username = $username;
                        $userArray[] = $user;
                    }

                    // Check if the "Delete All" button has been clicked
                    if (isset($_POST["delete"])) {
                        $userArray = array(); // Clear the array
                        }
                        ?>
                        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                            <input type="text" name="first_name" placeholder="First Name" required>
                            <input type="text" name="last_name" placeholder="Last Name" required>
                            <input type="text" name="username" placeholder="Username" required>
                            <div style="display:flex;gap:20px;justify-content:center;"><input type="submit" name="submit" value="Submit">
                                <input type="submit" name="delete" value="Delete">
                            </div>
                        </form>
                        <div>
                            <?php
                        // Display the array in a table or "Nothing to display" if empty
                        if (!empty($userArray)) {
                            echo "<h2>Users</h2>";
                            echo "<table border='1'>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>";

                            foreach ($userArray as $user) {
                                echo "<tr>
                    <td>{$user->first_name}</td>
                    <td>{$user->last_name}</td>
                    <td>{$user->username}</td>
                </tr>";
                            }

                            echo "</table>";
                        } else {
                            echo "<p class='emptytable'>Submit form to display table here</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>