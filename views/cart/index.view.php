<?php require(base_path('views/home_page/nav.php')) ?>
<script>
  function calcTocal(el) {
    let total = document.getElementById(`total_${el.id}`);
    price = el.getAttribute("data-price");
    totalprice = parseFloat(el.value) * parseFloat(price);
    total.innerText = totalprice;
  }
</script>
<main class="container mx-auto p-4">

  <?php foreach ($bookings as $booking) : ?>
    <div class="bg-gray-800 p-4 rounded-lg shadow-md flex h-48 h-max mt-6">
      <img src="img/<?= $booking['thumb'] ?>" class="h-[150px] mr-3 w-60" alt="">
      <div class="text-gray-400">
        <p class=""><?= $booking['name'] ?></p>
        <p class="">price: <?= $booking['price'] ?>$</p>
        <p class="">Thời gian: <?= $booking['duration'] ?> ngày</p>
        <p class="">Ngày bắt đầu: <?= $booking['start_date'] ?></p>
        <form action="/bookings" method="POST">
          <div class="text-gray-400 ml-32">
            <label>Số người:</label>
            <input type="number" id="<?= $booking['id'] ?>" oninput="calcTocal(this)" min=1 data-price="<?= $booking['price'] ?>" name="num_of_people"> </input>
            <p class="text-2xl text-green-400">Tổng cộng: <span id="total_<?= $booking['id'] ?>"></span>$ </p>
          </div>
          <div class="flex space-x-3">

            <input type="hidden" name="tour_id" value="<?= $booking['id'] ?>">
            <button type="submit" class="bg-green-300 hover:bg-green-500 text-white font-bold py-2 px-4 rounded mt-4">Book</button>
        </form>
            <form method="POST" action="/cart">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="cancel_id" value="<?= $booking['id'] ?>">
              <button class="bg-red-300 hover:bg-red-500 text-white font-bold py-2 px-4 rounded mt-4">cancel</button>
          </form>
      </div>

      </div>
    </div>

  <?php endforeach; ?>
</main>

</body>

</html>