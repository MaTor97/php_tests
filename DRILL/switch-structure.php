<?= "<h2>SWITCH</h2>";
if (isset($_GET["grade"])) {
    $note = $_GET["grade"];

    switch (true) {  // On utilise `true` pour tester plusieurs conditions dans les cases
        case ($note <= 4):
            echo "This work is really bad. What a dumb kid!";
            break;
        case ($note >= 5 && $note <= 9):
            echo "This is not sufficient. More studying is required.";
            break;
        case ($note == 10):
            echo "barely enough!";
            break;
        case ($note >= 11 && $note <= 14):
            echo "Not bad!";
            break;
        case ($note >= 15 && $note <= 18):
            echo "Bravo, bravissimo!";
            break;
        case ($note == 19 || $note == 20):
            echo "Too good to be true : confront the cheater!";
            break;
        default:
            echo "WTF";
            break;
    }
}
?>
<form method="get" action="">
    <label for="note">Your grade: </label>
    <input type="number" id="grade" name="grade" required>
    <br>

    <input type="submit" value="SEND GRADE">
</form>
