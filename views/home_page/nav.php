<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
<nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-xl font-bold">Tour Management</div>
            <ul class="flex w-1/3 justify-between space-x-3">
                <li><a href="/" class="hover:text-gray-400">Home</a></li>
                <li><a href="/tours_list" class="hover:text-gray-400">Tourlist</a></li>
                <?php  if (isset($_SESSION['admin']) and $_SESSION['admin']===true ) : ?>
                   <li><a href="/admin" class="hover:text-gray-400">ADMIN</a></li>
                <?php endif;?>
            </ul>
			<ul class="flex justify-between space-x-4">
            <?php if ($_SESSION['user'] ?? false) : ?>
                <li><a href="/profile?email=<?= $_SESSION['user']['email']?>" class="px-5 py-2 bg-blue-400 rounded-lg text-black">Profile</a></li>
                <form method="POST" action="/session">
                    <input type="hidden" name="_method" value="DELETE"/>
                    <li><button class="hover:text-gray-400">Log out</button></li>
                </form>
            <?php else : ?> 
				<li><a href="/register" class="bg-gray-400 ">Sign up</a></li>
				<li><a href="/login" class="hover:text-gray-400">Log in</a></li>
            <?php endif ;?>
			</ul>
        </div>
</nav>