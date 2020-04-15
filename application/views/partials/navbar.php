<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" name="dept" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Department
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" name="createDept" href="?create-department=true">Create Department</a>
                    <a class="dropdown-item" name="viewDept" href="?view-departments=true">View Departments</a>
                    
                </div>
            </li>

        </ul>

    </div>
</nav>

<?php
if (isset($_GET['create-department'])) {
    redirect('portal/create-department');
}
if (isset($_GET['view-departments'])) {

   redirect('portal/view-department');
}





