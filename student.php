<?php
require_once 'header.php';
$conn = mysqli_connect("localhost", "root", "ekramhossain" , "userregistration");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="adminIndex.php">Dashboard</a></li>
                            <li><i aria-hidden="true"></i><a href="student.php">Student</a></li>
                           
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>All Student</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result = mysqli_query($conn,"SELECT * FROM usertable");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                          ?>
                                
                                    <tr>
                                        <td>
                                            <?=$row['username'] ?>
                                        </td>
                                        <td>
                                            <?=$row['email'] ?>
                                        </td>
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
           
           
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
<?php
require_once 'footer.php';
?>
    