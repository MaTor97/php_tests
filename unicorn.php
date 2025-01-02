<form method="get" action="">
    <label for="creature">Quel est votre type ?</label>
    <br>
    <input type="radio" id="cat" name="creature" value="chat" required>
    <label for="cat">Chat</label>
    <br>

    <input type="radio" id="human" name="creature" value="humain" required>
    <label for="human">Humain</label>
    <br>

    <input type="radio" id="unicorn" name="creature" value="licorne" required>
    <label for="unicorn">Licorne</label>
    <br>

    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET["creature"])) {
    $creature = $_GET["creature"];
    switch ($creature) {
        case "chat":
            echo "Vous êtes un chat, miaou !<br>";
            echo '<iframe src="https://giphy.com/embed/cfuL5gqFDreXxkWQ4o" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
            echo '<p><a href="https://giphy.com/gifs/cat-cool-cats-cfuL5gqFDreXxkWQ4o">via GIPHY</a></p>';
            break;
        case "humain":
            echo "Vous êtes un humain, bien joué !<br>";
            echo '<iframe src="https://giphy.com/embed/6BBWgIxT7MZfUVWXdj" width="360" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
            echo '<p><a href="https://giphy.com/gifs/running-human-humanity-6BBWgIxT7MZfUVWXdj">via GIPHY</a></p>';
            break;
        case "licorne":
            echo "Vous êtes une licorne, magique !<br>";
            echo '<iframe src="https://giphy.com/embed/3o7WTDJQVuYwhhuLhC" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';
            echo '<p><a href="https://giphy.com/gifs/loop-seamless-3o7WTDJQVuYwhhuLhC">via GIPHY</a></p>';
            break;
        default:
            echo "Une erreur s\'est produite.";
            break;
    }
}
?>
