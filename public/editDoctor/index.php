<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Week Calendar with Tailwind CSS</title>
    <link href="./public/styles/output.css" rel="stylesheet">
    <!-- <link href="/tailwindcss" rel=" stylesheet" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="/tailwindcss">

</head>

<body class="bg-gray-100">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <div class="max-w-4xl mx-auto mt-10 w-4/5 rounded-2xl">
        <h1 class="text-4xl text-center pb-10">Tvarkaraštis</h1>

        <body class="bg-gray-100 p-8">
            <div class="max-w-4xl mx-auto">
                <table class="w-full border-collapse border border-gray-900">
                    <thead>
                        <tr class="border-gray-900">
                            <th class="border border-gray-300 py-2 px-4">Time</th>
                            <th class="border border-gray-300 py-2 px-4">Monday</th>
                            <th class="border border-gray-300 py-2 px-4">Tuesday</th>
                            <th class="border border-gray-300 py-2 px-4">Wednesday</th>
                            <th class="border border-gray-300 py-2 px-4">Thursday</th>
                            <th class="border border-gray-300 py-2 px-4">Friday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- You can populate this with your desired time slots -->
                        <!-- Example rows -->
                        <tr class="border border-gray-300">
                            <td class="border border-gray-300 py-2 px-4">8:00-8:45 AM</td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 1</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4"></td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 2</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 3</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment"></a>
                            </td>
                        </tr>
                        <tr class="border border-gray-300">
                            <td class="border border-gray-300 py-2 px-4">9:00-9:45 AM</td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 1</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4"></td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 2</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 3</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment"></a>
                            </td>
                        </tr>
                        <tr class="border border-gray-300">
                            <td class="border border-gray-300 py-2 px-4">10:00 - 10:45 AM</td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 1</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4"></td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 2</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment">Event 3</a>
                            </td>
                            <td class="border border-gray-300 py-2 px-4">
                                <a href="/appointment"></a>
                            </td>
                        </tr>
                        <!-- More rows can be added similarly -->
                    </tbody>
                </table>
            </div>
        </body>
    </div>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>