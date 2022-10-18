<?php
session_start();
require 'includes/header.php';
?>

<div class="container mt-5 mb-5 text-center">

  <?php
  if (isset($_GET['content'])) {

    $page = $entityManager->find('Page', $_GET['content']);

    if ($page) {
      echo '<h1 class="mb-5">' . $page->getTitle() . '</h1>';
      echo '<div class="container"><p class="lead">' . $page->getContent() . '</p></div>';
    }
  } else {
    $home =$entityManager->getRepository('Page')->findOneBy(['title' => 'Home']);
    echo '<h1 class="mb-5">' . $home->getTitle() . '</h1>';
    echo '<div class="container"><p class="lead">' . $home->getContent() . '</p></div>';
  }
  ?>
</div>

<?php require 'includes/footer.php'; ?>