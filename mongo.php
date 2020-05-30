<?php

    $client = new MongoDB\Client('mongodb+srv://cal:ImABigFanny@cluster0-eodrt.gcp.mongodb.net/test?retryWrites=true&w=majority');

    $db = $client->test;

    echo "Hello world";

?>
