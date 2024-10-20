<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/dashboard.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<!-- component -->
<div class="flex w-max mx-10 mb-3 rounded bg-gray-100 items-center px-2" >

      <form class="flex" action="/tours" method="GET">
        <input name="search_bar" class=" border-none bg-transparent w-[300px] px-4 py-1 text-black outline-none focus:outline-none " type="search" name="search" placeholder="Search..." />
        <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
            <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
        </form>
        <span class="text-white-500 bg-blue-600 p-2 rounded-md " ><a href="/tours">reset</a></span>
        
    </div>
<table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
  <thead class="bg-gray-50">  
    <tr>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Thumb</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Tên</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Giá</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Thời gian</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Khởi hành</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Mô tả</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-100 border-t border-gray-100">
  <?php foreach ($tours as $tour) : ?>
    <tr class="hover:bg-gray-50">
      <td class="  px-6 py-4 font-normal text-gray-900">
          <div class="font-medium text-gray-700"><?= $tour['id'] ?? '1' ?></div>
      </td>
      <td class="px-6 py-4">
          <img src="img/<?= $tour['thumb']?>" class="rounded-2xl w-[100px] h-[70px]" alt="thumb-img">
      </td>
      <td class="px-6 py-4">
        <div class="font-medium text-gray-700"><?= $tour['name'] ?? '1'?><div>
      </td>
      <td class="  px-6 py-4 font-normal text-gray-900">
          <div class="font-medium text-gray-700"><?= $tour['price'].'$' ?? '1' ?></div>
      </td>
      <td class="px-6 py-4">
        <div class="font-medium text-gray-700"><?= $tour['duration'].' ngày' ?? '1'?><div>
      </td>
      <td class=" px-6 py-4 font-normal text-gray-900">
          <div class="font-medium text-gray-700"><?= $tour['start_date'] ?? '1' ?></div>
      </td>
      <td class=" px-6 py-4 font-normal text-gray-900">
          <div class="font-medium text-gray-700"><?= $tour['description'] ?? '1' ?></div>
      </td>
      <td class="px-6 py-4">
        <div class="flex justify-around gap-4">
        <form class="block" method="POST" action="/tours">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $tour['id'] ?>">
                    <button type="submit" class="text-red-500 mr-auto" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
            </button>
          </form>
          <a x-data="{ tooltip: 'Edite' }" href="tours/edit?id=<?= $tour['id']?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg>
          </a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
    <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
          <div class="font-medium text-gray-700"><a href="/tours/create" class="text-blue-500 hover:underline">Thêm</a></div>
      </td>
    </tr>
  </tbody>
</table>
     
<?php require base_path('views/partials/footer.php') ?>