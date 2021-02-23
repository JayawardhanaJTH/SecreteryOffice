$("#add_people").click(function (){

    // alert("hi");

    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var email = $("#email").val();
    var grama_niladhari_division =$("#grama_niladhari_division").val();
    var gender = $("#gender").val();
    var contact_number = $("#contact_number").val();
    var address = $("#address").val();

    var id = "insert";
    var dt = {
        id:id,
        first_name:first_name,
        last_name:last_name,
        email:email,
        grama_niladhari_division:grama_niladhari_division,
        gender:gender,
        contact_number:contact_number,
        address:address
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
    }else if (email == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Email',
        })
    }else if (grama_niladhari_division == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Select The Grama Niladhari Division',
        })
    }else if (gender == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Select Gender',
        })
    }else if (contact_number == ""){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please Fill Contact Number',
        })
    }
    else if (address == ""){
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

function people_load(){
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
}

$(document).ready(function (){
    people_load();
});
