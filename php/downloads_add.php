<?php
    session_start();
    require_once('../connection/connection.php');
?>

<?php
    if(isset($_POST['save_file'])){
        $file = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];

        $path = "../uploadFiles/applications/".$file;

        $fileName = $_POST['fileName'];
        $fileDescription = $_POST['fileDescription'];

        $extension = pathinfo($file, PATHINFO_EXTENSION);

        if(!in_array($extension,['pdf', 'docx'])){
            $_SESSION['extension_error'] = "The file extension is not pdf or docx format";
        }
        else{
            if(move_uploaded_file($temp, $path)){
                $sql = "INSERT INTO applications (name, description, upload_Name, downloads) 
                    VALUES ('$fileName', '$fileDescription', '$file', 0)";

                if(mysqli_query($conn, $sql)){
                    $_SESSION['file_upload'] = true;
                    session_write_close();

                    header('location: ../downloads.php');
                    exit();
                }
                else{
                    $_SESSION['file_upload'] = false;
                    session_write_close();

                    header('location: ../downloads.php');
                    exit();
                }
            }
        }
    }

    if(isset($_GET['file_download'])){
        $id = $_GET['file_download'];

        $sql = "SELECT * FROM applications WHERE id='$id'";

        $result = mysqli_query($conn, $sql);
        $file = mysqli_fetch_assoc($result);

        $path = "../uploadFiles/applications/".$file['upload_Name'];

        if(file_exists($path)){

            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($path));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('../uploadFiles/applications/' . $file['upload_Name']));

            readfile($path);

            $downloads = $file['downloads'] + 1;

            $update_sql = "UPDATE applications SET downloads='$downloads' WHERE id='$id'";

            mysqli_query($conn, $update_sql);

            $_SESSION['file_download'] = false;
            session_write_close();

            // echo $downloads;
            header('location: ../downloads.php');
            exit();
        }
        else{
            $_SESSION['file_download'] = false;
            session_write_close();
            
            header('location: ../downloads.php');
            exit();
        }
    }
?>