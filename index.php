<?php

use function GuzzleHttp\json_decode;

require 'vendor/autoload.php';
use App\{
    User,
    UsersCollection
};


$client = new \GuzzleHttp\Client([
    'verify' => false
]);
    
// var_dump($client);
// die();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/users');

$users = json_decode($response->getBody());

// echo $response->getStatusCode(); # 200
// echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
// echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'

$user = new User;
$collection = new UsersCollection($users);
var_dump($collection);
die;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
        <?php foreach($users as $key => $user): ?>
        
            <li style="font-size: 20px;"><?=$user->name . ' - '. $user->email . ' - ' . $user->address->street . ' - ' . $user->address->suite . ' - ' .  $user->address->city . ' - (' . $user->address->zipcode . ')'?></li>
        <?php endforeach;?>

        
        
    </ul>
</body>
</html>