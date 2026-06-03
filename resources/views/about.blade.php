@extends('layouts.main')

@section('content')

@vite('resources/css/about.css')

<section class="about-section">
    <div class="about-container">
        
        <div class="about-content">
            <h1>About Us</h1>
            <div class="about-line"></div>
            
            <p class="about-highlight">
                We are Jakarta Top Dogs, a group of veterinary practitioners in Jakarta, established since 1999. <br>
                There is a long trail leading to the formation of the Jakarta Top Dogs Veterinary
            </p>
            
            <p class="about-text">
                Practitioner Group (Jakarta Top Dogs). The first step was taken in 1999 when our founder, Mr. Unknown established his own veterinary practitioner in Jakarta.
            </p>
            
            <p class="about-text">
                He served medical check up, consultation and surgery for small animal at that time. Later there are some colleagues joined him to be practitioners. Currently, our team always challenge ourself to improve our quality in veterinary services.
            </p>
        </div>

        <div class="about-image-wrapper">
            <img src="{{ asset('images/doge.png') }}" alt="Jakarta Vet Team Pets" class="about-img">
        </div>

    </div>
</section>

<footer class="main-footer">
    <div class="footer-container">
        
        <div class="footer-brand">
            <div class="footer-logo">
                <span class="footer-logo-icon"></span> Jakarta Top Dogs
            </div>
        </div>

        <div class="footer-branch">
            <h3>Ciracas</h3>
            <div class="branch-underline"></div>
            
            <ul class="branch-info">
                <li>
                    <span class="info-icon">📍</span>
                    <p>Jl. Tanah Merdeka No.6, RT.10/RW.5, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</p>
                </li>
                <li>
                    <span class="info-icon">📞</span>
                    <p>081312460798<br>081312460798</p>
                </li>
                <li>
                    <span class="info-icon">🌐</span>
                    <p>jakartatop.ciracas</p>
                </li>
                <li>
                    <span class="info-icon">🕒</span>
                    <p>Monday - Saturday : 09.00 - 20.00<br>Sunday / Public Holiday : 09.00 - 17.00</p>
                </li>
            </ul>
        </div>

        <div class="footer-branch">
            <h3>Kebayoran Baru</h3>
            <div class="branch-underline"></div>
            
            <ul class="branch-info">
                <li>
                    <span class="info-icon">📍</span>
                    <p>Jl. Limau II No.2, RT.3/RW.3, Kramat Pela, Kec. Kby. Baru, City, Daerah Khusus Ibukota Jakarta 12130</p>
                </li>
                <li>
                    <span class="info-icon">📞</span>
                    <p>085813001400<br>085813001400</p>
                </li>
                <li>
                    <span class="info-icon">🌐</span>
                    <p>jakartatop.kebayoran</p>
                </li>
                <li>
                    <span class="info-icon">🕒</span>
                    <p>Monday - Saturday : 09.00 - 20.00<br>Sunday / Public Holiday : 09.00 - 17.00</p>
                </li>
            </ul>
        </div>

        <div class="footer-branch">
            <h3>Duren Sawit</h3>
            <div class="branch-underline"></div>
            
            <ul class="branch-info">
                <li>
                    <span class="info-icon">📍</span>
                    <p>Jl. Delima II Gg. 4, RT.9/RW.3, Malaka Sari, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13460</p>
                </li>
                <li>
                    <span class="info-icon">📞</span>
                    <p>085810220000<br>085810220000</p>
                </li>
                <li>
                    <span class="info-icon">🌐</span>
                    <p>jakartatop.sawit</p>
                </li>
                <li>
                    <span class="info-icon">🕒</span>
                    <p>Monday - Saturday : 09.00 - 20.00<br>Sunday / Public Holiday : 09.00 - 17.00</p>
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-copyright">
        <p>&copy; 2026 Jakarta Top Dogs. All Right Reserved.</p>
    </div>
</footer>

@endsection