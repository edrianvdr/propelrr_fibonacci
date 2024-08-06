<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propelrr Assessment</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Fibonacci Calculator</h1>
        <form action="index.php" method="post" class="space-y-4">
            <div>
                <label for="number" class="block text-gray-700 text-sm font-medium mb-1">Enter a number (1 - 20):</label>
                <input type="number" id="number" name="number" min="1" max="20" required
                    class="border border-gray-300 rounded-lg px-3 py-2 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <input type="submit" value="Calculate"
                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </form>

        <?php
        function fibonacci($n) {
            if ($n < 1 || $n > 20) {
                return "Input must be between 1 and 20.";
            }

            if ($n == 1 || $n == 2) {
                return 1;
            }

            return fibonacci($n - 1) + fibonacci($n - 2);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = intval($_POST['number']); // Get the number from the form

            if ($number < 1 || $number > 20) {
                echo "<p class='text-red-500 mt-4'>Input must be between 1 and 20.</p>";
            } else {
                $result = fibonacci($number); // Calculate Fibonacci number
                echo "<h2 class='text-xl font-semibold text-gray-800 mt-4'>Result: $result</h2>";
            }
        }
        ?>
    </div>
</body>
</html>
