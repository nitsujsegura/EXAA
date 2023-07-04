<style>
a.dropdown-toggle {
   border: none;
   outline: none;
   text-decoration: none;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="dash.php?q=1">
      <img src="../pics.png" width="150">
          
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"
          id="navLinks">
        <li class="nav-item">
          <a class="nav-link" 
             aria-current="page" 
             href="dash.php?q=0"><h5>Dashboard</h5></a>
            </li>

        <li class="nav-item">
          <a class="nav-link" href="dash.php?q=1"><h5>User</h5></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="dash.php?q=2"><h5>Ranking</h5></a>
        </li>

        <li class="nav-item dropdown " >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <h5> Quiz</h5>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="dash.php?q=4">Add Quiz</a></li>
            <li><a class="dropdown-item" href="dash.php?q=5">Remove Quiz</a></li>
          </ul>

          <li class="nav-item dropdown " >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <h5> Exam</h5>

          </a>
          <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="dash.php?q=6">Add Exam</a></li>
            <li><a class="dropdown-item" href="dash.php?q=7">Remove Exam</a></li>
          </ul>
          </li>
        </li>
      </ul>
      <ul class="navbar-nav me-right mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><h5>Logout</h5></a>
        </li>
      </ul>
  </div>
    </div>
</nav>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>