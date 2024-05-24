<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/style.css">
    <title>Register</title>
</head>
<body class="class="bg-cover bg-center bg-fixed bg" style="background-image: url('/aset/lumba.jpeg')">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 item-center justify-center text-3xl font-extrabold text-white">Creat Account!</h2>
                <div class="bg-white p-8 rounded shadow-md w-[400px] h-auto">
                    <div class="mb-4">
                        <label for="username" class=" block font-semibold text-blue-900">Nama </label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan username">
                    </div>
                    <div class="mb-4">
                        <label for="username" class=" block font-semibold text-blue-900">No Telephon </label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan username">
                    </div>
                    <div class="mb-4">
                        <label for="username" class=" block font-semibold text-blue-900">Alamat</label>
                        <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan username">
                    </div>
                    <div class="mb-4">
                        <label for="password" class=" block font-semibold text-blue-900">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Masukkan Password">
                    </div>
                    <div>
                        <label for="confirm-password" class=" block font-semibold text-blue-900">Confirm Password</label>
                        <input type="password" id="password" name="confirm-password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Confirmasi Password">
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="w-[100px] mt-2 ml-6 bg-purple-600 text-white py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-blue-600"><a href="/src/index.html">Batal</a></button>
                        <button type="submit" class="w-[100px] mt-2 mr-6 bg-purple-600 text-white py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-blue-600"><a href="/src/index.html">Daftar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>     