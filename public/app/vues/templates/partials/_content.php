<?php
  /*
    _content.php
  */
?>

<div class="container">
  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">
      <?php echo $content1; ?>
    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
      <?php include '../app/vues/templates/partials/_sidebar.php'; ?>
    </div>

  </div>
  <!-- /.row -->
  <button id="plusArticles" type="button" class="btn btn-info waves-effect waves-light" name="readMore">Plus d'articles</button>
  <hr>
</div>
<!-- /.container -->
