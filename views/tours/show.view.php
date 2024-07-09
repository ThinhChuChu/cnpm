<?php require base_path('views/home_page/nav.php')?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <img src="img/<?= $tour['thumb']?>" alt="thumb">
      </div>
      <div class="md:flex-1 px-4">
        <h2 class="mb-2 leading-tight tracking-tight font-bold text-white-800 text-2xl md:text-3xl"><?= $tour['name']?></h2>
        <p class="text-gray-500 text-md">Thời gian: <a href="#" class="text-green-500 hover:underline"><?= $tour['duration']?> ngày</a></p>
        <p class="text-gray-500 text-3xl">Địa điểm: <a href="#" class="text-green-500 hover:underline"><?= $tour['location']?></a></p>

        <div class="flex items-center space-x-4 my-4">
          <div>
            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
              <span class="text-green-700 mr-1 mt-1">$</span>
              <span class="font-bold text-green-700 text-3xl"><?= $tour['price']?></span>
            </div>
          </div>
        </div>

        <p class="text-gray-500"><?= $tour['description']?></p>

        <form action="/cart"  method="POST" class="flex py-4 space-x-4 items-center">
        <input type="hidden" name="tour_id" value="<?= $tour['id'] ?>">
        <!-- <div class="text-green-500">
        <label for="num_of_people" class="block my-1">Số người</label>
        <input type="number" name="num_of_people" id="num_of_people" class=" py-2 px-1">
        </div> -->
          <button type="submit" class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
            Add to Cart
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js'></script>