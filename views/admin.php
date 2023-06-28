<?php
require '../src/subscription.php';

$subscriptions = allSubscriptions();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Auth</title>
    <link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>WebStudio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="../script.js"></script>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    background-image: url('../R.jpg');
    background-repeat: repeat;
    background-size: cover;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border: 2px solid #ff9800;
    border-radius: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: #fff;
    text-align: center;
    margin-top: 100px;
}

h1 {
    font-size: 36px;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px #000;
    color: #fff;
    background-color: #000;
}

.table {
    width: 100%;
    border: 2px solid #ff9800;
    background-color: #fff;
}

.table th,
.table td {
    padding: 8px;
    text-align: left;
    border: 1px solid #ff9800;
}

.table th {
    background-color: #ff9800;
    color: #fff;
}

.navbar {
    background-color: #ff9800;
    border-radius: 5px;
}

.navbar .navbar-brand {
    color: #fff;
}

.navbar .nav-link {
    color: #fff;
}

.btn {
    background-color: #ff9800;
    color: #fff;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #ff5722;
}

.fo {
    
    padding: 20px;
    color: #fff;
    text-align: center;
}

.bg-orange {
    background-color: #ff9800;
}

.text-white {
    color: #fff;
}

</style>

</head>
<body>
    <header>
       
<div class="mobile">
    <div>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
    </header>
    <main>



</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../main.js"></script>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<span class="navbar-brand rounded-pill bg-orange text-white">Admin</span>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav px-3 ml-auto">
            <li class="nav-item text-nowrap">
            <a class="nav-link rounded-pill bg-orange text-white" href="../index.html">Sign Out</a>

            </li>
        </ul>
    </div>
</nav>

<main role="main" class="container pt-3" class="pt-3">
    <h1>Subscribers</h1>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $index => $subscription): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $subscription['name'] ?></td>
                <td><?= $subscription['email'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<footer class="fo">
   
</footer>

</body>
</html>
