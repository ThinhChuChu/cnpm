<?php require('nav.php')?>
<main class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Tour List</h1>
        <div class="grid grid-cols-5 gap-4">
            <!-- Tour Item 1 -->
            <?php foreach ($tours as $tour) : ?>
                <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <a href="tour?id=<?= $tour['id']?>" >
                    
                    <img src="img/<?= $tour['thumb']?>" class="rounded-2xl" alt="thumb-img">
                    
                    <h2 class="text-2xl font-bold mb-2"><?= $tour['name']?></h2>
                    <p class="text-gray-400">Price: <?= $tour['price']?></p>
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