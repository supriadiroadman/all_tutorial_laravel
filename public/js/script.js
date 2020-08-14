$(document).ready(function () {

    // MENAMPILKAN MODAL
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


    // SAVE DATA
    $('#modal-btn-save').click(function (event) {
        event.preventDefault();

        var form = $('form'),
            url = form.attr('action'); // route('user.store')

        form.find('.invalid-feedback').remove(); // hapus tag span yg di append dibawah agar tidak duplikat
        form.find('.form-control').removeClass('is-invalid'); // hapus class dari tag input

        $.ajax({
            url: url,
            method: 'POST',
            data: form.serialize(),
            success: function (response) {
                form.trigger('reset'); // reset inputan
                $('#modal').modal('hide');
                $('#my-table').DataTable().ajax.reload(); // reload datatable

                swal({
                    title: "Selamat !",
                    text: "Data berhasil disimpan",
                    icon: "success",
                    button: "OK",
                });
            },
            error: function (xhr) {
                var res = xhr.responseJSON;

                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key)
                            .addClass('is-invalid') // tambah class ke tiap tag input yg error
                            .closest('.form-group') // tambah tag span di dalam class form-group(sebelum penutup)
                            .append('<span class="invalid-feedback"><strong>' + value + '</strong></span>');
                    })
                }
            }
        });

    });

});
