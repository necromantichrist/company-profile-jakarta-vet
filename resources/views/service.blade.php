@extends('layouts.main')

@section('content')

@vite('resources/css/service.css')

<div class="service-section">

    <div class="container">

        <div class="service-header">
            <h2>Our Service</h2>
            <div class="line"></div>
        </div>

        <div class="service-grid">

            <!-- CHECKUP -->
            <div class="service-card">
                <img src="{{ asset('images/checkup.webp') }}" alt="">

                <div class="overlay">
                    <h3>MEDICAL CHECK UP</h3>

                    <div class="service-content">
                        <p>Routine medical examinations to monitor your pet's health.</p>

                        <a href="{{ route('service.checkup') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- INPATIENT -->
            <div class="service-card">
                <img src="{{ asset('images/inpatient.webp') }}" alt="">

                <div class="overlay">
                    <h3>INPATIENT & OUTPATIENT</h3>

                    <div class="service-content">
                        <p>Professional treatment services for pets requiring care.</p>

                        <a href="{{ route('service.inpatient') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- VACCINATION -->
            <div class="service-card">
                <img src="{{ asset('images/vaccination.webp') }}" alt="">

                <div class="overlay">
                    <h3>VACCINATION</h3>

                    <div class="service-content">
                        <p>Protect your pets with complete vaccination programs.</p>

                        <a href="{{ route('service.vaccination') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- DENTISTRY -->
            <div class="service-card">
                <img src="{{ asset('images/dentistry.webp') }}" alt="">

                <div class="overlay">
                    <h3>DENTISTRY</h3>

                    <div class="service-content">
                        <p>Dental cleaning and oral treatment for pets.</p>

                        <a href="{{ route('service.dentistry') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- SURGERY -->
            <div class="service-card">
                <img src="{{ asset('images/surgery.webp') }}" alt="">

                <div class="overlay">
                    <h3>SURGERY</h3>

                    <div class="service-content">
                        <p>Modern surgical procedures by experts.</p>

                        <a href="{{ route('service.surgery') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

            <!-- LABORATORY -->
            <div class="service-card">
                <img src="{{ asset('images/laboratory.webp') }}" alt="">

                <div class="overlay">
                    <h3>LABORATORY</h3>

                    <div class="service-content">
                        <p>Accurate diagnostic laboratory testing services.</p>

                        <a href="{{ route('service.laboratory') }}" class="btn-service">
                            View Detail
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

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