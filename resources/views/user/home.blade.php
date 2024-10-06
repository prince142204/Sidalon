<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next-Gen Dashboard</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Exo:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Exo', sans-serif;
            background: black;
            color: #fff;
            height: 100vh;
            overflow: hidden;
        }

        /* Dashboard layout */
        .dashboard {
            display: flex;
            height: 100%;
        }

        /* Sidebar */
        .sidebar {
            width: 300px;
            background: #111;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar h2 {
            font-family: 'Orbitron', sans-serif;
            font-size: 2em;
            color: #00fff6;
            text-align: center;
            margin-bottom: 30px;
        }
        /* Sidebar */
        .sidebar {
            width: 260px;
            background: #302514;
            backdrop-filter: blur(10px);
            border-right: 2px solid rgba(255, 255, 255, 0.2);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 30px;
            transition: 0.5s;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 20px;
            margin-bottom: 20px;
            background: #543304;
            color: #fff;
            text-align: center;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 8px;
            font-size: 1.2em;
            position: relative;
        }

        .sidebar ul li::before {
            content: '';
            position: absolute;
            top: 0;
            left: -50px;
            width: 50px;
            height: 100%;
            background: rgba(0, 255, 255, 0.1);
            transition: transform 0.4s ease;
            transform: skewX(-30deg) translateX(-100px);
        }

        .sidebar ul li:hover::before {
            transform: skewX(-30deg) translateX(0);
        }

        .sidebar ul li:hover {
            background: rgba(0, 255, 255, 0.2);
            transform: scale(1.05);
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 40px;
            background:#111;
            backdrop-filter: blur(12px);
            border-radius: 20px 0 0 20px;
            overflow-y: auto;
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }

        /* Welcome Banner */
        .welcome-banner {
            background: linear-gradient(22deg, #bf7207, #302514);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 20px #bf7207;
            text-align: center;
            animation: slideIn 1s ease forwards;
        }

        @keyframes slideIn {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        .welcome-banner h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.5em;
            color: #fff;
            margin-bottom: 10px;
        }

        .welcome-banner p {
            font-size: 1.2em;
            color: #e6ffff;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }

        .stat-card {
            background: #bf720729;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 8px 30px #bf720729;
            transition: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            box-shadow: 0px 12px 40px #bf720729;
            transform: translateY(-5px);
        }

        .stat-card h3 {
            font-size: 1.6em;
            margin-bottom: 10px;
            color: #00e5ff;
            position: relative;
            z-index: 1;
        }

        .stat-card p {
            font-size: 2.2em;
            font-family: 'Orbitron', sans-serif;
            color: #fff;
            position: relative;
            z-index: 1;
        }

        /* Floating background elements */
        .stat-card::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background:#c177107d;
            border-radius: 50%;
            filter: blur(50px);
            z-index: 0;
        }

        /* Insights */
        .insights {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 20px;
        }

        .insight-card {
            background:  #bf720729;
            padding: 20px;
            border-radius: 12px;
            position: relative;
            overflow: hidden;
            box-shadow: 0px 8px 30px #251703;
        }

        .insight-card h3 {
            font-size: 1.8em;
            color:#bf720729;
            margin-bottom: 10px;
        }

        .insight-card p {
            font-size: 1.2em;
            color: #e6ffff;
        }

        /* Graphical widget */
        .graph-widget {
            background:#fd930047;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 12px 30px #bf720747;
        }

        .graph-widget h3 {
            font-size: 2em;
            color: #00ffe1;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 20px;
            color: #fff;
            background: #111;
            border-radius: 20px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Next-Gen Dashboard</h2>
            <ul>
                <li>Dashboard</li>
                <li>Analytics</li>
                <li>Sales</li>
                <li>Projects</li>
                <li>Settings</li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            
            <!-- Welcome Banner -->
            <section class="welcome-banner">
                <h1>Welcome, Admin!</h1>
                <p>Monitor the future of your business with real-time insights and analytics.</p>
            </section>

            <!-- Stats Grid -->
            <section class="stats-grid">
                <div class="stat-card">
                    <h3>Revenue</h3>
                    <p>$89,340</p>
                </div>
                <div class="stat-card">
                    <h3>Active Users</h3>
                    <p>12,894</p>
                </div>
                <div class="stat-card">
                    <h3>New Orders</h3>
                    <p>3,473</p>
                </div>
            </section>

            <!-- Insights and Graphs -->
            <section class="insights">
                <div class="insight-card">
                    <h3>Customer Insights</h3>
                    <p>Over 95% customer satisfaction rate this month.</p>
                </div>
                <div class="graph-widget">
                    <h3>Sales Growth</h3>
                    <!-- You can embed a chart library like Chart.js here -->
                    <p>Graphical representation of sales would go here...</p>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        © 2024 Next-Gen Tech. Powering the Future.
    </footer>

</body>
</html>
