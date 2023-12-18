<?php
$session = \Config\Services::session();

if (!$session->has('username') || !$session->has('role') || !$session->has('id')) {
  header('Location: ' . route_to('home.login'));
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction History Page</title>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
      * {
      font-family: 'Poppins', sans-serif;
      }
  </style>
</head>

<body>
  <?php echo view('layouts/navbar')?>
  <main class="min-h-screen py-32 w-5/12 mx-auto space-y-6">
    <h1 class="text-2xl font-semibold">Riwayat Transaksi</h1>
    <section class="space-y-7">
      <?php foreach ($transactions as $transaction) : ?>
        <div class="bg-white border-2 border-slate-100 rounded-xl px-3 py-3 space-y-2.5">
          <div class="flex items-center justify-between">
            <p class="font-reguler text-sm text-slate-400"><?= $transaction['transaction_id'] ?></p>
            <p class="text-sm text-slate-400"><?= $transaction['created_at'] ?></p>
          </div>
          <div class="h-px w-full bg-slate-200 mb-3"></div>
          <div class="flex items-end justify-between">
            <div class="flex items-center gap-6">
              <div class=" w-fit"><img src="<?= $transaction['cover']?>" alt="" width="110px" class="rounded-md"></div>
              <div class="text-sm">
                <p class="text-md text-slate-500">  <?= $transaction['author']?></p>
                <p class="text-xl font-medium"> <?= $transaction['title']?></p>
                <p class="text-xs text-slate-400"><?= $transaction['count']?> Jumlah</p>
                <p class="mt-3 text-slate-500">Total Harga</p>
                <p class="font-semibold text-lg text-orange-500"> Rp <?= number_format( $transaction['total_price'])?></p>
              </div>
            </div>
            <a href="/transaction/<?= $transaction['transaction_id'] ?>" class="rounded-lg bg-blue-500 hover:bg-blue-600 hover:no-underline text-white border-[1.5px] border-blue-500 w-fit px-4 min-h-[2.25rem] md:min-h-[2.5rem] flex items-center justify-center text-sm font-medium">Lihat Detail</a>
          </div>
        </div>
      <?php endforeach ?>
    </section>
  </main>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>