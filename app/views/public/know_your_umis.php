<?php
defined('BASEPATH') or exit('No direct script access allowed');
init_public_head();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "college_db";

// $servername = "localhost";
// $username = "admin_sripushpamc";
// $password = "7d#yfS47";
// $dbname = "admin_sripushpamc";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$roll_no = "";
$student = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roll_no = $_POST['roll_no'];
    
    $sql = "SELECT * FROM students WHERE roll_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $roll_no);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $student = $result->fetch_assoc();
    } else {
        $student = "not_found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student UMIS Information</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container text-center">
    <div class="header">
        <img src="college_logo.png" alt="College Logo">
        <h1>AVVM Sri Pushpam College (Autonomous)</h1>
        <p>College Road, Poondi-613503, Thanjavur Dt.</p>
        <p>Enter Roll Number</p>
    </div>

    <form method="post" class="mt-3">
        <!-- <label for="roll_no" class="form-label">Enter Roll Number:</label> -->
        <input type="text" id="roll_no" name="roll_no" class="form-control mx-auto" required style="max-width: 300px;">
        <button type="submit" class="btn btn-success mt-2">Search</button>
    </form>

    <?php if ($student): ?>
        <div class="result mt-4">
            <?php if ($student === "not_found"): ?>
                <p class="alert alert-danger">Student not found. Please check the Roll Number.</p>
            <?php else: ?>
                <h2 class="mb-3">Student Details</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr><th>EMIS ID</th><td><?php echo htmlspecialchars($student['emis_id']); ?></td></tr>
                        <tr><th>Name</th><td><?php echo htmlspecialchars($student['name']); ?></td></tr>
                        <tr><th>Registration Number</th><td><?php echo htmlspecialchars($student['reg_number']); ?></td></tr>
                        <tr><th>Mobile Number</th><td><?php echo htmlspecialchars($student['mobile_number']); ?></td></tr>
                        <tr><th>Status</th><td><?php echo htmlspecialchars($student['status']); ?></td></tr>
                        <tr><th>Course Type</th><td><?php echo htmlspecialchars($student['course_type']); ?></td></tr>
                        <tr><th>Reference UMIS ID</th><td><?php echo htmlspecialchars($student['reference_umis_id']); ?></td></tr>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 600px;
    margin: 30px auto;
    padding: 20px;
    background: white;
    box-shadow: 0px 0px 10px #ccc;
    border-radius: 8px;
}

.header img {
    width: 80px;
    height: auto;
}

.header h1 {
    font-size: 22px;
    margin: 10px 0;
    color: #333;
}

.header p {
    font-size: 14px;
    color: #555;
}

form {
    margin-top: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input {
    padding: 10px;
    width: 100%;
    max-width: 300px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 15px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

.result {
    margin-top: 20px;
    padding: 15px;
    background: #f8f9fa;
    border: 1px solid #ccc;
    border-radius: 8px;
}

table {
    width: 100%;
    margin-top: 10px;
    border-collapse: collapse;
    font-size: 14px;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
}

th {
    background-color: #007bff;
    color: white;
}

/* Responsive Design */
@media screen and (max-width: 600px) {
    .container {
        width: 95%;
        padding: 15px;
    }

    .header h1 {
        font-size: 18px;
    }

    .header p {
        font-size: 12px;
    }

    table {
        font-size: 12px;
    }

    input {
        width: 100%;
    }

    button {
        width: 100%;
    }
}
</style>