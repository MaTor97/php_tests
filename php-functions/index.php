<?= "FUNCTIONS PHP"; 
    
    echo "<br>EXERCICE 1<br>";
        $text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
        
        $text = explode(" ", $text);

        foreach($text as $word) {
            echo str_shuffle($word) . " ";
        }

    echo "<br>EXERCICE 2<br>";
        
        $middle_age_name = [
            "enguerrand",
            "godefroy",
            "eustache",
            "bartholomée",
            "alcuin",
            "hildegarde",
            "humbert",
            "aceline",
            "aldegonde",
            "odilon",
            "foulques",
            "gisèle",
            "melchior",
            "bérangère",
            "anselme",
            "ysabeau",
            "théodulfe",
            "léocadie",
            "thibault",
            "baldwin"
        ];

        foreach ($middle_age_name as $name) {
            echo "Adieu, noble " . ucfirst($name) ."! Que les dieux de l'ancien temps guident tes pas à travers les royaumes et les âges, et que les étoiles veillent sur tes voyages. Puisses-tu trouver gloire et honneur en tous lieux! 🌟🛡️<br>";
        }

        echo "<br>EXERCICE 3<br>";
            echo date("Y");

        echo "<br>EXERCICE 4<br>";
            function Sum($first, $second) {
                echo is_numeric($first) && is_numeric($second) ? 
                $first + $second : 
                "Error: argument is not a number.";
            }

            echo Sum(8, 5);

        echo "<br>EXERCICE 5<br>";

            function Acronymize($string) {
                $string = explode(" " , $string);
                foreach($string as $word) {
                    $word = ucfirst($word);
                    echo $word[0];
                }
            }

            echo Acronymize("Don't forget about curlybraces");

        echo "<br>EXERCICE 6<br>";

            function replaceAe($string) {
                $string = str_replace("ae","æ", $string);
                echo $string;
            }

            echo replaceAe("microsphaera");
?>