<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Include your custom CSS file or Tailwind CSS -->
    <link href="./public/styles/output.css" rel="stylesheet">

</head>

<body class="bg-gray-200 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Prisijungimas</h2>
        <form action="/login" method="POST" class="flex flex-col">
            <label for="email" class="mb-2">E. Paštas:</label>
            <input type="email" name="email" class="border rounded px-2 py-1 mb-4">

            <label for="password" class="mb-2">Slaptažodis:</label>
            <input type="password" name="password" class="border rounded px-2 py-1 mb-4">
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600" type="submit"
                name="login">
                Prisijungimas
            </button>
        </form>
    </div>

</body>

</html>





<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>LOGIN</h1>
    <div>
        <form action="/login" method="post">
            <input type="text" name="email" placeholder="E. paštas"><br />
            <input type="password" name="password" placeholder="slaptažodis"><br />
            <input type="submit" name="login" value="Login" />
        </form>
    </div>
</body>

</html> -->