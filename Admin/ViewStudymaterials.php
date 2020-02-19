<?php include("../Config/DatabaseConnection.php") ?>
<?php include("header.php");
$cclass="class='active open'";
$vsubclass="class='active'";
 if(isset($_GET["materials_id"]))
 {
   $materials_id=$_GET["materials_id"];
   $studymaterials=$_GET["studymaterials"];
   $sql="delete from studymaterials  where materials_id='$materials_id' ";
   if($conn->query($sql)===true)
   {
     unlink($studymaterials);
     echo "<script type='text/javascript'> swal({
       title: 'Delete Data Successfully!',
       text: 'Redirecting...',
       icon: 'success',
       timer: 1000,
       buttons: false,
   })
   .then(() => {
       location.href='ViewStudymaterials.php';
   })</script>";
   //  echo '<script> setTimeout(window.location.href="http:Brand.php",1500)</script>';
       //echo "<script> setTimeout(location.href='Brand.php',2000);; </script>";
   }
   else {
     echo "<script>  swal('An error !');</script>";
     }

 }
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
            <a href="#">
              Studymaterials
            </a>
          </li>
          <li class="active">
            View  Studymaterials
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
          <h1> Studymaterials </h1>
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
    									View  Studymaterials
    									<div class="panel-tools">
    										<a class="btn btn-xs btn-link panel-collapse collapses" href="#">
    										</a>
    										<a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
    											<i class="fa fa-wrench"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-refresh" href="UploadStudymaterials.php">
    											<i class="fa fa-refresh"></i>
    										</a>
    										<a class="btn btn-xs btn-link panel-expand" href="#">
    											<i class="fa fa-resize-full"></i>
    										</a>

    									</div>
    								</div>
    								<div class="panel-body">
                        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                          <table class="table table-striped table-bordered table-hover table-full-width dataTable">
                            <thead>
											<tr>
												
												<th>FILE</th>
												
												<th>DELETE</th>
											</tr>
										</thead>
										<tbody>
                          	<?php
                          	$sql="SELECT * from studymaterials";
                          	$result=$conn->query($sql);

                          	if($result->num_rows>0)
                          	{
                          		while($row=$result->fetch_assoc())
                          		{
                                
                                $materials_id=	$row["materials_id"] ;
                                $studymaterials=	$row["studymaterials"] ;
                                
                          	?>
                          	<tr>
					
                          		<td> 	<?php echo	$row["studymaterials"]; ?>	</td>
					
                          		
                          		
                          		
                              <td><a  class="btn  btn-danger confirmation" href='<?php echo "ViewStudymaterials.php?materials_id=",$materials_id,"&studymaterials=",$studymaterials; ?>'>Delete</a> </td>

                          	</tr>
                          	<?php
                          }}
                          	?>

                          </tbody>
                          </table>


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
<script type="text/javascript">
    var elems = document.getElementsByClassName('confirmation');
    var confirmIt = function (e) {
        if (!confirm('Are you sure Want to Delete?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
</script>
