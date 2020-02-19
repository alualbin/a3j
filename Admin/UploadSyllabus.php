  <?php include("../Config/DatabaseConnection.php") ?>
<?php include("header.php");
$cclass="class='active open'";
$csubclass="class='active'";
?>

<?php include("slider.php") ?>


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
            <a href="index.php">
             Home
            </a>
          </li>
          <li class="active">
          Add syllabus
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
          <h1>Add syllabus<small></small></h1>
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
    									Add Details
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href= "Doctor.php">
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
                             Course: <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
	
		<select id="Course_id" name="Course_id" Required class="form-control">
     		<option value="">Select Course</option>
 	<?php
                          	$sql="SELECT * from course";
                          	$result=$conn->query($sql);

                          	if($result->num_rows>0)
                	          	{
                          		while($row=$result->fetch_assoc())
                          		{
                          			$c=	$row["course_id"] ;
$b=$row["course_name"] ;
                          	?>

<option value="<?php echo $c; ?>"><?php echo $b; ?></option>
<?php
}}
?>


</select>
                        
                          </div>

                        </div>

      <div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                             Year: <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
	
		<select id="year_id" name="year_id" Required class="form-control">
     		<option value="">Select Year</option>
 	<?php
                          	$sql="SELECT * from academic_year";
                          	$result=$conn->query($sql);

                          	if($result->num_rows>0)
                	          	{
                          		while($row=$result->fetch_assoc())
                          		{
                          			$c=	$row["year_id"] ;
$b=$row["year"] ;
                          	?>

<option value="<?php echo $c; ?>"><?php echo $b; ?></option>
<?php
}}
?>


</select>
                        
                          </div>

                        </div>
					
						<div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                             Upload syllabus: <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
	
		     <input type="File" placeholder="Enter  description"  id="file1"name="file1" Required class="form-control">
                        
                          </div>

                        </div>

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


  

 $Course_id=$conn->real_escape_string($_POST["Course_id"]);
 $year_id=$conn->real_escape_string($_POST["year_id"]);
 



$sql="SELECT * from course where course_id='$Course_id'";
  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
   $row=$result->fetch_assoc();
   $b=$row["course_name"] ;
  }
  $b='../QuestionBank/'.$b;
if (!file_exists($b)) {
    mkdir($b, 0777, true);
}

$sql="SELECT * from academic_year where year_id='$year_id'";
  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
   $row=$result->fetch_assoc();
   $c=$row["year"] ;
  }
  $a=$b."/".$c;
if (!file_exists($a)) {
    mkdir($a, 0777, true);
}



echo $a;
   $target_dir=$a."/";
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

/*unlink($filepath1);*/

$sql="insert into  syllabus(course_id,year_id,syllabus)values('$Course_id','$year_id','$filepath1')";
echo $sql;
if($conn->query($sql)===true)
{
echo "<script>  swal('Insert Data Successfully!');</script>";
}
else {
  echo "<script>  swal('An error !');</script>";
  }
}
}
 ?>
