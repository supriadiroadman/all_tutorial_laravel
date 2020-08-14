$(document).ready(function () {
    $('body').on('click', '.modal-show', function (event) { // Tombol create/ tag a di users.index
        event.preventDefault();

        var me = $(this); // Tombol create/ tag a
        url = me.attr('href'); // Ambil nilai attribute "href"
        title = me.attr('title'); // Ambil nilai attribute "title"

        $('#modal-title').text(title); // ganti text "modal-title"
        $('#modal-btn-save').text('Create'); // ganti text "modal-btn-save"

        $.ajax({
            url: url, // request ke route(user.create)
            dataType: 'html',
            success: function (response) {
                $('#modal-body').html(response); // response route(user.create)
            }
        });

        $('#modal').modal('show');
    });

});
