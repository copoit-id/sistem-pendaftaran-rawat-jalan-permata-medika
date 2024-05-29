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
    $('#keluhan #poli').change(function(){
        var poli_id = 1;
        $.ajax({
            url: '/keluhan-pasien/get-dokter-poli', // URL untuk mengambil data dokter berdasarkan poli
            type: 'POST',
            data: {poli_id: poli_id, _token: '{{ csrf_token() }}'},
            success: function(data){
                alert("haloo")
                // $('#daftar_dokter').empty(); // Kosongkan opsi dokter sebelum mengisi yang baru
                // $.each(data, function(key, value){
                //     $('#daftar_dokter').append('<option value="'+value.id_dokter+'">'+value.nama_dokter+'</option>');
                // });
            }
        });
    });
});
