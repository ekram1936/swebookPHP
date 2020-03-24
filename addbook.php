<?php
require_once 'header.php';


$conn = mysqli_connect("remotemysql.com", "R4t3eLOhus", "7PBlaT2HqV" , "R4t3eLOhus");;
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

$s="SELECT ccode
 from userregistration.semester_course;
";
$result1= mysqli_query($conn,$s);

$sw="SELECT sid
 FROM userregistration.semester;
";
$result= mysqli_query($conn,$sw);


if(isset($_POST['save_book']))
{
    $bid=$_POST['bookid'];
    $bname=$_POST['bname'];
    $aname=$_POST['authorname'];
    $image=$_FILES['image'];
    $cid=$_POST['ccode'];
    $sid=$_POST['sid'];
    $file=$_FILES['file'];
    $pbname=$_POST['pubname'];


    $image=explode( '.' ,$_FILES['image'] ['name']);
    $image_ext=end($image);
    $image= date('Ymdhis.').$image_ext;
    
    
   
   
    $file=explode( '.' ,$_FILES['file'] ['name']);
    $file_ext=end($file);
    $file= date('Ymdhis.').$file_ext;
    
    

  $add="INSERT INTO `userregistration`.`bookinfo`
    (`bookid`,
    `bname`,
    `authorname`,
    `pubname`,
    `image`,
    `file`,
    `ccode`,
    `sid`
    )
   VALUES
           ('$bid','$bname','$aname','$pbname','$image','$file','$cid','$sid')";

   $dataresult= mysqli_query($conn,$add);


 if($dataresult){
    $su ="Data inserted at Database";
    move_uploaded_file($_FILES['image']['tmp_name'], 'swebookPHP/images/books/'.$image);
    }
    else
    {
    $error ="Data is Not Inserted";

    }
}

?>
                <!-- content HEADER -->
                <!-- ========================================================= -->
                <div class="content-header">
                    <!-- leftside content header -->
                    <div class="leftside-content-header">
                        <ul class="breadcrumbs">
                            <li><i class="fa fa-home" aria-hidden="true"></i><a href="adminIndex.php">Dashboard</a></li>
                             <li><i class="fa fa-home" aria-hidden="true"></i><a href="addbook.php">Add Book</a></li>
                           
                           
                        </ul>
                    </div>
                </div>
                <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
                <div class="row animated fadeInUp">
                    <div class="col-sm-12 col-sm-offset-3">
                        <div class="col-sm-12 col-md-6">
                            <? php
                                    if(isset($su)) {

                                    ?>
                                    <div class="alert alert-success " role ="alert">
                                        <?= 
                                           $su ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label = "close">
                                            <span aria-hidden = "true" > x </span>
                                        </button>
                                    </div>
                                    <? php

                                }

                             
                                     ?>


                                 <? php
                                    if(isset($error)) {

                                    ?>
                                    <div class="alert alert-danger " role ="alert">
                                        <?=
                                         $error ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label ="Closed">
                                            <span aria-hidden = "true"> x </span></button>
                                    </div>
                                    <? php
                              }
                                  
                                    ?>

                           <div class="panel">
                              <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                

                                    
                                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                        <h5 class="mb-lg">Add Book</h5>
                                         <div class="form-group">
                                            <label for="bookid" class="col-sm-4 control-label">Book ID </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="bookid" placeholder="Book Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="bname" class="col-sm-4 control-label">Book Name </label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="bname" placeholder="Book Name">
                                            </div>
                                        </div>
                                     
                                
                                           <div class="form-group">
                                             <label for="authorname" class="col-sm-4 control-label">Author Name </label>
                                             <div class="col-sm-8">
                                                <input type="text" class="form-control" name="authorname" placeholder="Author Name">
                                             </div>
                                            </div>
                                           <div class="form-group">
                                            <label for="pubname" class="col-sm-4 control-label">Publication Name </label>
                                             <div class="col-sm-8">
                                                <input type="text" class="form-control" name="pubname" placeholder="Publication Name">
                                             </div>
                                           </div>

                                           
                                           <div class="form-group">
                                             <label for="image" class="col-sm-4 control-label">Image </label>
                                             <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" placeholder="Image">
                                             </div>
                                            </div>
                                           <div class="form-group">
                                            <label for="file" class="col-sm-4 control-label">Upload PDF </label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="file" placeholder="File">
                                            </div>
                                        </div>
                                        
                                       <div class="form-group">
                                            <label for="code" class="col-sm-4 control-label"> Course Code </label>
                                            <div class="col-sm-8">
                                              <select name="ccode" >
                                                  <?php while($row1 = mysqli_fetch_array($result1)):; ?> 
                                                <option>
                                                    <?php  echo $row1[0];  ?>
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
                                                    <?php  echo $row[0];  ?>
                                                </option>
                                                   <?php  endwhile; ?> 
                                              </select>
                                            </div>
                                       </div>
                    
                                       
                                        <div class="form-group">
                                            <div class="col-sm-offset-4 col-sm-8">
                                                <button type="submit" class="btn btn-primary" name="save_book" ><i class="fa fa-save"></i> Save Book</button>
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
          

                    
            <!--scroll to top-->
            <a href="#" class="scroll-to-top"><i class="fa fa-angle-double-up"></i></a>
        </div>
<?php
require_once 'footer.php';
?>
    