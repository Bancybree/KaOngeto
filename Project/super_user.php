<?php
session_start();
include "includes/constant.php";
if (!(isset($_SESSION["control"]["UserType"]) && $_SESSION["control"]["UserType"] == SUPER_USER)) {
    header("Location: ../Project/");
    exit();
}
require_once "includes/session_control.php";
require_once "includes/db_connect.php";

include "templates/header.php";
include "templates/sunav.php";
?>


        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Super User Control Panel</h1>
            </div>
        </div>
        <div class="container">


            <div class="row">

                <div class="col-md-3">
                    <a href="manage_su_profile.php" class="btn btn-sq-lg btn-primary">
                        <i class="fa fa-user fa-5x"></i><br/>
                        Manage My Profile
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="manage_users.php" class="btn btn-sq-lg btn-warning">
                        <i class="fa fa-user fa-5x"></i><br/>
                        Manage All Users
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="view_articles.php" class="btn btn-sq-lg btn-success">
                        <i class="fa fa-user fa-5x"></i><br/>
                        View Articles
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="data_process/signout.php" class="btn btn-sq-lg btn-danger">
                        <i class="fa fa-sign-out fa-5x"></i><br/>
                        Logout
                    </a>
                </div>

            </div>
            <hr>
        </div>
<?php
include "templates/footer.php";
?>