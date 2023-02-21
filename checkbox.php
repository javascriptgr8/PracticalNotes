$("input:checkbox[name=type]:checked").each(function(){
    yourArray.push($(this).val());
});



//get unchecked value
$("input:checkbox:not(:checked)").each(function(){
  yourArray.push($(this).val());
});
