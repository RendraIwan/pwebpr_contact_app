<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/style.css">
    <title>Login</title>
</head>
<body class="class="bg-cover bg-center bg-fixed bg" style="background-image: url('/aset/lumba.jpeg')">  
    <div class=" flex flex-col items-center justify-center h-screen">
        <h1 class=" font-extrabold text-white flex items-start ">CONS-LOG</h1>
        <div class="bg-white p-8 rounded shadow-xl w-96 ">
            <h2 class="text-2xl font-bold mb-10 ">Login</h2>
            <form>
                <div class="mb-4">
                    <label for="username" class=" block font-semibold text-pink-800">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your username">
                </div>
                <div class="mb-4">
                    <label for="password" class="block font-semibold text-pink-800">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Enter your password">
                </div>
                <div class=" flex justify-center">
                    <button type="submit" class="w-1/2 bg-purple-600 text-white py-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-blue-600"><a href="/src/beranda.html">Login</a></button></a>
                </div>
            </form> 
            <p class=" text-center text-gray-600 ">Belum Punya Akun? <a href="/src/regis.html" class="text-blue-500 hover: underline">Daftar Sekarang </a></p>
        </div>
    </div>
</body>
</html>