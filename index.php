<?php include('includes/header.php'); ?>

<section class="hero" id="accueil">
    <div class="hero-content"> 
        <div class="hero-main-content">
            <div class="hero-photo-container">
                <img src="images/photo-profil.jpg" alt="Gianfranco Aresi" class="profile-photo">
            </div>
            
            <div class="hero-text">
                <h1>Gianfranco Aresi</h1>
                
                <div class="animated-text-container">
                    [ Role: <span id="scramble-target" data-phrases='["Data Analyst.", "Développeur Web.", "Développeur Python."]' aria-label="Data Analyst."></span> ]
                </div>
                
                <p class="parcours-tagline">
                    Mon parcours en BUT Science des Données se concentre sur l'analyse, le traitement et la visualisation. 
                    Mon objectif : transformer vos données brutes en Dashboards interactifs et intelligibles.
                </p>
                <a href="#competences" class="cta-button">EXPLORER MON PROFIL</a>
                
            </div> 

        </div>
    </div> 
</section>
<section class="standard-section js-scroll" id="competences">
    <div class="hero-content">
        <span class="section-tag"></span>
        <h2>Mes Compétences Détaillées</h2>
        
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">📊</span>
                    <h3>Data Science & ML</h3>
                </div>
                <div class="skill-body">
                    <p>Expertise en analyse prédictive et traitement de données massives.</p>
                    <div class="skill-tags">
                        <span>Python</span> <span>Pandas</span> <span>Matplotlib</span> <span>Statistiques</span>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">🌐</span>
                    <h3>Développement Web</h3>
                </div>
                <div class="skill-body">
                    <p>Création d'interfaces interactives pour la visualisation de données.</p>
                    <div class="skill-tags">
                        <span>Vuejs</span> <span>Laravel</span> <span>JS</span> <span>Chart.js</span> <span>HTML\CSS</span>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">💾</span>
                    <h3>Bases de Données & BI</h3>
                </div>
                <div class="skill-body">
                    <p>Architecture de données et conception de rapports décisionnels.</p>
                    <div class="skill-tags">
                        <span>SQL</span> <span>PostgreSQL</span> <span>Power BI</span> <span>VBA</span>
                    </div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-header">
                    <span class="skill-icon">⚙️</span>
                    <h3>Outils & Méthodes</h3>
                </div>
                <div class="skill-body">
                    <p>Gestion de projet moderne et déploiement continu.</p>
                    <div class="skill-tags">
                        <span>Git</span> <span>CI/CD</span> <span>Office 365</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="standard-section js-scroll" id="experience-pro">
    <div class="hero-content">
        <h2>Expériences Professionnelles</h2>
        
        <div class="experience-list-container">
            <article class="experience-card">
                <div class="exp-sidebar">
                    <span class="dates">Sept 2024 — Aujourd'hui</span>
                        <span class="company-name">PLANFOR</span>
                    <div class="company-logo-container-color">
                        <img src="images/planfor.jpg" alt="Logo Planfor" class="company-logo-color">
                    </div>
                </div>
                <div class="exp-content">
                    <h3>Alternant Data Analyste</h3>
                    <p>Automatisation du flux de données et intégration logicielle.</p>
                    <ul>
                        <li>Développement de dashboard Laravel/Python pour le pilotage de l'entreprise.</li>
                        <li>Extraction et nettoyage de données API</li>
                        <li>Ingénierie des pipelines de données pour supprimer les saisies manuelles</li>
                    </ul>
                    <div class="technologies-tags">
                        <span class="tech-pill">Laravel</span>
                        <span class="tech-pill">VueJS</span>
                        <span class="tech-pill">Python</span>
                        <span class="tech-pill">SAGE</span>
                        <span class="tech-pill">PostgreSQL</span>
                    </div>
                </div>
            </article>

            <article class="experience-card">
                <div class="exp-sidebar">
                    <span class="dates">Avril 2025 (12 sem.)</span>
                    <div class="company-name">MAÏSADOUR</div>
                    <div class="company-logo-container-color">
                        <img src="images/logomais.png" alt="Logo Maïsadour" class="company-logo-color">
                    </div>
                </div>
                
                <div class="exp-content">
                    <h3>Stage Analyste Qualité Données</h3>
                    <p>Assurer la fiabilité des données Excel et PowerBI.</p>
                    <ul>
                        <li>Conception d'un dashboard PowerBI complet (Modélisation DAX & Power Query)</li>
                        <li>Développement de scripts VBA pour l'optimisation des tâches récurrentes</li>
                        <li>Audit de fiabilité sur les flux de données pour éliminer les incohérences</li>
                    </ul>
                    <div class="technologies-tags">
                        <span class="tech-pill">Excel, VBA</span>
                        <span class="tech-pill">SAP</span>
                        <span class="tech-pill">PowerBI</span>
                    </div>
                </div>
            </article>
        </div>
        
        <div class="center-link" style="margin-top: 40px;">
            <a href="experience.php" class="cta-button">Toutes les Expériences</a>
        </div>
    </div>
</section>

<section class="standard-section js-scroll" id="projets-academiques">
    <div class="hero-content">
        <h2>📚 Projets Réalisés</h2>
        <div class="projets-mini-grid">
            <a href="projets.php#optimisation" class="project-card-minimal">
                <div class="project-img-wrapper">
                    <img src="images/projet4.png" alt="Site Plantes">
                </div>
                <div class="project-meta">
                    <h3>Pilotage de la Performance Méthanisation</h3>
                    <p class="tech-tags">Power BI • Power Query • DAX • Excel</p>
                </div>
            </a>
            
            <a href="projets.php#sentiment" class="project-card-minimal">
                <div class="project-img-wrapper">
                    <img src="images/projet2.png" alt="Dashboard">
                </div>
                <div class="project-meta">
                    <h3>Architecture Dashboard Décisionnel</h3>
                    <p class="tech-tags">LARAVEL • VUEJS • PYTHON • PostgreSQL</p>
                </div>
            </a>
        </div>
                <div class="center-link" style="margin-top: 40px;">
            <a href="projets.php" class="cta-button">Tout les Projets</a>
        </div>
    </div>
</section>

<button id="backToTop" title="Retour en haut">
    <i class="fas fa-arrow-up"></i>
</button>
<?php include('includes/footer.php'); ?>