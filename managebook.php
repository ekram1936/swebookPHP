<?php
require_once 'header.php';
$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
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
                            <li><i aria-hidden="true"></i><a href="managebook.php">Manage Book</a></li>
                           
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>All Books</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="table-responsive">
                                <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Book ID</th>
                                        <th>BOOK Name</th>
                                        <th>Author Name</th>
                                        <th>Publication Name</th>

                                        <th>Image</th>
                                        <th>File</th>
                                        <th>Course Code</th>
                                        <th>Semester</th>
                                         <th>Action</th>


                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $result2 = mysqli_query($conn,"SELECT * FROM bookinfo");
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                          ?>
                                
                                    <tr>
                                        <td>
                                            <?=$row['bookid'] ?>
                                        </td>
                                        <td>
                                            <?=$row['bname'] ?>
                                        </td>
                                        <td>
                                            <?=$row['authorname'] ?>
                                        </td>
                                        <td>
                                            <?=$row['pubname'] ?>
                                        </td>
                                    
                                        <td>
                                           <img style="width: 50px;" src ="images/books/ <?= $row['image'] ?>"> 
                                        </td>

                                        <td>
                                            <?=$row['file'] ?>
                                        </td>
                                        <td>
                                            <?=$row['ccode'] ?>
                                        </td>
                                        <td>
                                            <?=$row['sid'] ?>
                                        </td>
                                         <td>
                                            
                                           <a href="" class="btn btn-info" data-toggle="modal" data-target="#book-<?= $row['bookid'] ?>"> <i class="fa fa-eye "></i></a>
                                           <a href="" class="btn btn-warning" data-toggle="modal" data-target="#book-update<?= $row['bookid'] ?>"> <i class="fa fa-pencil "></i></a>
                                           <a href="delete.php?bookdelete=<?= $row['bookid'] ?>" class="btn btn-danger" > <i class="fa fa-trash-o "></i></a>
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
                                        $result2 = mysqli_query($conn,"SELECT * FROM bookinfo");
                                        while ($row = mysqli_fetch_assoc($result2)) {
                                          ?>
                                <div class="modal fade" id="book-<?= $row['bookid'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header state modal-info">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Book Information</h4>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-bordered">
                                                <tr>

                                                    <th>Book ID</th>
                                                    <td>
                                            <?=$row['bookid'] ?>
                                        </td>

                                                </tr>
                                                <tr>
                                                    <th>BOOK Name</th>
                                                     <td>
                                            <?=$row['bname'] ?>
                                        </td>
                                        

                                                </tr>
                                                <tr>
                                                    <th>Author Name</th>
                                                     <td>
                                            <?=$row['authorname'] ?>
                                        </td>
                                       
                                                </tr>
                                                <tr>
                                                     <th>Publication Name</th>
                                                     <td>
                                            <?=$row['pubname'] ?>
                                        </td>
                                         </td>
                                       
                                                </tr>
                                               
                                                <tr>
                                                    <th>Image</th>
                                                    <td>
                                           <img style="width: 50px;" src ="images/books/ <?= $row['image'] ?>"> 
                                        </td>
                                        
                                                </tr>
                                                <tr>
                                                    <th>File</th>
                                                     <td>
                                            <?=$row['file'] ?>
                                        </td>
                                       
                                                </tr>
                                                <tr>
                                                     <th>Course Code</th>
                                                     <td>
                                            <?=$row['ccode'] ?>
                                        </td>
                                      
                                                </tr>
                                                <tr>
                                                      <th>Semester</th>
                                                       <td>
                                            <?=$row['sid'] ?>
                                        </td>
                                                </tr>
                                            </table>


                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>




<?php
                                }
                                    ?>


 <?php


                                            $result3 = mysqli_query($conn,"SELECT * FROM bookinfo");
                                            while ($row = mysqli_fetch_assoc($result3)) {
                                                $id= $row['bookid'];
                                                $book=mysqli_query($conn,"SELECT * FROM bookinfo WHERE bookid='$id'");
                                                $book_inf_row = mysqli_fetch_assoc($book);




                                              ?>
                                            <div class="modal fade" id="book-update<?= $row['bookid'] ?>" tabindex="-1" role="dialog" aria-labelledby="modal-info-label">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header state modal-info">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="modal-info-label"><i class="fa fa-book"></i>Update Book Information</h4>
                                            </div>
                                            <div class="modal-body">

                                                  <div class="panel">
                                  <div class="panel-content">
                                <div class="row">
                                    <div class="col-md-12">
                                    

                                        
                                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        
                                             <div class="form-group">
                                             
                                            </div>
                                            <div class="form-group">
                                                <label for="bname" class="col-sm-4 control-label">Book Name </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="bname" placeholder="Book Name" value="<?= $book_inf_row['bname']   ?>">
                                                    <input type="hidden" class="form-control" name="id"  value="<?= $book_inf_row['bookid']   ?>">
                                                </div>
                                            </div>
                                         
                                    
                                               <div class="form-group">
                                                 <label for="authorname" class="col-sm-4 control-label">Author Name </label>
                                                 <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="authorname" placeholder="Author Name" value="<?= $book_inf_row['authorname']   ?>">
                                                 </div>
                                                </div>
                                               <div class="form-group">
                                                <label for="pubname" class="col-sm-4 control-label">Publication Name </label>
                                                 <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="pubname" placeholder="Publication Name" value="<?= $book_inf_row['pubname']   ?>">
                                                 </div>
                                               </div>

                                               
                                
                                           <div class="form-group">
                                                <label for="code" class="col-sm-4 control-label"> Course Code </label>
                                                <div class="col-sm-8">
                                                  <select name="ccode"  >
                                                      <?php

                                                $s="SELECT ccode
                                                 from userregistration.semester_course;
                                                ";
                                                $result1= mysqli_query($conn,$s);

                                                $sw="SELECT sid
                                                 FROM userregistration.semester;
                                                ";
                                                $result= mysqli_query($conn,$sw);

 
                                                       while($row1 = mysqli_fetch_array($result1)):; ?> 
                                                    <option>
                                                        <?php  echo $row1['ccode'];  ?>
                                                    </option>
                                                       <?php  endwhile; ?> 
                                                  </select>
                                                </div>
                                           </div>
                                           <div class="form-group">
                                                <label for="semester" class="col-sm-4 control-label"> Semester </label>
                                                <div class="col-sm-8">
                                                  <select name="sid">
                                                      <?php while($row = mysqli_fetch_array($result)):; ?> 
                                                    <option>
                                                        <?php  echo $row['sid'];  ?>

                                                    </option>
                                                       <?php  endwhile; ?> 

                                                  </select>
                                                </div>
                                           </div>
                        
                                           
                                            <div class="form-group">
                                                <div class="col-sm-offset-4 col-sm-8">
                                                    <button type="submit" class="btn btn-primary" name="update_book" ><i class="fa fa-update"></i> Update Book</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                                                

                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>




    <?php
                                    }


$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}


if(isset($_POST['update_book']))
{   
    $id=$_POST['id'];
    $bname=$_POST['bname'];
    $aname=$_POST['authorname'];
    $cid=$_POST['ccode'];
    $sid=$_POST['sid'];
    $pbname=$_POST['pubname'];
    

$update = "UPDATE `userregistration`.`bookinfo` SET
`bname` = '$bname',
`authorname` = '$aname',
`pubname` = '$pbname',
`ccode` = '$cid',
`sid` = '$sid'
WHERE `bookid` ='$id' ";

$dataresult= mysqli_query($conn,$update);


 if($dataresult){
   header('location :managebook.php');
    }
    
}
                                        ?>




    <?php
    require_once 'footer.php';
    ?>

<?php
require_once 'footer.php';
?>
    