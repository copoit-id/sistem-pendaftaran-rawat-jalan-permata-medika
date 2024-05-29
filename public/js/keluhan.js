$(document).ready(function() {
    $('#btn-check-data-pasien').click(function() {
        let id_pasien = $('#id_pasien').val();

        $.ajax({
            url: '/keluhan-pasien/check-data-pasien/' + id_pasien,
            type: 'GET',
            data: {
                id: id_pasien
            },
            success: function(response) {
                alert("halo")
                if (response.status === 'success') {
                    $('#nama_pasien').val(response.data.nama_pasien);
                    $('#table-confirmed').show();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
            }
        });
    });
});
