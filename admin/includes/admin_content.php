
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $session->count; ?></div>
                                        <div>New Views</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                  <span class="pull-left">View Details</span> 
                               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> 
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-photo fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Photo::count_all(); ?></div>
                                        <div>Photos</div>
                                    </div>
                                </div>
                            </div>
                            <a href="photos.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Photos in Gallery</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo User::count_all();  ?>

                                        </div>

                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Users</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo Comment::count_all(); ?></div>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Comments</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                        </div> <!--First Row-->


                    <div class="row">
                    
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                    
                    </div>

            <?php

            // $sql = "SELECT * FROM users WHERE id=1";
            // $result = $database->query($sql);
            // $user_found = mysqli_fetch_array($result);

            // echo $user_found['username'];


            // $user = new User();
            // $result_set = $user->find_all_users();


            // $result_set = User::find_all();
            // while($row = mysqli_fetch_array($result_set)){
            //     echo $row["username"] . "<br>";
            // }

            // $photos = Photo::find_all();

            // foreach ($photos as $photo ) {
            //     echo $photo->title . "<br>";
            // }


            //$photo = Photo::find_by_id(14);

            // $user = User::instantation($found_user);
            
            // $user = new User();

            // $user->id = $found_user['id'];
            // $user->username = $found_user['username'];
            // $user->password = $found_user['password'];
            // $user->first_name = $found_user['first_name'];
            // $user->last_name = $found_user['last_name'];
            
            //echo $photo->title . "<br>";
            

            // $users = User::find_all_users();

            // foreach($users as $user){
            //     echo $user->password . "<br>";
            // }

            // $found_user = User::find_user_by_id(0);

            // echo $found_user->username;

            // $hreoh = new Picture();

            // $photo = new Photo(); // start of create user

            //     $photo->title = "efregv";
            //     $photo->description = "sfvfvfdvbfdbbgb rt tb brt brt wbrd";
            //     $photo->filename = "adsbfgb";
            //     $photo->type = "sddsfds";
            //     $photo->size = "12";
            //     $photo->create();   //End off create user


            // $user = User::find_user_by_id(13);

            // // // $user->first_name = "fewrf";

            // // // $user->update();

            // // $user->delete();4
            
            // // $user = new User();

            // $user->first_name = "asd";
            // $user->last_name = "sdfa";
            // $user->save();

            // echo INCLUDES_PATH;
            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>


