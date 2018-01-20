$('#btn-edit-company').click(function () {
   $('#company').hide();
   $('#company-edit').show();

});

$('#btn-cancel-company').click(function () {
   $('#company').show();
   $('#company-edit').hide();

});

$('#btn-edit-dev').click(function () {
   $('#dev').hide();
   $('#dev-edit').show();

});

$('#btn-cancel-dev').click(function () {
   $('#dev').show();
   $('#dev-edit').hide();

});

/*search*/
$('#input-area').click(function () {
    if($('#input-city').val().length>0)
    {
        $('#input-area').removeAttr('readonly');
    }
    else if($('#input-city').val().length==0)
    {
        $('#input-area').attr('readonly',true);

    }
});


