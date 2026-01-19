<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    body {
      background: linear-gradient(135deg, #114e8f, #2980b9);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
    }

    /* 🔄 Ventana de carga estilo modal */
    #loader {
      position: fixed;
      inset: 0;
      background: rgba(17, 78, 143, 0.95);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      transition: transform 0.8s ease, opacity 0.8s ease;
    }

    #loader .loader-box {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      animation: pulse 1.5s infinite;
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* 🌻 Spinner girasol */
    .spinner-girasol {
      width: 80px;
      height: 80px;
      animation: girar 2s linear infinite;
    }

    @keyframes girar {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    /* Estado oculto del loader */
    #loader.hidden {
      opacity: 0;
      transform: translateY(-100%);
      pointer-events: none;
    }

    /* Tarjeta de login */
    .login-card {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
      position: relative;
      z-index: 1;
      opacity: 0;              /* 🔒 Oculto al inicio */
      transition: opacity 1s ease;
    }

    .login-card.visible {
      opacity: 1;              /* 👀 Se muestra cuando el loader termina */
    }

    .login-card img.logo-ucr {
      width: 100px;
      margin-bottom: 20px;
    }

    .form-control:focus {
      border-color: #114e8f;
      box-shadow: 0 0 0 0.2rem rgba(17, 78, 143, 0.25);
    }

    .btn-primary {
      background-color: #114e8f;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0d3e75;
    }
  </style>
</head>

<body>
  <!-- 🔄 Ventana de carga -->
  <div id="loader">
    <div class="loader-box">
      <!-- 🌻 Spinner girasol -->
      <img src="{{ asset('logos/spinnerGirasol.png') }}" alt="Spinner girasol" class="spinner-girasol mb-3">
      <h5>Cargando sistema...</h5>
    </div>
  </div>

  <div class="login-card" id="loginCard">
    <!-- Logo UCR -->
    <img src="{{ asset('logos/logoUCR.png') }}" alt="Logo UCR" class="logo-ucr">

    <h3 class="mb-4">Iniciar Sesión</h3>

    @if ($errors->any())
    <div class="alert alert-danger text-start">
      @foreach ($errors->all() as $error)
      <p class="mb-0">{{ $error }}</p>
      @endforeach
    </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
      @csrf

      <div class="mb-3 text-start">
        <label for="login" class="form-label">Correo o nombre de usuario</label>
        <input type="text" class="form-control" name="login" id="login" required>
      </div>

      <div class="mb-3 text-start">
        <label for="password" class="form-label">Contraseña</label>
        <div class="input-group">
          <input type="password" class="form-control" name="password" id="password" required>
          <button class="btn btn-outline-secondary toggle-password" type="button">
            <i class="fa fa-eye"></i>
          </button>
        </div>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </div>
    </form>
  </div>

  <script>
    // 🔄 Ocultar loader después de 2 segundos y mostrar login
    window.addEventListener("load", () => {
      setTimeout(() => {
        document.getElementById("loader").classList.add("hidden");
        document.getElementById("loginCard").classList.add("visible");
      }, 2000); // 2000 ms = 2 segundos
    });

    // 👁️ Mostrar/ocultar contraseña
    document.querySelectorAll('.toggle-password').forEach(button => {
      button.addEventListener('click', () => {
        const input = button.previousElementSibling;
        const icon = button.querySelector('i');

        if (input.type === 'password') {
          input.type = 'text';
          icon.classList.remove('fa-eye');
          icon.classList.add('fa-eye-slash');
        } else {
          input.type = 'password';
          icon.classList.remove('fa-eye-slash');
          icon.classList.add('fa-eye');
        }
      });
    });
  </script>
</body>

</html>