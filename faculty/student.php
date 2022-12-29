<?php 
include('../header.php');
include('../head.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="../index.php">Faculty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./faculty_home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./student.php">Student</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-2">
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Branch</th>
                        <th>Subject</th>
                        <th>Semester</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abhi</td>
                        <td>I.T.</td>
                        <td>Advanced Java</td>
                        <td>6</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md"></div>
    </div>
</div>

<?php 
include('../footer.php');
?>