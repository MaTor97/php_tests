<?php
echo "<h2>EXERCICE 1</h2>";
$possible_state = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_state[4];

function cleanup_room() {
    echo "<br>Cleaning the room...";
}

if (in_array($room_filthiness, array_slice($possible_state, 0, 3))) {
    echo "Yuk, Room is dirty : let's clean it up !";
    cleanup_room();
    echo "<br>Room is now clean!";
    $room_filthiness = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}

echo "<h2>EXERCICE 2</h2>";
$now = date("H:i");
echo "<br>Current time: $now";

if ($now >= "05:00" && $now <= "09:00") {
    echo "<br>Good morning!";
} elseif ($now > "09:00" && $now <= "12:00") {
    echo "<br>Good day!";
} elseif ($now > "12:00" && $now <= "16:00") {
    echo "<br>Good afternoon!";
} elseif ($now > "16:00" && $now <= "21:00") {
    echo "<br>Good evening!";
} else {
    echo "<br>Good night!";
}

echo "<h2>EXERCICE 3, 4 AND 5</h2>";
if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['language'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $speak_english = $_GET['language'];

    if ($age < 12) {
        if ($speak_english == "yes") {
            if ($gender == "male") {
                echo "<br> Hello young boy!";
            } else {
                echo "<br> Hello young girl!";
            }
        } else {
            if ($gender == "male") {
                echo "<br> Aloha Young boy!";
            } else {
                echo "<br> Aloha Young girl!";
            }
        }
    } elseif ($age >= 12 AND $age < 18) {
        if ($speak_english == "yes") {
            if ($gender == "male") {
                echo "<br> Hello teenage boy!";
            } else {
                echo "<br> Hello teenage girl!";
            }
        } else {
            if ($gender == "male") {
                echo "<br> Hola teenage boy!";
            } else {
                echo "<br> Hola teenage girl!";
            }
        }
    } elseif ($age >= 18 AND $age < 115) {
        if ($speak_english == "yes") {
            if ($gender == "male") {
                echo "<br> Hello mister!";
            } else {
                echo "<br> Hello Ma'am";
            }
        } else {
            if ($gender == "male") {
                echo "<br> Bonjour monsieur!";
            } else {
                echo "<br> Bonjour madame!";
            }
        }
    } else {
        if ($speak_english == "yes") {
            if ($gender == "male") {
                echo "<br>Wow! Still alive? Are you a robot, like me? Can I hug you?";
            } else {
                echo "<br> Wow! Still alive? Are you a robot, like me? Can I hug you?";
            }
        } else {
            if ($gender == "male") {
                echo "<br> Wow! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te donner un câlin ?";
            } else {
                echo "<br> Wow! Toujours en vie ? Es-tu un robot, comme moi ? Puis-je te donner un câlin ?";
            }
        }
    }
}
?>
<form method="get" action="">
    <label for="age">Enter your age: </label>
    <input type="number" name="age" required>
    <br>

    <label>Choose your gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>

    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label>
    <br>

    <label>Do you speak english?</label>
    <input type="radio" id="yes" name="language" value="yes" required>
    <label for="yes">Yes</label>

    <input type="radio" id="no" name="language" value="no" required>
    <label for="no">No</label>
    <br>

    <input type="submit" value="Submit">
</form>

<?= "<h2>EXERCICE 6 AND 7</h2>";
    if (isset($_GET["howOld"]) && isset($_GET["morf"]) && isset($_GET['name'])) {
        $howOld = $_GET['howOld'];
        $morf = $_GET['morf'];
        $name = $_GET['name'];

        if ($howOld >= 21 && $howOld <= 40 && $morf == 'woman') {
                echo "<br> welcome to the team $name";
        }
    }
?>

<form method="get" action="">
    <label for="howOld">How old are you ?</label>
    <input type="number" name="howOld" required>
    <br>

    <label>Are you male or female ?</label>
    <input type="radio" id="man" name="morf" value="man" required>
    <label for="man">Man</label>

    <input type="radio" id="woman" name="morf" value="woman" required>
    <label for="woman">Wuman</label>
    <br>

    <label for="name">What is your name?</label>
    <input type="text" id="name" name='name' required>

    <input type="submit" value="Submit!">
</form>

<?= "<h2>EXERCICE 8</h2>";
    if (isset($_GET["grade"])) {
        $note = $_GET["grade"];

        if ($note < 4) {
            echo "This work is really bad. What a dumb kid!";
        }
        elseif ($note > 4 && $note < 9) {
            echo "This is not sufficient. More studying is required.";
        }
        elseif ($note == 10) {
            echo "barely enough!";
        }
        elseif ($note >= 11 && $note < 15) {
            echo "Not bad!";
        }
        elseif ($note >= 15 && $note < 19) {
            echo "Bravo, bravissimo";
        }
        else {
            echo "Too good to be true: confront the cheater";
        }
    }
?>

<form method="get" action="">
    <label for="note">Your grade: </label>
    <input type="number" id="grade" name="grade" required>
    <br>

    <input type="submit" value="SEND GRADE">
</form>

