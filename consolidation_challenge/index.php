<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absence Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="desole.png">
</head>
<body>
    <header>
        <h1>Excuses Generator</h1>
    </header>
    <form action="" method="get">
        <label for="date">Absence date: </label>
        <input type="date" name="date" id="date" required>
        <br>

        <label for="nameOfChild">Name of the child: </label>
        <input type="text" name="nameOfChild" id="childName" required>
        <br>

        <label>Choose your gender:</label>
        <br>
        <div class="radio-group">
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
        </div>
        <br>

        <label for="nameOfTeacher">Name of the teacher: </label>
        <input type="text" name="nameOfTeacher" id="teacherName" required>
        <br>

        <label for="absenceReason">Reason for absence:</label>
        <select id="absenceReason" name="absenceReason" required>
            <option value="" disabled selected>Select a reason</option>
            <?php
                $valid_absence_reasons = [
                    "Medical appointment",
                    "Illness or injury",
                    "Family emergency",
                    "Bereavement (death of a close relative)",
                    "Court appearance or legal obligation",
                    "Childcare emergency",
                    "Mental health day",
                    "Religious holiday or observance",
                    "Car trouble or transportation issue",
                    "Scheduled vacation with prior approval"
                ];

                foreach ($valid_absence_reasons as $reason) {
                    echo "<option value='$reason'>$reason</option>";
                }
            ?>
        </select>
        <br>

        <input type="submit" value="Submit">
    </form>
    <main>
    <?php
    if (
        isset($_GET["date"], 
              $_GET['nameOfChild'], 
              $_GET['gender'], 
              $_GET['nameOfTeacher'], 
              $_GET['absenceReason'])
    ) {
        $date = htmlspecialchars($_GET['date']);
        $child_name = htmlspecialchars($_GET['nameOfChild']);
        $child_gender = htmlspecialchars($_GET['gender']);
        $teacher_name = htmlspecialchars($_GET['nameOfTeacher']);
        $absence_reason = htmlspecialchars($_GET['absenceReason']);

        $child_pronoun = $child_gender === 'male' ? "son" : "daughter";

        echo "<h2>Excuse Note</h2>";
        echo "<p>Dear Professor $teacher_name,</p>";
        echo "<p>We hope this message finds you well.<br><br> Unfortunately, our $child_pronoun, $child_name, will not be able to attend your class on $date due to $absence_reason.</p>";
        echo "<p>We sincerely apologize for any inconvenience caused and thank you for your understanding.</p><br>";
        echo "<p>Best regards,<br><br>The $child_name Family</p>";
    }
    ?>
    </main>
</body>
</html>
