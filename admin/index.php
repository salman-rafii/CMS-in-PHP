<?php require_once("inc/top.php"); ?>
  <body>
<div id="wrapper">
    
          <?php require_once("inc/header.php"); ?>
       <div class="container-fluid body-section " style="margin-top: 70px; ">
           <div class="row">
               <div class="col-sm-3">
                <?php require_once("inc/sidebar.php"); ?>  
               </div>

               <div class="col-sm-9">
                   <h1><i class="fa fa-tachometer"></i>  Dashboard <small>Statistics Overview</small></h1><hr>
                    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-tachometer"></i> Dashboard</li>

      </ol>
        <!--###### TAGBOXES START########-->
        <div class="row" style="width: 1000px;" id="tag">

           <!--##################### COMMENT BOX STARTS #####################-->
            <div class="col-md-6 col-lg-3">
           <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
           <div class="panel-primary">
          <div class="card-header">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-comments fa-5x"></i>
                  </div>
                  <div class="col-xs-9">
                      <div class="text-right huge" style="display: block; text-align: right; padding: 7px;  font-size: 40px; margin-left: 50px;">11</div>
                  </div>
                   <div class="text-right huge" style="display: block;  padding: 7px; margin-left: 80px;  ">New Comments</div>
              </div>
          </div>
               <a href="#">
                <div class="card-footer text-muted" style="background-color: rgb(225, 229, 237);">
                    <span class="pull-left" style="color: #2FA4E7;">
                        View All Comments
                    </span><span class="pull-right" style="color: #2FA4E7;">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                  </div>   
               </a>
               </div>
                </div>

                </div>
                <!--##################### COMMENT BOX ENDS #####################-->

                 <!--##################### POSTS BOX STARTS #####################-->
            <div class="col-md-6 col-lg-3">
           <div class="card text-white bg-primary mb-3 "  style="max-width: 20rem;">
           <div class="panel-red">
          <div class="card-header">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-file-text fa-5x"></i>
                  </div>
                  <div class="col-xs-9">
                      <div class="text-right huge" style="display: block; text-align: right;margin-left: 50px; padding: 7px;  font-size: 40px;">18</div>
                  </div>
                   <div class="text-right huge" style="display: block;  padding: 7px; margin-left: 80px; ">All Posts</div>
              </div>
          </div>

               <a  href="#">
                <div class="card-footer text-muted" style="background-color: rgb(225, 229, 237);">
                    <span class="pull-left" style="color: #d9534f;">
                        View All Posts
                    </span><span class="pull-right" style="color: #d9534f;">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                  </div>   
               </a>
               </div>
                </div>

                </div>
                <!--##################### POSTS BOX ENDS #####################-->

                 <!--##################### USERS BOX STARTS #####################-->
            <div class="col-md-6 col-lg-3">
           <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
           <div class="panel-yellow">
          <div class="card-header">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9">
                      <div class="text-right huge" style="display: block; text-align: right; padding: 7px;  font-size: 40px; margin-left: 50px;">11</div>
                  </div>
                   <div class="text-right huge" style="display: block;  padding: 7px; margin-left: 80px;  ">All Users</div>
              </div>
          </div>
               <a href="#">
                <div class="card-footer text-muted" style="background-color: rgb(225, 229, 237);">
                    <span class="pull-left" style="color: #f0ad4e;">
                        View All Users
                    </span><span class="pull-right" style="color: #f0ad4e;">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                  </div>   
               </a>
               </div>
                </div>

                </div>
                <!--##################### USERS BOX ENDS #####################-->

                 <!--##################### CATAGORIES BOX STARTS #####################-->
            <div class="col-md-6 col-lg-3">
           <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
           <div class="panel-green">
          <div class="card-header">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-folder-open fa-5x"></i>
                  </div>
                  <div class="col-xs-9">
                      <div class="text-right huge" style="display: block; text-align: right; padding: 7px;  font-size: 40px; margin-left: 50px;">9</div>
                  </div>
                   <div class="text-right huge" style="display: block;  padding: 7px; margin-left: 80px; ">All Catagories</div>
              </div>
          </div>
               <a href="#">
                <div class="card-footer text-muted" style="background-color: rgb(225, 229, 237);">
                    <span class="pull-left" style="color: #5cb85c;">
                        View All Categories
                    </span><span class="pull-right" style="color: #5cb85c;">
                        <i class="fa fa-arrow-circle-right"></i>
                    </span>
                    <div class="clearfix"></div>
                  </div>   
               </a>
               </div>
                </div>

                </div>
                <!--##################### CATAGORIES BOX ENDS #####################-->


                </div>
                  <!--###### TAGBOXES END########-->

        <!--########## USERS TABLE START #############-->
                  <h3>New Users</h3>
                  <table class="table table-hover table-striped">
                      <thead>
                         <!--### TABLE HEADING STARTS ###-->
                          <tr>
                              <th>Sr #</th>
                              <th>Date</th>
                              <th>Name</th>
                              <th>Username</th>
                              <th>Role</th>
                          </tr>
                          <!--### TABLE HEADING STARTS ###-->
                      </thead>
                      <tbody>
                         <!--### ROW START ####-->
                          <tr>
                              <td>1</td>
                              <td>23 dec 2018</td>
                              <td>Salman Rafi</td>
                              <td>salman rafi125</td>
                              <td>Admin</td>
                          </tr>
                          <!--#### ROW ENDS ####-->
                           <!--### ROW START ####-->
                          <tr>
                              <td>2</td>
                              <td>17 aug 2018</td>
                              <td>Mohsin majeed</td>
                              <td>mohsinmajeed125</td>
                              <td>Admin</td>
                          </tr>
                          <!--#### ROW ENDS ####-->
                           <!--### ROW START ####-->
                          <tr>
                              <td>3</td>
                              <td>17 aug 2018</td>
                              <td>Mohammad Zafar</td>
                              <td>mohamamdzafar1255</td>
                              <td>Admin</td>
                          </tr>
                          <!--#### ROW ENDS ####-->
                           <!--### ROW START ####-->
                          <tr>
                              <td>4</td>
                              <td>23 sep 2018</td>
                              <td>Mohammad Irfan</td>
                              <td>irfan123</td>
                              <td>Admin</td>
                          </tr>
                          <!--#### ROW ENDS ####-->
                           <!--### ROW START ####-->
                          <tr>
                              <td>5</td>
                              <td>23 nov 2018</td>
                              <td>Nouman Ahmad</td>
                              <td>nouman124</td>
                              <td>Admin</td>
                          </tr>
                          <!--#### ROW ENDS ####-->
                      </tbody>
                  </table>

                  <!--####### USERS TABLE ENDS #######-->

                  <a href="#" class="btn btn-primary">View All Users</a><hr>

                  <!--######## POSTS TABLE STARTS #########-->
                  <h3>New Posts</h3>
                  <table class="table table-hover table-striped">
                      <thead>
                          <tr>
                              <th>Sr #</th>
                              <th>Date</th>
                              <th>Post Title</th>
                              <th>Category</th>

                              <th>Views</th>
                          </tr>
                      </thead>
                      <tbody>
                         <!--####### ROW STARTS ####### -->
                          <tr>
                              <td>1</td>
                              <td>23 Dec 2018 </td>
                              <td>Learn Php</td>
                              <td>video</td>
                              <td><i class="fa fa-eye"></i> 28</td>
                          </tr>
                           <!--####### ROW ENDS ####### -->
                            <!--####### ROW STARTS ####### -->
                          <tr>
                              <td>1</td>
                              <td>23 Dec 2018 </td>
                              <td>Learn Php</td>
                              <td>video</td>
                              <td><i class="fa fa-eye"></i> 28</td>
                          </tr>
                           <!--####### ROW ENDS ####### -->
                            <!--####### ROW STARTS ####### -->
                          <tr>
                              <td>1</td>
                              <td>23 Dec 2018 </td>
                              <td>Learn Php</td>
                              <td>video</td>
                              <td><i class="fa fa-eye"></i> 28</td>
                          </tr>
                           <!--####### ROW ENDS ####### -->
                            <!--####### ROW STARTS ####### -->
                          <tr>
                              <td>1</td>
                              <td>23 Dec 2018 </td>
                              <td>Learn Php</td>
                              <td>video</td>
                              <td><i class="fa fa-eye"></i> 28</td>
                          </tr>
                           <!--####### ROW ENDS ####### -->
                            <!--####### ROW STARTS ####### -->
                          <tr>
                              <td>1</td>
                              <td>23 Dec 2018 </td>
                              <td>Learn Php</td>
                              <td>video</td>
                              <td><i class="fa fa-eye"></i> 28</td>
                          </tr>
                           <!--####### ROW ENDS ####### -->
                      </tbody>
                  </table>

                  <a href="#" class="btn btn-primary">View Posts</a>
                     <!--######## POSTS TABLE ENDS #########-->
           </div>
       </div>
          </div> 

     
<?php require_once("inc/footer.php");?>
</div>
   
  </body>
