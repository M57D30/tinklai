<!DOCTYPE html>
<html lang="en">

<?php 
include_once __DIR__ . '/../../controllers/UsersController.php';
include_once __DIR__ . '/../../controllers/AuthController.php';

$userData = $authenticated->authDetail();
$manageUser = new UsersController();
$users = $manageUser->getUsers("patient");


?>

<head>
    <meta charset="UTF-8">
    <title>Doctor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 ">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <div class="h-screen mt-6 ml-5 flex">

        <div class="ml-40">
            <div class="max-w-md bg-white p-6 rounded-3xl shadow-md ">
                <h1 class="text-2xl font-bold mb-4">Mano (laboranto) profilis</h1>
                <div class="mb-4">
                    <p class="text-lg"><strong>Name:</strong> John</p>
                    <p class="text-lg"><strong>Lastname:</strong> Doe</p>
                    <p class="text-lg"><strong>Email:</strong> johndoe@example.com</p>
                    <p class="text-lg"><strong>Phone:</strong> 123-456-7890</p>
                </div>
                <!-- You can add more content or functionality specific to the doctor's dashboard -->
                <div class="flex justify-end">
                    <a href="/edit-profile"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Edit
                        Profile</a>
                </div>
            </div>
            <div class="max-w-md bg-white p-6 rounded-3xl shadow-md  mt-6">
                <a href="">
                    <p class="text-2xl text-center">Pacientai laukiantys eileje</p>
                </a>

                <table class="w-full bg-gray-200 border  rounded-3xl shadow-md mt-10">
                    <thead>
                        <tr class="bg-purple-600 text-white">
                            <!-- <th class="border border-purple-300 px-4 py-2">ID</th> -->
                            <th class="border border-purple-300 px-4 py-2">Vardas</th>
                            <th class="border border-purple-300 px-4 py-2">Pavardė</th>
                            <th class="border border-purple-300 px-4 py-2">E. Paštas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr class="hover:bg-purple-100"
                            onclick="window.location.href='/examinationResults?id=<?php echo $user['id']; ?>'">
                            <td class="border border-purple-300 px-4 py-2"><?php echo $user['name']; ?></td>
                            <td class="border border-purple-300 px-4 py-2"><?php echo $user['lastname']; ?></td>
                            <td class="border border-purple-300 px-4 py-2"><?php echo $user['email']; ?></td>

                        </tr>
                        <?php endforeach;
                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="w-full">

        </div>
    </div>


    <?php include __DIR__ . '/../components/footer.php'; ?>

</body>



</html>