

<div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="../<?= $_SESSION['logo'] ?>" alt="" height="40px" width="100px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../auction-start.php">Auction Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="buyplayer.php">Buy Players</a>
                </li>
                
            </ul>
        </div>
        <form class="d-flex" role="search">
            <a href="action.php?logout=1" class="btn btn-outline-dark" type="submit">Logout</a>
        </form>
    </div>
</div> 