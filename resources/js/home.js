// Mengatasi interaktivitas dasar klik tombol
document.addEventListener("DOMContentLoaded", function() {
    const btnQueue = document.querySelector('.btn-queue');
    const btnLogin = document.querySelector('.btn-login');

    btnQueue.addEventListener('click', function(e) {
        // e.preventDefault(); 
        console.log('Mengarahkan ke sistem antrean...');
    });

    btnLogin.addEventListener('click', function(e) {
        console.log('Mengarahkan ke halaman login/booking...');
    });
});