<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation Page</title>
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
    <form action="<?= route_to('transaction.payment') ?>" method="post">
        <main class="min-h-screen py-32 w-5/12 mx-auto">
            <h1 class="text-2xl font-semibold">Checkout</h1>
            
            <div class="flex gap-6 mt-6">
                <div class="bg-white !border-gray-100 rounded-md w-1/2 space-y-4">
                    <p class="font-semibold">Alamat Pengiriman</p>
                    <input value="<?= $address?>" id="address" name="address" type="text" placeholder="Masukkan alamat" class="w-full min-h-[2.25rem] md:min-h-[2.5rem] rounded-lg px-3.5 border border-gray-300 focus:outline-none">
                </div>
                <div class="bg-white !border-gray-100 rounded-md w-1/2 space-y-4">
                    <p class="font-semibold">Metode Pembayaran</p>
                    <select name="payment_method" id="payment_method" class="w-full min-h-[2.25rem] md:min-h-[2.5rem] rounded-lg px-3.5 border border-gray-300 focus:outline-none"> 
                        <option value="BCA">BCA</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="Shopee">Shopee</option>
                        <option value="Gopay">Gopay</option>
                        <option value="OVO">OVO</option>
                    </select>
                </div>
            </div>
            <!-- <section class="flex gap-6 mt-6"> -->
                <div class="bg-white !border-gray-100 rounded-md space-y-4 mt-8">
                <div class="h-px w-full bg-slate-200"></div>
                    <p class="font-semibold">Detail Pesanan</p>
                    <!-- <p class="text-[15px]">PT. BukuPedia Store</p> -->
                    <div class="flex items-center gap-2.5">
                        <img src="<?= $book['cover']?>" alt="" width="100px" class="rounded-lg">
                        <table class="text-[15px] space-y-1 border-separate border-spacing-x-4">
                            <tbody class="">
                                <tr><td class="font-reguler text-md text-slate-500"><?= $book['author']?></td></tr>
                                <tr><td class="text-xl font-semibold"><?= $book['title']?></td></tr>
                                <tr> <td class="font-medium text-blue-500 text-sm pb-4"><?= $book['publisher']?></td></tr>
                                <tr><td class="text-base text-slate-400"> <?= $transaction['count']?> x <span class="text-slate-700 font-medium">Rp <?= number_format($book['price']) ?></span></td></tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="h-px w-full bg-slate-200"></div> -->
                    <!-- <div class="flex items-center justify-between">
                        <p class="text-sm text-slate-500">Subtotal belum termasuk pajak</p>
                        <p class="text-sm font-medium">Rp <?= $transaction['total_price']?></p>
                    </div> -->
                </div>
                <div class="w-full !border-gray-100 rounded-md space-y-6 mt-8">
                <!-- <div class="h-px w-full bg-slate-200"></div> -->
                    <div class="space-y-2 bg-slate-100/60 p-3 rounded-lg">
                        <p class="font-semibold">Detail Pembayaran</p>
                        <table class="text-[15px] space-y-1 w-full border-separate border-spacing-y-1">
                            <tbody class="">
                                <tr><td class="">Subtotal harga :</td> <td class="text-end">Rp<?= number_format($transaction['total_price'])?></td></tr>
                                <tr><td class="">Pajak (10%) :</td> <td class="text-end">Rp<?= number_format( $transaction['total_price'] * 0.1)?></td></tr>
                                <tr><td class="text-slate-400">Biaya pengiriman :</td> <td class="text-slate-400 text-end">Rp<?= 0?></td></tr>
                               
                            </tbody>
                        </table>
                        <div class="h-px w-full bg-slate-200"></div>
                        <div class="flex items-center justify-between">
                            <p class="text-sm text-slate-500">Total harga</p>
                            <p class="text-lg font-semibold text-orange-500">Rp<?= number_format( $transaction['total_price'] + ($transaction['total_price'] * 0.1))?></p>
                        </div>
                    </div>

                    <div class="bg-blue-100/50 rounded-lg px-4 py-3.5 text-[15px] mt-2.5">
                        <p class="text-blue-500">Mohon cek kembali detail transaksi yang akan anda lakukan, pastikan semua detail sudah sesuai dengan apa yang anda pilih sebelumnya!</p>
                    </div>
                    <button type="submit" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white w-full min-h-[2.25rem] md:min-h-[2.5rem] flex items-center justify-center text-sm">Beli Sekarang</button>
                </div>
            <!-- </section> -->
        </main>
        <input type="hidden" id="book_id" name="book_id" value=<?= $transaction['book_id'] ?>>
        <input type="hidden" id="user_id" name="user_id" value=<?= $transaction['user_id'] ?>>
        <input type="hidden" id="count" name="count" value=<?= $transaction['count'] ?>>
        <input type="hidden" step=".01" id="total_price" name="total_price" value=<?= $transaction['total_price'] + ($transaction['total_price'] * 0.1) ?>>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>