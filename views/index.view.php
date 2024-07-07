<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>
<!-- <p>Hello, <?= $_SESSION['user']['email'] ?? 'Guest' ?>. Welcome to the home page.</p> -->
<div class="m-auto w-max h-max p-3 shadow-slate-900 bg-white-500 border-4 border-gray-300 rounded-lg">
    <h1 class="font-medium text-2xl py-4 h-1/2">Find tour</h1>
    <form>
        <div class="flex items-center space-x-16 font-medium h-1/2">
            <div class="flex flex-col w-1/5">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="rounded-md w-52">
            </div>
            <div class="flex flex-col w-1/5">
                <label for="location">Check-in</label>
                <input type="date" name="location" id="check-in-date" class="rounded-md w-52">
            </div>
            <div class="flex flex-col w-1/5">
                <label for="location">Guest</label>
                <input type="number" name="guest" id="guest" class="rounded-md w-52">
            </div>
            <div class="flex flex-col">
                <button type="submit" class="bg-green-300 rounded-md px-5 w-52 h-12">Find</button>
            </div>
        </div>
    </form>
</div>
<br>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
  <div class="cursor-pointer rounded-xl bg-white p-3 shadow-lg hover:shadow-xl">
	<div class="relative flex items-end overflow-hidden rounded-xl">
	  <img src="https://thumbnails.production.thenounproject.com/gA9eZOvsBYSHrMumgrslmRGoBto=/fit-in/1000x1000/photos.production.thenounproject.com/photos/BCBA88B6-5B41-4B50-A786-E60CAA0ECDA3.jpg" alt="wallpaper" />

	  <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
		  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
		</svg>

		<span class="ml-1 text-sm text-slate-400">4.9</span>
	  </div>
	</div>

	<div class="mt-1 p-2">
	  <h2 class="text-slate-700">The Malta Hotel</h2>
	  <p class="mt-1 text-sm text-slate-400">Italy, Europe</p>

	  <div class="mt-3 flex items-end justify-between">
		<p>
		  <span class="text-lg font-bold text-orange-500">$1,421</span>
		  <span class="text-sm text-slate-400">/night</span>
		</p>

		<div class="group inline-flex rounded-xl bg-orange-100 p-2 hover:bg-orange-200">
		  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 group-hover:text-orange-500" viewBox="0 0 20 20" fill="currentColor">
			<path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
		  </svg>
		</div>
	  </div>
	</div>
  </div>

  <div class="cursor-pointer rounded-xl bg-white p-3 shadow-lg hover:shadow-xl">
	<div class="relative flex items-end overflow-hidden rounded-xl">
	  <img src="https://thumbnails.production.thenounproject.com/gA9eZOvsBYSHrMumgrslmRGoBto=/fit-in/1000x1000/photos.production.thenounproject.com/photos/BCBA88B6-5B41-4B50-A786-E60CAA0ECDA3.jpg" alt="wallpaper" />

	  <div class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
		<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
		  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
		</svg>

		<span class="ml-1 text-sm text-slate-400">4.9</span>
	  </div>
	</div>

	<div class="mt-1 p-2">
	  <h2 class="text-slate-700">The Malta Hotel</h2>
	  <p class="mt-1 text-sm text-slate-400">Italy, Europe</p>

	  <div class="mt-3 flex items-end justify-between">
		<p>
		  <span class="text-lg font-bold text-orange-500">$1,421</span>
		  <span class="text-sm text-slate-400">/night</span>
		</p>

		<div class="group inline-flex rounded-xl bg-orange-100 p-2 hover:bg-orange-200">
		  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 group-hover:text-orange-500" viewBox="0 0 20 20" fill="currentColor">
			<path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
		  </svg>
		</div>
	  </div>
	</div>
  </div>

  <div class="cursor-pointer rounded-xl bg-white p-3 shadow-lg hover:shadow-xl">
	<div class="relative flex items-end overflow-hidden rounded-xl">
	  <img src="https://thumbnails.production.thenounproject.com/gA9eZOvsBYSHrMumgrslmRGoBto=/fit-in/1000x1000/photos.production.thenounproject.com/photos/BCBA88B6-5B41-4B50-A786-E60CAA0ECDA3.jpg" alt="wallpaper" />
	</div>

	<div class="mt-1 p-2">
	  <h2 class="text-slate-700">The Malta Hotel</h2>
	  <p class="mt-1 text-sm text-slate-400">Italy, Europe</p>

	  <div class="mt-3 flex items-end justify-between">
		<p>
		  <span class="text-lg font-bold text-orange-500">$1,421</span>
		  <span class="text-sm text-slate-400">/night</span>
		</p>

		<div class="group inline-flex rounded-xl bg-orange-100 p-2 hover:bg-orange-200">
		  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-orange-400 group-hover:text-orange-500" viewBox="0 0 20 20" fill="currentColor">
			<path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
		  </svg>
		</div>
	  </div>

      <p class="mt-1 py-2 text-slate-400">20/10/2024 - 2 days</p>
      <div class="flex space-x-2 font-medium text-sm p-1">
        <span class="bg-gray-100 p-1 rounded-md">Tam bien</span>
        <span class="bg-gray-100 p-1 rounded-md">Cheo thuyen</span>
        <span class="bg-gray-100 p-1 rounded-md">Buffet</span>
      </div>
	</div>
  </div>
</div>


<?php require('partials/footer.php') ?>