/* 
 * 页面公共Javascript脚本
 */
$(function () {

    //右下角链接点击到页面顶部
    $('a.move-to-top').click(function (e) {
        var top = $('#top').offset().top;
        $('html, body').animate({
            scrollTop: top
        }, 500);
        return false;
    });



});