<?php require "views/partials/head.php"?>
  <?php require "views/partials/nav.php"?>
  <?php require "views/partials/banner.php"?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
      <a href="/notes" class="text-blue-500 hover:underline ">
          go back...
      </a>
    </p>  
    
    <p><?= htmlspecialchars($note['body']) ?></p>

    <form class="mt-2" method="POST">
      <input type="hidden" name="id" value="<?= $note['id']?>">
      <button class="text-red-500 text-sm"> delete</button>
    </form>
    </div>
  </main>

  <?php require "views/partials/footer.php"?>