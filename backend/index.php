<?php

header('Access-Control-Allow-Origin: *');

echo json_encode(
    array(
        'usuario' => array(
            'nombre' => 'Pablo',
            'apellido' => 'Cornago',
            'especialidad' => 'Desarrollador full stack',
            'avatar' => 'https://github.com/Odal-Sigel.png',
            'foto' => 'https://media.licdn.com/dms/image/D4E03AQGMBQyH3IMFww/profile-displayphoto-shrink_400_400/0/1692006973119?e=1723680000&v=beta&t=CPoA6j0TRIHIm8bW7lOhVIw_MmGsvXzP9A9MRZNx-es'
        )
    )
);
