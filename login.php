<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PustakaGO - Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Inter", sans-serif;
    }

    body {
      background-color: #0b3553;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    /* ===== Background Lingkaran ===== */
    .circle {
      position: absolute;
      background-color: #2f7abf;
      border-radius: 50%;
      opacity: 1;
      transition: all 0.4s ease;
    }

    .circle1 {
      width: 450px;
      height: 450px;
      top: -150px;
      left: -150px;
    }

    .circle2 {
      width: 400px;
      height: 400px;
      bottom: -150px;
      left: -100px;
    }

    .circle3 {
      width: 500px;
      height: 500px;
      bottom: -200px;
      right: -200px;
    }

    /* ===== Container Utama ===== */
    .login-container {
      text-align: center;
      color: white;
      z-index: 1;
      width: 100%;
      max-width: 400px;
      padding: 20px;
    }

    /* Logo teks PustakaGO */
    .logo {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 10px;
    }

    /* ===== Logo Gambar ===== */
    .logo-img {
      width: 90px;
      height: auto;
      margin-bottom: 30px;
      border-radius: 8px;
    }

    /* Box login */
    .login-box {
      background: rgba(255, 255, 255, 0.05);
      padding: 30px 40px;
      border-radius: 12px;
      backdrop-filter: blur(6px);
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .login-box h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .subtitle {
      font-size: 0.9rem;
      color: #d1d1d1;
      margin-bottom: 25px;
    }

    /* ===== Input Group ===== */
    .input-group {
      display: flex;
      align-items: center;
      background-color: transparent;
      border: 1px solid #c9c9c9;
      border-radius: 10px;
      margin-bottom: 20px;
      padding: 10px 15px;
      transition: all 0.3s ease;
    }

    .input-group:hover {
      border-color: #4b9ee3;
    }

    .icon {
      margin-right: 10px;
      color: #c9c9c9;
      font-size: 1.2rem;
    }

    .input-group input {
      background: none;
      border: none;
      outline: none;
      color: white;
      width: 100%;
      font-size: 0.95rem;
    }

    .input-group input::placeholder {
      color: #c9c9c9;
    }

    /* ===== Tombol Login ===== */
    .login-btn {
      background-color: #2f7abf;
      color: white;
      border: none;
      padding: 12px 45px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
      width: 100%;
      font-size: 1rem;
    }

    .login-btn:hover {
      background-color: #276ca8;
      transform: scale(1.03);
    }

    /* ===== Tambahan: link daftar ===== */
    .member-login {
      margin-top: 20px;
      font-size: 0.9rem;
      color: #d1d1d1;
    }

    .member-login a {
      color: #2f7abf;
      font-weight: 600;
      text-decoration: none;
      transition: 0.2s;
    }

    .member-login a:hover {
      text-decoration: underline;
      color: #4b9ee3;
    }

    /* ===== RESPONSIVE DESIGN ===== */
    @media (max-width: 768px) {
      .logo {
        font-size: 1.6rem;
      }

      .logo-img {
        width: 70px;
        margin-bottom: 25px;
      }

      .login-box {
        padding: 25px;
      }
    }

    @media (max-width: 480px) {
      .circle1, .circle2, .circle3 {
        display: none;
      }

      .login-container {
        max-width: 90%;
      }

      .logo {
        font-size: 1.5rem;
      }

      .logo-img {
        width: 60px;
      }

      .login-box {
        padding: 20px 15px;
      }
    }
  </style>
</head>

<body>
  <!-- Background lingkaran -->
  <div class="circle circle1"></div>
  <div class="circle circle2"></div>
  <div class="circle circle3"></div>

  <!-- Konten login -->
  <div class="login-container">
    <h1 class="logo">PustakaGO</h1>
    <!-- ✅ Logo gambar di bawah tulisan -->
    <img src="logo.fix.jpg" alt="Logo PustakaGO" class="logo-img">

    <div class="login-box">
      <h2>Login</h2>
      <p class="subtitle">Please enter your Login and your Password</p>

      <form>
        <div class="input-group">
          <span class="icon">👤</span>
          <input type="text" placeholder="Username" required>
        </div>

        <div class="input-group">
          <span class="icon">🔒</span>
          <input type="password" placeholder="Password" required>
        </div>

        <button type="submit" class="login-btn">LOGIN</button>

        <p class="member-login">
          Daftar sebagai <a href="pendaftaran.html">Anggota</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
