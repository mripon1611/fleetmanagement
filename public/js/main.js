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