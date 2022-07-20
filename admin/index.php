
<?php include('nav.php');?>
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h3 class="m-b-10" style="color:white">Dashboard</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <!-- page statustic card start -->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-yellow"><?php
					 include ("../headerFiles/connection.php");
                                        $sql= "SELECT count(id) as total from driving_lesson";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;		
						
						?></h4>
                                            <h6 class="text-muted m-b-0">Bookings </h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-bar-chart-2 f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-yellow">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">ViewMore</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-up text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-green"><?php
					 include ("../headerFiles/connection.php");
                                        $sql= "SELECT count(id) as total from resources";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;		
						
						?></h4>
                                            <h6 class="text-muted m-b-0">Resources</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-file-text f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-green">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">View More</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-up text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-red"><?php
					 include ("../headerFiles/connection.php");
                                        $sql= "SELECT count(id) as total from email_subscriber";
                                        $result = mysqli_query($db_connect, $sql);
                                        $values = mysqli_fetch_assoc($result);
                                        $num_row = $values['total'];
                                        echo $num_row;		
						
						?></h4>
                                            <h6 class="text-muted m-b-0">Email Subscribers</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-calendar f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-red">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">View More</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-down text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-8">
                                            <h4 class="text-c-blue">500</h4>
                                            <h6 class="text-muted m-b-0">User Feedback</h6>
                                        </div>
                                        <div class="col-4 text-right">
                                            <i class="feather icon-thumbs-down f-28"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-c-blue">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <p class="text-white m-b-0">View More</p>
                                        </div>
                                        <div class="col-3 text-right">
                                            <i class="feather icon-trending-down text-white f-16"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- page statustic card end -->
                </div>
                <!-- prject ,team member start -->
                <div class="col-xl-8 col-md-12">
                    <div class="card table-card">
                        <div class="card-header">
                            <h5>Latest Bookings for Driving Lesson </h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Email</th>
                                            <th>Name</th>
                                            <th>Booking Date</th>
                                            <th>Schedule Time</th>
                                            <th>Status</th>
                                            <th class="text-right">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
		include "../headerFiles/connection.php";
		$sql = "SELECT * FROM driving_lesson order by id desc LIMIT 6";	
		  $query = $db_connect->query($sql);

            // loop through the results
            while ($row = $query->fetch_assoc()) {
		?>

                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['emailVal']; ?></td>
                                            <td>

                                                <div class="d-inline-block align-middle">
                                                    <div class="d-inline-block" style="text-transform:Capitalize ;">
                                                        <h6><?php echo $row['nameVal']; ?></h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['timeVal']; ?></td>
                                            <td><label
                                                    class="badge badge-light-<?php echo $row['color']; ?>"><?php echo $row['status']; ?></label>
                                                    <td class="text-right"> <a href="bookingcontrol.php?booking_id=<?php echo $row['id']; ?>"><button type="button"
                                                class="btn  btn-icon btn-success"><i
                                                    class="feather icon-check-circle"></i></button></td>
                                        </tr>
                                        <?php
		}
		?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card latest-update-card">
                        <div class="card-header">
                            <h5>Latest Email Subscriber</h5>
                            <div class="card-header-right">
                                <div class="btn-group card-option">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="feather icon-more-horizontal"></i>
                                    </button>
                                    <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item full-card"><a href="#!"><span><i
                                                        class="feather icon-maximize"></i> maximize</span><span
                                                    style="display:none"><i class="feather icon-minimize"></i>
                                                    Restore</span></a></li>
                                        <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                        class="feather icon-minus"></i> collapse</span><span
                                                    style="display:none"><i class="feather icon-plus"></i>
                                                    expand</span></a></li>
                                        <li class="dropdown-item reload-card"><a href="#!"><i
                                                    class="feather icon-refresh-cw"></i> reload</a></li>
                                        <li class="dropdown-item close-card"><a href="#!"><i
                                                    class="feather icon-trash"></i> remove</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="latest-update-box">
                                <?php
		include "../headerFiles/connection.php";
		$sql = "SELECT * FROM email_subscriber order by id desc LIMIT 5";	
		  $query = $db_connect->query($sql);

            // loop through the results
            while ($row = $query->fetch_assoc()) {
		?>

                                <div class="row p-b-30 p-t-15">
                                    <div class="col-auto text-right update-meta">
                                        <p class="text-muted m-b-0 d-inline-flex">
                                            <?php echo substr($row['inserted_dt'],0,10); ?></p>
                                        <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                    </div>
                                    <div class="col">
                                        <a href="#!">
                                            <h6><?php echo substr($row['email'],0,20); ?>
                                                <?php echo substr($row['email'],20,50); ?> </h6>
                                        </a>
                                    </div>
                                </div>
                                <?php
		}
		?>

                            </div>
                            <div class="text-center">
                                <a href="#!" class="b-b-primary text-primary">View all Mail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php include('footer.php');?>