@extends('layouts.main')

@section('content')

@vite('resources/css/home.css')

<section class="hero">

    <div class="hero-content">

        <!-- LEFT TEXT -->
        <div class="hero-text">

            <h1>
                Provide The Best <br>
                Care For Your Pets
            </h1>

            <p>
                Your pet’s health is our top priority and excellent service is our goal.
            </p>

        </div>

        <!-- RIGHT IMAGE -->
        <div class="hero-image">

            <img src="{{ asset('images/images.jpg') }}" alt="Pet">

        </div>

    </div>

</section>

<!-- FEATURE SECTION -->

<section class="feature-section">

    <div class="feature-card blue">

        <div class="feature-icon">
            ✚
        </div>

        <h3>Good Practice</h3>

        <p>
            Provide safe and comfortable work practices for your pets and also give the best service for customers
        </p>

    </div>

    <div class="feature-card red">

        <div class="feature-icon">
            ⚕
        </div>

        <h3>Excellent Veterinarian Knowledge</h3>

        <p>
            Have professional and experienced experts in the field of veterinary clinics
        </p>

    </div>

    <div class="feature-card blue">

        <div class="feature-icon">
            ✦
        </div>

        <h3>High Technology Surgery Equipment</h3>

        <p>
            Using high-tech and modern tools which is safe to be used for your pets
        </p>

    </div>

    <div class="feature-card red">

        <div class="feature-icon">
            ❤
        </div>

        <h3>Quality Product Support</h3>

        <p>
            Provide high quality product and it is safe proven to be used for pet's health
        </p>

    </div>

</section>

<section class="services-container">
    
    <div class="services-header">
        <h2>Our Service</h2>
        <div class="header-line"></div>
        <p>Here are our services we provide to help you maintain <br> the health of your pet</p>
    </div>

    <div class="services-grid">
        
        <div class="services-col left-col">
            
            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">🩺</span>
                </div>
                <div class="service-text">
                    <h3>MEDICAL CHECK UP</h3>
                    <p>Routine medical check up can be an early detect effort to recognize any unusual condition</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">🏥</span>
                </div>
                <div class="service-text">
                    <h3>INPATIENT AND OUTPATIENT SERVICE</h3>
                    <p>Inpatient care is the care of patients whose condition requires to be hospitalized</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">💉</span>
                </div>
                <div class="service-text">
                    <h3>VACCINATION</h3>
                    <p>Viral diseases that infect your pet most successful attack by your pet body itself</p>
                </div>
            </div>

        </div>

        <div class="services-col center-col">
            <img src="{{ asset('images/home.png') }}" alt="Our Service Dog" class="center-dog-img">
        </div>

        <div class="services-col right-col">
            
            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">✂️</span>
                </div>
                <div class="service-text">
                    <h3>SURGERY</h3>
                    <p>The most priority in our surgery standard procedure is safety of the animal</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">🔬</span>
                </div>
                <div class="service-text">
                    <h3>LABORATORY TEST</h3>
                    <p>A medical procedure that involves testing a sample of blood, urine, or other substance from the body</p>
                </div>
            </div>

            <div class="service-item">
                <div class="service-icon-wrapper">
                    <span class="service-icon">🦷</span>
                </div>
                <div class="service-text">
                    <h3>DENTISTRY</h3>
                    <p>Scaling of the teeth with dental instruments removes the plaque and calculus from tooth surfaces</p>
                </div>
            </div>

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