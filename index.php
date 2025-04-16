<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom, #E8DCC8, #D2C2B0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 60px;
            background: linear-gradient(135deg, #F5E0C2, #E8D5B8);
            box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            position: relative;
            width: 90vw;
            height: 90vh;
            max-width: 1200px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            z-index: 1;
        }

        .dot-pattern,
        .dot-pattern-right {
            position: absolute;
            width: 30vw;
            height: 30vw;
            background: radial-gradient(circle, rgba(0, 0, 0, 0.3) 12%, rgba(255, 255, 255, 0) 25%);
            background-size: 15px 15px;
        }

        .dot-pattern {
            top: -10%;
            left: -10%;
        }

        .dot-pattern-right {
            bottom: -10%;
            right: -10%;
        }

        .half-circle {
            position: absolute;
            width: 160px;
            height: 80px;
            background-color: #E5C1A4;
            border-top-left-radius: 160px;
            border-top-right-radius: 160px;
            bottom: -30px;
            right: -30px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.15);
        }

        .menu-container {
            position: absolute;
            top: 15%;
            left: 10%;
            display: none;
            z-index: 3;
        }

        .menu-toggle {
            background-color: #C9A88B;
            color: white;
            padding: 12px 22px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
            width: 120px;
            height: 60px;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .menu-toggle:hover {
            background-color: #9C7553;
            transform: scale(1.05);
        }

        .menu-toggle:active {
            transform: scale(0.95);
        }

        .menu-icon {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .menu-icon div {
            width: 20px;
            height: 3px;
            background-color: white;
            border-radius: 2px;
        }

        .popup-menu {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            width: 180px;
            background: #C9A88B;
            padding: 10px 0;
            border-radius: 15px;
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: all 0.3s ease-in-out;
            z-index: 3;
        }

        .popup-menu.show {
            visibility: visible;
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }

        .popup-menu .btn,
        .btn-container .btn {
            display: block;
            width: 100%;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            background: #C9A88B;
            color: white;
            padding: 12px;
            border: none;
            text-align: center;
            transition: all 0.3s;
            border-radius: 50px;
            cursor: pointer;
            z-index: 3;
        }

        .popup-menu .btn:hover,
        .btn-container .btn:hover {
            background: #9C7553;
            transform: translateY(-2px);
        }

        .btn-container {
            display: flex;
            gap: 15px;
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translateX(-50%);
            z-index: 3;
        }

        @media (max-width: 768px) {
            .menu-container {
                display: block;
            }

            .btn-container {
                display: none;
            }
        }

        /* Added circles with classic effects */
        .big-circle,
        .small-circle,
        .white-circle {
            position: absolute;
            border-radius: 50%;
            z-index: 2;
        }

        .big-circle {
            width: 150px;
            height: 150px;
            background: radial-gradient(circle, rgba(229, 193, 164, 0.8), rgba(229, 193, 164, 0.3));
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2), inset 2px 2px 5px rgba(255, 255, 255, 0.4);
        }

        .small-circle {
            width: 70px;
            height: 70px;
            background: radial-gradient(circle, rgba(229, 193, 164, 0.8), rgba(229, 193, 164, 0.3));
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15), inset 1px 1px 3px rgba(255, 255, 255, 0.3);
        }

        .white-circle {
            width: 50px;
            height: 50px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.3));
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1), inset 1px 1px 2px rgba(200, 200, 200, 0.3);
        }

        .big-circle1 {
            top: 10%;
            left: 10%;
        }

        .big-circle2 {
            bottom: 10%;
            right: 10%;
        }

        .small-circle1 {
            top: 20%;
            left: 30%;
        }

        .small-circle2 {
            top: 35%;
            right: 35%;
        }

        .small-circle3 {
            bottom: 25%;
            left: 25%;
        }

        .small-circle4 {
            bottom: 35%;
            right: 20%;
        }

        .small-circle5 {
            top: 15%;
            right: 15%;
        }

        .small-circle6 {
            bottom: 15%;
            left: 15%;
        }

        .white-circle1 {
            top: 45%;
            left: 15%;
        }

        .white-circle2 {
            top: 25%;
            right: 10%;
        }

        .white-circle3 {
            bottom: 20%;
            right: 35%;
        }

        spline-viewer {
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translateY(-50%);
            width: 600px;
            height: 400px;
            z-index: 2;
        }

        /* Hide spline viewer on mobile */
        @media (max-width: 768px) {
            spline-viewer {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="dot-pattern"></div>
        <div class="dot-pattern-right"></div>
        <div class="half-circle"></div>

        <div class="big-circle big-circle1"></div>
        <div class="big-circle big-circle2"></div>

        <div class="small-circle small-circle1"></div>
        <div class="small-circle small-circle2"></div>
        <div class="small-circle small-circle3"></div>
        <div class="small-circle small-circle4"></div>
        <div class="small-circle small-circle5"></div>
        <div class="small-circle small-circle6"></div>

        <div class="white-circle white-circle1"></div>
        <div class="white-circle white-circle2"></div>
        <div class="white-circle white-circle3"></div>

        <div class="menu-container">
            <button class="menu-toggle" onclick="toggleMenu()">
                <div class="menu-icon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                Menu
            </button>
            <div class="popup-menu" id="popupMenu">
                <button class="btn" data-target="about">About Us</button>
                <button class="btn" data-target="contact">Contact</button>
                <button class="btn" data-target="syllabus">Syllabus</button>
                <button class="btn" data-target="achievement">Achievement</button>
                <button class="btn" data-target="login">Login</button>
            </div>
        </div>

        <div class="btn-container">
            <button class="btn" data-target="about">About Us</button>
            <button class="btn" data-target="contact">Contact</button>
            <button class="btn" data-target="syllabus">Syllabus</button>
            <button class="btn" data-target="achievement">Achievement</button>
            <button class="btn" data-target="login">Login</button>
        </div>

        <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.82/build/spline-viewer.js"></script>
        <spline-viewer url="https://prod.spline.design/fCh5P38PPATYXVnX/scene.splinecode"></spline-viewer>

    </div>

    <script>
        function toggleMenu() {
            const menu = document.getElementById('popupMenu');
            menu.classList.toggle('show');
        }

        document.querySelectorAll('.btn').forEach(button => {
    button.addEventListener('click', function() {
        const target = this.getAttribute('data-target');
        if (target === "login") {
            window.location.href = "login.php"; // Redirect to login.php
        } else {
            alert(`${target.charAt(0).toUpperCase() + target.slice(1)} clicked!`);
        }
    });
});

    </script>
</body>

</html>