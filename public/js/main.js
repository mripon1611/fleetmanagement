$(document).ready(function() {

    $('#vehicletable').DataTable();
    $('#vehicledocuments').DataTable();
    $('#vehicleministrations').DataTable();
    $('#weekly_report').DataTable();

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
    $( ".ministration_type" ).click(function() {
        var val = $( ".ministration_type" ).val();
        console.log(val);
        if(val === 'servicing') {
            $("#servicing").hide();
        }
        // else if(val === 'tyre_change') {
        //     $("#tyre_change").show();
        // }
        // else if(val === 'battery_change') {
        //     $("#battary_change").show();
        // }
        // else if(val === 'normal_work') {
        //     $("#normal_works").show();
        // }
        // else if(val === 'major_work') {
        //     $("#major_works").show();
        // }
    });

    $( "#vregno" ).click(function() {
        var val = $("#vregno").val();
        console.log(val);
        if(val !=='select') {
            $(".checklist").show();
        }
    });

    $( ".driver_edit" ).click(function() {
        
        $(".input_hide").show();
        $(".input_show").hide();
       
    });

    // var table =$('#simpletable').DataTable();


    // check box select for weekly check report

    // $(".sanitizer").on('click', function()
    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
            var group = "input:checkbox[name='" + $box.attr("name") + "']";
            $(group).prop("checked", false);
            $box.prop("checked", true);
        } else {
            $box.prop("checked", false);
        }
    });


})