<?php
return array(
    'acl' => array(
        'roles' => array(
            'guest'   => null,
            'member'  => 'guest'
        ),
        'resources' => array(
            'allow' => array(
                'user' => array(
                    'login' => 'guest',
                    'all'   => 'member'
                )
            )
        )
    )
);
