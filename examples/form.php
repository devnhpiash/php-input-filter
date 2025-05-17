<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Filter Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Input Filter Demo Form</h4>
                </div>

                <div class="card-body">
                    <form action="validate-form.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Your full name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" id="age" class="form-control" min="1" max="120" placeholder="Your age" required>
                        </div>

                        <div class="mb-3">
                            <label for="website" class="form-label">Website (optional)</label>
                            <input type="url" name="website" id="website" class="form-control" placeholder="https://example.com">
                        </div>

                        <button type="submit" class="btn btn-success w-100">Submit</button>
                    </form>
                </div>

                <div class="card-footer text-muted text-center">
                    &copy; <?= date("Y") ?> Input Filter Library
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
