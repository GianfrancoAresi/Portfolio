<?php include('includes/header.php'); ?>

<section class="standard-section projects-page">
    <div class="hero-content">
        <span class="section-tag">/ PORTFOLIO</span>
        <h1 class="main-title">Mes Projets</h1>
        
        <div class="filter-container">
            <button class="filter-btn active" data-filter="all">All </button>
            <button class="filter-btn" data-filter="web-bi">Web & BI</button>
            <button class="filter-btn" data-filter="data-science">Data Science</button>

        </div>

        <div class="projects-grid">
       <article class="project-card-v2 js-scroll" data-category="web-bi">
    <div class="project-card-img">
        <img src="images/projet4.png" alt="Dashboard Power BI Maïsadour">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># WEB & BI</span>
        <h2 class="project-title">Pilotage de la Performance Méthanisation</h2>
        
        <p class="project-desc">
            Réalisé lors de mon stage chez <strong>Maïsadour</strong>. Conception d'un dashboard décisionnel pour le suivi des méthaniseurs, incluant le nettoyage des données (ETL) et la création d'indicateurs de performance.
        </p>

        <div class="project-tech-list">
            <span>Power BI</span>
            <span>Power Query</span>
            <span>DAX</span>
            <span>Excel</span>
        </div>

        <a href="#" class="view-project-link">Projet Privé</a>
    </div>
</article>     

<article class="project-card-v2 js-scroll" data-category="web-bi">
    
    <div class="project-card-img">
        <img src="images/projet2.png" alt="Dashboard BI">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># WEB & BI</span>
        <h2 class="project-title">Architecture Dashboard Décisionnel</h2>
        
        <p class="project-desc">
            Réalisé lors de mon alternance chez <strong>Planfor</strong>. Développement d'une interface de Business Intelligence. Mise en place d'une architecture <strong>FullStack</strong> permettant la visualisation en temps réel d'indicateurs clés, avec une gestion robuste des données sous PostgreSQL.
        </p>

        <div class="project-tech-list">
            <span>Laravel</span>
            <span>Vue.js</span>
            <span>PostgreSQL</span>
            <span>Python</span>
        </div>

        <a href="#" class="view-project-link">Projet Privé</a>
    </div>
</article>

<article class="project-card-v2 js-scroll" data-category="web-bi">
    <div class="project-card-img">
        <img src="images/projet1.png" alt="Plateforme Botanique">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># WEB & BI</span>
        <h2 class="project-title">Plateforme Botanique Interactive</h2>
        
        <p class="project-desc">
            Conception d'une application web complète dédiée à la botanique. Le projet inclut l'automatisation de la collecte de données par <strong>Web Scraping</strong> pour alimenter une base de connaissances sur les cycles de plantation et les besoins environnementaux des végétaux.
        </p>

        <div class="project-tech-list">
            <span>Python (Request)</span>
            <span>PHP / SQL</span>
            <span>HTML5 / CSS3</span>
            <span>JavaScript</span>
        </div>

        <a href="#" class="view-project-link">CONSULTER LE PROJET</a>
    </div>
</article>

<article class="project-card-v2 js-scroll" data-category="web-bi">
    <div class="project-card-img">
        <img src="images/projet3.png" alt="Jeu de Puzzle interactif">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># WEB & BI</span>
        <h2 class="project-title">Développement d'un Puzzle Interactif</h2>
        
        <p class="project-desc">
            Conception d'une application de jeu de réflexion. Ce projet académique met l'accent sur la <strong>logique algorithmique</strong>, la gestion des événements utilisateurs et la manipulation dynamique de l'interface via JavaScript.
        </p>

        <div class="project-tech-list">
            <span>JavaScript ES6</span>
            <span>DOM Manipulation</span>
            <span>HTML5</span>
            <span>CSS3 (Grid/Flex)</span>
        </div>

        <a href="#" class="view-project-link">CONSULTER LE PROJET</a>
    </div>
</article>

<article class="project-card-v2 js-scroll" data-category="data-science">
    <div class="project-card-img">
        <img src="images/Projet5.png" alt="Analyse et Visualisation Python">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># DATA ANALYSIS</span>
        <h2 class="project-title">Analyse Exploratoire & Dataviz</h2>
        
        <p class="project-desc">
            Traitement complet de jeux de données brutes. Utilisation de <strong>Pandas</strong> pour le nettoyage (ETL) et de <strong>Matplotlib / Seaborn</strong> pour la création de visuels impactants permettant d'identifier des tendances et des anomalies.
        </p>

        <div class="project-tech-list">
            <span>Python</span>
            <span>Pandas</span>
            <span>Matplotlib</span>
            <span>Seaborn</span>
            <span>Analyse Statistique</span>
        </div>

        <a href="#" class="view-project-link">VOIR L'ANALYSE</a>
    </div>
</article>

<article class="project-card-v2 js-scroll" data-category="data-science">
    <div class="project-card-img">
        <img src="images/Projet6.png" alt="Reporting Excel et SQL">
    </div>
    
    <div class="project-card-content">
        <span class="project-category"># DATA REPORTING</span>
        <h2 class="project-title">Reporting Décisionnel & Automatisation SQL</h2>
        
        <p class="project-desc">
            Optimisation du flux de données : extraction via requêtes <strong>SQL</strong>, traitement des données brutes et conception d'un tableau de bord dynamique sous <strong>Excel</strong> pour le suivi d'indicateurs clés (KPI).
        </p>

        <div class="project-tech-list">
            <span>SQL</span>
            <span>Excel Avancé</span>
            <span>Tableaux Croisés Dyn.</span>
        </div>

        <a href="#" class="view-project-link">VOIR L'ANALYSE </a>
    </div>
</article>
        </div>
    </div>
</section>

<button id="backToTop" title="Retour en haut">
    <i class="fas fa-arrow-up"></i>
</button>
<?php include('includes/footer.php'); ?>