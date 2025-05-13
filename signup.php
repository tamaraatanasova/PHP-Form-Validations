<?php

require_once __DIR__.'/validate.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>
<body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
        <div class="row justify-content-center">
                <div class="card shadow-lg">
                    <div class="card-body">
                    <?php if ($successMessage): ?>
                        <div class="alert alert-success text-center" role="alert">
                            Signup successful!
                        </div>
                         <?php endif; ?>
                    
                        <h2 class="card-title text-center mb-4">Sign-Up Form</h2>
                        <form method="POST" action="" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['name'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" id="surname" name="surname" class="form-control <?= $errors['surname'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['surname'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['surname'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['email'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" id="username" name="username" class="form-control <?= $errors['username'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['username'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="form-control <?= $errors['phone'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['phone'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" id="dob" name="dob" class="form-control <?= $errors['dob'] ? 'is-invalid' : '' ?>" value="<?= htmlspecialchars($_POST['dob'] ?? '') ?>">
                                <div class="invalid-feedback"><?= $errors['dob'] ?></div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                                <div class="invalid-feedback"><?= $errors['password'] ?></div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100" >Sign Up</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
