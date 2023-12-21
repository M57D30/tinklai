<?php 

include __DIR__ . '/../../helper.php';
include_once __DIR__ . '/../../controllers/AuthController.php';
include_once __DIR__ . '/../../controllers/UsersController.php';


// $auth = new AuthController();
// $isAdmin = $auth->admin();

$manageUser = new UsersController();
$users = $manageUser->getUsers("patient");

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Hello, World!</title>
    <!-- Include your custom CSS file -->
    <!-- <link rel="stylesheet" href="./css/output.css"> -->
    <!-- <link rel="stylesheet" href="./css/global.css"> -->
    <!-- <link rel="stylesheet" href="/tailwindcss"> -->
    <link href="./public/styles/output.css" rel="stylesheet">
    <link rel="stylesheet" href="/tailwindcss">


</head>

<body class="flex flex-col min-h-screen bg-gray-200">
    <?php include __DIR__ . '/../components/header.php'; ?>

    <div class="py-6 px-4 max-w-screen mx-auto">
        <h1 class='text-6xl font-mono font-thin '>Laukiančių pacientų tyrimui sąrašas</h1>
        <table class="w-full bg-white border-collapse border border-purple-300 rounded-md shadow-md mt-10">
            <thead>
                <tr class="bg-fuchsia-300 text-white">
                    <th class="border border-purple-300 px-4 py-2">ID</th>
                    <th class="border border-purple-300 px-4 py-2">Vardas</th>
                    <th class="border border-purple-300 px-4 py-2">Pavardė</th>
                    <th class="border border-purple-300 px-4 py-2">E. Paštas</th>
                    <th class="border border-purple-300 px-4 py-2">Telefonas</th>
                    <th class="border border-purple-300 px-4 py-2">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr class="hover:bg-purple-100"
                    onclick="window.location.href='new_page.php?id=<?php echo $user['id']; ?>'">
                    <?php debug_to_console(array_keys($user)); ?>

                    <?php debug_to_console($user); ?>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['id']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['name']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['lastname']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['email']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['phone']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['role']; ?></td>

                </tr>
                <?php endforeach; 
                ?>
            </tbody>
        </table>

    </div>
</body>
<?php include __DIR__ . '/../components/footer.php'; ?>

</html>