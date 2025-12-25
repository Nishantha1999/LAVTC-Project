<?php
session_start();

// Require admin: adjust role_id check as needed (e.g., 2 = admin)
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Enforce admin role (role_id == 2)
if (!isset($_SESSION['role_id']) || intval($_SESSION['role_id']) !== 2) {
    header('Location: login.php');
    exit;
}

// Fetch some basic stats
$conn = mysqli_connect("localhost", "root", "", "slcamping_project");
$userCount = '-';
$orderCount = '-';
$recentUsers = [];
if ($conn) {
    $r = mysqli_query($conn, "SELECT COUNT(*) AS c FROM register");
    if ($r) { $row = mysqli_fetch_assoc($r); $userCount = $row['c']; }

    $r = mysqli_query($conn, "SELECT COUNT(*) AS c FROM pro_order");
    if ($r) { $row = mysqli_fetch_assoc($r); $orderCount = $row['c']; }

    $r = mysqli_query($conn, "SELECT user_id, username, email, role_id FROM register ORDER BY user_id DESC LIMIT 5");
    if ($r) {
        while ($row = mysqli_fetch_assoc($r)) {
            $recentUsers[] = $row;
        }
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="./img/logo.png" type="icon/x-image">
    <title>Admin Dashboard</title>
</head>
<body>


<?php include 'Admin_header.php'; ?>

            <div class="row mb-4">
                <div class="col-sm-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Users</h5>
                            <p class="card-text display-6"><?php echo htmlspecialchars($userCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            <p class="card-text display-6"><?php echo htmlspecialchars($orderCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-secondary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Quick Actions</h5>
                            <p class="card-text"><a href="Admin_appoiment.php" class="btn btn-light btn-sm">Manage Items</a> </p>
                        </div>
                    </div>
                </div>
            </div>

            <h4>Recent users</h4>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($recentUsers) === 0): ?>
                            <tr><td colspan="4">No users found</td></tr>
                        <?php else: foreach ($recentUsers as $u): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($u['user_id']); ?></td>
                                <td><?php echo htmlspecialchars($u['username']); ?></td>
                                <td><?php echo htmlspecialchars($u['email']); ?></td>
                                <td><?php echo htmlspecialchars($u['role_id']); ?></td>
                            </tr>
                        <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
