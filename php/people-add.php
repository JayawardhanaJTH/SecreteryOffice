<?php
$hostname = 'localhost';
$dbPassword = '';
$dbUsername = 'root';
$database = 'divisional_secretary';

try {
    $conn = new mysqli($hostname,$dbUsername,$dbPassword,$database);

    if($conn->connect_error){
        die ("Connection failed " .$conn->connect_error);
    }
} catch (\Throwable $th) {
    echo("Error on database server!");
}

if($_POST['id'] == "insert"){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $nic_num = $_POST['nic_num'];

    $sql = "INSERT INTO people( first_name, last_name, full_name, email, contact_number, nic_num) 
	VALUES ('$first_name','$last_name','$full_name','$email', '$contact_number', '$nic_num')";


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
                <th>People Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Nic Number</th>    
                <th>Control</th>        
            </tr>
            </thead>
            <tbody class='text-center'>
    ";

    $query = "SELECT * FROM people ORDER by pid";

    $rs = $conn->query($query);

    while ($row = $rs->fetch_assoc()){
        $pid = $row['pid'];
        $first_name= $row['first_name'];
        $last_name = $row['last_name'];
        $full_name = $row['full_name'];
        $email = $row['email'];
        $contact_number = $row['contact_number'];
        $nic_num = $row['nic_num'];

        $output.= "
            <tr>
                <td>$pid</td>
                <td>$first_name</td>
                <td>$last_name</td>
                <td>$full_name</td>
                <td>$email</td>
                <td>$contact_number</td>
                <td>$nic_num</td>
                <td class='text-center btn-group'><button onclick='getUserDetails()' title='Update Record' class='btn btn-warning'  data-toggle='modal'><span><i class=\"fa fa-edit\"></i></span></button><button onclick='delete_user()' class=\"btn btn-danger\"><span><i class=\"fas fa-user-times\"></i></span></span></button></td>
            </tr>
        ";
    }

    $output.='
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
