<?= "PHP Loops<br>";

    echo "EXERCICE 1<br>";
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        foreach ($pronouns as $pronoun) {
            echo ($pronoun) == 'He/She' ? 
                $pronoun . " codes<br>": 
                $pronoun . " code<br>"; 
        }  

    echo "<br>EXERCICE 2<br>";

        echo "<br>While<br>";
        $num = 0;
        while ($num < 20) {
            echo "Number " . $num + 1 . "<br>";
            $num++;
        }

        echo "<br>For<br>";
        $num = 0;
        for ($num; $num < 20; $num++) {
            echo "Number". $num + 1 . "<br>";
        }

    echo "<br>EXERCICE 3<br>";

        $middle_age_name = array(
            "Enguerrand",
            "Godefroy",
            "Eustache",
            "Bartholomée",
            "Alcuin",
            "Hildegarde",
            "Humbert",
            "Aceline",
            "Aldegonde",
            "Odilon",
            "Foulques",
            "Gisèle",
            "Melchior",
            "Bérangère",
            "Anselme",
            "Ysabeau",
            "Théodulfe",
            "Léocadie",
            "Thibault",
            "Baldwin"
        );

        foreach($middle_age_name as $name) {
            echo "Hail and well met, o wise wanderer of the stars, $name! May the celestial forces grant you favor and fortune upon this fine morn.<br>";
        }
    
    echo "<br>EXERCICE 4<br>";

        $forgotten_country = array(
            "TOL" => "Royaume de Tolède", 
            "TRB" => "Empire de Trébizonde", 
            "PMP" => "Royaume de Pamplona", 
            "SAV" => "Duché de Savoie", 
            "ANT" => "Principauté d'Antioche", 
            "TOU" => "Comté de Toulouse", 
            "LEO" => "Royaume de Léon", 
            "BRI" => "Duché de Bretagne", 
            "KIE" => "Principauté de Kiev", 
            "BOU" => "Royaume de Bourgogne"
        );        
?>

<select name="middle_age_country">
    <?php foreach($forgotten_country as $code => $country): ?>
        <option value="<?= $code; ?>"><?= $country; ?></option>
    <?php endforeach; ?>
</select>