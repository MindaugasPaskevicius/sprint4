<?php
session_start();
require 'src/views/includes/header.php';

if (isset($_SESSION['valid'])) {
    $page = $entityManager->find('Page', $_POST['id']);
    echo '<h2 class="mt-4 mb-3 text-center">Update Page</h2>
    <div class="container">
        <div class="col-4 offset-4">
            <form action="cont_manager" method="POST" novalidate class="validated-form">
            <input type="hidden" name="id" value="' . $_POST['id'] . '">
            <input type="hidden" name="update" value="y">
                <div class="mb-4">
                    <label class="form-label" for="page_name">Page Name</label>
                    <input class="form-control" type="text" name="page_name" required
                    value="' . $page->getTitle() . '"> </div><div class="mb-4">
                    <label class="form-label" for="content">Content</label>
                    <textarea class="form-control" name="content" 
                    required style="height: 150px">' . $page->getContent() . '</textarea>
                </div> <div class="mb-4">
                    <button class="btn btn-warning rounded-pill">Update Page</button>
                </div>
            </form>
            </div>
    </div>';
}

require 'includes/footer.php';