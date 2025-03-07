<?php require_once "views\layout\admin\sidebar.php"; ?>


        <div class="container mt-4">
            <h1 class="text-center">Prepaid Plans & Lines</h1>
            <p class="text-center">Get exceptional Orange Jordan sim cards and prepaid lines with great offers.</p>

            <div class="row">
                <form action="/products/create" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">category_id</label>
                        <label>
                            <input name="category_id" type="text" class="form-control" aria-describedby="username">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">product_name</label>
                        <label>
                            <input name="product_name" type="text" class="form-control" aria-describedby="username">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <label>
                            <textarea name="description" class="form-control" aria-describedby="username"></textarea>
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">price</label>
                        <label>
                            <input name="price" type="number" class="form-control" aria-describedby="username">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">image_url</label>
                        <label>
                            <input name="image_url" type="text" class="form-control" aria-describedby="username">
                        </label>
                    </div>


                    <button type="submit" class="btn orange-btn mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
<script src="<?= asset('/dist/script.js') ?>"></script>