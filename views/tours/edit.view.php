<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="" method="POST">
      <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
        Tên tour
        </label>
        <input type="text" name="name" id="name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>
      <div class="mb-5">
        <label for="madt" class="mb-3 block text-base font-medium text-[#07074D]">
            Giá
        </label>
        <input type="text" name="madt" id="madt" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>
      <div class="mb-5">
        <label for="gv1" class="mb-3 block text-base font-medium text-[#07074D]">
          Thời gian (ngày)
        </label>
        <input type="text" name="gv1" id="gv1" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
      </div>
      <div class="mb-5">
        <label for="gv2" class="mb-3 block text-base font-medium text-[#07074D]">
          Khởi hành 
        </label>
        <input type="date" name="gv2" id="gv2" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
      </div>
      <div class="mb-5">
        <label
          for="moiphe"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Mô tả
        </label>
        <textarea
          rows="4"
          name="loiphe"
          id="loiphe"
          placeholder="Type your message"
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          
        ></textarea>
      </div>
      <div class="mb-5">
        <label for="location" class="mb-3 block text-base font-medium text-[#07074D]">Địa điểm</label>
        <select id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  font-medium">
        <option selected>Chọn địa điểm</option>
        <?php foreach ($locations as $location) : ?>
                <option value="<?= $location['id']?>"><?= $location['name']?></option>
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
            <input type="checkbox" name="categories" value="<?= $category['id']?>" >  <?= $category['name']?></input>
            </div>
        <?php endforeach; ?> 
        </div>
      </div>
      
      <div >
        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
          Thêm
        </button>

        <a href="/tours">
        <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
          Cancel
        </button>
        </a>
      </div>
    </form>
  </div>

</div>
<?php require base_path('views/partials/footer.php') ?>