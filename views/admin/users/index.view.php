<?php require_once "views\layout\admin\sidebar.php"; ?>


        <div class="main-content">
            <h1>All Users</h1>

            <!-- Example: Display users in a table -->
            <?php if (!empty($users)): ?>
                <table border="1" cellpadding="8" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['username']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <!-- Edit link (GET) -->
                                <a href="/users/<?= $user['id'] ?>/edit">Edit</a>

                                <!-- Delete form (simulating DELETE via _method) -->
                                <form action="/users/<?= $user['id'] ?>" method="POST" style="display:inline;">
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
                <p>No users found.</p>
            <?php endif; ?>

            <!-- Link to Create a new user -->
            <p>
                <a href="/users/create">Create New User</a>
            </p>
        </div> <!-- Close main-content div -->
    </div> <!-- Close app-container div -->
</body>
</html>
<script src="<?= asset('/dist/script.js') ?>"></script>