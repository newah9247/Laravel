function CheckboxChange(obj){
    objName = obj.getAttribute("name");
    inputBox = $("body").find("#"+objName+"Input");
    if($(obj).is(":checked")){
        $(inputBox).css({"display": "block"});
    }else{
        $(inputBox).css({"display": "none"});
    }
}