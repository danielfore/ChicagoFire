$('.dialog-background').on('click touchstart vclick', function () {
    hideDialog ();
    return false;
});

$('.dialog-background').on('scroll touchmove mousewheel', function (e) {
    e.preventDefault();
    e.stopPropagation();
    return false;
});

$('.dialog').on('click touchstart vclick ', function(event){
    event.stopPropagation();
});

function showDialog() {
    var dialogElement = $(".dialog");

    $('.dialog-background').css("display","block");
    dialogElement.removeClass( "dialogOut" );
    dialogElement.addClass( "dialogIn" );
    var dialogHeight = $(".dialog").height();
    dialogElement.height(dialogHeight);
    dialogElement.css("top","0");
    dialogElement.css("bottom","0");
    return false;
}

function hideDialog() {
    var dialogElement = $(".dialog");
    dialogElement.removeClass( "dialogIn" );
    dialogElement.addClass( "dialogOut" );
    setTimeout(function() {
        $(".dialog-background").css("display","none");
    }, 200);
    return false;
}
