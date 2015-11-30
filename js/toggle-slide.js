//toggle slide//

$('.category-tabs h4').click(function(){
    $(this).next('.panel').slideToggle('fast');
    $(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
});
