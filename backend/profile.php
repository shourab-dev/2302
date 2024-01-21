<?php

include_once "./backendLayout/header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Profile Page</h1>


    <div class="wrapper mt-5">

        <div class="row">
            <div class="col-lg-7">
                <div class="card">
                    <div class="card-header">Profile info</div>
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-6">

                                <img src="https://api.dicebear.com/7.x/initials/svg?seed=<?= ucwords($_SESSION['auth']['fname']) ?? '' ?>" alt="">

                            </div>
                            <div class="col-lg-6">
                                <input placeholder="First name" type="text" class=" my-2 form-control">
                                <input placeholder="Last name" type="text" class=" my-2 form-control">
                                <input placeholder="Email" type="text" class=" my-2 form-control">
                                <button class="btn btn-primary">Submit</button>
                            </div>


                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">Password Update</div>
                    <div class="card-body">
                        <form action="">

                        <input placeholder="Old Password" type="text" class="form-control">
                        <input placeholder="New Password" type="text" class="form-control">
                        <input placeholder="Confirm Password" type="text" class="form-control">

                        <button class="btn btn-primary">Update Password</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>




</div>
<!-- /.container-fluid -->
<?php

include_once "./backendLayout/footer.php";

?>