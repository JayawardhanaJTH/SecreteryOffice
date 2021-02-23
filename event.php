<?php
    session_start();
    include 'support/header.php';
    require_once("connection/connection.php");
?>
<?php
    if(isset($_SESSION["EVENT_ID"])){
        $id = $_SESSION["EVENT_ID"];
        unset($_SESSION["EVENT_ID"]);
?>
    <div class="container">
        <h1><?php echo $id ?></h1>
    </div>

<?php
		include 'support/footer.php';
?>

<?php
    }else{
?>
<body>
    <div class="container">
        <div class="m-2 m-md-0">
            <h1 class="font-weight-bold event_topic">Event planner</h1>
            <p class="text-muted">Add events which organized by the secretary deviation</p>
        </div>
        <div class="row m-2 m-lg-0 justify-content-md-center">
            <form method="post" action="php/event-add.php" enctype="multipart/form-data" class="event_form col-lg-8" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
                <div>

                    <div class="form-group ">
                        <label for="event_name">Event Name</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-font"></i></div>
                            </div>
                            <input type="text" name="event_name" id="event_name" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                            </div>
                            <input type="date" name="event_date" id="event_date" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_image">Event Image</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-image"></i></div>
                            </div>
                            <input type="file" name="event_image" id="event_image" class="form-control" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_description">Event Description</label>
                        <div class="input-group"> 
                            <textarea class="form-control" name="event_description" id="event_description" cols="0" rows="10" ></textarea>
                        </div>
                    </div>

                    <div>
                        <input class="btn" type="submit" name="event_save" value="Save" id="event_save">
                    </div>
                </div>
            </form>

            <div class="bg-light col ml-lg-5 mt-lg-0 mt-3 event_side_main ">
                <div class="event_side">
                    <div class="topic_line">
                        <h1 class="font-weight-lighter mt-1">Upcoming Events</h1>
                    </div>

                    <div class="upcoming_events p-2 mt-2">
                    
                        <?php
                                $events = array();

                                $sql = "SELECT * FROM events LIMIT 5";

                                $result = mysqli_query($conn, $sql);
                                
                                while($row = mysqli_fetch_object($result)){
                                    $events[] = $row;
                                }
                                
                                if(count($events) > 0){

                                    foreach($events as $event){

                                        $date = $event->e_date;
                                        $month = date('M', strtotime($date));
                                        $day = date('d', strtotime($date));
                                        $description = $event->e_description;
                        ?>
                        <a href="php/event-add.php?event_id=<?php echo $event->e_id; ?>" class="text-decoration-none">
                                <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                    <div class="col-8">
                                        <h1><?php echo $event->e_name ?></h1>
                                        <p> <?php echo implode(' ',array_slice(explode(' ',$description),0,3)) ?>...</p>
                                    </div>

                                    <div class="col-3 badge badge-info">
                                        <h1><?php echo $day ?></h1>
                                        <h1><?php echo $month ?></h1>
                                  
                                </div>
                            </div>
                        </a>
                        <?php
                                    }
                                }else{

                                
                        ?>
                                <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                    <div class="col-8">
                                        <h1>No Upcoming events to show</h1>
                                        <p class="text-muted">No Upcoming events to show </p>
                                    </div>

                                    <div class="col-3 badge badge-info">
                                        <h1></h1>
                                        <h1></h1>
                                  
                                </div>
                        <?php
                                }
                        ?>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/event_add.js"></script>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script> 
    <?php
		include 'support/footer.php';
	?>

<?php
    }

    if(isset($_SESSION["UPLOAD"])){
        if($_SESSION["UPLOAD"] == "success"){
            unset($_SESSION["UPLOAD"]);
        
?>
    <script type="text/javascript">
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Event has been saved',
            showConfirmButton: false,
            timer: 2500
        });
    </script>
<?php
        }else if($_SESSION["UPLOAD"] == "unsuccess"){

            unset($_SESSION["UPLOAD"]);
?>
    <script type="text/javascript">
        Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Event has not saved',
                showConfirmButton: false,
                timer: 2500
            });
    </script>
<?php
        }
    }
?>