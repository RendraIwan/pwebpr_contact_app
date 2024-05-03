<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class=" text-black">Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/src/style.css">
</head>
<body class=" bg-blue-300">
   
    <div class=" bg-gray-800 w-[90px] right-0 fixed top-10 flex flex-col items-start justify-items-end rounded-s-xl bottom-64">
        <ul>
            <li class="mb-4">
                <button class="text-white hover:bg-violet-700 px-4 py-2 font-semibold">Akun</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-violet-700 px-4 py-2 font-semibold">Contact</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-violet-700 px-4 py-2 font-semibold">About</button>
            </li>
            <li class="mb-4">
                <button class="text-white hover:bg-violet-700 px-4 py-2 font-semibold"> <a href="/src/index.php">Logout</a></button>
            </li>
        </ul>
    </div>
    
    <div class=" ml-[100px] mt-6 p-3">
        <h1 class=" font-extrabold mb-3 text-blue-200 text-xl items-center">Dashboard</h1>

        <div>
            <table class=" w-auto table-auto">
                <thead class=" bg-gray-200">
                    <tr>
                        <th class="border px-4 py-2">Username</th>
                        <th class="border px-4 py-2">No HP</th>
                        <th class="border px-4 py-2">Owner</th>
                        <th class="border px-4 py-2">alamat</th>
                        <th class="border px-4 py-2">Action
                        <button class="bg-yellow-500 hover:bg-black text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button class="bg-red-500 hover:bg-black text-white font-bold py-2 px-4 rounded">Delete</button>
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <button class=" bg-green-500 text-white hover:bg-violet-700 px-4 py-2 m-2 rounded-md ml-[900px] font-semibold"><a href="Create.php">add user</a></button>
    </div>
</body>
</html>