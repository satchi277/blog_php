<?php
include('security.php');

if (isset($_POST['comm_data_save'])) {
	$date_of_n = $_POST['date_of_n'];
	$fc = $_POST['f_c'];
	$name = $_POST['n_name'];
	$surname = $_POST['n_surname'];
	$mob_no = $_POST['n_mob_no'];
	$pin = $_POST['n_pin'];
	$dist = $_POST['n_dist'];
	$img = $_FILES['nivedan_img']['name'];

	if (file_exists("upload/" . $_FILES["nivedan_img"]["name"])) {
		$store = $_FILES["nivedan_img"]["name"];
		$_SESSION['status'] = "image is already exists '.$store.'";
		header('Location: communication.php');
	} else {
		$query = "INSERT INTO communication (d_o_n,fc,name,surname,mob_no,pin,district,upload_img) 
		VALUES ('$date_of_n','$fc','$name','$surname','$mob_no','$pin','$dist','$img')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			move_uploaded_file($_FILES["nivedan_img"]["tmp_name"], "upload/" . $_FILES["nivedan_img"]["name"]);
			$_SESSION['success'] = "Communication Data Added";
			header('Location: communication.php');
		} else {
			$_SESSION['status'] = "Communication Data Not Added";
			header('Location: communication.php');
		}
	}
}






//register the admin profile

if (isset($_POST['registerbtn'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['confirmpassword'];
	$usertype = $_POST['usertype'];

	if ($password === $cpassword) {
		$query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
		$query_run = mysqli_query($connection, $query);

		if ($query_run) {
			//echo Saved
			$_SESSION['success'] = "Admin Profile Added";
			header('Location: register.php');
		} else {
			$_SESSION['status'] = "Admin Profile Not Added";
			header('Location: register.php');
		}
	} else {
		$_SESSION['status'] = "Password And Confirm Password Mismatch";
		header('Location: register.php');
	}
}


if (isset($_POST['update_btn'])) {
	$id = $_POST['edit_id'];
	$username = $_POST['edit_username'];
	$email = $_POST['edit_email'];
	$password = $_POST['edit_password'];
	$updateusertype = $_POST['update_user_type'];

	$query = "UPDATE register SET username='$username',email='$email',password='$password',usertype='$updateusertype' WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] = "Your Data Is Updated";
		header('Location: register.php');
	} else {
		$_SESSION['status'] = "Your Data Is Not Updated";
		header('register.php');
	}
}


if (isset($_POST['delete_btn'])) {
	$id = $_POST['delete_id'];

	$query = "DELETE FROM register WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if ($query_run) {
		$_SESSION['success'] = "Your Data Is Deleted";
		header('Location: register.php');
	} else {
		$_SESSION['status'] = "Your Data Is Not Deleted";
		header('register.php');
	}
}

if (isset($_POST['login_btn'])) {
	$login_email = $_POST['emaill'];
	$login_password = $_POST['passwordd'];

	$query = "SELECT * FROM register WHERE email='$login_email' AND password='$login_password' ";
	$query_run = mysqli_query($connection, $query);
	$usertypes = mysqli_fetch_array($query_run);

	if ($usertypes['usertype'] == "admin") {
		$_SESSION['username'] = $login_email;
		header('Location: index.php');
	} else if ($usertypes['usertype'] == "user") {
		$_SESSION['username'] = $login_email;
		header('Location: ../index.php');
	} else {
		$_SESSION['status'] = 'Email id / Password is Invalid';
		header('Location: login.php');
	}
}
