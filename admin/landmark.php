<?php include('nav.php');?>

<?php
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $version = $_POST['version'];
            $url = $_POST['url'];
            $inserted_dt = date('Y-m-d H:i:s');
            if($title == ''){
              echo '<script>alert("Kindly Provide a Video Title")</script>';
            }
            if($url == ''){
                echo '<script>alert("Video Url Cannot be empty")</script>';
              }
            else{

              include "../headerFiles/connection.php";
              $emailquery = $db_connect->query("SELECT title,version from resources where title = '$title' and version= '$version' and type='video'")->fetch_array();
              if ( $emailquery > 0){
                echo '<script>alert("Such Title already exist, Kindly choose another version")</script>'; 
              }
              else{
                
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "assets/images/videoimage/".$unique_image;

        
            if ($file_size > 9048567) {
                echo "<div class='alert alert-danger'>Image Size should not be more than 9MB, Property not Upload !!!!!</div>";
            
            } 
            elseif (in_array($file_ext, $permited) === false) {
                echo "<div class='alert alert-danger'>You can upload only:-".implode(', ',$permited)."</div>";
            
            } else {
                // this is responsible for moving the image into the listing-images folder
                move_uploaded_file($file_temp, $uploaded_image);

                $query = "INSERT INTO resources (title,version,url,image,inserted_dt,type) VALUES('$title', '$version', '$url', '$uploaded_image', '$inserted_dt','video')";
                // query the database;
                $result = $db_connect->query($query);
           
            echo '<script>alert("Video Lesson Succesfully Created")</script>';

            }

              }
            }
    
         
        }
    
        
    ?>

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h3 class="m-b-10" style="color:white">Landmarks </h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="card latest-update-card">
                    <div class="card-header">
                        <h5>Add New Landmark</h5>
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
                                                style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top: 20px;">
                        <form action="" method="post" enctype="multipart/form-data">
                          
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label">Title</label>
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label">Version</label>
                                        <input type="text" name="version" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label">Youtube URL </label>
                                        <input type="text" name="url" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label">Image Background</label>
                                        <input type="file" name="image" class="form-control" >
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-info"><i class="feather mr-2 icon-check"></i>Add New Video</button>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>All Video Resource</h5>
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
                                                style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                                    </li>

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
                                        <th>
                                           Date Created
                                        </th>
                                        <th>Title</th>
                                        <th>Version</th>
                                        <th>URL</th>
                                        <th class="text-right">ACTION</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
		include "../headerFiles/connection.php";
		$sql = "SELECT * FROM resources where type ='video' order by id desc";	
		  $query = $db_connect->query($sql);

            $i = 1;
            while ($row = $query->fetch_assoc()) {
		?> 
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                    <td> <?php echo substr($row['inserted_dt'],0,10); ?></td>
                                        <td>
                                            
                                            <div class="d-inline-block align-middle">
                                          
                                                <div class="d-inline-block">
                                                    <h6> <?php echo $row['title']; ?></h6>
                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td> <?php echo $row['version']; ?></td>
                                       <td> <?php echo substr($row['url'],0,30); ?></td>
                                        <td class="text-right"><a href="deleteresources.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger"><i class="feather mr-2 icon-slash"></i>Delete</button></a>
&nbsp; &nbsp;
<a href="editresources.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-info"><i class="feather mr-2 icon-info"></i>Edit</button></td></a>
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