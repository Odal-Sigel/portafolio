<?php

use Slim\Factory\AppFactory;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

require_once '../vendor/autoload.php';

$app = AppFactory::create();

// $app->setBasePath('/backend');
$app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $peticion, Response $respuesta) {
    $jsonRespuesta = json_encode(array(
        'usuario' => array(
            'nombre' => 'Pablo',
            'apellido' => 'Cornago',
            'especialidad' => 'Desarrollador full stack',
            'avatar' => 'https://github.com/Odal-Sigel.png',
            'foto' => 'https://media.licdn.com/dms/image/D4E03AQGMBQyH3IMFww/profile-displayphoto-shrink_400_400/0/1692006973119?e=1723680000&v=beta&t=CPoA6j0TRIHIm8bW7lOhVIw_MmGsvXzP9A9MRZNx-es'
        )
    ));

    $respuesta->getBody()->write($jsonRespuesta);

    return $respuesta
        ->withHeader('Access-Control-Allow-Origin', 'https://cornagopablo.com')
        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
        ->withHeader('Access-Control-Allow-Methods', 'GET');
});

$app->run();
