  <div class="cbx-header-bottom">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            Menu
                            <!--<span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>-->
                        </button>
                        <div class="hidden-lg hidden-md hidden-sm pull-right mobile-signin-btn">
                            <a class="btn btn-brand" href="signin.php">Login/Signup</a>
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">

                              <li><a href="index.php">Home</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <?php
                                                $sql="SELECT Cat_id,Cat_Name FROM category";
                                                $result=$conn->query($sql);
                                                ?>
                                                <?php
                      								            if($result->num_rows>0)
                      								              {
                      									             while($row=$result->fetch_assoc())
                      									               {
                      										               $Cat_id=$row["Cat_id"];
                      											             $Cat_Name=$row["Cat_Name"];
                      									         ?>
                                                   <li><a href='<?php echo "category.php?id=",$Cat_id ?>'><?php echo $Cat_Name; ?></a></li>
                                                 <?php
                     									              }
                     								                }
                      							                 ?>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Brand <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <?php
                                                $sql="SELECT brand_id,brandname FROM brand";
                                                $result=$conn->query($sql);
                                                ?>
                                                <?php
                                                  if($result->num_rows>0)
                                                    {
                                                     while($row=$result->fetch_assoc())
                                                       {
                                                         $brand_id=$row["brand_id"];
                                                         $brandname=$row["brandname"];
                                                 ?>
                                                   <li><a href='<?php echo "category.php?bid=",$brand_id ?>'><?php echo $brandname; ?></a></li>
                                                 <?php
                                                    }
                                                    }
                                                     ?>
                                </ul>
                            </li>

  <li><a href="category.php">Hot Deals</a></li>





                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li><a class="btn btn-brand" href="signin.html">Login/Signup</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </nav>
            </div>

        </div>
    </div>
