<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentHub - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh; }
        .hero { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 100px 0; }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="hero text-center">
        <div class="container">
            <h1 class="display-3 fw-bold">Welcome to StudentHub</h1>
            <p class="lead fs-3">Efficient & Beautiful Student Management System</p>
            <a href="add_student.php" class="btn btn-light btn-lg me-3">Add New Student</a>
            <a href="view_student.php" class="btn btn-outline-light btn-lg">View All Students</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
