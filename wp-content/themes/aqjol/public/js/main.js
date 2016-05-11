/**
 * Created by serg on 21.04.16.
 */
$('[ data-target="#galleryModal"]').click(function(){
    $('.modal-body .img-responsive').attr('src',$(this).find('img').attr('src')).data('current',$(this).find('img').data('id'));
});
$('#pref').click(function() {
    var img = $('.modal-body .img-responsive');
    var current = img.data('current');
    var gall = $('#' + $('.tab-pane.active').attr('id'));
    var max_img = gall.find('img').length;
    if (current === 0) {
        var src = gall.find('[data-id="' + (max_img - 1) + '"]').attr('src');
        slide(img,src,300,(max_img - 1));
    }
    else {
        var pref = gall.find('[data-id="' + (current - 1) + '"]').attr('src');
        slide(img,pref,300,(current - 1));

    }
    return false;
});
$('#next').click(function() {
    var img = $('.modal-body .img-responsive');
    var current = img.data('current');
    var gall = $('#' + $('.tab-pane.active').attr('id'));
    var max_img = gall.find('img').length;
    if (current === (max_img - 1)) {
        var src = gall.find('[data-id="' + 0 + '"]').attr('src');
        slide(img,src,300,0);
    }
    else {
        var pref = gall.find('[data-id="' + (current + 1) + '"]').attr('src');
        slide(img,pref,300,(current + 1));

    }
    return false;
});

function slide(obj,src,fade,surrent)
{
   // $('.modal-body').slideToggle(fade);
    obj.css({transition:'all 0.'+fade+'s',transform:'rotateY(90deg)'});
                  setTimeout(function(){obj.attr('src', src).data('current', surrent);     obj.css({transition:'all 0.'+fade+'s',transform:'rotateY(0deg)'});
                  },fade);

    //         $('.modal-body').slideToggle(fade)},fade);



}