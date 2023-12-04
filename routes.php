<?php


require_once(__DIR__ ."/router.php");

get('/', '/public/home.php');

get('/login', 'public/login/index.php');
get('/dashboard', 'public/login/user.php');
// get('/logout','/auth/logout.php');
get('/registration', '/public/registration/index.php');

post('/registration', '/auth/user_registration.php');
post('/login', '/auth/user_login.php');
post('/logout', '/auth/user_logout.php');


any('/404', 'public/404.php');

/// TODO
/// FRONTAS

/// Conditional renderinimas:
/// https://www.youtube.com/watch?v=qzJWmPfIAug
/// 19:00



/// ATSILOGINTI
/// SUZINOT KAIP VEIK SAUSAINIAI
?>