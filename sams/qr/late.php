<?PHP

session_start();

if (!(isset($_SESSION['jjk']) && $_SESSION['jjk'] != '')) {

header ("Location: ../index.php");

}

?>

<!doctype html>
<html lang="en">

    <head>
    <meta charset="utf-8">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   -->
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable_1').DataTable();
        });
    </script>
   
   
        <title>
            SAMS
        </title>
        <link rel="icon" href="../img/ILOGO.png" type="image/png">
        <nav class="navbar navbar-expand-lg" style="background-color: #5aafff">
    <a class="navbar-brand" href="index.php"><strong style="color: #fff"><i class='fa fa-user-clock'></i> DAILY TIME RECORD</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="late.php" style="color: #fff"><b><i class="fa fa-user"></i> LOGIN </b></a>
            </li>

        </ul>

    </div> -->
</nav><br>
    </head>
    <body onload="startTime()"><br>

        <!-- Includes -->
        <?php 
            require 'Controllers/Fetch_data.php';
            
        ?>

<div class="container">
        <!-- <div class="row">
            <div class="col-md-4">
                <center>
                    <p style="border: 1px solid #ffbc05;background-color: #ffbc05;color: #fff"><i class="fas fa-qrcode"></i> TAP HERE</p>
                </center>
                 <video id="preview" width="100%"></video>
                
                 <hr></hr>
            </div> -->

            <div class="col-md-8">
                <center>
                    <div id="clockdate" style="border: 1px solid #5aafff;background-color: #5aafff">
                        <div class="clockdate-wrapper">
                            <div id="clock" style="font-weight: bold; color: #fff;font-size: 40px"></div>
                            <div id="date" style="color: #fff"><i class="fas fa-calendar"></i> <?php echo date('l, F j, Y'); ?></div>
                        </div>
                    </div>
                </center>



    

                <!-- <form action="" method="POST" class="form-harizontal">

                    <label><b>SCAN QR CODE</b></label>
                    <input type="text" name="sindex" id="sindex" readonly="" placeholder="scan qrcode" class="form-control"> <br>
                    <div class="radio_section"> 
                        <input type="radio" name="in_out_status" id="in" value="in" class="">
                        <label for="in">IN</label>
                        <input type="radio" name="in_out_status" id="out" value="out" class="">
                        <label for="out">Out</label>
                        <input type="radio" name="in_out_status" id="home" value="home" class="">
                        <label for="home">Home</label>
                    </div> -->

                    <!-- <br>
                    <div class="btn_submit">
                        <input type="submit" value="submit" class="btn">
                    </div>
                </form> -->
                <hr>
                </hr>
               <div class="table-responsive">
                <table id="dataTable_1" class="table table-bordered table-striped">
<h6><center>Use "Send Mail" button to send a reminder email to students who have not arrived at university by 7:00 pm <center></h6>
                                    <!-- Button trigger modal -->
<div class="text-center">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Send Mail 
</button>
</div>

<br>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send e-mails to students</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure that you want to send reminder to all students who have not arrived by 7:00 pm.
 <br>Press Confirm to continue.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="mail" role="button">Confirm</a>
        
      </div>
    </div>
  </div>
</div> 
                    <thead>
                        <tr>
                            <th>Record ID</th>
                            <th>Student ID</th>
                            <th>Record Time</th>
                            <th>Status</th>
                            <th>LOGDATE</th>

                        </tr>
                    </thead>
                    <tbody>    
                   <?php 
                      $all_data = get_late_today();
                    ?>
                    <?php foreach ($all_data as $row) { ?>
                        <tr align="center">
                            <td><?= htmlentities($row['At_id']); ?></td>
                            <td><?= htmlentities($row['sindex']); ?></td>
                            <td><?= htmlentities($row['record_date']); ?></td>
                            <td><?= htmlentities($row['out_or_in']); ?></td>
                            <td>  <?= htmlentities(date("M d, Y",strtotime($row['record_time']))); ?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
          </div>

      </div>
    </div>


     <script type="text/javascript">
      document.oncontextmenu = document.body.oncontextmenu = function() {return false;}//disable right click
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
           

</body>

</html>   