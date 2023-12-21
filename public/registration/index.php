<!DOCTYPE html>
<html>

<head>
    <link href="./public/styles/output.css" rel="stylesheet">
    <title>Paciento registracija</title>
</head>


<body class="bg-gray-200 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-bold mb-4">Registracija</h2>
        <form action="/registration" method="post" autocomplete="off" class="grid gap-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block mb-1">Vardas:</label>
                    <input type="text" name="name"
                        class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="lastname" class="block mb-1">Pavardė:</label>
                    <input type="text" name="lastname"
                        class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
                </div>
            </div>
            <div>
                <label for="password" class="block mb-1">Slaptažodis:</label>
                <input type="password" name="password"
                    class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label for="confirm_password" class="block mb-1">Patvirtinti slaptažodį:</label>
                <input type="password" name="confirm_password"
                    class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label for="email" class="block mb-1">El. Paštas:</label>
                <input type="email" name="email"
                    class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <div>
                <label for="number" class="block mb-1">Tel. numeris:</label>
                <input type="text" name="number"
                    class="border border-gray-300 rounded-md p-2 w-full focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit"
                class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600">Registruotis</button>
        </form>
    </div>

</body>

</html>