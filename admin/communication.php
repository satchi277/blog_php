<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>
<div class="modal fade" id="addcommunicationdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Communication Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="code.php" method="POST" enctype="multipart/form-data">

                <div class="modal-body">

                    <div class="form-group">
                        <label> Date Of Nivedan </label>
                        <input type="date" name="date_of_n" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Family Code</label>
                        <input type="text" name="f_c" class="form-control" placeholder="Enter Fc">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="n_name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" name="n_surname" class="form-control" placeholder="Enter Surname">
                    </div>
                    <div class="form-group">
                        <label>Mobile No.</label>
                        <input type="number" name="n_mob_no" class="form-control" placeholder="enter Mobile number">
                    </div>
                    <div class="form-group">
                        <label>Pin no.</label>
                        <input type="number" name="n_pin" class="form-control" placeholder="Enter Pin">
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" name="n_dist" class="form-control" placeholder="Enter District">
                    </div>
                    <div class="form-group">
                        <label>Upload</label>
                        <input type="file" name="nivedan_img" id="nivedan_img" class="form-control">
                    </div>
                    <input type="hidden" name="usertype" value="admin">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="comm_data_save" class="btn btn-primary">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Communication data
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcommunicationdata">
                    Add Communication data
                </button>
            </h6>
        </div>

        <div class="card-body">

            <?php
            if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                echo '<h2> ' . $_SESSION['success'] . ' </h2>';
                unset($_SESSION['success']);
            }

            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2> ' . $_SESSION['status'] . ' </h2>';
                unset($_SESSION['status']);
            }
            ?>

            <div class="table-responsive">

                <?php
                $query = "SELECT * FROM communication";
                $query_run = mysqli_query($connection, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Date Of Nivedan </th>
                            <th> Family Code </th>
                            <th> Name </th>
                            <th>Surname </th>
                            <th>Mobile Number</th>
                            <th>pin</th>
                            <th>District</th>
                            <th>Uploded Image</th>
                            <th>EDIT </th>
                            <th>DELETE </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['d_o_n']; ?></td>
                                    <td><?php echo $row['fc']; ?></td>
                                    <td><?php echo $row['n_name']; ?></td>
                                    <td><?php echo $row['surname']; ?></td>
                                    <td><?php echo $row['mob_no']; ?></td>
                                    <td><?php echo $row['pin']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo '<img src="upload/' . $row['upload_img'] . '" width="100px" height="100px" alt="Image">' ?> </td>
                                    <td>
                                        <form action="register_edit.php" method="post">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="code.php" method="post">
                                            <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "NO RECORD FOUND";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>