<?php include("../Config/DatabaseConnection.php") ?>
<?php include("header.php");
$cclass="class='active open'";
$csubclass="class='active'";
 ?>

<?php include("slider.php") ?>

<?php
$deptid="";
$deptname="";
$deptdesc="";


if(isset($_GET["eid"]))
{
  $id=$_GET["eid"];

  $sql="SELECT * from course where course_id='$id'";
  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      $deptid=$row["course_id"];
      $deptname=$row["course_name"];
      $deptdesc=$row["dept_id"];
      
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
             Course
            </a>
          </li>
          <li class="active">
            Add Course
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
          <h1>Course<small></small></h1>
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
    									Add Course
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href="department.php">
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
    												course <span class="symbol required"></span>
    											</label>
    											<div class="col-sm-5">
    											<input type="text" placeholder="Enter Course" value="<?php echo $deptname; ?>" id="txt_department"  name="txt_department" Required class="form-control">
    											</div>
    										</div>
                        

                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                             Dpartment: <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
	
		<select id="txt_desc" name="txt_desc" Required class="form-control">
     		<option value="">select department</option>
 	<?php
                          	$sql="SELECT * from department";
                          	$result=$conn->query($sql);

                          	if($result->num_rows>0)
                          	{
                          		while($row=$result->fetch_assoc())
                          		{
                          			$c=	$row["dept_id"] ;
$b=$row["dept_name"] ;
if($c!=$deptdesc)
{
                          	?>

<option value="<?php echo $c; ?>"><?php echo $b; ?></option>
<?php
}
else
{
?>
<option value="<?php echo $c; ?>" selected><?php echo $b; ?></option>
<?php
}}}
?>


</select>
                        
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

 if(isset($_GET["eid"]))
 {
   $dept=$_GET["eid"];
  
 $dept_name=$conn->real_escape_string($_POST["txt_department"]);
 $dept_id=$conn->real_escape_string($_POST["txt_desc"]);





$sql="update  course set course_name='$dept_name',dept_id='$dept_id' where course_id='$dept'";
echo $sql;
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
       location.href='ViewCourse.php';
   })</script>";
}
else {
  echo "<script>  swal('An error !');</script>";
  }
}
}
 ?>
