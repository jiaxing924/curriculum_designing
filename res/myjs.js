$(function() {

    $('.selectpicker#gr').on('change', function() {
        var selected = $(this).find("option:selected").val();
        if (selected != "new_gr_value") {
            //alert(selected);
            $("#new_gr").addClass("invisible");
            $("#new_gr_detail").addClass("invisible");
        }
        if (selected == "new_gr_value") {
            //alert(selected);
            $("#new_gr").removeClass("invisible");
            $("#new_gr_detail").removeClass("invisible");
        }
    });

    $('.selectpicker#ip').on('change', function() {
        var selected = $(this).find("option:selected").val();
        if (selected != "new_ip_value") {
            //alert(selected);
            $("#new_ip").addClass("invisible");
        }
        if (selected == "new_ip_value") {
            //alert(selected);
            $("#new_ip").removeClass("invisible");
        }
    });

    $('.selectpicker#course').on('change', function() {
        var selected = $(this).find("option:selected").val();
        if (selected != "new_course_value") {
            //alert(selected);
            $("#new_course").addClass("invisible");
        }
        if (selected == "new_course_value") {
            //alert(selected);
            $("#new_course").removeClass("invisible");
        }
    });

    $('#ip_sel').on('change', function() {
        var num = $("#gr_sel_num").attr("data-value");
        //alert(num);
        var selected = $(this).find("option:selected").val();
        if (selected == "all") {
            $("tr:hidden").show();
        } else {
            $("tr:hidden").show();
            for (var i = 1; i < (num + 1); i++) {
                //$("tr [data-sel = " + i +"]").hide();
                $("tr[data-sel = '" + i + "']").hide();
            }
            $("tr[data-sel = '" + selected + "']").show();
        }
    });

    $('#ipcourse').on('change', function() {
        var selected = $(this).find("option:selected").val();
        var num = $("#ipcourse").attr("data-num");
        if (selected == "all") {
            $("tr:hidden").show();
        } else {
            $("tr:hidden").show();
            for (var i = 1; i < (num + 1); i++) {
                $("tr[data-xxoo = '" + i + "']").hide();
            }
            $("tr[data-xxoo = '" + selected + "']").show();
        }
    });

    $("td").not(".not-mouseenter").mouseover(function() {
        $(this).closest("tr").css("background-color", "#e9e7ef");
    });

    $("td").not(".not-mouseenter").mouseleave(function() {
        $(this).closest("tr").css("background-color", "#fff");
    });

    $(".glyphicon").addClass("invisible");
    $(".glyphicon").parents('td').mouseover(function(){
        $(this).find('.glyphicon').removeClass("invisible");
    });

    $(".glyphicon").parents('td').mouseleave(function(){
        $(this).find('.glyphicon').addClass("invisible");
    });

});
// function auto_update_gr(event) {
//  var id = $(event.target).closest("td").attr("id");
//  alert(id);
// }
// function updateIP(event) {
//  $('#updateIPModal').modal('toggle');
//  // var IPID = $(event.target).parent().parent().parent().attr('id');
//  // each $IPID;
// }

// function deleteIP(event) {
//  $('#deleteIPModal').modal('toggle');
// }
