$(document).ready(function() {

    $('#vehicletable').DataTable();
    $('#ttoken').DataTable();
    $('#fitness').DataTable();
    $('#insurance').DataTable();
    $('#vehicleministrations').DataTable();
    $('#weekly_report').DataTable();

    $( ".doctype" ).click(function() {
        var val = $( ".doctype" ).val();
        console.log(val);
        if(val === 'taxtoken') {
            $("#issuedate").text('Tax Token From');
            $("#expiredate").text('Tax Token To');
            $("#documents_field").show();
        }
        else if(val === 'fitness') {
            $("#issuedate").text('Fitness From');
            $("#expiredate").text('Fitness To');
            $("#documents_field").show();
        }
        else if(val === 'insurance') {
            $("#issuedate").text('Insurance From');
            $("#expiredate").text('Insurance To');
            $("#documents_field").show();
        }
    });

    $( "#ministration_type" ).click(function() {
        var val = $( "#ministration_type" ).val();
        console.log(val);
        if(val === 'servicing') {
            $("#ministration_date").text('Servicing Date');
            $("#ministration_cost").text('Servicing Cost');
            $("#ministration").show();
        }
        else if(val === 'tyre_change') {
            $("#ministration_date").text('Tyre Change Date');
            $("#ministration_cost").text('Tyre Change Cost');
            $("#ministration").show();
        }
        else if(val === 'battery_change') {
            $("#ministration_date").text('Battary Change Date');
            $("#ministration_cost").text('Battary Change Cost');
            $("#ministration").show();
        }
        else if(val === 'normal_work') {
            $("#ministration_date").text('Normal Work Date');
            $("#ministration_cost").text('Normal Work Cost');
            $("#ministration").show();
        }
        else if(val === 'major_work') {
            $("#ministration_date").text('Major Work Date');
            $("#ministration_cost").text('Major Work Cost');
            $("#ministration").show();
        }
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