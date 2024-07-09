<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/dashboard.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="/bookings" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $booking['id'] ?>">
      <div class="mb-5">
        <label for="tour_id" class="mb-3 block text-base font-medium text-[#07074D]">
      tour_id
        </label>
        <input type="text" name="tour_id" id="tour_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $booking['tour_id']?>" />
        
      </div>
      <div class="mb-5">
        <label for="user_id" class="mb-3 block text-base font-medium text-[#07074D]">
      user_id
        </label>
        <input type="text" name="user_id" id="user_id" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $booking['user_id']?>" />
      </div>
      <div class="mb-5">
        <label for="price" class="mb-3 block text-base font-medium text-[#07074D]">
          Guests
        </label>
        <input type="number" name="num_of_people" id="num_of_people" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" value="<?= $booking['num_of_people']?>"/>
      </div>
      
      <div class="mb-5">
        <label class="mb-3 block text-base font-medium text-[#07074D]">Địa điểm</label>
        <select name="status"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  font-medium">
            <option value="pending">pending</option>
            <option value="done">done</option>
        </select>
      </div>
      
      <div>
        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
          Sửa
        </button>
        <a href="/bookings" class="hover:shadow-form rounded-md bg-white py-3 ml-4 px-8 text-base font-semibold text-[#6A64F1] outline-none">
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>
<?php require base_path('views/partials/footer.php') ?>