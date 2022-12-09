<?php
$hostname = 'localhost';
$dbPassword = '';
$dbUsername = 'root';
$database = 'divisional_secretary';

try {
    $conn = new mysqli($hostname, $dbUsername, $dbPassword, $database);

    if ($conn->connect_error) {
        die("Connection failed " . $conn->connect_error);
    }
} catch (\Throwable $th) {
    echo ("Error on database server!");
}

if ($_POST['id'] == "insert") {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $grama_niladhari_division = $_POST['grama_niladhari_division'];
    $gender = $_POST['gender'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $to = $email;
    $mailSubject =  "Secretary Divisions Account Created..";
    $emailBody = "Your <b>Username :</b> $email <br>";
    $emailBody .= "Your <b>Password :</b> $password <br>Thank You !";

    $header = "From: secraterywththala@gmail.com\r\nContent-Type: text/html;";

    $sen = mail($to, $mailSubject, $emailBody, $header);

    if ($sen) {
        echo "1";
    } else {
        echo "not send";
    }

        $sql = "INSERT INTO people( first_name, last_name, email, grama_niladhari_division, gender, contact_number, address, password) 
    	VALUES ('$first_name','$last_name','$email', '$grama_niladhari_division', '$gender', '$contact_number', '$address', '$password')";


        if (mysqli_query($conn, $sql)) {
    //        echo json_encode(array("statusCode"=>200));
        }
        else {
    //        echo json_encode(array("statusCode"=>201));
        }
        mysqli_close($conn);
}

if ($_POST['id'] == "show") {

    $output = "";

    $output .= "
        <table id=\"example1\" class=\"table hover table-bordered \">
            <thead class='text-center'>
            <tr>    
                <th hidden>Id</th>          
                <th>First Name</th>
                <th>Last Name</th>              
                <th>Email</th>
                <th>Grama Niladhari Division</th>
                <th>Gender</th>
                <th>Contact Number</th>  
                <th>Control</th>        
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

    $query = "SELECT * FROM people ORDER by pid";

    $rs = $conn->query($query);

    while ($row = $rs->fetch_assoc()) {
        $pid = $row['pid'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $grama_niladhari_division = $row['grama_niladhari_division'];
        $gender = $row['gender'];
        $contact_number = $row['contact_number'];
        $address = $row['address'];

        $output .= "
            <tr>
                <td hidden>$pid</td>
                <td>$first_name</td>
                <td>$last_name</td>            
                <td>$email</td>
                <td>$grama_niladhari_division</td>
                <td>$gender</td>
                <td>$contact_number</td>
                <td class='text-center btn-group'><button 
                onclick='getPeopleDetails($pid, \"$first_name\", \"$last_name\", \"$email\", \"$grama_niladhari_division\",
                \"$gender\", \"$contact_number\", \"$address\")' title='Update People Details' class='btn '  type='button' data-toggle='modal' data-target='#people_details_update'><span><i class=\"fa fa-edit\"></i></span></button>
                    <button onclick='delete_people($pid)' title='Delete People Details' class=\"btn \"><span><i class=\"fas fa-user-times\"></i></span></span></button>
                </td>
            </tr>
        ";
    }

    $output .= '
        </tbody>
    </table>

   <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");
    });
  </script>

    ';

    echo $output;
}

if ($_POST['id'] == "update") {

    $update_pid = $_POST['update_pid'];
    $update_first_name = $_POST['update_first_name'];
    $update_last_name = $_POST['update_last_name'];
    $update_email = $_POST['update_email'];
    $update_grama_niladhari_division = $_POST['update_grama_niladhari_division'];
    $update_gender = $_POST['update_gender'];
    $update_contact_number = $_POST['update_contact_number'];
    $update_address = $_POST['update_address'];

    $sql = "update people set first_name='$update_first_name', last_name='$update_last_name', email='$update_email', grama_niladhari_division='$update_grama_niladhari_division', 
                  gender='$update_gender', contact_number='$update_contact_number', address='$update_address' where pid='$update_pid'";


    if (mysqli_query($conn, $sql)) {
        //        echo json_encode(array("statusCode"=>200));
        echo 1;
    } else {
        //        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
}

if ($_POST['id'] == "delete") {

    $pid = $_POST['pid'];

    $sql = "delete from people where pid='$pid'";
    if (mysqli_query($conn, $sql)) {
        echo 1;
    } else {
        echo 2;
    }
    mysqli_close($conn);
}
