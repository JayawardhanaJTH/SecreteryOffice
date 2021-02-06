$("#add_people").click(function (){

    // alert("hi");

    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var full_name = $("#full_name").val();
    var email = $("#email").val();
    var contact_number = $("#contact_number").val();
    var nic_num = $("#nic_num").val();

    var id = "insert";
    var dt = {
        id:id,
        first_name:first_name,
        last_name:last_name,
        full_name:full_name,
        email:email,
        contact_number:contact_number,
        nic_num:nic_num
    }

    // alert(JSON.stringify(dt));

    if ( first_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill First Name',
        })
    }else if (last_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Last Name',
        })
    }else if (full_name == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Full Name',
        })
    }else if (email == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Email',
        })
    }else if (contact_number == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Contact Number',
        })
    }
    else if (nic_num == ""){
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
               // alert(msg);
               Swal.fire({
                   position: 'top-end',
                   icon: 'success',
                   title: 'Sub Category has been saved',
                   showConfirmButton: false,
                   timer: 2500
               })
           },
            error:function (request, error){
               alert("Request "+ JSON.stringify(error));
            }
        });
    }

});

$(document).ready(function (){
    // alert("hhhhhhhhh");
    var id = "show";

    $.ajax({
        url: 'php/people-add.php',
        type: 'POST',
        cache: false,
        data: {id:id},
        success:function (data){
            $('#table').html(data);
        },
        error: function (request, error){
            alert("Request: "+JSON.stringify(request));
        }
    });
    // });
});