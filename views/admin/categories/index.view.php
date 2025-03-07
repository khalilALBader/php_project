<?php require_once "views\layout\admin\sidebar.php"; ?>

        <div class="main-content">
            <h1>All categories</h1>

            <!-- Example: Display users in a table -->
            <?php if (!empty($categories)): ?>
                <table border="1" cellpadding="8" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>category_name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category): ?>
                        <tr>
                            <td><?= htmlspecialchars($category['id']) ?></td>
                            <td><?= htmlspecialchars($category['category_name']) ?></td>
                            <td>
                                <!-- Show link (GET) -->
                                <button><a href="/categories/<?= $category['id'] ?>">Show</a></button>
                                <!-- Edit link (GET) -->
                                <button><a href="/categories/<?= $category['id'] ?>/edit">Edit</a></button>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/categories/<?= $category['id'] ?>" method="POST" style="display:inline;">
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
                <p>No categories found.</p>
            <?php endif; ?>

            <!-- Link to Create a new user -->
            <p>
                <a href="/categories/create">Create New categories</a>
            </p>
        </div> <!-- Close main-content div -->
    </div> <!-- Close app-container div -->
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>