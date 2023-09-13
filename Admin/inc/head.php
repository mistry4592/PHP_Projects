<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sakshi Visitor Mangement</title>
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" /> -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.1/css/buttons.bootstrap.min.css" type="text/css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="Admin-login.php">Chirag Mistry</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="nav justify-content-end">
                    <!-- <ul class="navbar-nav  justify-content-end"> -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Admin-login.php">Home</a>
                    </li>
                    <a class="nav-link active" aria-current="page" href="add_user.php">Add/Show users</a>
                    <a class="nav-link" href="roles.php">Add/Show Role</a>
                    <a class="nav-link" href="visitor.php">Show Visitors</a>
                    <a class="nav-link" href="tiket.php">Show Ticket</a>
                    <a class="nav-link" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm" href="#">Profile</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </ul>
            </div>
        </div>
    </nav>