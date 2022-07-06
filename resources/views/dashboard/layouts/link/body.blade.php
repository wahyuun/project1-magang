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
