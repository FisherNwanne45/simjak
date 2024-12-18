<?php
include('adminsession.php');
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Loan</title>
        <link rel="icon" href="../assets/img/logo/favicon.png" type="image/x-icon" />
        <link type="text/css" href="edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="edmin/css/theme.css" rel="stylesheet">
        <link type="text/css" href="edmin/images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome :
                        <i><?php echo $login_session; ?> </a>

                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                    </a></li>
                                <li><a href="identity.php"><i class="menu-icon icon-bullhorn"></i>Create New Tracking
                                    </a>
                                </li>
                                <li><a href="edit-settings.php?id=36"><i class="menu-icon icon-cog"></i>Site Setting
                                    </a>
                                </li>
                                <li><a href="change_password.php"><i class="menu-icon icon-inbox"></i>Change Password
                                    </a></li>
                                <li><a href="logout.php"><i class="menu-icon icon-tasks"></i>Logout </a></li>
                            </ul>
                            <!--/.widget-nav-->



                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">

                            <?php
include_once 'config.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set coldate='" . $_POST['coldate'] . "', amt='" . $_POST['amt'] . "', type='" . $_POST['type'] . "', dur='" . $_POST['dur'] . "', rate='" . $_POST['rate'] . "', phone='" . $_POST['phone'] . "', name='" . $_POST['name'] . "', rank='" . $_POST['rank'] . "', cid='" . $_POST['cid'] . "' ,status='" . $_POST['status'] . "',remark='" . $_POST['remark'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";

header("Location: ");
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

                            <div class="module">
                                <div class="module-head">
                                    <h3>Edit Loan Tracking Details of <?php echo $row['name']; ?></h3>
                                </div>
                                <div class="module-body">



                                    <form class="form-horizontal row-fluid" method="post" action="">

                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <div
                                            style="padding: 15px; background-color: #4CAF50; color: white; border-radius: 5px; margin-bottom: 20px;">
                                            <?php if(isset($message)) { echo htmlspecialchars($message); } ?>
                                        </div>




                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tracking Number</label>
                                            <div class="controls">
                                                <input type="text" name="cid" value="<?php echo $row['cid']; ?>"
                                                    id="cid" class="span8">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput"> Name</label>
                                            <div class="controls">
                                                <input type="text" name="name" id="name"
                                                    value="<?php echo $row['name']; ?>" class="span8">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput"> Address:</label>
                                            <div class="controls">
                                                <input type="text" name="rank" id="rank"
                                                    value="<?php echo $row['rank']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput"> Phone</label>
                                            <div class="controls">
                                                <input type="text" name="phone" id="phone"
                                                    value="<?php echo $row['phone']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Loan Type</label>
                                            <div class="controls">
                                                <input type="text" name="type" id="type"
                                                    value="<?php echo $row['type']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Amount</label>
                                            <div class="controls">
                                                <input type="text" name="amt" id="amt"
                                                    value="<?php echo $row['amt']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Interest</label>
                                            <div class="controls">
                                                <input type="text" name="rate" id="rate"
                                                    value="<?php echo $row['rate']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Duration</label>
                                            <div class="controls">
                                                <input type="text" name="dur" id="dur"
                                                    value="<?php echo $row['dur']; ?>" class="span8">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Country</label>
                                            <div class="controls">
                                                <input type="text" name="coldate" id="coldate"
                                                    value="<?php echo $row['coldate']; ?>" class="span8">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <select tabindex="1" name="status" id="status" class="span8" required>
                                                    <option value=""
                                                        <?php echo ($row['status'] == '') ? 'selected' : ''; ?>>Select
                                                        Status</option>
                                                    <option value="Approved"
                                                        <?php echo ($row['status'] == 'Approved') ? 'selected' : ''; ?>>
                                                        Approved</option>
                                                    <option value="Under Review"
                                                        <?php echo ($row['status'] == 'Under Review') ? 'selected' : ''; ?>>
                                                        Under Review</option>
                                                    <option value="Processing"
                                                        <?php echo ($row['status'] == 'Processing') ? 'selected' : ''; ?>>
                                                        Processing</option>
                                                    <option value="Payments pending"
                                                        <?php echo ($row['status'] == 'Payments pending') ? 'selected' : ''; ?>>
                                                        Payments pending</option>
                                                    <option value="Submit Documents"
                                                        <?php echo ($row['status'] == 'Submit Documents') ? 'selected' : ''; ?>>
                                                        Submit Documents</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Remarks</label>
                                            <div class="controls">
                                                <textarea type="text" rows="4" name="remark" id="remark"
                                                    value="<?php echo $row['remark']; ?>"
                                                    class="span8"><?php echo $row['remark']; ?></textarea>

                                            </div>
                                        </div>




                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" name="submit" value="Submit"
                                                    class="btn btn-success">Submit Form</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>



                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; <?php echo date("Y"); ?> Fisher Designs </b>All rights reserved.
            </div>
        </div>



        <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="edmin/scripts/common.js" type="text/javascript"></script>

    </body>