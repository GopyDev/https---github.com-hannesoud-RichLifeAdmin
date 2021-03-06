                            <li>
                                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard </span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="dashboard.php">Dashboard </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="user_list.php">User list</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-filter"></i> <span class="nav-label">Trigger</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="trigger_list.php">Trigger List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i> <span class="nav-label">Events</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="event_list.php">Event List</a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-venus"></i> <span class="nav-label">Venues</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="venue_list.php">Venues List</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tree"></i> <span class="nav-label">Parks and Amenities</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level collapse">
                                    <li><a href="panda_list.php">Parks and Amenities List</a></li>
                                </ul>
                            </li>
                       </ul>

                    </div>
                </div>
            </nav>
            <div id="wrapper">
                <div class="content-wrapper container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title">
                                <h1>Venue List <small></small></h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="active">Venue List</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- end .page title-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-card margin-b-30 ">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Below is a list of the venues</h4>
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                        <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                    </div>
                                </div>
                                <?php if($msg){?>
                                    <div class="alert alert-success">
                                        <?php echo $msg;?>
                                    </div>
                                <?php }?>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Text</th>
                                                <th>Fromdate</th>
                                                <th>Todate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Text</th>
                                                <th>Fromdate</th>
                                                <th>Todate</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php for($i=0;$i<$row;$i++){?>
                                            <tr>
                                                <td><?php echo $venues[$i]['title'];?></td>
                                                <td><?php echo $venues[$i]['text'];?></td>
                                                <td><?php echo $venues[$i]['fromdate'];?></td>
                                                <td><?php echo $venues[$i]['todate'];?></td>
                                                <td><a href="<?php echo "venue_edit.php?venueid=".base64_encode($venues[$i]['id']);?>" class="btn btn-warning btn-3d">Edit</a>
                                                    <a href="<?php echo "venue_delete.php?venueid=".base64_encode($venues[$i]['id']);?>" class="btn btn-danger btn-3d" onclick="return confirmDelete();">Delete</a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="createVenue.php" class="btn btn-primary btn-3d">Create a new venue</a>
                            </div>
                        </div><!--end .col-->
                    </div>
                </div> 
            </div>
        </section>
<script>
function confirmDelete(){
    if(confirm('Are you sure you want to delete this Venue?')) {
        return true;
    }
    return false;
}
</script>