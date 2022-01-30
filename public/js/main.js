$(document).ready(function() {

    $('#vehicletable').DataTable();
    $('#vehicledocuments').DataTable();

    $( ".doctype" ).click(function() {
        var val = $( ".doctype" ).val();
        console.log(val);
        if(val === 'taxtoken') {
            $("#ttoken").show();
        }
        else if(val === 'fitness') {
            $("#fitness").show();
        }
        else if(val === 'insurance') {
            $("#insurance").show();
        }
    });

    // var table =$('#simpletable').DataTable();


    // table.on('click', '.edit', function() {
    //     $tr = $(this).closest('tr');
    //     if($($tr).hasClass('child')) {
    //         $tr = $tr.prev('.parent');
    //     }

    //     var data = table.row($tr).data();
    //     console.log(data);

    //     $('#mname').val(data[1]);
    //     $('#mname_bn').val(data[2]);
    //     $('#mnid').val(data[7]);
    //     $('#mblood').val(data[6]);
    //     $('#mcontact').val(data[3]);
    //     $('#memergency').val(data[4]);

    //     // $('#editModal').modal('show');
    // })

    // $( "#addnewdocument" ).click(function() {
    //     console.log($( "#addnewdocument" ));
    //     $( "#vehicledocumen" ).hide();
    //     console.log($( "#vehicledocumen" ));
    // });
})