<?php
// Check if the "username" cookie does NOT exist
if (!isset($_COOKIE["username"])) {
    header("Location: index.php");
    exit();
}
// If the cookie exists, store its value in the $username variable
$username = $_COOKIE["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <!--Tiliwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Lottiefile-->
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js" type="module"></script>
</head>

<body class="bg-[radial-gradient(circle_at_bottom,_#0f172a_70%,_#065f46_100%)] h-screen flex justify-center items-center">
    <div class="bg-gray-200 w-10/12 max-w-3xl h-auto min-h-[400px] rounded-xl shadow-lg">
        <!--Start Navbar -->
        <nav class="p-4 flex flex-col md:flex-row md:items-center md:justify-between">
            <!-- Logo -->
            <div class="text-2xl font-serif text-emerald-400 mb-4 md:mb-0 ">
                TechyZone
            </div>

            <!-- Navigation Links -->
            <ul class="flex justify-center flex-1 space-x-6 text-gray-700 font-medium mb-4 md:mb-0 font-serif">
                <li><a href="#" class="hover:text-emerald-500 transition duration-300">Home</a></li>
                <li><a href="#" class="hover:text-emerald-500 transition duration-300">Services</a></li>
                <li><a href="#" class="hover:text-emerald-500 transition duration-300">Contact Us</a></li>
            </ul>

            <!--  Button -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-600 text-lg font-serif">Welcome, <?php echo htmlspecialchars($username); ?></span>
                <a href="logout.php"
                    class="text-white px-4 py-2 rounded-lg bg-emerald-500 font-serif hover:bg-emerald-300 transition duration-300 ease-out">
                    Log out
                </a>
            </div>
        </nav>
        <!--End navbar-->

        <!--Start seection  -->
        <section class="flex flex-col md:flex-row items-center justify-between py-16 px-4">
            <!--left area -->
            <div class="md:w-1/2 text-left mb-8 md:mb-0 md:pl-8">
                <h1 class="text-2xl md:text-4xl font-bold text-emerald-400 mb-4">
                    Welcome to TechyZone
                </h1>
                <p class="text-lg md:text-md text-gray-700 mb-6">
                    We provide innovative software solutions<br>
                    to grow your business.
                </p>
                <a href="#" class="bg-emerald-500 text-white px-6 py-3 mb-4 font-serif rounded-lg hover:bg-emerald-400 transition duration-300 ease-out">
                    Explore Our Services
                </a>
            </div>

            <!-- right area  -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <dotlottie-wc
                    src="https://lottie.host/e49aeca9-7a97-42e4-bce8-7adf4e5515e6/y0CuoY3h4r.lottie"
                    style="width: 300px; height: 300px;"
                    autoplay
                    loop>
                </dotlottie-wc>
            </div>
        </section>
</body>
</html>