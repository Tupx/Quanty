<?php
session_start();
include 'header2.php';?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html" style="text-decoration: none;">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Statistics</li>
          </ol>
        </nav>
        <?php if(!isset($_SESSION['id'])) {echo '<p style="font-size: 2rem; text-align:center;" class="m-0">
          <strong>Please <a href="login.php">Login</a> to access this page ;)</strong></p>'; exit(); }?>
        <nav class="navbar" style="background-color: #cc0000; padding: 1rem">
            <div class="form-inline">
                <img src="img/statistics.png" height="60" width="auto">
                <h4 class="display-4" style="color: #fff; margin: 0rem 1rem">Statistics</h4>
            </div>
            <div class="form-inline">
                <a href="#" id="save">
                    <div class="form-inline">
                        <img src="img/save.png" width="32" height="auto">
                        <h5 class="display-5" style="color: #fff; margin: 0rem 1rem">Save</h5>
                    </div>
                </a>
                <a href="#" id="send">
                    <div class="form-inline">
                        <img src="img/send.png" width="32" height="auto">
                        <h5 class="display-5" style="color: #fff; margin: 0rem 1rem">Send</h5>
                    </div>
                </a>
            </div>
        </nav>
        <form action="scripts/createPackage.php" method="post">
        <nav class="navbar" style="padding: 1rem">
            <div class="input-group m-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">Title:</span>
                </div>
                <?php include_once 'scripts/functions.php';
                if(isset($_GET['code'])) {
                $code = $_GET['code'];
                $sql = "SELECT * FROM statpackage WHERE package_id = '$code' ";
                $query = mysqli_query($DB_CON, $sql);
                $result = mysqli_fetch_row($query);
                echo '<input value="'.$result[2].'" name="title" type="text" class="form-control" placeholder="Example title.qntm" aria-describedby="save" style="border-color: #cc0000">';
              } else {
                echo '<input name="title" type="text" class="form-control" placeholder="Example title.qntm" aria-describedby="save" style="border-color: #cc0000">';
              }?>

            </div>
        </nav>
        <nav style="background-color: #eee; padding: 1rem">
            <nav class="navbar navbar-expand-lg" style="background-color: #eee">
              <p style="font-size: 2rem" class="m-0"><strong>Write Algorithm</strong></p>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#writealgo" aria-controls="writealgo" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="writealgo">
                <div class="ml-auto p-auto">
                    <button class="btn btn-secondary mr-1">
                        <img src="img/edit.png" height="32" width="auto">
                    </button>
                    <button class="btn btn-secondary mr-1">
                        <img src="img/chart.png" height="32" width="auto">
                    </button>
                    <button class="btn btn-secondary mr-1">
                        <img src="img/pin.png" height="32" width="auto">
                    </button>
                    <button class="btn btn-secondary mr-2">
                        <img src="img/tag.png" height="32" width="auto">
                    </button>
                </div>
                <div class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                </div>
              </div>
            </nav>
            <hr class="m-0">
            <div class="row mb-0">
                <div class="col m-2">
                    <div class="input-group">
                        <?php if(isset($_GET['code'])) {
                          $data = $result[3];
                          echo '<textarea name="content" class="form-control"
                          aria-label="With textarea" style="height: 495px; border-color: #cc0000;
                          background-color: #ddd">'.$data.'</textarea>';
                        }else {
                          echo '<textarea name="content" class="form-control"
                          aria-label="With textarea" style="height: 495px;
                          border-color: #cc0000; background-color: #ddd"></textarea>';

                        }?>
                    </div>
                    <div class="form-inline mt-2 p-0" role="group" aria-label="text-area-save">
                        <div class="ml-auto">
                            <a href="#"><button class="btn btn-secondary mr-2">Cancel</button></a>
                            <button class="btn btn-primary" type="submit">Save</button>
                          </form>
                        </div>
                    </div>
                </div>
                <div class="col m-2">
                    <div class="navbar rounded p-auto" style="background-color: #cc0000">
                        <p style="color: #fff; font-size: 1.5rem" class="mr-auto mb-0">Modules</p>
                        <a href="#"><img src="img/add.png" width="26" height="auto" class="ml-auto"></a>
                    </div>
                    <ul class="list">
                        <li><p class="lead m-1" style="color: #aaa"><i>Add modules from directory...</i></p></li>
                        <hr class="m-0">
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
