<?= "TERNARY<br>";
    isset( $_GET["gender"] ) ? $gender = $_GET["gender"] : $gender = "NON BYNARY";

    echo ($gender == "male") ? "Hello Man!" : "Hello Madam!";
?>
<form method="get" action="">
    <label>Choose your gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>

        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br>

    <input type="submit" value="Submit">
</form>
