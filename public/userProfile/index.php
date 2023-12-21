<?php 
include __DIR__ . '/../../helper.php';
include_once __DIR__ . '/../../controllers/AuthController.php';

$userData = $authenticated->authDetail();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./public/styles/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-gray-100">

    <?php include __DIR__ . '/../components/header.php'; ?>



    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden mt-28 border-2 border-purple-600">
        <h1 class="text-3xl font-semibold text-center text-white py-4 bg-purple-600">Mano profilis</h1>
        <hr>

        <div class="p-6">
            <h4 class="text-lg font-semibold">Vardas:</h4>
            <p class="text-gray-700"><?= $userData['name']; ?></p>

            <h4 class="text-lg font-semibold mt-4">Pavardė:</h4>
            <p class="text-gray-700"><?= $userData['lastname']; ?></p>

            <h4 class="text-lg font-semibold mt-4">El. Paštas:</h4>
            <p class="text-gray-700"><?= $userData['email']; ?></p>

            <h4 class="text-lg font-semibold mt-4">Sukurimo data:</h4>
            <p class="text-gray-700"><?= $userData['created_at']; ?></p>

            <h4 class="text-lg font-semibold mt-4">Pareigos:</h4>
            <p class="text-gray-700"><?= $userData['role']; ?></p>
        </div>

        <form action="/logout" method="post" class="text-center py-4">
            <input type="submit" name="logout"
                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded" value="Atsijungti" />
        </form>
    </div>
</body>
<?php include __DIR__ . '/../components/footer.php'; ?>


</html>