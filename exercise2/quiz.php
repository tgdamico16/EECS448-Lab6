<?php
$count = 0;
$answer1 = $_POST["chiefs"];
if ($answer1 == "MAHOMES"){
    $count++;
}
$answer2 = $_POST["giants"];
if ($answer2 == "JONES"){
    $count++;
}
$answer3 = $_POST["chargers"];
if ($answer3 == "HERBERT"){
    $count++;
}
$answer4 = $_POST["jaguars"];
if ($answer4 == "LAWRENCE"){
    $count++;
}
$answer5 = $_POST["cardinals"];
if ($answer5 == "MURRAY"){
    $count++;
}


function toAnswer1($ans){
    if ($ans == "ALLEN"){
        return "Josh Allen";
    }
    elseif ($ans == "BRADY"){
        return "Tom Brady";
    }
    elseif ($ans == "JACKSON"){
        return "Lamar Jackson";
    }
    elseif ($ans == "MAHOMES"){
        return "Patrick Mahomes";
    }
    else{
        return "";
    }
}

function toAnswer2($ans){
    if ($ans == "GOFF"){
        return "Jared Goff";
    }
    elseif ($ans == "CARR"){
        return "Derrick Carr";
    }
    elseif ($ans == "JONES"){
        return "Daniel Jones";
    }
    elseif ($ans == "WILSON"){
        return "Russell Wilson";
    }
    else{
        return "";
    }
}

function toAnswer3($ans){
    if ($ans == "HERBERT"){
        return "Justin Herbert";
    }
    elseif ($ans == "COUSINS"){
        return "Kirk Cousins";
    }
    elseif ($ans == "MILLS"){
        return "Davis Mills";
    }
    elseif ($ans == "WILSON"){
        return "Zach Wilson";
    }
    else{
        return "";
    }
}

function toAnswer4($ans){
    if ($ans == "TUA"){
        return "Tua Tagovailoa";
    }
    elseif ($ans == "BURROW"){
        return "Joe Burrow";
    }
    elseif ($ans == "JIMMYG"){
        return "Jimmy Garoppolo";
    }
    elseif ($ans == "LAWRENCE"){
        return "Trevor Lawrence";
    }
    else{
        return "";
    }
}

function toAnswer5($ans){
    if ($ans == "PRESCOTT"){
        return "Dak Prescott";
    }
    elseif ($ans == "MURRAY"){
        return "Kyler Murray";
    }
    elseif ($ans == "RYAN"){
        return "Matt Ryan";
    }
    elseif ($ans == "RODGERS"){
        return "Aaron Rodgers";
    }
    else{
        return "";
    }
}

echo "<p>Question 1: Who is the Starting Quarterback for the Kansas City Chiefs?</p>";
echo "<p>     You answered: ".toAnswer1($answer1)."</p>";
echo "<p>     Correct answer: Patrick Mahomes</p><br>";

echo "<p>Question 2: Who is the Starting Quarterback for the New York Giants?</p>";
echo "<p>     You answered: ".toAnswer2($answer2)."</p>";
echo "<p>     Correct answer: Daniel Jones</p><br>";

echo "<p>Question 3: Who is the Starting Quarterback for the Los Angeles Chargers?</p>";
echo "<p>     You answered: ".toAnswer3($answer3)."</p>";
echo "<p>     Correct answer: Justin Herbert</p><br>";

echo "<p>Question 4: Who is the Starting Quarterback for the Jacksonville Jaguars?</p>";
echo "<p>     You answered: ".toAnswer4($answer4)."</p>";
echo "<p>     Correct answer: Trevor Lawrence</p><br>";

echo "<p>Question 5: Who is the Starting Quarterback for the Arizona Cardinals?</p>";
echo "<p>     You answered: ".toAnswer5($answer5)."</p>";
echo "<p>     Correct answer: Kyler Murray</p><br>";

echo "<p>You Answered ".$count." Question(s) Correctly</p>";
echo "Your Score was ";
echo $count/5*100;
echo "%";
?>