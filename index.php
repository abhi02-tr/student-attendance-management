<?php
include('./header.php');
include('./head.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="./faculty/faculty_home.php">Faculty</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">HOD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Principle</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Admin</a>
            </li>
        </ul>
    </div>
</nav>



<?php
include('./footer.php');
?>