<?= "Arrays exercices php";
    $family_members = ['Marco', 'Anna', 'Sabrina', 'Davide', 'Matteo'];
    echo '<pre>';
    print_r($family_members);
    echo '</pre>';
    echo "<br>";
    $fav_recipes = ['Crêpes', 'Lasagne', 'Pizza', 'Frites', 'Tiramisu'];
    echo '<pre>';
    print_r($fav_recipes);
    echo '</pre>';
    echo "<br>";
    $fav_films = ['V pour Vendetta', 'Avengers', 'Shrek', 'Terminator', 'Attrapes moi si tu peux'];
    echo '<pre>';
    print_r($fav_films[0]);
    echo '</pre>';

    echo "EXERCICE 2";
    echo "<br>";
    $me = [
        "firstname" => "Matteo",
        "lastname" => "Tortora",
        "age" => 27,
        "favseason" => "Autumn",
        "likessoccer" => true
    ];

    $me['hobbies'] = ['Guitar', 'Piano', 'Calistenics', 'Philosophy', 'Video Game'];

    $mother = [
        "firstname" => "Anna",
        "lastname" => "Recubini",
        "age" => 62,
        "favseason" => "summer",
        "likesoccer" => true,
        "hobbies" => ["Cooking", "Informations media", "People press", "Friends", "Family"]
    ];

    $me['mother'] = $mother;

    $how_many_hobz = count($mother['hobbies']); 
    echo $how_many_hobz;

    $me['hobbies'][] = 'taxidermy';
    $me['lastname'] = 'Durand';

    $soulmate = [
        "firstname" => "Giuseppina",
        "lastname" => "Rosciana",
        "age" => 30,
        "favseason" => "Autumn",
        "likesoccer" => true,
        "hobbies" => ["Singing", "Guitar", "Acting", "Dancing", "Nutrition"]
    ];

    $me_and_soulmate = array_merge($me, $soulmate);
    $me_and_soulmate_r = array_merge_recursive($me, $soulmate);


    echo '<pre>';
    print_r($me);
    echo '</pre>';
    echo "<br>Var_export<br>";
    echo '<pre>';
    var_export($me);
    echo '</pre>';
    echo "<br>Mns<br>";
    echo '<pre>';
    print_r($me_and_soulmate);
    echo '</pre>';
    echo "<br>MnsR<br>";
    echo '<pre>';
    print_r($me_and_soulmate_r);
    echo '</pre>';

    echo "MORE";

    $web_development = [
        "frontend" => [],
        "backend" => [],
    ];

    $web_development["frontend"][] = "xhtml";
    $web_development["backend"][] = "Ruby on Rails";
    $web_development["frontend"][] = "Css";
    $web_development["frontend"][] = "flash";
    $web_development["backend"][] = "Javascript";
    $web_development["frontend"][0] = "html";
    array_splice($web_development['frontend'], 2, 1);

    echo "<br>webdevArr<br>";
    echo '<pre>';
    print_r($web_development);
    echo '</pre>';

?>