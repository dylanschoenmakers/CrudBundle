$(document).ready(function() {
    $('.js-limit-select').change(function() {
        $(this).closest('form').submit();
    });

    $('.js-delete-confirm').click(function () {
         $(".modal-body .modal-name").html($(this).attr('data-name'));
         $(".modal .modal-confirm-button").attr('href', $(this).attr('data-href'));
    });
});