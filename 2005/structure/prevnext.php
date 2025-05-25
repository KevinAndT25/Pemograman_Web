<?php
  $currentFile = basename($_SERVER['PHP_SELF']);

  if (preg_match('/pertemuan-(\d+)\.php/', $currentFile, $matches)) {
      $currentNumber = (int)$matches[1];
      
      $prevNumber = $currentNumber - 1;
      $nextNumber = $currentNumber + 1;

      $prevFile = "pertemuan-$prevNumber.php";
      $nextFile = "pertemuan-$nextNumber.php";

      $prevPage = file_exists($prevFile) ? $prevFile : "../study_pweb.php";
      $nextPage = file_exists($nextFile) ? $nextFile : "../study_pweb.php";
  } else {
      $prevPage = "../study_pweb.php";
      $nextPage = "../study_pweb.php";
  }
?>

<div class="d-flex justify-content-between align-items-center px-4 py-3">
    <a href="<?= $prevPage ?>" class="btn btn-outline-dark">
        <i class="fas fa-arrow-left"></i></a>
    <a href="<?= $nextPage ?>" class="btn btn-outline-dark">
        <i class="fas fa-arrow-right"></i></a>
</div>