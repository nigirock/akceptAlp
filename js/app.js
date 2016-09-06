$(document).ready(function () {
    $(".popup").magnificPopup();
    $("a[rel='m_PageScroll2id']").mPageScroll2id({
        offset: 53
    });
    var img = $(".inner_image");
        img.addClass('flipInY');
    var screenWidth = screen.width;
    console.log(screenWidth);
    if(screenWidth <= 992){
        $("a[rel='m_PageScroll2id']").mPageScroll2id({
            offset: 110
        });
    }
    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
    $(".forms").submit(function() {
        var formID = $(this).attr('id'); // Получение ID формы
        var formNm = $('#' + formID);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: formNm.serialize()
        }).done(function() {
            $('.bs-example-modal-sm').modal();
            setTimeout(function() {
                $.magnificPopup.close();
                $(".forms").trigger("reset");
            }, 1000);
        });
        return false;
    });
});
