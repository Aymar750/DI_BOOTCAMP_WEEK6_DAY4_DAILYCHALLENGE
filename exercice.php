</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Challenge</title>
</head>

<body>
    <form action="traitement.php" method="post">
        Votre Nom : <input type="text" name="username" placeholder="entrez votre nom" required /><br /><br />
        Select your favourite colors:<br />
        Rouge<input type="checkbox" name="list[]" value="Rouge" /><br />
        Bleu<input type="checkbox" name="list[]" value="Bleu" /><br />
        Vert<input type="checkbox" name="list[]" value="Vert" /><br />
        Jaune<input type="checkbox" name="list[]" value="Jaune" /><br />
        Rose<input type="checkbox" name="list[]" value="Rose" /><br />
        Noir<input type="checkbox" name="list[]" value="Noir" /><br />
        Blanc<input type="checkbox" name="list[]" value="Blanc" /><br /><br />
        <input type="submit" name="submit" value="Envoyer" /><br />
    </form>
</body>

</html>

