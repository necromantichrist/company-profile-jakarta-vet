@extends('layouts.main')

@section('content')

@vite('resources/css/contact.css')

<div class="page-wrapper">

    <!-- SECTION 1 -->
    <div class="location-section">
        <h1 class="location-title">Ciracas</h1>
        <div class="underline"></div>

        <div class="location-grid">

            <!-- MAP -->
            <div class="map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6661070498008!2d106.87354739999999!3d-6.307523300000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed7a7f29fb0d%3A0x462bd25c1029c0a3!2sJl.%20Tanah%20Merdeka%20No.6%2C%20RT.10%2FRW.3%2C%20Rambutan%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013830!5e0!3m2!1sen!2sid!4v1780156115530!5m2!1sen!2sid">
                </iframe>
            </div>

            <!-- IMAGE -->
            <div class="image-box">
                <img src="{{ asset('images/american.jpg') }}" alt="Clinic">
            </div>

            <!-- INFO -->
            <div class="info-box">
                <h3>Jakarta Top Dogs</h3>
                <p>Jl. Tanah Merdeka No.6, RT.10/RW.5, Rambutan, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13830</p>

                <div class="info-item">
                    📞 081312460798
                </div>
                
                <div class="info-item">
                    📧 info@jakartatopdogs.com
                </div>

                <div class="info-item">
                    🕒 Monday - Saturday : 09.00 - 20.00
                </div>

                <div class="info-item">
                    🕒 Sunday / Public Holiday : 09.00 - 17.00
                </div>
            </div>

        </div>
    </div>

    <!-- SECTION 2 -->
    <div class="location-section">
        <h1 class="location-title">Kebayoran Baru</h1>
        <div class="underline"></div>

        <div class="location-grid">

            <div class="map-box">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.7028015558276!2d106.79092466162753!3d-6.245853284723746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f112609c2b35%3A0xff3f0d9c0cebd9e3!2sJl.%20Limau%20II%20No.2%2C%20RT.3%2FRW.3%2C%20Kramat%20Pela%2C%20Kec.%20Kby.%20Baru%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012130!5e0!3m2!1sen!2sid!4v1780156891162!5m2!1sen!2sid">
                </iframe>
            </div>

            <div class="image-box">
                <img src="{{ asset('images/american.jpg') }}" alt="Clinic">
            </div>

            <div class="info-box">
                <h3>Jakarta Top Dogs</h3>
                <p>Jl. Limau II No.2, RT.3/RW.3, Kramat Pela, Kec. Kby. Baru, City, Daerah Khusus Ibukota Jakarta 12130</p>

                <div class="info-item">📞 085813001400</div>
                <div class="info-item">📧 info@jakartatopdogs.com</div>
                <div class="info-item">🕒 Monday - Saturday : 09.00 - 20.00</div>
                <div class="info-item">🕒 Sunday / Public Holiday : 09.00 - 17.00</div>
            </div>

        </div>
    </div>

    <!-- SECTION 3 -->
    <div class="location-section">
        <h1 class="location-title">Duren Sawit</h1>
        <div class="underline"></div>

        <div class="location-grid">

            <div class="map-box">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d554.678875992978!2d106.92735443573211!3d-6.219243927057282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ca429bb1427%3A0x1b8b46533f2f31e7!2sJl.%20Delima%20II%20Gg.%204%2C%20RW.3%2C%20Malaka%20Sari%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013460!5e0!3m2!1sen!2sid!4v1780157425974!5m2!1sen!2sid">
                </iframe>
            </div>

            <div class="image-box">
                <img src="{{ asset('images/american.jpg') }}" alt="Clinic">
            </div>

            <div class="info-box">
                <h3>Jakarta Top Dogs</h3>
                <p>Jl. Delima II Gg. 4, RW.3, Malaka Sari, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13460</p>

                <div class="info-item">📞 085810220000</div>
                <div class="info-item">📧 info@jakartatopdogs.com</div>
                <div class="info-item">🕒 Monday - Saturday : 09.00 - 20.00</div>
                <div class="info-item">🕒 Sunday / Public Holiday : 09.00 - 17.00</div>
            </div>

        </div>
    </div>

    <div class="report-section">
        <h1 class="location-title">Form Pengaduan & Saran</h1>
        <div class="underline"></div>
        
        <div class="report-box">
            <p class="report-subtitle">Punya keluhan atau saran pelayanan? Hubungi kami melalui formulir di bawah ini.</p>
            
            <form action="{{ route('contact.store') }}" method="POST" class="complaint-form">
                @csrf <!-- Token keamanan Laravel -->
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Nama Lengkap <span class="required">*</span></label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required minlength="3">
                    </div>

                    <div class="form-group">
                        <label for="email">Alamat Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Nomor Telepon / WhatsApp <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" placeholder="Contoh: 08123456789" pattern="[0-9]{9,15}" required title="Masukkan nomor telepon yang valid (9-15 digit angka saja)">
                    </div>

                    <div class="form-group">
                        <label for="branch">Pilih Cabang Klinik <span class="required">*</span></label>
                        <select id="branch" name="branch" required>
                            <option value="" disabled selected>-- Pilih Cabang --</option>
                            <option value="Ciracas">Ciracas</option>
                            <option value="Kebayoran Baru">Kebayoran Baru</option>
                            <option value="Duren Sawit">Duren Sawit</option>
                        </select>
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="message">Isi Pengaduan / Keluhan <span class="required">*</span></label>
                    <textarea id="message" name="message" rows="5" placeholder="Tuliskan detail aduan atau saran Anda di sini..." required minlength="10"></textarea>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn-submit">Kirim Pengaduan</button>
                </div>
            </form>
            @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
        {{ session('success') }}
    </div>
@endif
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