$("#sub").click(function(){
    
    var data=$("#MyForm:input").serializeArray();
    $.post($("MyForm").attr("action"), data,function(info){$("#result").html(info);});
    
    
});

$("#myForm").submit(function(){

    return false;

});