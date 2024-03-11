<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: radial-gradient(#F1FADA, #0d6efd);
        }

        img {
            border: none;
            border-radius: 0 0 5px 0;
        }
    </style>
</head>

<body>
    <section class="login d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card mb-3" style="max-width: 600px;">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="card-title mb-0">MANAGEMENT TKN PEMBINA III</h5>
            </div>
            <div class="row g-0">
                <div class="col-sm-7">
                    <div class="card-body shadow rounded-start bg-light p-4 img-thumbnail">
                        <h5 class="card-title text-center mb-3">Login</h5>
                        <form id="loginform" action="login.php" method="post" autocomplete="off">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-circle"></i></span>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" aria-label="Password" aria-describedby="basic-addon2">
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-5">
                    <img src="img/Tknpembina-login.png" class="img-fluid h-100 shadow " alt="..." style="object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>