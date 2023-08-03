$(function(){
    $('.buttonAddData').on('click', function(){
        $('#formModalLabel').html('Create New Student');
        $('.modal-footer button[type=submit]').html('Create');
    });

    $('.viewModalUpdate').on('click', function(){
        $('#formModalLabel').html('Update Student');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost:8080/phpmvc/public/student/update' )

        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: 'http://localhost:8080/phpmvc/public/student/getupdate',
            data: { id : id },
            method: 'post',
            dataType: 'json',
            success: function(data){
               $('#id').val(data.id);
               $('#nama').val(data.nama);
               $('#nim').val(data.nim);
               $('#jurusan').val(data.jurusan);
               $('#angkatan').val(data.angkatan);
            }
        });
    });
});

