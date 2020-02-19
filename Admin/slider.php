<!-- start: MAIN CONTAINER -->
<div class="main-container">
  <div class="navbar-content">
    <!-- start: SIDEBAR -->
    <div class="main-navigation navbar-collapse collapse">
      <!-- start: MAIN MENU TOGGLER BUTTON -->
      <div class="navigation-toggler">
        <i class="clip-chevron-left"></i>
        <i class="clip-chevron-right"></i>
      </div>
      <!-- end: MAIN MENU TOGGLER BUTTON -->
      <!-- start: MAIN NAVIGATION MENU -->
      <ul class="main-navigation-menu">
        <li>
          <a href="index.php"><i class="clip-home-3"></i>
            <span class="title">DashBoard </span><span class="selected"></span>
          </a>
        </li>
        
<li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Department  </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="department.php">
                <span class="title">Add Department </span>

              </a>
            </li>
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewDepartment.php">
                <span class="title"> View Department  </span>

              </a>
            </li>

          </ul>
        </li>
<li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Courses  </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="course.php">
                <span class="title">Add Course </span>

              </a>
            </li>
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewCourse.php">
                <span class="title"> View Course  </span>

              </a>
            </li>

          </ul>
        </li>



        <li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Academic Year </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="AcademicYear.php">
                <span class="title">Add Year </span>

              </a>
            </li>
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewAcademicyear.php">
                <span class="title"> View Year  </span>

              </a>
            </li>

          </ul>
        </li>

<li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Semester </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="sem.php">
                <span class="title">Add semester </span>

              </a>
            </li>
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewSem.php">
                <span class="title"> View Semester  </span>

              </a>
            </li>

          </ul>
        </li>

  <li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title">  Question Paper </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="UploadQuestion.php">
                <span class="title">Add Question Paper </span>

              </a>
            </li>
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewQuestionpaper.php">
                <span class="title"> View Question Paper  </span>

              </a>
            </li>

          </ul>
        </li>

<li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> View Feedback </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
            
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="Viewfeedback.php">
                <span class="title"> View Feedback  </span>

              </a>
            </li>

          </ul>
        </li>
      
        <li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Syllabus </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
          <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="UploadSyllabus.php">
                <span class="title">Add Syllabus </span>

              </a>
            </li>
            
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewSyllabus.php">
                <span class="title"> View Syllabus  </span>

              </a>
            </li>

          </ul>
        </li>

        <li <?php if (isset($tclass)) echo $tclass; ?> >
          <a href="javascript:void(0)"><i class="clip-file"></i>
            <span class="title"> Study Materials </span><i class="icon-arrow"></i>
            <span class="selected"></span>
          </a>
          <ul class="sub-menu">
          <li <?php if(isset($csubclass)) echo $csubclass; ?>>
              <a href="UploadStudymaterials.php">
                <span class="title">Add Study Materials </span>

              </a>
            </li>
            
            <li <?php if(isset($vsubclass)) echo $vsubclass; ?>>
              <a href="ViewStudymaterials.php">
                <span class="title"> View Study Materials  </span>

              </a>
            </li>

          </ul>
        </li>
     <!-- class="active open" class="active"-->

      </ul>
      <!-- end: MAIN NAVIGATION MENU -->
    </div>
    <!-- end: SIDEBAR -->
  </div>
