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

  $sql="SELECT * from sub_community where sub_id='$id'";
  $result=$conn->query($sql);

  if($result->num_rows>0)
  {
    while($row=$result->fetch_assoc())
    {
      $deptid=$row["sub_id"];
      $deptname=$row["sub_course"];
      $deptdesc=$row["sub_desc"];
      
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
             Sub Community
            </a>
          </li>
          <li class="active">
            Add Sub Community
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
          <h1>Sub Community<small></small></h1>
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
    									Add Sub Community
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href="subcommunity.php">
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
    												course name <span class="symbol required"></span>
    											</label>
    											<div class="col-sm-5">
    											<input type="text" placeholder="Enter course" value="<?php echo $deptname; ?>" id="txt_department"  name="txt_department" Required class="form-control">
    											</div>
    										</div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="form-field-1">
                            Description  <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
                          <input type="text" placeholder="Enter description" value="<?php echo $deptdesc; ?>" id="txt_desc"    name="txt_desc" Required class="form-control">
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
 $dept_desc=$conn->real_escape_string($_POST["txt_desc"]);





$sql="update  sub_community set sub_course='$dept_name',sub_desc='$dept_desc' where sub_id='$dept'";
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
       location.href='ViewSubcommunity.php';
   })</script>";
}
else {
  echo "<script>  swal('An error !');</script>";
  }
}
}
 ?>
