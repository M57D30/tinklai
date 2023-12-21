<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World!</title>
    <link href="./public/styles/output.css" rel="stylesheet">
</head>
<?php include __DIR__ .'/components/header.php'; ?>

<body class="flex flex-col min-h-screen bg-gray-200">

    <main class="flex-1 flex flex-col items-center justify-center">
        <img src="/public/assets/main_photo.jpg" alt="Sample Image" class="w-96 h-auto mb-4">
        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-8 rounded w-64">
            Registracija pas gyditoją
        </button>

    </main>
</body>

</html>

<?php include __DIR__ . '/components/footer.php'; ?>