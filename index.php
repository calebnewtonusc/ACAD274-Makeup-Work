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

        <div style="background: rgba(255,255,255,0.95); border-radius: 15px; padding: 25px; margin-bottom: 30px; border-left: 5px solid #667eea;">
            <h2 style="color: #333; font-size: 1.3rem; margin-bottom: 12px;">📝 Note About These Submissions</h2>
            <p style="color: #555; line-height: 1.7; margin-bottom: 10px;">
                It turns out I had already completed all three assignments below (Movies Lab, Chart Lab, and Mini-site) during the semester.
                However, I received <strong>0/no grade</strong> on them in the system.
            </p>
            <p style="color: #555; line-height: 1.7; margin-bottom: 10px;">
                <strong>These three assignments (1-3) are being resubmitted as proof of completion.</strong>
                The actual incomplete work is the <strong>final group project</strong>, which I will complete and add to this page once finished.
            </p>
            <p style="color: #777; font-size: 0.9rem; font-style: italic;">
                This page will be updated with the final project deliverables upon completion.
            </p>
        </div>

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

            <!-- Assignment 3: Mini Data Information Site -->
            <a href="mini-site/" class="assignment-card">
                <div class="assignment-number">3</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Mini Data Information Site</h2>
                <p class="due-date">Due: September 30, 2025</p>
                <p>Multi-page mini-website on cities data with navigation, featuring U.S. and Canadian city analysis, data tables, and resources.</p>
                <div class="tech-stack">
                    <span class="tech-badge">HTML</span>
                    <span class="tech-badge">CSS</span>
                    <span class="tech-badge">Navigation</span>
                    <span class="tech-badge">Multi-page</span>
                </div>
            </a>

            <!-- Milestone 1: Individual Data Visualizations -->
            <a href="data-visualizations/" class="assignment-card">
                <div class="assignment-number">4</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Individual Data Visualizations</h2>
                <p class="due-date">Project Milestone | Fall 2025</p>
                <p>Custom geographic and statistical visualizations for the final project: facility distribution maps, access heatmaps, regional comparisons, and priority area matrices.</p>
                <div class="tech-stack">
                    <span class="tech-badge">GeoPandas</span>
                    <span class="tech-badge">Leaflet.js</span>
                    <span class="tech-badge">D3.js</span>
                    <span class="tech-badge">Plotly</span>
                </div>
            </a>

            <!-- Milestone 2: Three Core Charts -->
            <a href="three-charts/" class="assignment-card">
                <div class="assignment-number">5</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Three Core Charts Analysis</h2>
                <p class="due-date">Project Milestone | Fall 2025</p>
                <p>Three essential charts analyzing healthcare equity: regional facility density comparison, distance distribution histogram, and socioeconomic correlation scatter plot.</p>
                <div class="tech-stack">
                    <span class="tech-badge">Chart.js</span>
                    <span class="tech-badge">Matplotlib</span>
                    <span class="tech-badge">Seaborn</span>
                    <span class="tech-badge">SciPy</span>
                </div>
            </a>

            <!-- Final Project: LA Healthcare Access Mapping -->
            <a href="final-project/" class="assignment-card" style="grid-column: 1 / -1;">
                <div class="assignment-number">🏆</div>
                <span class="status-badge">✓ Complete</span>
                <h2>Final Project: LA Healthcare Access Mapping</h2>
                <p class="due-date">Group Project | Fall 2025</p>
                <p>Production-ready full-stack platform analyzing healthcare access gaps across LA County. Features interactive maps, geospatial analysis, RESTful API, and evidence-based policy recommendations serving 9.9M residents.</p>
                <div class="tech-stack">
                    <span class="tech-badge">Next.js 16</span>
                    <span class="tech-badge">FastAPI</span>
                    <span class="tech-badge">Python</span>
                    <span class="tech-badge">GeoPandas</span>
                    <span class="tech-badge">PostgreSQL</span>
                    <span class="tech-badge">Interactive Maps</span>
                    <span class="tech-badge">Data Viz</span>
                    <span class="tech-badge">RESTful API</span>
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
