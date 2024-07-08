<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/dashboard.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="/tours" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $tour['id'] ?>">
      <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
        Tên tour
        </label>
        <input type="text" name="name" id="name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $tour['name']?>" />
        <?php if (isset($errors['name'])) : ?>
          <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
        <?php endif; ?>
      </div>
      <div class="mb-5">
        <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
            Giá
        </label>
        <input type="number" name="price" id="price" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $tour['price']?>"/>
      </div>
      <div class="mb-5" >
        <label for="duration" class="mb-3 block text-base font-medium text-[#07074D]">
          Thời gian (ngày)
        </label>
        <input type="text" name="duration" id="duration" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $tour['duration']?>"/>
      </div>
      <div class="mb-5">
        <label for="start_date" class="mb-3 block text-base font-medium text-[#07074D]">
          Khởi hành 
        </label>
        <input type="date" name="start_date" id="start_date" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $tour['start_date']?>"/>
      </div>
      <div class="mb-5">
        <label
          for="description"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Mô tả
        </label>
        <textarea
          rows="4"
          name="description"
          id="description"
          
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        ><?= $tour['description']?></textarea>
      </div>
      <div class="mb-5">
        <label class="mb-3 block text-base font-medium text-[#07074D]">Địa điểm</label>
        <select name="location_id"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  font-medium">
        <?php foreach ($locations as $location) : ?>
                <option 
                  value="<?= $location['id']?>"
                  <?= ($location['id'] === $tour_location) ? 'selected' : '' ?>><?= $location['name']?></option>
        <?php endforeach; ?>  
          </select>
      </div>
      <div class="mb-5 ">
        <label class="mb-3 block text-base font-medium text-[#07074D]">
          Đặc điểm
        </label>
        <div class="flex flex-wrap items-center justify-between ">
        <?php foreach ($categories as $category) : ?>
            <div class="pb-2">
            <input 
            type="checkbox" 
            name="categories[]" 
            value="<?= $category['id']?>"
            <?php foreach ($tour_categories as $tg ){
                if ($category['id'] === $tg['category_id']) {echo 'checked'; break;}
            }
            ?>
            ><?= $category['name']?></input>
            </div>
        <?php endforeach; ?> 
        </div>
      </div>
      
      <div>
        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
          Sửa
        </button>
        <a href="/tours" class="hover:shadow-form rounded-md bg-white py-3 ml-4 px-8 text-base font-semibold text-[#6A64F1] outline-none">
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>
<?php require base_path('views/partials/footer.php') ?>