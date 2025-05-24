



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPortal - Academic Management System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #2d3748;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 15px 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .nav-buttons {
            display: flex;
            gap: 15px;
        }

        .nav-btn {
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-login {
            background: transparent;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-login:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-signup {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: 2px solid transparent;
        }

        .btn-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.5);
        }

        /* Hero Section */
        .hero {
            padding-top: 120px;
            padding-bottom: 80px;
            text-align: center;
            position: relative;
        }

        .hero-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out 0.2s both;
            line-height: 1.2;
        }

        .hero .highlight {
            background: linear-gradient(135deg, #ffeb3b, #ff9800);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
            animation: fadeInUp 1s ease-out 0.4s both;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .hero-btn {
            padding: 16px 32px;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            min-width: 150px;
        }

        .hero-btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .hero-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        .hero-btn-secondary {
            background: rgba(255, 255, 255, 0.95);
            color: #667eea;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .hero-btn-secondary:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Roles Section */
        .roles {
            padding: 80px 0;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        .roles-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .roles h2 {
            text-align: center;
            font-size: 2.5rem;
            color: white;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .roles-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 60px;
        }

        .roles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .role-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out both;
        }

        .role-card:nth-child(1) { animation-delay: 0.2s; }
        .role-card:nth-child(2) { animation-delay: 0.4s; }
        .role-card:nth-child(3) { animation-delay: 0.6s; }

        .role-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .role-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .role-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2d3748;
            font-weight: 600;
        }

        .role-card p {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .role-features {
            list-style: none;
            text-align: left;
            margin-top: 20px;
        }

        .role-features li {
            color: #4a5568;
            margin-bottom: 8px;
            position: relative;
            padding-left: 25px;
        }

        .role-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #667eea;
            font-weight: bold;
        }

        /* Demo Info */
        .demo-info {
            padding: 80px 0;
            text-align: center;
        }

        .demo-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .demo-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .demo-card h2 {
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .demo-card p {
            color: #718096;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .demo-credentials {
            background: #f7fafc;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            border-left: 4px solid #667eea;
        }

        .demo-credentials h4 {
            color: #2d3748;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .credential-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            color: #4a5568;
        }

        .credential-value {
            font-family: monospace;
            background: #e2e8f0;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 14px;
        }

        /* Floating elements */
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 8s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 10%;
            animation-delay: 3s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            top: 80%;
            left: 20%;
            animation-delay: 6s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            50% {
                transform: translateY(-30px) rotate(10deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .hero-btn {
                width: 100%;
                max-width: 280px;
            }

            .roles h2,
            .demo-card h2 {
                font-size: 2rem;
            }

            .roles-grid {
                grid-template-columns: 1fr;
            }

            .credential-item {
                flex-direction: column;
                gap: 5px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Background Shapes -->
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">📚</div>
                <div class="logo-text">EduPortal</div>
            </div>
            <div class="nav-buttons">
                <a href="/login" class="nav-btn btn-login">Login</a>
                <a href="/signup" class="nav-btn btn-signup">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <h1>Academic Management <span class="highlight">System</span></h1>
            <p>A comprehensive role-based portal for students, administrators, and super administrators. Manage courses, grades, and academic resources all in one place.</p>
            <div class="hero-buttons">
                <a href="/signup" class="hero-btn hero-btn-primary">Create Account</a>
                <a href="/login" class="hero-btn hero-btn-secondary">Login</a>
            </div>
        </div>
    </section>

    <!-- Roles Section -->
    <section class="roles">
        <div class="roles-container">
            <h2>User Roles & Access Levels</h2>
            <p class="roles-subtitle">Different user types have different privileges and access to system features</p>
            <div class="roles-grid">
                <div class="role-card">
                    <div class="role-icon">👨‍🎓</div>
                    <h3>Student (User)</h3>
                    <p>Access to personal academic information and course materials.</p>
                    <ul class="role-features">
                        <li>View personal grades</li>
                        <li>Access course materials</li>
                        <li>Submit assignments</li>
                        <li>View class schedules</li>
                        <li>Update profile information</li>
                    </ul>
                </div>
                <div class="role-card">
                    <div class="role-icon">👨‍🏫</div>
                    <h3>Teacher (Admin)</h3>
                    <p>Manage courses, students, and academic content within assigned classes.</p>
                    <ul class="role-features">
                        <li>Manage assigned courses</li>
                        <li>Grade student assignments</li>
                        <li>Create course content</li>
                        <li>View class rosters</li>
                        <li>Generate grade reports</li>
                    </ul>
                </div>
                <div class="role-card">
                    <div class="role-icon">👨‍💼</div>
                    <h3>Principal (Super Admin)</h3>
                    <p>Full system access with ability to manage all users, courses, and system settings.</p>
                    <ul class="role-features">
                        <li>Manage all users & roles</li>
                        <li>System-wide analytics</li>
                        <li>Configure system settings</li>
                        <li>Course & curriculum management</li>
                        <li>Generate institutional reports</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Demo Information -->
    <section class="demo-info">
        <div class="demo-container">
            <div class="demo-card">
                <h2>Assignment Demo</h2>
                <p>This is a demonstration of a role-based authentication system built for academic management. Try logging in with different user roles to see how access levels change based on permissions.</p>
                
                <div class="demo-credentials">
                    <h4>Demo Credentials</h4>
                    <div class="credential-item">
                        <span>Student Email:</span>
                        <span class="credential-value">student@edu.com</span>
                    </div>
                    <div class="credential-item">
                        <span>Admin Email:</span>
                        <span class="credential-value">admin@edu.com</span>
                    </div>
                    <div class="credential-item">
                        <span>Super Admin Email:</span>
                        <span class="credential-value">superadmin@edu.com</span>
                    </div>
                    <div class="credential-item">
                        <span>Password (all):</span>
                        <span class="credential-value">password123</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="/login" class="hero-btn hero-btn-primary">Try Demo</a>
                    <a href="/signup" class="hero-btn hero-btn-secondary">Create New Account</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>