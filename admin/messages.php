<?php
	    $con = mysqli_connect("localhost","storeadmin" ,"12345","store");
	    $curl = $_SERVER['REQUEST_URI'];
	    include('alert.php'); 
	?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shinex Facility - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/dbstyle.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="categories.php">Categories</a>
            <a class="collapse-item" href="products.php">Products</a>
            <a class="collapse-item" href="store.php">Store Details</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item" style="display: none;">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-wrench"></i>
              <span>Utilities</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
              </div>
            </div>
        </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                
                <a class="collapse-item" href="mainpage.php">Main page</a>
                
              </div>
            </div>
          </li>

      <!-- Nav Item - Charts -->
        <li class="nav-item" style="display: none;">
            <a class="nav-link" href="charts.html">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
        </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item" style="display: none;">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

             <!-- Topbar Search -->
            <div style="display: none;">
              <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none" style="display: none;">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1" style="display: none;">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->

                <?php

                    $msgcountsql = "SELECT COUNT(ischecked) as total FROM usermessages WHERE ischecked = '0'";

                    $result=mysqli_query($con,$msgcountsql);
                    $data=mysqli_fetch_assoc($result);
                    

                ?>

                <span class="badge badge-danger badge-counter"><?php echo $data['total']; ?> </span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <div style="max-height:20em;overflow-y:scroll;">
                
                  <?php  

                    $msgsql = "SELECT * FROM usermessages WHERE ischecked='0' ORDER BY messageID DESC";

                    $msgrs = $con->query($msgsql)  or die($con->error);
                             while($msgrow= $msgrs->fetch_assoc()){

                  ?>
                  <form action="updatemsg.php" method="post" >
                    <button class="dropdown-item d-flex align-items-center"  type="submit" name="upmsg" style=" width: 100%;border:none;background: transparent;" >
                  
                    
                        <input type="text" name="crnturl" value="<?php echo $curl;?>" style="display: none;">
                        <input type="text" name="msgid" value="<?php echo $msgrow["messageID"];?>" style="display: none;">
                          
                        <div class="text-truncate"><?php echo $msgrow["uname"];?></div>
                        <div class="small text-gray-500"><?php echo $msgrow["messageDate"];?></div>

                      </button>

                    </form>
               
                    <hr>
            <?php } ?>
                </div>
                
                
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://www.stickpng.com/assets/images/585e4bf3cb11b227491c339a.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#cpassword">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Categories</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
   
              
            </div>
            <div class="card-body">
              <div class="table-responsive dbcate">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Message ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Reply</th>
                    </tr>

                    <?php

                      $sql1 = "SELECT * FROM usermessages order by messageID DESC";
                      $result1 = $con->query($sql1);
                      while($row1= $result1->fetch_assoc()){

                    ?>
                  </thead>
                 
                  <tbody>
                    <tr style="<?php if($row1["ischecked"]==0){?>  color: black;font-weight: bold; <?php } ?>">
                      <td><?php echo $row1["messageID"]; ?></td>
                      <td><?php echo $row1["uname"]; ?></td>
                      <td><?php echo $row1["uemail"]; ?></td>
                      <td><?php echo substr($row1["umesssage"],0,15); ?><?php if(strlen($row1["umesssage"])>14){?><span style="color: gray;"><i>...Read More</i></span><?php } ?></td>
                      <td><?php echo $row1["messageDate"]; ?></td>
                      <td><?php echo $row1["messageTime"]; ?></td>
                      <td>
                        <button onclick=""></button>
                        <i class="fa fa-reply replyModel" id="btnSelect"
                        onclick="location.href='replymsg.php?id=<?php echo $row1["messageID"]; ?>';"></i>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class="modal" id="addcat">
            <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Add new Category</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
              
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="addcat.php" method="post" enctype="multipart/form-data">
                          <input type="text" name="catname" placeholder="Category name" required>
                          <input type="text" name="cattag" placeholder="Category tag(Put without spaces)" required>
                          <input type="file" name="categoryImg" accept="image/x-png,image/gif,image/jpeg" required>
                          <button type="submit" name="addcat" style="float: right;margin-top: 0.5em;padding: 0.5em 2em;cursor:pointer;background: #1e91cf;border:1px solid #1e91cf;color:#fff;">Add</button>
                        </form>
                    </div>
              
                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
              
                  </div>
                </div>
              </div>
      


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <div class="modal" id="cpassword">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h6 class="modal-title">Change Password</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="changepw.php" method="post">
                            Enter a new password:<input type ="password" name="newpassword1" required style="width:100%;">
                            Enter the password again:<input type ="password" name="newpassword2" required style="width:100%;">
                            

                            <button type="submit" name="cpsubmit" style="float: right;margin-top: 0.5em;padding: 0.5em 2em;cursor:pointer;background: #1e91cf;border:1px solid #1e91cf;color:#fff;">Update</button>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Shinex Facility 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

      <?php if(isset($_GET["msgid"])){

            $msgID = $_GET["msgid"];
        ?>
        

            <div class="messageboxmain" id="messageboxmain">
                <div class="container-fluid">

                    <?php 

                        $msgboxsql = "SELECT * FROM usermessages WHERE messageID='$msgID'";
                        $msgboxres = $con->query($msgboxsql)  or die($con->error);
                        while($msgboxrow = $msgboxres->fetch_assoc()){
                    ?>

                    <div class="messagebox">
                        <div class="messageboxName">
                            <h5><?php echo $msgboxrow["uname"] ;?>&nbsp;<span style="font-size:10px;">(<?php echo $msgboxrow["messageDate"] ;?>)</span><button onclick="hideMessage()">x</button></h5>
                            <h6 style="font-size:9px"><?php echo $msgboxrow["uemail"] ;?></h6>
                            <div class="messages">

                                <h6><?php echo $msgboxrow["umesssage"] ;?></h6>
                        <?php 
                            $msgboxuser = $msgboxrow["uemail"];
                            $msgboxsql2 = "SELECT * FROM usermessages WHERE uemail='$msgboxuser' AND messageID!='$msgID' ORDER BY messageID DESC";
                            $msgboxres2 = $con->query($msgboxsql2)  or die($con->error);
                            while($msgboxrow2 = $msgboxres2->fetch_assoc()){
                        ?>
                            <h6><?php echo $msgboxrow2["umesssage"] ;?></h6>

                        <?php }?>

                            
                            </div>
                        </div> 
                    </div>

                <?php } ?>
                </div>
            </div>

        <?php } ?>  

    <!--Reply Model-->
        <div class="modal fade" id="replyModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">


                    <div class="modal-header">
                        <h6 class="modal-title">Reply to Message</h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body">

                        <form action="reply.php" method="POST" id="replyM">

                            Message ID: 
                            <input type="text" name="studentID" id="sID" readonly><br>

                            User Name: 
                            <input type="text" name="studentName" id="sName" readonly><br>

                            User Email 
                            <input type="text" name="studentEmail" id="sEmail" readonly> <br>

                            Reply Message:
                            <textarea rows="4" name="replyMsg" id="replyMsg" required style="width: 100%;">  </textarea><br>


                        </form>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  onclick="if (document.getElementById('replyMsg').value != '') {
                                    document.getElementById('replyM').submit();
                                }">Reply</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    <script>
            $(document).on("click", ".replyModel", function () {
                var id = $(this).data('id');
                var studentName = $(this).data('student');
                var studentEmail = $(this).data('email');
                $(".modal-body #sID").val(id);
                $(".modal-body #sName").val(studentName);
                $(".modal-body #sEmail").val(studentEmail);
            });
        </script>

     <script type="text/javascript">
        function updateMessage(id){
            //$.post("del_notif.php", {id: id});
            window.location.href='messages.php';
           //window.location.href = 'del_notif.php';
        return false;
        }
    </script>

    <script>
        function hideMessage(){
            window.location.href='messages.php';
        }
    </script>

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
