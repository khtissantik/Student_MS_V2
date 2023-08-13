<div class="row">
    
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <div class="col-md-3 mt-3">
                <div class="card">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Schedule Form</h5>
                    </div>
                    <div class="card-body p-1">
                        <div class="container-fluid">
                            <form action="save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm " name="title" id="title" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea rows="3" class="form-control form-control-sm " name="description" id="description" required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Start</label>
                                    <input type="datetime-local" class="form-control form-control-sm " name="start_datetime" id="start_datetime" required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">End</label>
                                    <input type="datetime-local" class="form-control form-control-sm " name="end_datetime" id="end_datetime" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm " type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                            <button class="btn btn-default border btn-sm " type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="card">
            <div class="card-header">
                <h3 class="card-title">Event</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">



                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-sm table-hover text-sm">

                    <tbody>
                    <?php
                      include_once('../dbcon.php');
                      $sql = "SELECT * FROM schedule_list";

                      //use for MySQLi Procedure
                      $query = mysqli_query($con, $sql);
                     
                      while ($row = mysqli_fetch_assoc($query)) {

                      ?>
                        <tr id="font">
                            <td><b><?php echo $row['title']; ?></b></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['start_datetime']; ?> To <?php echo $row['end_datetime']; ?></td>
                        </tr>
                        
                        <?php
                    
                      }
                      ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->
    <div class="modal fade" aria-hidden="true" style="display: none;" id="event-details-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Schedule Details</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                </div>
               <div class="modal-body ">
                <div class="container-fluid">
                    <dl>
                        <dt class="text-muted">Title</dt>
                        <dd id="title" class="fw-bold fs-4"></dd>
                        <dt class="text-muted">Description</dt>
                        <dd id="description" class=""></dd>
                        <dt class="text-muted">Start</dt>
                        <dd id="start" class=""></dd>
                        <dt class="text-muted">End</dt>
                        <dd id="end" class=""></dd>
                    </dl>
                </div>
            </div>
                <div class="modal-footer ">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm " id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm " id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm " data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

<?php 
$schedules = $con->query("SELECT * FROM `schedule_list`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['start_datetime']));
    $row['edate'] = date("F d, Y h:i A",strtotime($row['end_datetime']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($con)) $con->close();
?>