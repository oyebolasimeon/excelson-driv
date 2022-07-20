<?php include('nav.php');?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h3 class="m-b-10" style="color:white">BOOKINGS - Driving Lesson</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">


            <!-- prject ,team member start -->

            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>All Bookings </h5>
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
        </div>

    </div>
</div>

<?php include('footer.php');?>