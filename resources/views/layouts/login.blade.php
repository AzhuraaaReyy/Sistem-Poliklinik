<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Masuk Sistem | Modern HealthCare</title>

  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons & Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  @include('layouts.lib.ext_css')

  <style>
    :root {
      --brand-blue: #0B5CFF;
      --brand-navy: #0A1E3F;
      --brand-bg: #F3F7FE;
      --text-dark: #0F172A;
      --text-muted: #64748B;
      --border-light: #E2E8F0;
    }

    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      color: var(--text-dark);
      background-color: var(--brand-bg);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-wrapper {
      width: 100%;
      max-width: 1040px;
      background: #FFFFFF;
      border-radius: 28px;
      overflow: hidden;
      box-shadow: 0 25px 50px -12px rgba(10, 30, 63, 0.12);
      border: 1px solid var(--border-light);
      margin: 2rem 1rem;
    }

    /* BRANDING SIDEBAR (LEFT) */
    .login-sidebar {
      background: linear-gradient(135deg, #0A1E3F 0%, #163B70 100%);
      padding: 3.5rem 3rem;
      color: #FFFFFF;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      position: relative;
      overflow: hidden;
    }

    .login-sidebar::before {
      content: '';
      position: absolute;
      top: -80px;
      right: -80px;
      width: 250px;
      height: 250px;
      background: rgba(11, 92, 255, 0.3);
      border-radius: 50%;
      filter: blur(60px);
    }

    .brand-logo-icon {
      width: 42px;
      height: 42px;
      background-color: var(--brand-blue);
      color: white;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
    }

    .sidebar-glass-card {
      background: rgba(255, 255, 255, 0.08);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 20px;
      padding: 1.5rem;
      margin-top: 2rem;
    }

    /* FORM CONTAINER (RIGHT) */
    .login-form-area {
      padding: 3.5rem 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .form-control-custom {
      height: 50px;
      border-radius: 12px;
      border: 1px solid var(--border-light);
      padding-left: 2.75rem;
      font-size: 0.92rem;
      transition: all 0.25s ease;
      background-color: #F8FAFC;
    }

    .form-control-custom:focus {
      background-color: #FFFFFF;
      border-color: var(--brand-blue);
      box-shadow: 0 0 0 4px rgba(11, 92, 255, 0.1);
    }

    .input-icon-wrapper {
      position: relative;
    }

    .input-icon-wrapper i {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-muted);
      font-size: 1.1rem;
      z-index: 5;
    }

    .btn-brand-primary {
      background-color: var(--brand-blue);
      color: #FFFFFF;
      height: 50px;
      border-radius: 12px;
      font-weight: 700;
      font-size: 0.95rem;
      border: none;
      transition: all 0.25s ease;
      box-shadow: 0 8px 20px rgba(11, 92, 255, 0.25);
    }

    .btn-brand-primary:hover {
      background-color: #004AD9;
      color: #FFFFFF;
      transform: translateY(-1px);
      box-shadow: 0 12px 25px rgba(11, 92, 255, 0.35);
    }

    .btn-google-auth {
      height: 50px;
      border-radius: 12px;
      border: 1px solid var(--border-light);
      background-color: #FFFFFF;
      color: var(--text-dark);
      font-weight: 600;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.6rem;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .btn-google-auth:hover {
      background-color: #F8FAFC;
      border-color: #CBD5E1;
      color: var(--text-dark);
    }

    .forgot-link {
      color: var(--brand-blue);
      text-decoration: none;
      font-size: 0.85rem;
      font-weight: 600;
    }

    .forgot-link:hover {
      text-decoration: underline;
    }

    .divider-text {
      display: flex;
      align-items: center;
      text-align: center;
      color: var(--text-muted);
      font-size: 0.78rem;
      font-weight: 600;
      margin: 1.5rem 0;
    }

    .divider-text::before,
    .divider-text::after {
      content: '';
      flex: 1;
      border-bottom: 1px solid var(--border-light);
    }

    .divider-text span {
      padding: 0 0.75rem;
      letter-spacing: 0.5px;
    }

    @media (max-width: 991.98px) {
      .login-sidebar {
        display: none;
      }

      .login-form-area {
        padding: 2.5rem 1.75rem;
      }
    }
  </style>
</head>

<body>

  <div class="login-wrapper">
    <div class="row g-0">
      <!-- SISI KIRI: BRANDING & VISUAL SLOGAN -->
      <div class="col-lg-5 login-sidebar">
        <div>
          <div class="d-flex align-items-center gap-2 mb-4">
            <div class="brand-logo-icon">
              <i class="bi bi-activity"></i>
            </div>
            <div>
              <div class="fw-bold text-white fs-5 lh-1">Modern HealthCare</div>
              <small class="text-white-50" style="font-size: 0.72rem;">Sistem Informasi Klinik</small>
            </div>
          </div>

          <h2 class="fw-bold text-white mt-4 fs-3">Akses Portal Kesehatan Terpadu</h2>
          <p class="text-white-50 small mt-2" style="line-height: 1.6;">
            Kelola pendaftaran antrean online, rekam medis digital, dan jadwal dokter secara efisien dalam satu pintu.
          </p>
        </div>

        <div>
          <div class="sidebar-glass-card">
            <div class="d-flex align-items-center gap-3">
              <div class="p-2 bg-primary bg-opacity-25 rounded-circle text-info fs-4 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <div class="fw-bold text-white small">Sistem Aman & Terenkripsi</div>
                <div class="text-white-50 extra-small" style="font-size: 0.75rem;">Standar Integrasi Kemenkes RI</div>
              </div>
            </div>
          </div>
          <div class="mt-4 text-white-50 small">&copy; <script>
              document.write(new Date().getFullYear())
            </script> Bengkel Koding. All rights reserved.</div>
        </div>
      </div>

      <!-- SISI KANAN: FORM LOGIN -->
      <div class="col-lg-7 login-form-area">
        <div class="mb-4">
          <h3 class="fw-bold text-dark mb-1">Selamat Datang Kembali</h3>
          <p class="text-muted small">Silakan masukkan akun Anda untuk melanjutkan akses</p>
        </div>

        <!-- ALERT PESAN ERROR -->
        @if ($errors->any())
        <div class="alert alert-danger border-0 rounded-3 shadow-sm mb-4 p-3" role="alert">
          <div class="d-flex align-items-center gap-2 text-danger fw-bold mb-1">
            <i class="bi bi-exclamation-triangle-fill fs-5"></i>
            <span>Terjadi Kesalahan Login</span>
          </div>
          <ul class="mb-0 ps-3 small text-danger-emphasis">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form action="{{ route('login') }}" method="post">
          @csrf

          <!-- INPUT EMAIL -->
          <div class="mb-3">
            <label class="form-label small fw-semibold text-dark">Alamat Email</label>
            <div class="input-icon-wrapper">
              <i class="bi bi-envelope"></i>
              <input type="email" name="email" class="form-control form-control-custom" value="{{ old('email') }}" placeholder="nama@email.com" required autofocus>
            </div>
          </div>

          <!-- INPUT PASSWORD -->
          <div class="mb-2">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <label class="form-label small fw-semibold text-dark mb-0">Kata Sandi</label>
              <a href="/email" class="forgot-link">Lupa Password?</a>
            </div>
            <div class="input-icon-wrapper">
              <i class="bi bi-lock"></i>
              <input type="password" name="password" class="form-control form-control-custom" placeholder="••••••••" required>
            </div>
          </div>

          <!-- SUBMIT BUTTON -->
          <button type="submit" class="btn btn-brand-primary w-100 mt-4">
            Masuk Ke Portal <i class="bi bi-arrow-right ms-1"></i>
          </button>
        </form>

        <div class="divider-text">
          <span>ATAU MASUK DENGAN</span>
        </div>

        <!-- GOOGLE AUTH BUTTON -->
        <a href="/auth/redirect" class="btn btn-google-auth">
          <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.64 9.20455C17.64 8.56636 17.5827 7.95273 17.4764 7.36364H9V10.845H13.8436C13.635 11.97 13.0009 12.9232 12.0477 13.5614V15.8195H14.9564C16.6582 14.2527 17.64 11.9455 17.64 9.20455Z" fill="#4285F4" />
            <path d="M9 18C11.43 18 13.4673 17.1941 14.9564 15.8195L12.0477 13.5614C11.2418 14.1014 10.2109 14.4205 9 14.4205C6.65591 14.4205 4.67182 12.8373 3.96409 10.71H0.957275V13.0418C2.43818 15.9832 5.48182 18 9 18Z" fill="#34A853" />
            <path d="M3.96409 10.71C3.78409 10.17 3.68182 9.59318 3.68182 9C3.68182 8.40682 3.78409 7.83 3.96409 7.29V4.95818H0.957273C0.347727 6.17318 0 7.54773 0 9C0 10.4523 0.347727 11.8268 0.957273 13.0418L3.96409 10.71Z" fill="#FBBC05" />
            <path d="M9 3.57955C10.3214 3.57955 11.5077 4.03364 12.4405 4.92545L15.0218 2.34409C13.4632 0.891818 11.4259 0 9 0 C5.48182 0 2.43818 2.01682 0.957275 4.95818L3.96409 7.29C4.67182 5.16273 6.65591 3.57955 9 3.57955Z" fill="#EA4335" />
          </svg>
          Google Account
        </a>

        <!-- REGISTER LINK -->
        <div class="text-center mt-4">
          <span class="text-muted small">Belum memiliki akun?</span>
          <a href="/register" class="fw-bold text-primary text-decoration-none small ms-1">Daftar Akun Baru</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Script External JS -->
  @include('layouts.lib.ext_js')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>