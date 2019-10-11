# Images from URL

Basiquement, enregistre les images distantes d'un fichier JSON dans un dossier local "images"

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

Ne pas oublier de faire un *chmod 777* sur le dossier **images**

Voir **script.php** 

    $url = 'data.json'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $entries = json_decode($data); // decode the JSON feed

Parcourir $entries avec *foreach*

Adapter en fonction

# Lancement 

Accéder à l'url du dossier en localhost