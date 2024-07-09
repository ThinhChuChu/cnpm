<?php require('home_page/nav.php')?>

	<main class="container mx-auto p-4">
  <div class="bg-gray-800 p-4 rounded-lg shadow-md flex h-48 h-max">
    <img src="img/dnq.png" class="h-[150px] mr-3 w-60" alt="">
    <div class="text-gray-400">
      <p class="">Ha long</p>
      <p class="">price: $1000</p>
      <p class="">Thời gian: 5 ngày</p>
      <p class="">Ngày bắt đầu: 01/08/2024</p>
      <div class="flex space-x-3">
        <form action="/bookings">
          <button type="submit" class="bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-4 rounded mt-4">Book</button>
        </form>
        <form action="/cart">
          <button class="bg-red-300 hover:bg-red-500 text-white font-bold py-2 px-4 rounded mt-4">cancel</button>
        </form>
      </div>

    </div>
    <div class="text-gray-400 ml-32">
      <p>Đơn giá: 1000$ </p>
      <p>Số người: 3 </p>
      <p>Tổng cộng: 3000$ </p>
    </div>
  </div>
    </main>
	
</body>
</html>