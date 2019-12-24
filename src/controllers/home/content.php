<?php

$posts = '';

for ($i=1; $i < 106; $i++) { 
    $posts .= LoadView('common/post', array(
        'width' => rand(220, 330),
        'height' => rand(300, 600)
    ));
}

$app->body = LoadView('home/index', array(
    'Posts' => LoadView('common/posts', array(
        'POSTS' => $posts,
    ))
));
