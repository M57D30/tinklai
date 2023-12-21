<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Page with Tailwind CSS</title>
    <link href="./public/styles/output.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <?php include __DIR__ . '/../components/header.php'; ?>
    <div class="max-w-md mx-auto my-10 h-screen">
        <h1 class="text-4xl text-center">Rezervacija</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mt-10">

            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="date">
                    Date
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="date" type="date" placeholder="Date" value="2023-12-20">
            </div>
            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="start_time">
                    Start Time
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="start_time" type="time" placeholder="Start Time" value="08:00 AM">
            </div>
            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="end_time">
                    End Time
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="end_time" type="time" placeholder="End Time" value="08:45 AM">
            </div>
            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="status">
                    Status
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="status" type="text" placeholder="Status" value="Available">
            </div>

            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="patient_id">
                    Patient Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="Patient Name" type="text" placeholder="Patient ID" value="67890">
            </div>
            <div class="mb-4">
                <label class=" text-gray-700 text-sm font-bold mb-2" for="patient_id">
                    Doctor name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="Doctor name" type="text" placeholder="Patient ID" value="67890">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="button">
                    Save
                </button>
            </div>
        </form>
    </div>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>