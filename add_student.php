<?php
include 'config.php';
$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name        = trim($_POST['name']);
    $student_id  = trim($_POST['student_id']);
    $phone       = trim($_POST['phone']);
    $email       = trim($_POST['email']);
    $course_name = trim($_POST['course_name']);

    if (empty($name) || empty($student_id) || empty($phone) || empty($email) || empty($course_name)) {
        $error = "সব ফিল্ড পূরণ করুন!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "সঠিক ইমেইল দিন!";
    } else {
        $stmt = $conn->prepare("INSERT INTO students (name, student_id, phone, email, course_name) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $student_id, $phone, $email, $course_name);
        
        if ($stmt->execute()) {
            $success = "✅ Student Added Successfully!";
        } else {
            $error = "Error! Student ID already exists.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .card { border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header text-white text-center py-4" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                        <h3><i class="bi bi-person-plus-fill"></i> Add New Student</h3>
                    </div>
                    <div class="card-body p-5">
                        <?php if($success): ?><div class="alert alert-success"><?= $success ?></div><?php endif; ?>
                        <?php if($error): ?><div class="alert alert-danger"><?= $error ?></div><?php endif; ?>

                        <form method="POST">
                            <div class="row g-4">
                                <div class="col-md-6"><input type="text" name="name" class="form-control form-control-lg" placeholder="Full Name" required></div>
                                <div class="col-md-6"><input type="text" name="student_id" class="form-control form-control-lg" placeholder="Student ID" required></div>
                                <div class="col-md-6"><input type="text" name="phone" class="form-control form-control-lg" placeholder="Phone Number" required></div>
                                <div class="col-md-6"><input type="email" name="email" class="form-control form-control-lg" placeholder="Email Address" required></div>
                                <div class="col-12"><input type="text" name="course_name" class="form-control form-control-lg" placeholder="Course Name" required></div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Save Student</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
