<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            text-align: center;
            justify-content: center;
        }
        p {
            margin: 5px 0;
        }
</style>

</head>
<body>
    <?php 
        $first_name = 'Matteo';
        $age = 27;
        $eyes_color = "Green/brown";
        $family_members = array(
            'father' => 'Marco',
            'mother' => 'Anna',
            'brother' => 'Davide',
            'sister' => 'Sabrina'
        );
    ?>
    <p>Hi! My name is <?= $first_name; ?></p>
    <br>
    <p>I am <?= $age; ?> years old.</p>
    <br>
    <p>My eyes are <?= $eyes_color?></p>
    <br>
    <p>My mother's name is <?= isset($family_members['mother']) ? $family_members['mother'] : 'unknown'; ?></p>
</body>
</html>