<?php
    session_start();
    include 'support/header.php';
    require_once("connection/connection.php");
?>
    <div class="container">
        <!-- download items section -->
        <div class="row p-2">
            <?php
                //load data 
                $sql = "SELECT * FROM applications";
                $result = mysqli_query($conn, $sql);

                $fileSet = mysqli_fetch_all($result, MYSQLI_ASSOC);

                if(count($fileSet)>0){
                    $count = count($fileSet);
                    $i = 0;
            ?>
            <div class="col-sm-12 col-md-6">
                <?php
                    for( ;$i<$count/2;$i++)
                    {
                        $file = $fileSet[$i];
                ?>
                <div class="download_item card m-1">
                    <div class="row no-gutters card-body align-items-center">
                        <div class="col-8">
                            <h5 class="card-title"><?php echo $file['name'] ?></h5>
                            <p class="card-text"><?php echo $file['description'] ?></p>
                            <p class="card-text">Downloads: <?php echo $file['downloads'] ?></p>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_download=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Download">
                                <span class="download_icon text-primary"><i class="fa fa-download"></i></span>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_edit=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Edit">
                                <span class="download_icon text-success"><i class="fa fa-edit"></i></span>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_delete=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Delete">
                                <span class="download_icon text-danger"><i class="fa fa-trash-alt"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="col-sm-12 col-md-6">
            <?php
                    $count = $count/2;

                    for( ;$i<=$count;$i++)
                    {
                        $file = $fileSet[$i];
                ?>
                <div class="download_item card m-1">
                    <div class="row no-gutters card-body align-items-center">
                        <div class="col-8">
                            <h5 class="card-title"><?php echo $file['name'] ?></h5>
                            <p class="card-text"><?php echo $file['description'] ?></p>
                            <p class="card-text">Downloads: <?php echo $file['downloads'] ?></p>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_download=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Download">
                                <span class="download_icon text-primary"><i class="fa fa-download"></i></span>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_edit=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Edit">
                                <span class="download_icon text-success"><i class="fa fa-edit"></i></span>
                            </a>
                        </div>
                        <div class="col text-center">
                            <a href="/php/downloads_add.php?file_delete=<?php echo $file['id'] ?>" class="text-decoration-none text-dark" data-toggle="tooltip" data-placement="top" title="Delete">
                                <span class="download_icon text-danger"><i class="fa fa-trash-alt"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <?php
                    
                }
            ?>
        </div>
    </div>

    <!-- Admin Side  -->
    <div class="container border p-1 mb-2">
        <h5 class="text-center">Add File</h5>

        <form action="/php/downloads_add.php" method="POST" enctype="multipart/form-data" class="m-1">
            <div class="form-group">
                <label for="fileName">File Name</label>
                <input type="text" name="fileName" id="fileName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fileDescription">File Description</label>
                <input type="text" name="fileDescription" id="fileDescription" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="file">File</label>
                <input type="file" name="file" id="file" class="form-control" required>
            </div>

            <div>
                <input type="submit" value="Save/Update" name="save_file" class="btn">
            </div>
        </form>
    </div>
<?php
    include "support/footer.php";
?>