<?php

    $client = new MongoDB\Client(
        'mongodb+srv://kay:ImABigFanny@cluster0.mongodb.net/?ssl=true&authSource=admin&serverSelectionTryOnce=false&serverSelectionTimeoutMS=15000&w=majority"');

    $db = $client->friendr;

    echo "This thing worked";

?>
