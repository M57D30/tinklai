<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Information - Tailwind CSS Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <?php include __DIR__ . '/../components/header.php'; ?>
</head>

<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md my-20">
        <!-- Patient Information -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold mb-2">Patient Information</h1>
            <p><strong>Name:</strong> John</p>
            <p><strong>Lastname:</strong> Doe</p>
            <p><strong>Email:</strong> johndoe@example.com</p>
        </div>

        <!-- Illness History -->
        <div class="mb-6">
            <h2 class="text-xl font-bold mb-2">Illness History</h2>
            <!-- Illness Record - Doctor Name and Details -->
            <div class="border-t border-gray-300 pt-4">
                <p class="text-lg"><strong>Doctor:</strong> Dr. Smith</p>
                <p><strong>Date:</strong> October 15, 2023</p>
                <p><strong>Diagnosis:</strong> Flu</p>
                <p><strong>Treatment:</strong> Rest and medication</p>
            </div>
            <!-- More Illness History Records Can Be Added Here -->
        </div>

        <!-- Examination Results -->
        <div>
            <h2 class="text-xl font-bold mb-2">Examination Results</h2>
            <!-- Lab Worker Name and Examination Result -->
            <div class="border-t border-gray-300 pt-4">
                <p class="text-lg"><strong>Lab Worker:</strong> Jane Williams</p>
                <p><strong>Date:</strong> October 20, 2023</p>
                <p><strong>Result:</strong> Blood test showed low iron levels</p>
            </div>
            <!-- More Examination Results Can Be Added Here -->
        </div>
    </div>


    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-md my-20">
        <h1 class="text-center text-3xl ">Rašyti komentarą</h1>
        <form class="flex flex-col mt-4" action="">
            <input type="text" name="Rašyti komentarą" id="comment" class="h-28 border-4">
            <input type="submit" name="logout"
                class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded mt-4" value="Siųsti" />
        </form>
    </div>
    <?php include __DIR__ . '/../components/footer.php'; ?>
</body>

</html>