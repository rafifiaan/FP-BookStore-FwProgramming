<?php 
$session = \Config\Services::session();
?>

<header class="fixed top-0 inset-x-0">
    <nav class="min-h-[4.5rem] bg-white border-b shadow-sm flex items-center justify-between px-6 md:px-32">
        <a href="/" class="text-xl font-bold text-blue-500 hover:no-underline hover:text-blue-500">Jendela Dunia</a>
        <!-- <input id="search" type="text" placeholder="Cari buku atau penulis" class="min-w-[25rem] min-h-[2.25rem] md:min-h-[2.5rem] rounded-full bg-slate-100 px-4 border border-gray-300 focus:outline-none"> -->
        <?php if ($session->has('username')): ?>
            <div class="flex items-center gap-6">
                <a href="/transaction" class="text-slate-400 font-reguler hover:no-underline hover:text-blue-500">Riwayat Transaksi</a>
                <a href="/logout" class="text-red-500 font-reguler hover:no-underline hover:text-red-800">Keluar</a>
                <div class="flex items-center px-3 py-2 bg-blue-100/50 text-blue-500 rounded-full">
                    <svg width="24px" height="24px" class="fill-blue-500 mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path opacity="0" d="M0 0h24v24H0Z"/><path d="M12 11v0c2.2 0 4-1.8 4-4 0-2.21-1.8-4-4-4C9.79 3 8 4.79 8 7v0c0 2.2 1.79 4 4 4Z"/><path d="M18 21v0c.55 0 1-.45 1-1v0c0-3.87-3.14-7-7-7 -3.87 0-7 3.13-7 7v0c0 .55.44 1 1 1Z"/></g></svg> 
                    <h1 class="font-medium  "><?= $session->get('username') ?></h1>
                </div>
                
            </div>
        <?php else: ?>
            <ul class="flex items-center gap-6">
                <li>
                    <a href="/login" class="text-slate-400 font-medium hover:no-underline hover:text-blue-500">Masuk</a>
                </li>
                <li>
                    <a href="/register" class="btn btn-primary bg-blue-500 hover:bg-blue-600">Daftar</a>
                </li>
            </ul>
        <?php endif; ?>
    </nav>
</header>