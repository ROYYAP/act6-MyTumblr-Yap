<?php
session_start();
if (isset($_SESSION['ses_username']) === false){
    header("Location: index.php?loginfirst");

}elseif (isset($_REQUEST['logout']) === true){
    session_destroy();
    header("Location:index.php?logout");
}
?>



<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Portfolio Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/background.gif');
    background-size: cover;
    background-repeat: no-repeat
}

body {
    background: #edf5e1;
    background: linear-gradient(to right, #379683, #5cdb95 ,#8ee4af, #add8e6, #d6e6f1, #add8e6, #8ee4af, #5cdb95, #379683);
    min-height: 100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-5 px-4">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-3"><img src="images/profile.jpg" alt="..." width="150" class="rounded mb-2 img-thumbnail">
                    <a href="?logout" class="btn btn-outline-dark btn-sm btn-block">Sign Out</a>


                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-0 mb-0"> <?php echo $_SESSION['ses_fullname']; ?> </h4>
                        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i> <?php echo $_SESSION['ses_address']; ?>
                         </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">864</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">1M</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">340</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>

            <div class="px-4 py-3">
                <h5 class="mb-0">Expertise </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Sketching</p>
                    <p class="font-italic mb-0">Filming</p>
                    <p class="font-italic mb-0">Designing</p>
                    <p class="font-italic mb-0">Coding</p>

                </div>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Captures</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    
                    <div class="col-lg-6 pr-lg-2 mb-2"><img src="images/pic1.jpg" alt="" class="img-fluid rounded shadow-sm"></div>              
                    <div class="col-lg-6 mb-2 pl-lg-2"><img src="images/pic3.jpg" alt="" class="img-fluid rounded shadow-sm"></div>                
                    <div class="col-lg-6 pr-lg-2 mb-2"><img src="images/pic2.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-2 pr-lg-2"><img src="images/pic4.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-2 mb-1"><img src="images/pic5.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 mb-1 pr-lg-2"><img src="images/pic6.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div> 
            </div>

            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>
                </div>
            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>