function delete_people(pid){
    alert(pid);

    var id = "delete";
    var dt = {id:id, pid:pid};

    $.ajax({
        url: 'php/people-add.php',
        method: 'POST',
        data: dt,
        success:function (msg){
            if (msg == 1){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        people_load();
                    }
                })

            }else {

            }

        },
        error: function (request, error) {
            alert("Request: " + JSON.stringify(error));
        }
    });
}
