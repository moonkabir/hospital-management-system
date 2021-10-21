<style type="text/css">
.doctor-specialization-list {
    padding-top: 25px;
}
h3.text-danger.text-center {
    margin-bottom: 25px;
}
</style>
<div class="container-fluid container-fullw bg-white doctor-specialization">
    <div class="row">
        <div class="col-md-12 doctor-specialization-list">
            <h3 class="text-danger text-center">NOTE: Take Your Appointment Before 3Days </h3>
            <h5 class="float-left">Appointment Doctors List</h5>
            <form action="patient-appointment-doctor-search.php" method="POST" class="pattient-search-form">
                <input type="text" name="search" class="float-right" placeholder="Type Specialization For Search">
                <button id="search-button" class="float-right" name="submit" value="submit">Search</button>
                <input type="hidden" id="staskid" name="staskid">
            </form>
            <table class="table table-hover" id="sample-table-1">
                <thead>
                    <tr>
                        <th class="center">ID</th>
                        <th>Specialization</th>
                        <th>Name</th>
                        <th>Fees</th>
                        <th>Schedule Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $data['Id'];?></td>
                    <td><?php echo $data['specialization'];?></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['fees'];?></td>
                    <td><?php echo $data['scheduleTime'];?></td>
                    <td>
                         <!-- <a class="update" data-taskid="<?php echo $data['Id'];?>" href='patient-appointment-form.php'>Appiontment</a> -->
                        <form class="edit-docotr-form" role="form" name="dcotorspcl" method="post" >
                            <input type="hidden" name="appointmentdocotrid" value="<?php echo $data['Id'];?>">
                            <button id="editdoctorspecilization" type="submit" name="submit" class="btn btn-o btn-primary">Appiontment</button>
                            <input type="hidden" name="action" value="addappointment">
                        </form>
                    </td>
                </tr>
                <?php
                    }
                    mysqli_close($connection);
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>