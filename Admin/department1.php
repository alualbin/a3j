<?php include("../Config/DatabaseConnection.php") ?>
<?php include("header.php");
$cclass="class='active open'";
$csubclass="class='active'";

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
             Registration</a>
          </li>
          <li class="active">
           sub registration
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
          <h1>Registration<small></small></h1>
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
    									Add User Details
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href= Doctor.php">
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
                             Name <span class="symbol required"></span>
                          </label>
                          <div class="col-sm-5">
                          <input type="text" placeholder="Enter User Name" pattern="[A-Za-z]" title="please enter alphabetics only"  id="L1" maxlength="100"   name="N_L" Required class="form-control">
                          </div>
                        </div>








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

 $cat=$conn->real_escape_string($_POST["txt Doctor"]);
  

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["file_image1"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$ph=rand(1111,9999);
$ph=md5($ph);
$filepath=$target_dir. $ph .".".$imageFileType;
move_uploaded_file($_FILES["file_image1"]["tmp_name"], $filepath);



$sql="insert into Labour (Cat_Name,Cat_pic1)values('$cat','$filepath')";
echo $sql;
if($conn->query($sql)===true)
{
echo "<script>  swal('Insert Data Successfully!');</script>";
}
else {
  echo "<script>  swal('An error !');</script>";
  }
}

 ?>
