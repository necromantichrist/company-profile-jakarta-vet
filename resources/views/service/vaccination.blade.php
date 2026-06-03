@extends('layouts.main')

@section('content')

@vite('resources/css/service-detail.css')

<section class="service-detail">

<div class="detail-container">

<div class="detail-banner">

<img src="{{ asset('images/vaccination.webp') }}">

<div class="banner-title">
VACCINATION
</div>

</div>

<div class="detail-content">

<p>
Vaccination helps protect pets against dangerous infectious diseases and improves long-term health.
</p>

<ul>
<li>Rabies vaccine</li>
<li>Core vaccination</li>
<li>Booster vaccine</li>
<li>Puppy vaccination program</li>
<li>Annual vaccination schedule</li>
</ul>

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