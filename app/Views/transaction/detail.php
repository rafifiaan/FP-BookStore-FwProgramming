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
  <title>Detail Transaction Page</title>
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
  <main class="min-h-screen w-10/12 mx-auto py-32">
    <h1 class="text-2xl font-semibold">Detail Transaksi</h1>
    <section class="mt-6 flex flex-col lg:flex-row gap-12">
      <div>
        <div class="rounded-lg w-fit">
          <img src="<?= $book['cover'] ?>" alt="" class="rounded-lg" width="280px">
        </div>
      </div>
      <div class="space-y-7 lg:w-1/2">
        <div>
          <p class="text-slate-400"><?= $book['author'] ?></p>
          <p class="text-3xl font-medium pb-2"><?= $book['title'] ?></p>
          <p class="text-blue-500 font-medium text-base"><?= $book['genre'] ?></p>
        </div>
        <div class="">
          <div class="flex items-center gap-10">
            <!-- <p class="font-medium pb-2.5 border-b border-slate-500 text-sky-600 border-b border-sky-500">Pilih Format Buku</p> -->
            <!-- <p class="font-medium pb-2.5 text-slate-300">Deskripsi Buku</p> -->
            <!-- <p class="font-medium pb-2.5 text-slate-300">Detail Buku</p> -->
          </div>
          <div class="h-px w-full bg-slate-200"></div>
        </div>
        <div class="space-y-1.5">
          <p class="font-medium text-[17px]">Deskripsi Buku</p>
          <p class="text-[15px] text-slate-500 leading-loose"><?= $book['description'] ?></p>
        </div>
      </div>
      <div class="bg-white rounded-xl border p-4 grow h-fit space-y-2.5 min-w-[15rem]">
        
        <div class="flex items-center justify-between pb-2">
          <div class="flex items-center gap-3">
          <p class="font-medium text-sky-500 bg-sky-100/50 py-1 px-3 rounded-full"><?= $transaction['payment_method'] ?></p>
          <p class="font-medium text-violet-500 bg-violet-100/50 py-1 px-3 rounded-full"><?= $transaction['count'] ?> Buku</p>
          </div>
        </div>

        <div> 
          <p class="text-sm text-slate-400">Alamat Tujuan:</p>
          <p class="font-medium"><?= $transaction['address'] ?></p>
        </div>
        
        <div class="h-px w-full bg-slate-200"></div>
        <div class="flex items-center justify-between text-sm">
          <input type="hidden">
          <p class="text-slate-400">Total Pemabayaran</p>
          <p id='subtotal-price' class="font-semibold text-lg text-orange-500">Rp <?= number_format($transaction['total_price']) ?></p>
        </div>
       
      </div>
      
    </section>

    
    
  </main>
</body>

</html>