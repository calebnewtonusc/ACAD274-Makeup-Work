# ACAD 274 - Incomplete Assignments

Makeup work for ACAD-274: Designing Interactive Data Systems (Fall 2025)

## Overview

This repository contains three completed lab assignments:

1. **Movie Studio + Genre Page** - Dynamic PHP page displaying Warner Brothers Comedy films
2. **Custom Health Chart** - Interactive health statistics dashboard with medication filtering
3. **Animated Presentation** - Data-driven presentation about city density with jQuery animations

## Tech Stack

- PHP 8.2
- MySQL
- jQuery
- HTML5/CSS3
- JavaScript

## Project Structure

```
Finishing-ACAD-274/
├── index.html                      # Landing page
├── movies/
│   └── index.php                   # Movie lab (Warner Bros Comedy films)
├── health-chart/
│   ├── index.php                   # Health chart lab with medication filtering
│   └── healthchartframe.png        # Custom chart graphic
└── animated-presentation/
    ├── index.html                  # 5-slide animated presentation
    ├── skyline1.jpg                # City skyline image 1
    └── skyline2.jpg                # City skyline image 2
```

## Database Configuration

All labs connect to an external database hosted at:
- **Host**: webdev.iyaserver.com
- **Database**: dent_movies (movies lab), dent_health (health chart lab)
- **User**: dent_student
- **Password**: code4Studentuse

No additional database setup is required for Railway deployment.

## Deployment to Railway

### Prerequisites
- Railway account ([railway.app](https://railway.app))
- Git installed locally

### Deployment Steps

1. **Initialize Git repository** (if not already done):
   ```bash
   cd "Finishing-ACAD-274"
   git init
   git add .
   git commit -m "Initial commit: ACAD 274 makeup assignments"
   ```

2. **Install Railway CLI** (optional but recommended):
   ```bash
   npm install -g @railway/cli
   ```

3. **Deploy via Railway CLI**:
   ```bash
   railway login
   railway init
   railway up
   ```

   OR

4. **Deploy via GitHub**:
   - Push this repository to GitHub
   - Go to [railway.app](https://railway.app)
   - Click "New Project" → "Deploy from GitHub repo"
   - Select this repository
   - Railway will auto-detect the PHP configuration from `nixpacks.toml`

5. **Verify deployment**:
   - Railway will provide a URL (e.g., `your-project.up.railway.app`)
   - Visit the URL to see the landing page
   - Test all three lab links to ensure they work correctly

### Environment Variables

No environment variables are required. Database credentials are hardcoded in the PHP files as per the course requirements.

## Assignment Details

### Lab 1: Movie Studio + Genre Page
- **Due Date**: October 1, 2025
- **Description**: Displays movies filtered by studio (Warner Brothers) and genre (Comedy)
- **Features**: Database-driven content, dynamic sorting, responsive layout
- **Path**: `/movies/`

### Lab 2: Custom Health Chart
- **Due Date**: October 17, 2025
- **Description**: Interactive health dashboard with medication data visualization
- **Features**: URL parameter filtering, custom graphics, jQuery integration, 5 medication options
- **Path**: `/health-chart/`
- **URL Parameters**: `?medication=Aspirin` (or Lipitor, Ibuprofen, Penicillin, Paracetamol)

### Lab 3: Animated Presentation
- **Due Date**: October 21, 2025
- **Description**: 5-slide presentation about city density with sophisticated animations
- **Features**: jQuery animations, custom transitions, data tables, city images
- **Path**: `/animated-presentation/`

## Course Information

- **Course**: ACAD-274: Designing Interactive Data Systems
- **Semester**: Fall 2025
- **Institution**: University of Southern California
- **Student**: Caleb Newton

## Notes

- All assignments meet the professor's requirements as specified in the lab PDFs
- Code follows the patterns and style demonstrated in course materials
- Database connections use the course-provided external database server
- No local database setup is required

---

Built with PHP, MySQL, jQuery, and modern web technologies | Deployed on Railway
