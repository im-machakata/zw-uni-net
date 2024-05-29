$(function () {
    $('#deleteUniversity').on('click', function (e) {
        const confirmsDeletion = confirm('Are you sure you want to delete this University? This can not be undone');

        // if user clicks on no
        // prevent university deletion
        if (!confirmsDeletion) {
            e.preventDefault();
        }
        return;
    });
    $('.ck.ck-reset ck-editor.ck-rounded-corners').addClass('form-control');
});