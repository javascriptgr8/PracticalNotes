$("input:checkbox[name=type]:checked").each(function(){
    yourArray.push($(this).val());
});



//get unchecked value
$("input:checkbox:not(:checked)").each(function(){
  yourArray.push($(this).val());
});




$(document).on("click",".content",function(){
    var cid=$(this).attr('data-content');
    if ($(this).is(':checked')) {
        $("."+cid).prop('checked', true);
    } else if($(this).is(':not(:checked)')) {
        $("."+cid).prop('checked', false);
    }
});
