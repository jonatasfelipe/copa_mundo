<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Copa 2026 - Sistema de Gestão e Análise</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/index.css">

</head>

<body>
  <div class="bg-pattern"></div>

  <div class="trophy-icon trophy-left">🏆</div>
  <div class="trophy-icon trophy-right">🏆</div>

  <section class="hero">
    <div class="hero-content">
      <div class="year-badge">2026</div>
      <h1>
        O FUTURO DO<br>
        <span class="highlight">FUTEBOL</span><br>
        COMEÇA AQUI
      </h1>
      <p class="subtitle">Sistema Completo de Gestão e Análise para a Copa do Mundo</p>
      <div class="cta-group">
        <a href="../app/views/dashboard.php" class="btn btn-primary">Começar Agora</a>
        <a href="#features" class="btn btn-secondary">Conhecer Recursos</a>
      </div>
    </div>
  </section>

  <section class="stats-section">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number">48</div>
        <div class="stat-label">Seleções</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">104</div>
        <div class="stat-label">Partidas</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">3</div>
        <div class="stat-label">Países Sede</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">16</div>
        <div class="stat-label">Cidades</div>
      </div>
    </div>
  </section>

  <section id="features" class="features-section">
    <h2 class="section-title">Recursos Poderosos</h2>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">📊</div>
        <h3 class="feature-title">Análise em Tempo Real</h3>
        <p class="feature-desc">Acompanhe estatísticas, resultados e desempenho das seleções com dados atualizados instantaneamente durante todos os jogos.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🎯</div>
        <h3 class="feature-title">Previsões Inteligentes</h3>
        <p class="feature-desc">Algoritmos avançados que analisam histórico, forma atual e estatísticas para prever resultados com alta precisão.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">⚽</div>
        <h3 class="feature-title">Gestão de Apostas</h3>
        <p class="feature-desc">Organize bolões, gerencie apostas e acompanhe rankings entre amigos com sistema completo de pontuação.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">📱</div>
        <h3 class="feature-title">Multi-Plataforma</h3>
        <p class="feature-desc">Acesse de qualquer dispositivo - desktop, tablet ou smartphone - com sincronização automática em tempo real.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🏆</div>
        <h3 class="feature-title">Histórico Completo</h3>
        <p class="feature-desc">Base de dados com todas as Copas anteriores, recordes, artilheiros e momentos históricos do torneio.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🔔</div>
        <h3 class="feature-title">Notificações Personalizadas</h3>
        <p class="feature-desc">Receba alertas sobre suas seleções favoritas, início de jogos, gols e atualizações importantes.</p>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <div class="cta-content">
      <h2 class="cta-title">Pronto Para a Copa 2026?</h2>
      <p class="cta-text">Junte-se a milhares de usuários que já estão se preparando para o maior evento do futebol mundial. Cadastre-se agora e garanta acesso antecipado a todas as funcionalidades.</p>
      <a href="#" class="btn btn-primary" style="background: white; color: var(--energy-red); box-shadow: 0 10px 40px rgba(255,255,255,0.3);">Criar Conta Grátis</a>
    </div>
  </section>

  <footer>
    <p class="footer-text">© Copa 2026 - Todos os direitos reservados</p>
  </footer>

  <script>
    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Parallax effect for trophy icons
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      const trophyLeft = document.querySelector('.trophy-left');
      const trophyRight = document.querySelector('.trophy-right');

      if (trophyLeft) trophyLeft.style.transform = `rotate(-15deg) translateY(${scrolled * 0.3}px)`;
      if (trophyRight) trophyRight.style.transform = `rotate(15deg) translateY(${-scrolled * 0.2}px)`;
    });

    // Intersection Observer for animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'translateY(0)';
        }
      });
    }, observerOptions);

    document.querySelectorAll('.feature-card, .stat-card').forEach(el => {
      observer.observe(el);
    });
  </script>
</body>

</html>