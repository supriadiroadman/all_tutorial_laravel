$(document).ready(function () {

    // MENAMPILKAN MODAL CREATE DATA
    $('body').on('click', '.modal-show', function (event) { // Tombol create/ tag a di users.index
        event.preventDefault();

        var me = $(this); // Tombol create/ tag a
        url = me.attr('href'); // Ambil nilai attribute "href"
        title = me.attr('title'); // Ambil nilai attribute "title"

        $('#modal-title').text(title); // ganti text "modal-title"
        $('#modal-btn-save').show().text('Create'); // ganti text "modal-btn-save"

        $.ajax({
            url: url, // request ke route(user.create)
            dataType: 'html',
            success: function (response) {
                $('#modal-body').html(response); // response route(user.create)
            }
        });

        $('#modal').modal('show');
    });



    // MENAMPILKAN MODAL EDIT DATA
    $('body').on('click', '.btn-edit', function (event) {
        event.preventDefault();

        var me = $(this);
        url = me.attr('href');
        title = me.attr('title');

        $('#modal-title').text(title);
        $('#modal-btn-save').show().text('Update');

        $.ajax({
            url: url,
            dataType: 'html',
            success: function (response) {
                $('#modal-body').html(response);
            }
        });

        $('#modal').modal('show');
    });



    // SAVE/UPDATE DATA
    $('#modal-btn-save').click(function (event) {
        event.preventDefault();

        var form = $('#modal-body form'); // Panggil tag form yg berada didalam id= modal-body
        var url = form.attr('action');
        var method = $('input[name=_method]').val() == undefined ? 'POST' : 'PUT';
        var text = $('input[name=_method]').val() == undefined ? 'Data berhasil disimpan' : 'Data berhasil diupdate';

        form.find('.invalid-feedback').remove(); // hapus tag span yg di append dibawah agar tidak duplikat
        form.find('.form-control').removeClass('is-invalid'); // hapus class dari tag input


        $.ajax({
            url: url,
            method: method,
            data: form.serialize(),
            success: function (response) {
                form.trigger('reset'); // reset inputan
                $('#modal').modal('hide');
                $('#my-table').DataTable().ajax.reload(); // reload datatable

                swal({
                    title: "Selamat !",
                    text: text,
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



    // DELETE DATA
    $('body').on('click', '.btn-delete', function (event) {
        event.preventDefault();

        var me = $(this);
        var url = me.attr('href');
        var title = me.attr('title');
        // csrf_token dari tag di app.blade <meta name="csrf-token" content="o05aocNYuJIhQi6pbjCEvFgDItiakOF4Sb7vjdKq">
        var csrf_token = $('meta[name="csrf-token"]').attr('content');

        swal({
            title: "Anda yakin menghapus " + title + " ?",
            text: "Data akan terhapus permanen!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {
                            '_method': 'DELETE',
                            '_token': csrf_token
                        },
                        success: function (response) {
                            $('#my-table').DataTable().ajax.reload();

                            swal("Sukses", "Data berhasil dihapus", {
                                icon: "success",
                            });
                        },
                        error: function (xhr) {
                            swal("Data gagal dihapus", {
                                icon: "error",
                            });
                        }
                    });
                }
            });
    });



    // SHOW DATA
    $('body').on('click', '.btn-show', function (event) {
        event.preventDefault();

        var me = $(this);
        var url = me.attr('href');
        var title = me.attr('title');

        $('#modal-title').text(title);
        $('#modal-btn-save').hide();

        $.ajax({
            url: url,
            dataType: "html",
            success: function (response) {
                $('#modal-body').html(response);
            }
        });

        $('#modal').modal('show');
    });

});
