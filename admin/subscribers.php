<?php include('nav.php');?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h3 class="m-b-10" style="color:white">Email Subscribers</h3>
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
                        <h5></h5>
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
                                        <th>Date of Subscription</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
		include "../headerFiles/connection.php";
		$sql = "SELECT * FROM email_subscriber order by id desc";	
		  $query = $db_connect->query($sql);

            $i = 1;
            while ($row = $query->fetch_assoc()) {
		?>

                                    <tr>
                                        <td><?php echo $i ++ ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                       
                                        <td><?php echo $row['inserted_dt']; ?></td>
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