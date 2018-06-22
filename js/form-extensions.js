$('#additional-requirements').before('<a id="add" href="#">Add a field</a>');
var $allDivs = $('#form-fields .form-row');
var count = 21;
$allDivs.hide();
$('#add').click( function(e) {
    e.preventDefault(e);
    if( count < $allDivs.length && $allDivs.not('[class="show"]') ) {
        $allDivs.eq(count).show();
        count++;
    }
});
$('#form-fields input[type=text]').each(function(){
    var $text_value = $(this).val();
    if($text_value != '')
    {
        $(this).parent().removeClass('show');
        $(this).parent().addClass('show');
    }
});

