<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container-fluid">

    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="POST">
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Name</label>
                        <input class="form-control" placeholder="Enter Name" type="text" name="get_name">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Surname</label>
                        <input class="form-control" placeholder="Enter Name" type="text" name="get_surname">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Mobile No.</label>
                        <input class="form-control" placeholder="Enter Name" type="text" name="get_m_no">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Pin</label>
                        <input class="form-control" placeholder="Enter Name" type="text" name="get_pin">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">District</label>
                        <input class="form-control" placeholder="Enter Name" type="text" name="get_dist">
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="exampleInputEmail1">Date</label>
                        <input class="form-control" type="date" name="get_date">
                    </div>
                    <button type="submit" name="search" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>

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
            if (isset($_POST['search'])) {
                $name = $_POST['get_name'];
                $surname = $_POST['get_surname'];
                $m_no = $_POST['get_m_no'];
                $pin = $_POST['get_pin'];
                $dist = $_POST['get_dist'];
                $date = $_POST['get_date'];

                $query = "SELECT * FROM communication WHERE name = '$name' OR surname = '$surname' OR mob_no = '$m_no' OR pin = '$pin' OR district = '$dist' OR d_o_n = '$date' ";
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
    <?php
            }
    ?>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>