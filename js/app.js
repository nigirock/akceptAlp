$(document).ready(function () {
    $(".popup").magnificPopup();
    $("a[rel='m_PageScroll2id']").mPageScroll2id({
        offset: 53
    });
    var img = $(".inner_image");
        img.addClass('flipInY');

    var screenWidth = document.body.clientWidth + 17;
    console.log(screenWidth);
    if(screenWidth <= 1920 && screenWidth > 1440){
        $("a[rel='m_PageScroll2id']").mPageScroll2id({
            offset: 50
        });
    }
    if(screenWidth <= 1440 && screenWidth > 1024){
        $("a[rel='m_PageScroll2id']").mPageScroll2id({
            offset: 110
        });
    }
    if(screenWidth <= 1024 && screenWidth > 768){
        $("a[rel='m_PageScroll2id']").mPageScroll2id({
            offset: 150
        });
    }
    if(screenWidth <= 768){
        $("a[rel='m_PageScroll2id']").mPageScroll2id({
            offset: 160
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
            }, 500);
        });
        return false;
    });
});
