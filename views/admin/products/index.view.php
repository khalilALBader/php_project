<!-- views/users/index.view.php -->
<?php require_once "views\layout\admin\sidebar.php"; ?>

        <div class="main-content">
            <h1>All Products</h1>

            <!-- Example: Display users in a table -->
            <?php if (!empty($products)): ?>
                <table border="1" cellpadding="8" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>category_id</th>
                        <th>product_name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>image_url</th>
                        <th>created_at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['id']) ?></td>
                            <td><?= htmlspecialchars($product['category_id']) ?></td>
                            <td><?= htmlspecialchars($product['product_name']) ?></td>
                            <td><?= htmlspecialchars($product['description']) ?></td>
                            <td><?= htmlspecialchars($product['price']) ?></td>
                            <td><img class="custom-class" src="/public/<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>" height="40"></td>
                            <td><?= htmlspecialchars($product['created_at']) ?></td>
                            <td>
                                <!-- Show link (GET) -->
                                <button><a href="/products/<?= $product['id'] ?>">Show</a></button>
                                <!-- Edit link (GET) -->
                                <button><a href="/products/<?= $product['id'] ?>/edit">Edit</a></button>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/products/<?= $product['id'] ?>" method="POST" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" onclick="return confirm('Are you sure?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No products found.</p>
            <?php endif; ?>

            <!-- Link to Create a new user -->
            <p>
                <a href="/products/create">Create New Products</a>
            </p>
        </div> <!-- Close main-content div -->
    </div> <!-- Close app-container div -->
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>