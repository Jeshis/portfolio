
<?php
// Personal information
$profile = [
    'name' => 'Jeshis Rasailee',
    'title' => 'System, Network & Security Engineer',
    'residence' => 'Nepal',
    'city' => 'Itahari, Province-1 ',
    'age' => 23,
    'profile_image' => 'assets/image/pp.jpg',
    'hero_image' => 'assets/image/bg.webp'
];

// Statistics
$stats = [
    ['number' => '2 years', 'suffix' => '+', 'label' => 'Years Experience'],
    ['number' => '30', 'suffix' => '+', 'label' => 'Completed Projects'],
    ['number' => '20', 'suffix' => '+', 'label' => 'Happy Clients'],
    ['number' => '10', 'suffix' => '+', 'label' => 'Awards and Regcognition']
];

// Languages/Skills with percentages
$languages = [
    ['name' => 'English', 'percentage' => 100],
    ['name' => 'Nepali', 'percentage' => 90],
    ['name' => 'Hindi', 'percentage' => 50]
];

// Services (you can expand this)
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
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #00296b 0%, #002817 50%, #00509d 100%);
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 350px;
            background: rgba(0, 0, 0, 0.3);
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #ffc107;
            margin-bottom: 20px;
            position: relative;
        }

        .online-indicator {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 20px;
            height: 20px;
            background: #ffc107;
            border-radius: 50%;
            border: 3px solid white;
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .profile-title {
            font-size: 14px;
            color: #ccc;
            text-align: center;
            margin-bottom: 40px;
            line-height: 1.5;
        }

        .profile-details {
            width: 100%;
            margin-bottom: 40px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .detail-label {
            color: #ccc;
        }

        .detail-value {
            color: white;
            font-weight: 500;
        }

        .languages-section {
            width: 100%;
            margin-bottom: 40px;
        }

        .languages-title {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .language-circles {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .circle-progress {
            position: relative;
            width: 60px;
            height: 60px;
        }

        .circle-progress svg {
            width: 100%;
            height: 100%;
            transform: rotate(-90deg);
        }

        .circle-progress circle {
            fill: none;
            stroke-width: 4;
        }

        .circle-bg {
            stroke: rgba(255, 255, 255, 0.1);
        }

        .circle-fill {
            stroke: #ffc107;
            stroke-linecap: round;
            transition: stroke-dasharray 0.3s ease;
        }

        .circle-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 12px;
            font-weight: bold;
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: auto;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: #ffc107;
            color: #000;
            transform: translateY(-2px);
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 40px;
            position: relative;
            background: linear-gradient(135deg, rgba(74, 26, 46, 0.8) 0%, #00509d 100%);
        }

        .menu-toggle {
            position: absolute;
            top: 30px;
            right: 30px;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            z-index: 1000;
        }

        .cart-icon {
            position: absolute;
            top: 30px;
            right: 80px;
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ffc107;
            color: #000;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 60px;
            min-height: 400px;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: bold;
            line-height: 1.2;
            margin-bottom: 30px;
        }

        .code-snippet {
            font-family: 'Courier New', monospace;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .code-snippet .tag {
            color: #ffc107;
        }

        .explore-btn {
            background: #ffc107;
            color: #000;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .explore-btn:hover {
            background: #ffb300;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }

        .hero-image {
            width: 500px;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 40px;
        }

        .stats-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 60px;
            gap: 30px;
        }

        .stat-item {
            text-align: center;
            flex: 1;
        }

        .stat-number {
            font-size: 36px;
            font-weight: bold;
            color: #ffc107;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 14px;
            color: #ccc;
            line-height: 1.4;
        }

        .services-section {
            margin-top: 40px;
        }

        .services-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .home-indicator {
            position: fixed;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            writing-mode: vertical-rl;
            text-orientation: mixed;
            color: #666;
            font-size: 14px;
            letter-spacing: 2px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                padding: 20px;
            }

            .hero-section {
                flex-direction: column;
                text-align: center;
            }

            .hero-image {
                margin-left: 0;
                margin-top: 20px;
                width: 250px;
                height: 300px;
            }

            .hero-title {
                font-size: 32px;
            }

            .stats-section {
                flex-wrap: wrap;
                gap: 20px;
            }

            .stat-item {
                min-width: 45%;
            }
            .typewriter {
                font-family: monospace;
                color: gold;
                font-size: 20px;
                white-space: nowrap;
                overflow: hidden;
                display: inline-block;
                border-right: 2px solid gold;
                animation: typing 3s steps(25), blink 0.7s step-end infinite;
            }         
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div style="position: relative;">
                <img src="<?php echo $profile['profile_image']; ?>" alt="<?php echo $profile['name']; ?>" class="profile-image">
                <div class="online-indicator"></div>
            </div>
            
            <h1 class="profile-name"><?php echo $profile['name']; ?></h1>
            <p class="profile-title"><?php echo $profile['title']; ?></p>
            
            <div class="profile-details">
                <div class="detail-item">
                    <span class="detail-label">Residence:</span>
                    <span class="detail-value"><?php echo $profile['residence']; ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">City:</span>
                    <span class="detail-value"><?php echo $profile['city']; ?></span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Age:</span>
                    <span class="detail-value"><?php echo $profile['age']; ?></span>
                </div>
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

        <!-- Main Content -->
        <main class="main-content">
            <button class="menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-badge">0</span>
            </div>
            
            <section class="hero-section">
                <div class="hero-content">
                    <h2 class="hero-title">Discover my Experties!</h2>
                    <div class="typewriter">
                    <h3>
                    <code>I am a Tech Expert</code>
                    </h3>
                    </div>
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
                <!-- Services content can be added here -->
            </section>
        </main>
    </div>
    
    <div class="home-indicator">HOME</div>

    <script>
        // Add some interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Menu toggle functionality
            const menuToggle = document.querySelector('.menu-toggle');
            const sidebar = document.querySelector('.sidebar');
            
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('mobile-hidden');
            });

            // Explore button functionality
            const exploreBtn = document.querySelector('.explore-btn');
            exploreBtn.addEventListener('click', function() {
                alert('Exploring amazing experiences! This would typically navigate to a portfolio section.');
            });

            // Social icon hover effects
            const socialIcons = document.querySelectorAll('.social-icon');
            socialIcons.forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px) scale(1.1)';
                });
                
                icon.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Animate stats on scroll (simple version)
            const statNumbers = document.querySelectorAll('.stat-number');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'countUp 2s ease-out';
                    }
                });
            });

            statNumbers.forEach(stat => {
                observer.observe(stat);
            });
        });

        // Add CSS animation for count up effect
        const style = document.createElement('style');
        style.textContent = `
            @keyframes countUp {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            .mobile-hidden {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
            }
            
            @media (max-width: 768px) {
                .sidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    height: 100vh;
                    z-index: 999;
                    transition: transform 0.3s ease;
                }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>