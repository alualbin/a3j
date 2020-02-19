<?php include("../Config/DatabaseConnection.php") ?>
<?php include("header.php");
$cclass="class='active open'";
$csubclass="class='active'";
 ?>

<?php include("slider.php") ?>

<?php
$semid="";
$yearid="";
$courseid="";
$questionpaper="";


if(isset($_GET["eid"]))
{
  $id=$_GET["eid"];

  $sql="SELECT * from uploadquestionpaper where sem_id='$id'";
  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      $sem_id=$row["sem_id"];
      $year_id=$row["year_id"];
      $Course_id=$row["course_id"];
      $questionpaper=$row["questionpaper"];
      
    }
  }
}



?>

<div class="main-content">
  <!-- start: PANEL CONFIGURATION MODAL FORM -->

  <!-- /.modal -->
  <!-- end: SPANEL CONFIGURATION MODAL FORM -->
  <div class="container">
    <!-- start: PAGE HEADER -->
    <div class="row">
      <div class="col-sm-12">
        <!-- start: STYLE SELECTOR BOX -->

        <!-- end: STYLE SELECTOR BOX -->
        <!-- start: PAGE TITLE & BREADCRUMB -->
        <ol class="breadcrumb">
          <li>
            <i class="clip-file"></i>
            <a href="#">
             Questionpaper
            </a>
          </li>
          <li class="active">
            Add questionpaper
          </li>
          <li class="search-box">
            <form class="sidebar-search">
              <div class="form-group">
                <input type="text" placeholder="Start Searching...">
                <button class="submit">
                  <i class="clip-search-3"></i>
                </button>
              </div>
            </form>
          </li>
        </ol>
        <div class="page-header">
          <h1>questionpaper<small></small></h1>
        </div>
        <!-- end: PAGE TITLE & BREADCRUMB -->
      </div>
    </div>
    <!-- end: PAGE HEADER -->
    <!-- start: PAGE CONTENT -->

    <div class="row">
    						<div class="col-sm-12">
    							<!-- start: TEXT FIELDS PANEL -->
    							<div class="panel panel-default">
    								<div class="panel-heading">
    									<i class="fa fa-external-link-square"></i>
    									Add questionpaper
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href="UploadQuestion.php">
    											<i class="fa fa-refresh"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-expand" href="#">
    											<i class="fa fa-resize-full"></i>
    										</a>

    									</div>
    								</div>
    								<div class="panel-body">
                        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">

    									


<div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                             Upload Question Paper: <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
	
		     <input type="File" placeholder="Enter  file"  id="file1"name="file1" Required class="form-control">
                        
                          </div>

                        </div>


                        

                       

                    </div>
                  </div>>
                      

                        <div class="row">
                        											<div class="col-md-12">
                        												<div>
                        													<span class="symbol required"></span>Required Fields
                        													<hr>
                        												</div>
                        											</div>
                        										</div>
                        <div class="row">
  											<div class="col-md-8">
  												<p>

  												</p>
  											</div>
  											<div class="col-md-4">
                          <button class="btn btn-yellow" type="reset">
  													Reset <i class="fa fa-arrow-circle-right"></i>
  												</button>


  												<button class="btn btn-blue" name="add" type="submit">
  													Save <i class="fa fa-arrow-circle-right"></i>
  												</button>
  											</div>
  										</div>
    									</form>
    								</div>
    							</div>
    							<!-- end: TEXT FIELDS PANEL -->
    						</div>
    					</div>









    <!-- end: PAGE CONTENT-->
  </div>
</div>

<?php include("footer.php") ?>

<?php
 
if(isset($_POST["add"]))
{
  if(isset($_GET["upload_question_Id"]))
  {
    //$questionpaper=$conn->real_escape_string($_POST["file1"]);
    $upload_question_Id=$conn->real_escape_string($_GET["upload_question_Id"]);
    $sql="SELECT * FROM `uploadquestionpaper` WHERE upload_question_Id='$upload_question_Id'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      $row=$result->fetch_assoc();
      $Course_id=$row["course_id"];
      $year_id=$row["year_id"];
      $sem_id=$row["sem_id"];

    //fetching course details from DB
    $sql="SELECT * from course where course_id='$Course_id'";
    $result=$conn->query($sql);
    
    if($result->num_rows>0)
    {
     $row=$result->fetch_assoc();
     $path=$row["course_name"] ;
    }
     $path='../Question Bank/'.$path;
     //cheking path exist or not ,If not wil create a new folder with course name.
     if (!file_exists($path)) {
       mkdir($path, 0777, true);
     }

     //getting Year deatils from DB to create path
     $sql="SELECT * from academic_year where year_id='$year_id'";
     $result=$conn->query($sql);
     if($result->num_rows>0)
     {
      $row=$result->fetch_assoc();
      $year=$row["year"] ;
     }
     $newPath=$path."/".$year;
      //cheking path exist or not ,If not wil create a new folder with year.
     if (!file_exists($newPath)) {
       mkdir($newPath, 0777, true);
     }

     //getting sem deails from DB
     $sql="SELECT * from semester where sem_id='$sem_id'";
     $result=$conn->query($sql);
     if($result->num_rows>0)
     {
      $row=$result->fetch_assoc();
      $sem=$row["sem_name"] ;
     }
     $finalPath=$newPath."/".$sem;
      //cheking path exist or not ,If not wil create a new folder with sem.
     if (!file_exists($finalPath)) {
       mkdir($finalPath, 0777, true);
     }
      echo $finalPath;
      $target_dir=$finalPath."/";
      $target_file = $target_dir . basename($_FILES["file1"]["name"]);
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);   
      $filepath1=$target_file;
      $uploadOk=1;
      if (file_exists( $target_file)) {
       echo "Sorry, file already exists.";
       $uploadOk = 0;
       }
     if ($_FILES["file1"]["size"] > 5000000) {
       echo "Sorry, your file is too large.";
       $uploadOk = 0;
     }
     if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf"
     && $imageFileType != "gif" ) {
       echo "Sorry,File Format is not correct";
       $uploadOk = 0;
     }
     if($uploadOk==1)
     
     {
       move_uploaded_file($_FILES["file1"]["tmp_name"], $filepath1);
       $sql="update  uploadquestionpaper set questionpaper='$filepath1' where upload_question_Id='$upload_question_Id'";
     if($conn->query($sql)===true)
     {
     echo "<script type='text/javascript'> swal({
            title: 'update  Data Successfully!',
            text: 'Redirecting...',
            icon: 'success',
            timer: 1000,
            buttons: false,
        })
        .then(() => {
            location.href='ViewQuestionpaper.php';
        })</script>";
     }
     else {
       echo "<script>  swal('An error !');</script>";
       }
     }
  }
}
else{
  echo "<script>console.log('Debug Objects: main' );</script>";
}
}
else{
  echo "<script>console.log('Debug Objects: outer' );</script>";
}
 ?>
