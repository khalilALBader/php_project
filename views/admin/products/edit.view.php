<?php require_once "views\layout\admin\sidebar.php"; ?>


    <div class="container mt-4">
      <h1 class="text-center">Edit Products </h1>
      <div class="row">
        <form action="/products/<?= $product['id'] ?>/edit" method="POST">
          <!-- Use a hidden input to tell your system to treat it as PUT -->
          <input type="hidden" name="_method" value="PUT" />
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">category_id<br><br></label>
            <label>
              <input name="category_id" type="number" class="form-control" aria-describedby="username" value="<?= $product['category_id'] ?>">
            </label>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name<br><br></label>
            <label>
              <input name="product_name" type="text" class="form-control" aria-describedby="username" value="<?= $product['product_name'] ?>">
            </label>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description<br><br></label>
            <label>
              <textarea name="description" class="form-control" aria-describedby="username"><?= $product['description'] ?></textarea>
            </label>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price<br><br></label>
            <label>
              <input name="price" type="number" class="form-control" aria-describedby="username" value="<?= $product['price'] ?>">
            </label>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Image<br><br></label>
            <label>
              <input name="image_url" type="text" class="form-control" aria-describedby="username" value="/public/images/<?= $product['image_url'] ?>">
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