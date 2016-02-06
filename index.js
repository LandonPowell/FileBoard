function submitCheck() {
    if(!($("#threadTitle").val().length <= 20) ||
       !($("#threadTitle").val().length >= 3) ) {
        $("#threadTitle").addClass("errorBlink");
        setTimeout(function(){
            $("#threadTitle").removeClass("errorBlink");
        },500);
        return false;
    }
    else if( $("#threadAttachment").val() == "" ) {
        $("#threadAttachment").addClass("errorBlink");
        setTimeout(function(){
            $("#threadAttachment").removeClass("errorBlink");
        },500);
        return false;
    }
    else {
        return true;
    }
}