function getPeopleDetails(pid,first_name,last_name,email,grama_niladhari_division,
                          gender,contact_number,address){
    // alert(grama_niladhari_division);
    document.getElementById('update_pid').value = pid;
    document.getElementById('update_first_name').value = first_name;
    document.getElementById('update_last_name').value = last_name;
    document.getElementById('update_email').value = email;
    document.getElementById('update_grama_niladhari_division').value = grama_niladhari_division;
    document.getElementById('update_gender').value = gender;
    document.getElementById('update_contact_number').value = contact_number;
    document.getElementById('update_address').value = address;
}

$('#update_people_details').click(function (e){
    // alert("hii");

    var update_pid = $("#update_pid").val();
    var update_first_name = $("#update_first_name").val();
    var update_last_name = $("#update_last_name").val();
    var update_email = $("#update_email").val();
    var update_grama_niladhari_division =$("#update_grama_niladhari_division").val();
    var update_gender = $("#update_gender").val();
    var update_contact_number = $("#update_contact_number").val();
    var update_address = $("#update_address").val();

    var id = "update";
    var dt = {
        id:id,
        update_pid:update_pid,
        update_first_name:update_first_name,
        update_last_name:update_last_name,
        update_email:update_email,
        update_grama_niladhari_division:update_grama_niladhari_division,
        update_gender:update_gender,
        update_contact_number:update_contact_number,
        update_address:update_address
    }

    // alert(JSON.stringify(dt));

    if ( update_first_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill First Name',
        })
    }else if (update_last_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Last Name',
        })
    }else if (update_email == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Email',
        })
    }else if (update_grama_niladhari_division == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Select The Grama Niladhari Division',
        })
    }else if (update_gender == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Select Gender',
        })
    }else if (update_contact_number == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Contact Number',
        })
    }
    else if (update_address == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill NIC Number',
        })
    }else {
        $.ajax({
            url: 'php/people-add.php',
            method: 'POST',
            data: dt,
            success:function (msg){
                if (msg == 1) {

                    people_load();
                    e.preventDefault();
                    $('#people_details_update').modal('hide');

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'People Details has been Updated',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Upload Failed!',
                    })
                }
                // // alert(msg);
                // Swal.fire({
                //     position: 'top-end',
                //     icon: 'success',
                //     title: 'Peoples Details Updated',
                //     showConfirmButton: false,
                //     timer: 2500
                // })
            },
            error:function (request, error){
                alert("Request "+ JSON.stringify(error));
            }
        });
    }
})