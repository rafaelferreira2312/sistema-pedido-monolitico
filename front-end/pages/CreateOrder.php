<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <title>Create Order</title>
</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
        <form id="create-order-form" class="bg-white p-8 rounded shadow-md w-1/3">
            <h2 class="text-2xl font-bold mb-6">Create Order</h2>
            <div class="mb-4">
                <label class="block mb-1" for="description">Description:</label>
                <input type="text" id="description" name="description" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="price">Price:</label>
                <input type="text" id="price" name="price" class="w-full p-2 border rounded" required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create</button>
                <a href="orderlist.php" class="text-blue-500">View Orders</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#create-order-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '/orders',
                type: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                data: $(this).serialize(),
                success: function(response) {
                    window.location.href = 'orderlist.php';
                },
                error: function(error) {
                    alert('Failed to create order!');
                }
            });
        });
    </script>
</body>
</html>
