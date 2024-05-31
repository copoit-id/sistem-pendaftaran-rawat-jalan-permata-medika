$(document).ready(function() {
    $('#btn-check-data-pasien').click(function() {
        let nik = $('#keluhan #nik').val();

        $.ajax({
            url: '/keluhan-pasien/check-data-pasien/' + nik,
            type: 'GET',
            success: function(response) {
                $('#keluhan #nama_pasien').val(response.data.nama_pasien);
                $('#keluhan #nik').val(response.data.nik);
                $('#keluhan #jenis_kelamin').val(response.data.jenis_kelamin);
                $('#keluhan #agama').val(response.data.agama);
                $('#keluhan #status_pernikahan').val(response.data.status_pernikahan);
                $('#keluhan #layanan_pembayaran').val(response.data.layanan_pembayaran);
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + error);
            }
        });
    });

    // get dokter
    $('#id_dokter').on('change', function() {
        var id_dokter = $(this).val();
        if (id_dokter) {
            $.ajax({
                url: '/keluhan-pasien/get-dokter/' + id_dokter,
                type: "get",
                success: function(data) {
                    $('#jadwal_dokter').empty();
                    $('#jadwal_dokter').append('<option selected>Pilih Jadwal Tersedia</option>');
                    $.each(data, function(key, value) {
                        $('#jadwal_dokter').append('<option value="'+ value.hari +'">' + value.hari + ' - (' + value.jadwal_mulai + ' - ' + value.jadwal_selesai +')</option>');
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("Gagal mengambil jadwal dokter: " + textStatus + " - " + errorThrown);
                    console.log("Error details:", jqXHR.responseText);
                }
            });
        } else {
            $('#jadwal_dokter').empty();
            $('#jadwal_dokter').append('<option selected>Pilih Jadwal Tersedia</option>');
        }
    });

});
