<?php
    include 'support/header.php';
?>
<body>
    <div class="container">
        <div class="m-2 m-md-0">
            <h1 class="font-weight-bold event_topic">Event planner</h1>
            <p class="text-muted">Add events which organized by the secretary deviation</p>
        </div>
        <div class="row m-2 m-lg-0 justify-content-md-center">
            <form class="event_form col-lg-8">
                <div >

                    <div class="form-group ">
                        <label for="event_name">Event Name</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-font"></i></div>
                            </div>
                            <input type="text" name="event_name" id="event_name" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                            </div>
                            <input type="date" name="event_date" id="event_date" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_image">Event Image</label>
                        <div class="input-group"> 
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-image"></i></div>
                            </div>
                            <input type="file" name="event_image" id="event_image" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="event_description">Event Description</label>
                        <div class="input-group"> 
                            <textarea class="form-control" name="event_description" id="event_description" cols="0" rows="10"></textarea>
                        </div>
                    </div>

                    <div>
                        <input class="btn" type="submit" value="Save" id="event_save" onclick="event_save()">
                    </div>
                </div>
            </form>

            <div class="bg-light col ml-lg-5 mt-lg-0 mt-3 event_side_main ">
                <div class="event_side">
                    <div class="topic_line">
                        <h1 class="font-weight-lighter mt-1">Upcoming Events</h1>
                    </div>

                    <div class="upcoming_events p-2 mt-2">
                        <a href="#" class="text-decoration-none">
                                <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                    <div class="col-8">
                                        <h1>Event Name</h1>
                                        <p>Description</p>
                                    </div>
                                    <div class="col-3 badge badge-info">
                                        <h1>Day</h1>
                                        <h1>Month</h1>
                                  
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                <div class="col-8">
                                    <h1>Event Name</h1>
                                    <p>Description</p>
                                </div>
                                <div class="col-3 badge badge-info">
                                    <h1>Day</h1>
                                    <h1>Month</h1>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                <div class="col-8">
                                    <h1>Event Name</h1>
                                    <p>Description</p>
                                </div>
                                <div class="col-3 badge badge-info">
                                    <h1>Day</h1>
                                    <h1>Month</h1>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                <div class="col-8">
                                    <h1>Event Name</h1>
                                    <p>Description</p>
                                </div>
                                <div class="col-3 badge badge-info">
                                    <h1>Day</h1>
                                    <h1>Month</h1>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <div class=" row upcoming_event mb-2 border-bottom border-dark p-1">
                                <div class="col-8">
                                    <h1>Event Name</h1>
                                    <p>Description</p>
                                </div>
                                <div class="col-3 badge badge-info">
                                    <h1>Day</h1>
                                    <h1>Month</h1>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php
		include 'support/footer.php';
	?>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="js/event_add.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>
