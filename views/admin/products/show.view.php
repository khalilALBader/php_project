<?php require_once "views\layout\admin\sidebar.php"; ?>




        <div class="container mt-4">
        <h1 class="text-center">Prepaid Plans & Lines</h1>
        <p class="text-center">Get exceptional Orange Jordan sim cards and prepaid lines with great offers.</p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <img class="img-fluid" src="/public/<?=htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" height="40">
                    <h5 class="card-title"><?= $product['product_name'] ?></h5>
                    <p class="card-text">JOD <?= $product['price'] ?> With Tax</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    
</body>

</html>
<script src="<?= asset('/dist/script.js') ?>"></script>