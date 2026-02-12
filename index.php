<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACAD 274 - Incomplete Assignments | Caleb Newton</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .assignments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .assignment-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .assignment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
        }

        .assignment-number {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .assignment-card h2 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .assignment-card .due-date {
            color: #999;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .assignment-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .assignment-card .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tech-badge {
            background: #f0f0f0;
            color: #667eea;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .assignment-card:hover h2 {
            color: #667eea;
        }

        .assignment-card:hover .status-badge {
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            color: white;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        footer p {
            margin: 10px 0;
            opacity: 0.9;
        }

        .status-badge {
            display: inline-block;
            background: #4ade80;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>ACAD 274: Incomplete Assignments</h1>
            <p>Designing Interactive Data Systems | Fall 2025</p>
            <p style="font-size: 1rem; margin-top: 10px;">Caleb Newton</p>
        </header>

        <div class="assignments-grid">
            <!-- Assignment 1: Movies Lab -->
            <a href="movies/" class="assignment-card">
                <div class="assignment-number">1</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Movie Studio + Genre Page</h2>
                <p class="due-date">Due: October 1, 2025</p>
                <p>Dynamic PHP page displaying movies filtered by studio (Warner Brothers) and genre (Comedy) with database integration.</p>
                <div class="tech-stack">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">HTML</span>
                    <span class="tech-badge">CSS</span>
                </div>
            </a>

            <!-- Assignment 2: Health Chart Lab -->
            <a href="health-chart/" class="assignment-card">
                <div class="assignment-number">2</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Custom Health Chart</h2>
                <p class="due-date">Due: October 17, 2025</p>
                <p>Interactive health statistics dashboard with custom graphics, displaying medication data with dynamic filtering and visualization.</p>
                <div class="tech-stack">
                    <span class="tech-badge">PHP</span>
                    <span class="tech-badge">MySQL</span>
                    <span class="tech-badge">jQuery</span>
                    <span class="tech-badge">CSS</span>
                </div>
            </a>

            <!-- Assignment 3: Animated Presentation -->
            <a href="animated-presentation/" class="assignment-card">
                <div class="assignment-number">3</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Animated Presentation</h2>
                <p class="due-date">Due: October 21, 2025</p>
                <p>Data-driven presentation about city density with 5 slides featuring sophisticated jQuery animations and visual transitions.</p>
                <div class="tech-stack">
                    <span class="tech-badge">jQuery</span>
                    <span class="tech-badge">JavaScript</span>
                    <span class="tech-badge">HTML</span>
                    <span class="tech-badge">CSS</span>
                </div>
            </a>
        </div>

        <footer>
            <p><strong>Course:</strong> ACAD-274: Designing Interactive Data Systems</p>
            <p><strong>Semester:</strong> Fall 2025 | University of Southern California</p>
            <p><strong>Student:</strong> Caleb Newton</p>
            <p style="margin-top: 20px; font-size: 0.9rem;">
                Built with PHP, MySQL, jQuery, and modern web technologies
            </p>
        </footer>
    </div>
</body>
</html>
