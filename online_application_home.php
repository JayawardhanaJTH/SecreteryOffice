<?php
    session_start();
    if(!isset($_SESSION['logged'])){
        header("location: login.php");
		
	}
    $page = "forms";
    require "connection/connection.php";
    include "support/header.php";
?>
	<link href="layout/styles/dashboard.css" rel="stylesheet" type="text/css" media="all">

    <div class="container">
        <div class="dash">
            <div class="topic">
                <h1>Online Applications</h1>
            </div>
            <div class="panel">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="online_application.php">
                            <div class="card">
                                <div class="text-center">
                                    <h1>Business Registration</h1>
                                </div>
                                <div class="card-body text-center">
                                    <div class="details">
                                        <p>Application for Business Registration</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="online_application2.php">
    
                            <div class="card">
                                <div class="text-center">
                                    <h1>Requirement Application</h1>
                                </div>
                                <div class="card-body text-center">
                                    <div class="details">
                                        <p> Application for request requirement application</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>   
                </div>       
            </div>
        </div>
    <!-- load data  -->
    <?php
    if($_SESSION['TYPE'] == '0'){
        $id = $_SESSION['USER_ID'];
        
        $sql1  = "SELECT * FROM business_registration WHERE submitted_by= '$id'";
        $sql2  = "SELECT * FROM requirement_application WHERE submitted_by= '$id'";

        $result_business = mysqli_query($conn, $sql1);
        $result_requirement = mysqli_query($conn, $sql2);

        $business = mysqli_fetch_all($result_business,MYSQLI_ASSOC);
        $requirement = mysqli_fetch_all($result_requirement,MYSQLI_ASSOC);
        
    ?>
        <div class="dash">
            <div class="topic">
                <h1>Submitted Applications</h1>
            </div>
            <div class="panel">
                <div class="row justify-content-center">
                    <?php
                        foreach($business as $obj){
                            $grama = $obj['grama_niladhari_approval'];
                            $sec = $obj['secretary_approval'];
                            $g_status = "Not Approved";
                            $s_status = "Not Approved";

                            if($grama == '1'){
                                $g_status = "Approved";
                            }else if($grama == '3'){
                                $g_status = "Rejected";
                            }

                            if($sec == '1'){
                                $s_status = "Approved";
                            }else if($sec == '3'){
                                $s_status = "Rejected";
                            }
                    ?>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="view_application1.php?id=<?php echo $obj['f_id'] ?>">
                            <div class="card">
                                <div class="text-center">
                                    <h1>Application Type : Business Registration</h1>
                                </div>
                                <div class="card-body">
                                    <div class="details">
                                        <p>Status : Grama Niladhari - <?php echo $g_status ?></p>
                                        <p>Status : Secretary - <?php echo $s_status ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }

                        foreach($requirement as $obj){
                            $grama = $obj['grama_approval'];
                            
                            $g_status = "Not Approved";
                            

                            if($grama == '1'){
                                $g_status = "Approved";
                            }else if($grama == '3'){
                                $g_status = "Rejected";
                            }
                    ?>
                    <div class="col-md-6 col-sm-12 mb-3">
                        <a href="view_application2.php?id=<?php echo $obj['f_id'] ?>">
                            <div class="card">
                                <div class="text-center">
                                    <h1>Application Type : Requirement Application</h1>
                                </div>
                                <div class="card-body">
                                    <div class="details">
                                        <p>Status : Grama Niladhari - <?php echo $g_status ?></p>
                                        <p> </P>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> 
                    <?php
                        }
                    ?>  
                </div>       
            </div>
        </div>
        <?php
    }
        ?>
    </div>
<?php
include "support/footer.php";

    if(isset($_SESSION["FORM_SUBMITTED"])){
        if($_SESSION["FORM_SUBMITTED"] == true){
            unset($_SESSION["FORM_SUBMITTED"]);
        
?>
    <script type="text/javascript">
        success_popup('Form has been Submitted');
    </script>
<?php
    }else{

        unset($_SESSION["FORM_SUBMITTED"]);
?>
    <script type="text/javascript">
        error_popup('Form has been not submitted');
    </script>
<?php
    }
}

?>