<?php 

include __DIR__ . '/../../helper.php';
include_once __DIR__ . '/../../controllers/AuthController.php';
include_once __DIR__ . '/../../controllers/UsersController.php';

$manageUser = new UsersController();
$users = $manageUser->getUsers();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./public/styles/output.css" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body>
    <?php include __DIR__ . '/../components/header.php'; ?>


    <div class="py-6 px-4 max-w-screen mx-auto h-screen">
        <h1 class='text-6xl font-mono font-thin'>Visų vartotojų sąrašas</h1>
        <table class="w-full bg-white border-collapse border border-purple-300 rounded-md shadow-md mt-10">
            <thead>
                <tr class="bg-fuchsia-300 text-white">
                    <!-- <th class="border border-purple-300 px-4 py-2">ID</th> -->
                    <th class="border border-purple-300 px-4 py-2">Vardas</th>
                    <th class="border border-purple-300 px-4 py-2">Pavardė</th>
                    <th class="border border-purple-300 px-4 py-2">E. Paštas</th>
                    <th class="border border-purple-300 px-4 py-2">Anketos sukurimo data</th>
                    <th class="border border-purple-300 px-4 py-2">Anketos ištrynimo data</th>
                    <th class="border border-purple-300 px-4 py-2">Aktyvi paskyra</th>
                    <th class="border border-purple-300 px-4 py-2">Telefonas</th>
                    <th class="border border-purple-300 px-4 py-2">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr class="hover:bg-purple-100" onclick="window.location.href='/user?id=<?php echo $user['id']; ?>'">
                    <!-- <td class="border border-purple-300 px-4 py-2"><?php echo $user['id']; ?></td> -->
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['name']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['lastname']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['email']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['created_at']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['deleted_at']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['isDeleted']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['phone']; ?></td>
                    <td class="border border-purple-300 px-4 py-2"><?php echo $user['role']; ?></td>

                </tr>
                <?php endforeach; 
                ?>
            </tbody>
        </table>




    </div>


    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>


</html>