<?php require_once "views\layout\admin\sidebar.php"; ?>


    <div class="container mt-4">
      <h1 class="text-center">Edit categories </h1>
      <div class="row">
        <form action="/categories/<?= $category['id'] ?>/edit" method="POST">
          <!-- Use a hidden input to tell your system to treat it as PUT -->
          <input type="hidden" name="_method" value="PUT" />
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category_id<br><br></label>
            <label>
              <input name="id" type="number" class="form-control" aria-describedby="username" value="<?= $category['id'] ?>">
            </label>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category_name <br><br></label>
            <label>
              <input name="category_name" type="text" class="form-control" aria-describedby="username" value="<?= $category['category_name'] ?>">
            </label>
          </div>
          <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script src="<?= asset('/dist/script.js') ?>"></script>