<?php require base_path('views/home_page/nav.php') ?>

<div class="flex items-center justify-center p-12 w-1/2 mx-auto " >

  <div class="mx-auto w-full max-w-[550px]">
    <form action="/users" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
      <div class="mb-5">
        <label for="full_name" class="mb-3 block text-base font-medium text-[#29ab6e]">
        Tên user
        </label>
        <input type="text" name="full_name" id="full_name" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#29ab6e] focus:shadow-lg" value="<?= $user['full_name']?>" />
        <?php if (isset($errors['name'])) : ?>
          <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
        <?php endif; ?>
      </div>
      <div class="mb-5">
        <label for="email" class="mb-3 block text-base font-medium text-[#29ab6e]">
            Email
        </label>
        <input type="email" name="email" id="email" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#29ab6e] focus:shadow-md" value="<?= $user['email']?>"/>
      </div>
      <div class="mb-5" >
        <label for="password" class="mb-3 block text-base font-medium text-[#29ab6e]">
          Password
        </label>
        <input type="text" name="password" id="password" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#29ab6e] focus:shadow-md" value="<?= $user['password']?>"/>
      </div>
      <div class="mb-5">
        <label for="phone_number" class="mb-3 block text-base font-medium text-[#29ab6e]">
        Phone_number 
        </label>
        <input type="text" name="phone_number" id="phone_number" class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#29ab6e] focus:shadow-md" value="<?= $user['phone_number']?>"/>
      </div>
      <div class="mb-5">
        <label
          for="address"
          class="mb-3 block text-base font-medium text-[#29ab6e]"
        >
          Address 
        </label>
        <textarea
          rows="4"
          name="address"
          id="address"
          
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#29ab6e] focus:shadow-md"
        ><?= $user['address']?></textarea>
      </div>
      
      <div>
        <button type="submit" class="hover:shadow-form rounded-md bg-[#4ef5a7] py-3 px-8 text-base font-semibold text-white outline-none">
          Sửa
        </button>
        <a href="/profile?email=<?= $_SESSION['user']['email']?>" class="hover:shadow-form rounded-md bg-white py-3 ml-4 px-8 text-base font-semibold text-[#29ab6e] outline-none">
          Cancel
        </a>
      </div>
    </form>
  </div>
</div>
<?php require base_path('views/home_page/footer.php') ?>