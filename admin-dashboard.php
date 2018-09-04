<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 9/5/2018
 * Time: 1:11 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | Admin</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--End Bootstrap CSS-->

    <!-- UIKit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
    <!--End UIKit CSS-->

    <!--Custom CSS-->
    <link href="css/ux-styles.css" rel="stylesheet">
    <!--Custom CSS-->

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--End Google Fonts-->


</head>
<body>

<!--Header-->
<div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed" style="position: fixed; top: 0; width: 1349px;background-color: #1e87f0">
    <div class="uk-container uk-container-expand">
        <nav class="uk-navbar"><div class="uk-navbar-left">
                <a id="nav-logo-name" href="#" class="uk-navbar-item uk-logo" style="color: azure;">
                    <img src="images/icon.png" class="uk-margin-small-right" width="50" height="50">
                    Rent 18
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav uk-visible@m">
                    <li>
                        <div class="uk-width-auto">
                            <div class="uk-inline">
                                <!--<button class="uk-button uk-button-default" style="border: 0" type="button" uk-toggle="target: #offcanvas-flip">-->
                                <a href="" class="uk-icon-menu" uk-icon="menu" uk-toggle="target: #offcanvas-flip"></a>
                                <!--</button>-->

                                <img class="uk-border-circle" width="40" height="40" src="images/avatar.jpg">

                                <div uk-drop>
                                    <div class="uk-card uk-card-body uk-card-default">
                                        <h4>John Doe</h4>
                                        Account details<br>
                                        <button class="uk-button uk-button-danger">Sign Out</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--End Header-->

<!--Side Menu-->
<div class="uk-offcanvas-content">

    <div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar"  style="background-color: #1e87f0">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>Menu</h3>

            <div class="container">
                <button class="uk-button uk-button-primary btn-side-nav">DASHBOARD</button><br>
                <div class=""></div>
                <button class="uk-button uk-button-primary btn-side-nav">COMPANIES</button><br>
                <a href="add-vehicle.php"><button class="uk-button uk-button-primary btn-side-nav">VEHICLES</button></a><br>
                <button class="uk-button uk-button-primary btn-side-nav">DRIVERS</button><br>
                <button class="uk-button uk-button-primary btn-side-nav">PARENTS</button><br>
                <button class="uk-button uk-button-primary btn-side-nav">STUDENTS</button><br>
                <button class="uk-button uk-button-primary btn-side-nav">PAYMENTS</button><br>
            </div>

        </div>
    </div>

</div>
<!--End Side Menu-->

<!--Body section-->



<!--JS Controllers-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- UIKit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit-icons.min.js"></script>
<!--End UIKit JS-->

<!--Bootstrap JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--End Bootstrap JS-->

<script async src="js/validationController.js"></script>
<!--End JS Controllers-->
</body>
</html>
