<?php require_once "views\layout\admin\sidebar.php"; ?>


        <div class="container mt-4">

            <div class="row">
                <form action="/categories/create" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">category_id</label>
                        <label>
                            <input name="id" type="text" class="form-control" aria-describedby="username">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">category_name</label>
                        <label>
                            <input name="category_name" type="text" class="form-control" aria-describedby="username">
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