<?php require('nav.php')?>
<main class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Tour List</h1>
    <div class="flex w-max mx-10 mb-3 rounded bg-gray-100 items-center px-2" >

      <form class="flex" action="/tours_list" method="GET">
        <input name="search_bar" class=" border-none bg-transparent w-[300px] px-4 py-1 text-black outline-none focus:outline-none " type="search" name="search" placeholder="Search..." />
        <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
        </form>
        <span class="text-white-500 bg-blue-600 p-2 rounded-md " ><a href="/tours_list">reset</a></span>
        
    </div>
        <div class="grid grid-cols-5 gap-4">
            <!-- Tour Item 1 -->
            <?php foreach ($tours as $tour) : ?>
                <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <a href="/tour?id=<?= $tour['id']?>" >
                    
                    <img src="img/<?= $tour['thumb']?>" class="rounded-2xl w-full h-[200px]" alt="thumb-img">
                    
                    <h2 class="text-2xl font-bold mb-2"><?= $tour['name']?></h2>
                    <p class="text-gray-400">Price: <?= $tour['price']?></p>
                    <p class="text-gray-400">Location: <?= $tour['location']?></p>
                    <p class="text-gray-400">Duration: <?= $tour['duration']?></p>
                    <p class="text-gray-400">Start: <?= $tour['start_date']?></p>

                
                    <div class="mt-2"> 
                        <?php $categories = $db->query("select name from categories where id in (select category_id from tour_categories where tour_id = {$tour['id']}) ")->get() ?> 
                            <?php foreach ($categories as $category) : ?>
                            <span class="inline-block bg-blue-500 text-white px-2 py-1 rounded"><?= $category['name']?></span>
                            <?php endforeach; ?> 
                        
                    </div>
                </a>
            </div>
            <?php endforeach; ?> 
            <!-- Thêm các Tour Item khác tại đây -->
        </div>
    </main>