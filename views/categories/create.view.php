<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/dashboard.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="flex items-center justify-center p-12">

  <div class="mx-auto w-full max-w-[550px]">
    <form action="/categories" method="POST">
      <div class="mb-5">
        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
          Tên thể loại
        </label>
        <input type="text" name="name" id="name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        <?php if (isset($errors['name'])) : ?>
        <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
        <?php endif; ?>
      </div>
      <div>
        <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
          Thêm
        </button>
      </div>
    </form>
  </div>
</div>
<?php require base_path('views/partials/footer.php') ?>