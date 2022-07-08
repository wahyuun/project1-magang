<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Page JS -->
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

{{-- close alert otomatis --}}
<script>
    $(document).ready(function() {
        // Buat fungsi closeAlert()
        function closeAlert() {
            // Buat timer dengan javascript
            setInterval(function(){ // fungsi ini akan dijalankan ketika timer selesai
                $('.auto-close').slideUp(200); // buat animasi slideup dengan waktu 200 miliseconds = 0.2 detik
            }, 2000); // set timer menjadi 3000 miliseconds = 3 detik
        }
        closeAlert(); // panggil fungsi closeAlert() untuk menutup alert
    });
</script>
{{-- END auto-close --}}

{{-- CKEditor4 CDN Start --}}
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace( 'body', options );
</script>
{{-- CKEditor4 CDN END --}}

{{-- DataTables START --}}
{{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
        $(document).ready( function () {
        $('#tableMarketing').DataTable({
            "lengthMenu": [
            [ 10, 25, 50, 100, 1000, -1 ],
            [ '10 baris', '25 baris', '50 baris', '100 baris', '1000 baris', 'All' ]
            ]
        });
    });
</script>
<script>

    $(document).ready( function () {
        $('#tableKontakList').DataTable({
            "lengthMenu": [
            [ 10, 25, 50, 100, 1000, -1 ],
            [ '10 baris', '25 baris', '50 baris', '100 baris', '1000 baris', 'All' ]
            ]
        });
    });
    $(document).ready( function () {
        $('#tableAllKontak').DataTable({
            "lengthMenu": [
            [ 10, 25, 50, 100, 1000, -1 ],
            [ '10 baris', '25 baris', '50 baris', '100 baris', '1000 baris', 'All' ]
            ]
        });
    });
    $(document).ready( function () {
        $('#tableSender').DataTable({
            "lengthMenu": [
            [ 10, 25, 50, 100, 1000, -1 ],
            [ '10 baris', '25 baris', '50 baris', '100 baris', '1000 baris', 'All' ]
            ]
        });
    });
    $(document).ready( function () {
        $('#tableLaporan').DataTable({
            "lengthMenu": [
            [ 10, 25, 50, 100, 1000, -1 ],
            [ '10 baris', '25 baris', '50 baris', '100 baris', '1000 baris', 'All' ]
            ]
        });
    });
</script>
{{-- DataTables END --}}


{{-- SELECT2 START --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.penerima').select2({
                placeholder: "Pilih email penerima"
            });
        });
        </script>
        {{-- SELECT2 END --}}
