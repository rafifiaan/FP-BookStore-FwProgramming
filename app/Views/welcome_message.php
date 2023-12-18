<?php

$imageUrl = base_url('images/hujan_cover.jpeg');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jendela Dunia</title>
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
    <main class="min-h-screen py-32 flex items-start gap-12 w-10/12 mx-auto">
        <section class="grow">
            <section class="mt-6 flex flex-wrap justify-between gap-4">
                <?php foreach ($books as $book) : ?>
                <div class="max-w-[14rem] space-y-2">
                    <a href="/book/<?= $book['id'] ?>" class="inline-block">
                        <img src="<?= $book['cover'] ?>" alt="" class="w-full rounded-lg">
                    </a>
                    <div class="flex items-end justify-between">
                        <div class="w-full">  
                            <p class="line-clamp-2 font-medium text-xs text-blue-500 bg-blue-100/50 py-1 px-2 w-fit rounded-lg mb-2 mt-1"><?= $book['genre'] ?></p>
                            <p class="font-medium text-lg truncate"><?= $book['title'] ?></p>
                            <p class="text-slate-500 text-sm truncate"><?= $book['author'] ?></p>

                        </div>
                        
                        
                    </div>
                    
                    <p class="font-semibold text-lg text-orange-500 shrink-0">Rp <?= number_format($book['price']) ?></p>
                </div>
                <?php endforeach ?>
            </section>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>