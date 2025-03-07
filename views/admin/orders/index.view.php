<?php require_once "views\layout\admin\sidebar.php"; ?>

        <div class="main-content">
            <h1>All Orders</h1>

            <!-- Example: Display users in a table -->
            <?php if (!empty($orders)): ?>
                <table border="1" cellpadding="8" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>user_id </th>
                        <th>order_date</th>
                        <th>total</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?= htmlspecialchars($order['id']) ?></td>
                            <td><?= htmlspecialchars($order['user_id']) ?></td>
                            <td><?= htmlspecialchars($order['order_date']) ?></td>
                            <td><?= htmlspecialchars($order['total']) ?></td>
                            <td><?= htmlspecialchars($order['status']) ?></td>
                            <td>
                                <!-- Show link (GET) -->
                                <!-- Edit link (GET) -->
                                <button><a href="/orders/<?= $order['id'] ?>/edit">Edit</a></button>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/orders/<?= $order['id'] ?>" method="POST" style="display:inline;">
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
                <p>No orders found.</p>
            <?php endif; ?>

            <!-- Link to Create a new user -->

        </div> <!-- Close main-content div -->
    </div> <!-- Close app-container div -->
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>