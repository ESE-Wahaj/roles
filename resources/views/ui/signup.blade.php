<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Modern App</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .signup-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .signup-header h2 {
            color: #2d3748;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .signup-header p {
            color: #718096;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: #2d3748;
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .form-input::placeholder {
            color: #a0aec0;
        }

        .form-select {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: #2d3748;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23a0aec0' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 16px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 48px;
        }

        .form-select:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .signup-button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .signup-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        .signup-button:active {
            transform: translateY(0);
        }

        .links-section {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .links-section a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            margin: 0 15px;
        }

        .links-section a:hover {
            color: #764ba2;
        }

        .links-section a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .links-section a:hover::after {
            width: 100%;
        }

        .links-section p {
            color: #718096;
            margin-bottom: 15px;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Floating elements for decoration */
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
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 70%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            top: 30%;
            right: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        /* Responsive design */
        @media (max-width: 480px) {
            .signup-container {
                padding: 30px 25px;
                margin: 20px;
            }

            .signup-header h2 {
                font-size: 24px;
            }

            .nav-links {
                flex-direction: column;
                gap: 15px;
            }

            .links-section a {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="signup-container">
        <div class="signup-header">
            <h2>Create Account</h2>
            <p>Join us today</p>
        </div>

        <form method="POST" action="/signup">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your full name" class="form-input" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-input" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Create a password" class="form-input" required>
            </div>
            <div class="form-group">
                <select name="role" class="form-select" required>
                    <option value="" disabled selected>Select your role</option>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="super-admin">Super Admin</option>
                </select>
            </div>
            <button type="submit" class="signup-button">Create Account</button>
        </form>

        <div class="links-section">
            <p>Already have an account?</p>
            <div class="nav-links">
                <a href="/login">Sign In</a>
                <a href="/">Home</a>
            </div>
        </div>
    </div>
</body>
</html>