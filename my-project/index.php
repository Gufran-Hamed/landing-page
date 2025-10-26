<?php
// Define the correct username and password
$real_username = "Gufran";
$real_password = "12345";

// Variables to store error messages
$username_error = "";
$password_error = "";

//  Check if the form has been submitted via POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // Validate username
    if (empty($username)) {
        $username_error = "Username cannot be empty!";
    } elseif ($username !== $real_username) {
        $username_error = "username is incorrect!";
    }

    //Validate password
    if (empty($password)) {
        $password_error = "Password cannot be empty!";
    } elseif ($password !== $real_password) {
        $password_error = "password is incorrect!";
    }

    // If no errors, set a cookie and redirect to landing page
    if ($username_error === "" && $password_error === "") {
        setcookie("username", $username, time() + 3600, "/");
        header("Location: pages/landing.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--Tilwind-->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" flex items-center justify-center min-h-screen bg-[radial-gradient(circle_at_bottom,_#0f172a_70%,_#065f46_100%)] text-white">
    <!--Start form area-->
    <form method="POST" class="flex flex-col justify-center bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl 
         p-10 w-[420px] min-h-[520px]  sm:w-[350px] sm:min-h-[450px] 
             xs:w-[300px] xs:min-h-[400px] border border-white/30">
        <h2 class="text-2xl  text-center text-emerald-300 font-serif mb-6">Login </h2>

        <div class="mb-6">
            <input type="text" name="username" placeholder="username"
                class="w-full px-4 py-2 text-black border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-400 
         hover:border-emerald-400 hover:shadow-lg hover:shadow-emerald-500/30 transition duration-300 ">
            <?php if (!empty($username_error)): ?>
                <span class="error"><?php echo $username_error; ?></span>
            <?php endif; ?>
        </div>

        <div class="mb-6">
            <input type="password" name="password" placeholder="password"
                class="w-full px-4 py-2  text-black border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-400 
         hover:border-emerald-400 hover:shadow-lg hover:shadow-emerald-500/30 transition duration-300">
            <?php if (!empty($password_error)): ?>
                <span class="error text-red"><?php echo $password_error; ?></span>
            <?php endif; ?>
        </div>

        <button type="submit"
            class="w-full bg-emerald-400 font-serif text-lg  text-white py-2 rounded-lg">
            Submit
        </button>
    </form><!--End form area-->
</body>
</html>