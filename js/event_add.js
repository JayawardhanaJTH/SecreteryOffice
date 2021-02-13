function event_save(){
    
    var event_name = $("#event_name").val();
    var event_date = $("#event_date").val();
    var event_image = document.getElementById("event_image");
    
    if(event_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops..',
            text: 'Please Fill Event Name'
        })
    }
    else if(event_date == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops..',
            text: 'Please Fill Event Date'
        })
    }
    else if('files' in event_image){
        if(event_image.files.length == 0 ){
            Swal.fire({
                icon: 'error',
                title: 'Oops..',
                text: 'Please Select a file'
            })
        }
        else{
            var u_files = $("#event_image")[0].files[0];
    
            id = "insert";
            var dt ={
                id:id,
                event_name:event_name,
                event_date:event_date,
                file:u_files
            }

            $.ajax({
                url: 'php/event_add.php',
                method: 'POST',
                data: dt,
                success:function(msg){
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Event has been saved',
                        showConfirmButton: false,
                        timer: 2500
                    })
                },
                error:function (request, error){
                    alert("Request "+ JSON.stringify(error));
                }
            });
        }
    }
}