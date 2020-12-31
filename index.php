<?php
require_once 'Personne.php';
require_once 'PersonneManager.php';

use App\Personne;
use App\PersonneManager;

$db = new \PDO('mysql:host=localhost;dbname=test_perso', 'root', '');

$perso = [
    'id' => 1,
    'nom' => 'Last name',
    'prenom' => 'First name'
];
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <p class="lead text-right">CRUD V0.1.0</p>
                <h1>Test page</h1>
                <blockquote>q:q
                    This is the page content using
                    <code>var_dump($personne);</code>
                </blockquote>
                <div class="alert alert-info">
                    <?php
                    $personne = new Personne($perso);
                    $manager  = new PersonneManager($db);
                    $manager->add($personne);

                    var_dump($personne);

                    ?>
                </div>
            </div>
        </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>


