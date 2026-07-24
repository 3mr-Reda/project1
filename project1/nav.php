<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-info" style="height: 20vh">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold" href="home.php">Home</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item fs-3 fw-bold">
                        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                    </li>
                    <li class="nav-item fs-3 fw-bold">
                        <a class="nav-link" href="contact.php">Contact US</a>
                    </li>
                    <li class="nav-item fs-3 fw-bold">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-success fs-3 fw-bold" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>