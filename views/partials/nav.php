
   <!-- component -->
   <aside class="flex flex-col w-64 h-screen grow px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700 ">
    <a href="#">
        <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt="">
    </a>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav class="-mx-3 space-y-6 ">
            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">MAIN</label>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/">
                    <span class="mx-2 text-sm font-medium">Home</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/about">
                    <span class="mx-2 text-sm font-medium">About</span>
                </a>
            </div>

            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">content</label>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/tours">
                    <span class="mx-2 text-sm font-medium">Tours</span>
                </a>
                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/notes">
                    <span class="mx-2 text-sm font-medium">Notes</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/contact">
                    <span class="mx-2 text-sm font-medium">Contact</span>
                </a>
                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/locations">
                    <span class="mx-2 text-sm font-medium">Locations</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/categories">
                    <span class="mx-2 text-sm font-medium">Categories</span>
                </a>
            </div>

            <div class="space-y-3 ">
                <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">AUTH: <?= $_SESSION['user']['email'] ?? 'Guest' ?></label>
                <?php if ($_SESSION['user'] ?? false) : ?>
                    <div class="ml-3 ">
                            <form method="POST" action="/session">
                                <input type="hidden" name="_method" value="DELETE"/>

                                <button class="text-gray-900 rounded-md bg-blue-300 p-1 font-medium">Log Out</button>
                            </form>
                    </div>
                <?php else : ?>    
                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/register">

                    <span class="mx-2 text-sm font-medium">Register</span>
                </a>

                <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="/login">

                    <span class="mx-2 text-sm font-medium">Login</span>
                </a>
                <?php endif ;?>
            </div>
        </nav>
    </div>
</aside>

    