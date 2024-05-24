<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <form id="login-form" class="bg-white p-8 rounded shadow-md w-1/3">
            <h2 class="text-2xl font-bold mb-6">Login</h2>
            <div class="mb-4">
                <label class="block mb-1" for="email">Email:</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="password">Password:</label>
                <input type="password" id="password" name="password" class="w-full p-2 border rounded" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Login</button>
                <a href="register.php" class="text-blue-500">Register</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#login-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/login',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    localStorage.setItem('token', response.token);
                    window.location.href = 'userlist.php';
                },
                error: function(error) {
                    alert('Login failed!');
                }
            });
        });
    </script>
</body>
</html>
