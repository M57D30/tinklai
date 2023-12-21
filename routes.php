<?php


require_once(__DIR__ ."/router.php");

get('/', '/public/home.php');

get('/login', 'public/login/index.php');
get('/myProfile', 'public/userProfile/index.php');
// get('/logout','/auth/logout.php');
get('/registration', '/public/registration/index.php');
get( '/admin', '/public/admin/index.php');
get( '/doctor', '/public/doctor/index.php');
get( '/labWorker', '/public/labWorker/index.php');
get( '/patient', '/public/patient/index.php');

get ('/za', '/public/zajabys.php');
get('/editDoctor', '/public/editDoctor/index.php');
get('/appointment', '/public/appointment/index.php');
get('/examinationResults', '/public/results/index.php');

/// Styles
any('/tailwindcss', '/public/styles/output.css');
get('/globalcss', '/public/styles/globals.css');

get('/user', '/public/user/index.php');

/// COMPONENTS
get('/header', '/public/components/header.php');

/// Dashboard
get('/doctorDashboard', '/public/dashboard/doctor.php');
get('/labTech', '/public/lab_technitian/index.php');


post('/registration', '/auth/user_registration.php');
post('/login', '/auth/user_login.php');
post('/logout', '/auth/user_logout.php');


any('/404', 'public/404.php');

////////   STYLES

// Callendar
get('/callendarStyle', '/public/editDoctor/callendarStyle.css');
get('/callendarJS', '/public/editDoctor/callendarJS');
// get('/callendarStyle', '/public/editDoctor/style.css')



/// TODO
/// FRONTAS

/// Conditional renderinimas:
/// https://www.youtube.com/watch?v=qzJWmPfIAug
/// 19:00



/// ATSILOGINTI
/// SUZINOT KAIP VEIK SAUSAINIAI
?>