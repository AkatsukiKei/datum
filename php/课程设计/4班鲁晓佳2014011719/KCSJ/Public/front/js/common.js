/* 
 * ҳ�湫��Javascript�ű�
 */
$(function () {

    //���½����ӵ����ҳ�涥��
    $('a.move-to-top').click(function (e) {
        var top = $('#top').offset().top;
        $('html, body').animate({
            scrollTop: top
        }, 500);
        return false;
    });



});