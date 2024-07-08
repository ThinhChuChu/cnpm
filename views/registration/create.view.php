<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <main>
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                         alt="Your Company">
                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Register for a new
                        account</h2>
                </div>
    
                <form class="my-8 space-y-6" action="/register" method="POST">
                    <div class="space-y-6 rounded-md shadow-sm">
                        <div>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="relative block w-full appearance-none rounded-md  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Email address">
                        </div>
                        <div>
                            <label for="email">Password</label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                   class="relative block w-full appearance-none rounded-md  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="Password">
                        </div>
                        <div>
                        <label for="email">Full name</label>
                            <input id="full_name" name="full_name" type="text" autocomplete="current-password" required
                                   class="relative block w-full appearance-none rounded-md  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="full name">
                        </div>
                        <div>
                            <label for="email">Phone number</label>
                            <input id="phone_number" name="phone_number" type="text" autocomplete="current-password" required
                                   class="relative block w-full appearance-none rounded-md  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="sdt">
                        </div>
                        <div>
                            <label   label for="address">Address</label>
                            <input id="address" name="address" type="text" autocomplete="current-password" required
                                   class="relative block w-full appearance-none rounded-md  border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                   placeholder="address">
                        </div>
                    </div>
    
                    <div>
                        <button type="submit"
                                class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                            Register
                        </button>
                    </div>
    
                    <ul>
                        <?php if (isset($errors['email'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></li>
                        <?php endif; ?>
    
                        <?php if (isset($errors['password'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></li>
                        <?php endif; ?>
                        <?php if (isset($errors['existed'])) : ?>
                            <li class="text-red-500 text-xs mt-2"><?= $errors['existed'] ?></li>
                        <?php endif; ?>
                    </ul>
                </form>
                <a href="/login">Log in</a>
            </div>
        </div>
    </main>

</body>
</html>

