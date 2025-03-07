<?php require_once "views\layout\admin\sidebar.php"; ?>


    <div class="container mt-4">
      <h1 class="text-center">Edit Orders </h1>
      <div class="row">
        <form action="/orders/<?= $order['id'] ?>/edit" method="POST">
          <!-- Use a hidden input to tell your system to treat it as PUT -->
          <input type="hidden" name="_method" value="PUT" />
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Order Status<br><br></label>
            <label>
              <input name="status" type="text" class="form-control" aria-describedby="username" value="<?= $order['status'] ?>">
            </label>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script src="<?= asset('/dist/script.js') ?>"></script>