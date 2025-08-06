<?php
$profile = [
    'name' => 'Jeshis Rasailee',
    'title' => 'System, Network & Security Engineer',
    'residence' => 'Nepal',
    'city' => 'Itahari, Province-1 ',
    'age' => 23,
    'profile_image' => 'assets/image/pp.jpg',
    'hero_image' => 'assets/image/bg.webp'
];

$stats = [
    ['number' => '2 years', 'suffix' => '+', 'label' => 'Years Experience'],
    ['number' => '30', 'suffix' => '+', 'label' => 'Completed Projects'],
    ['number' => '20', 'suffix' => '+', 'label' => 'Happy Clients'],
    ['number' => '10', 'suffix' => '+', 'label' => 'Awards and Regcognition']
];

$languages = [
    ['name' => 'English', 'percentage' => 100],
    ['name' => 'Nepali', 'percentage' => 90],
    ['name' => 'Hindi', 'percentage' => 50]
];

$services = [
    'Network Security',
    'System Administration',
    'Server And Infrastructure Setup',
    'IT Consulting'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $profile['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
<div class="container">
    <aside class="sidebar">
        <div style="position: relative;">
            <img src="<?php echo $profile['profile_image']; ?>" alt="<?php echo $profile['name']; ?>" class="profile-image">
            <div class="online-indicator"></div>
        </div>
        <h1 class="profile-name"><?php echo $profile['name']; ?></h1>
        <p class="profile-title"><?php echo $profile['title']; ?></p>
        <div class="profile-details">
            <div class="detail-item"><span class="detail-label">Residence:</span><span class="detail-value"><?php echo $profile['residence']; ?></span></div>
            <div class="detail-item"><span class="detail-label">City:</span><span class="detail-value"><?php echo $profile['city']; ?></span></div>
            <div class="detail-item"><span class="detail-label">Age:</span><span class="detail-value"><?php echo $profile['age']; ?></span></div>
        </div>
        <div class="languages-section">
            <h3 class="languages-title">Languages</h3>
            <div class="language-circles">
                <?php foreach ($languages as $lang): ?>
                    <div class="circle-progress">
                        <svg>
                            <circle cx="30" cy="30" r="26" class="circle-bg"></circle>
                            <circle cx="30" cy="30" r="26" class="circle-fill" 
                                    style="stroke-dasharray: <?php echo ($lang['percentage'] / 100) * 163.36; ?> 163.36;"></circle>
                        </svg>
                        <div class="circle-text"><?php echo $lang['percentage']; ?>%</div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.linkedin.com/in/jeshis-rasailee-982282229/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/jeshis_rasailee_/" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </div>
    </aside>

    <main class="main-content">
        <button class="menu-toggle"><i class="fas fa-bars"></i></button>
        <div class="cart-icon"><i class="fas fa-shopping-cart"></i><span class="cart-badge">0</span></div>
        <section class="hero-section">
            <div class="hero-content">
                <h2 class="hero-title">Discover my Experties!</h2>
                <div class="typewriter"><h3><code>I am a Tech Expert</code></h3></div>
                <button class="explore-btn">EXPLORE NOW</button>
            </div>
            <img src="<?php echo $profile['hero_image']; ?>" alt="<?php echo $profile['name']; ?>" class="hero-image">
        </section>
        <section class="stats-section">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item">
                    <div class="stat-number"><?php echo $stat['number'] . $stat['suffix']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="services-section">
            <h3 class="services-title">My Services</h3>
            <!-- Add service cards here if needed -->
        </section>
    </main>
</div>

<div class="home-indicator">HOME</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelector('.menu-toggle').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('mobile-hidden');
        });

        document.querySelector('.explore-btn').addEventListener('click', function () {
            alert('Exploring amazing experiences! This would typically navigate to a portfolio section.');
        });

        document.querySelectorAll('.social-icon').forEach(icon => {
            icon.addEventListener('mouseenter', function () {
                this.style.transform = 'translateY(-3px) scale(1.1)';
            });
            icon.addEventListener('mouseleave', function () {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        const statNumbers = document.querySelectorAll('.stat-number');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'countUp 2s ease-out';
                }
            });
        });

        statNumbers.forEach(stat => observer.observe(stat));
    });
</script>
</body>
</html>
