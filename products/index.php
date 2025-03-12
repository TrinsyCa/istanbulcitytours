<?php
    header("Location: https://cooltravelistanbul.com/products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Main Configurations -->
    
    <?php include_once "../config.php"; ?>

    <!-- Main Configurations -->

    <!-- Meta Tags -->

    <meta property="og:title" content="Products | Istanbul City Tours">
    <meta name="twitter:title" content="Products | Istanbul City Tours">
    
    <meta property="og:url" content="<?php echo $DOMAIN; ?>/products">
    <meta name="twitter:url" content="<?php echo $DOMAIN; ?>/products">

    <meta property="article:section" content="Products">

    <!-- Meta Tags -->

    <title>Products | Istanbul City Tours</title>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/extensions/faq.css">
    <link rel="stylesheet" href="../css/products.css">
</head>
<body>
    <section class="notification" id="notification">
        <button id="closeNotification">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path fill="currentColor" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504L738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512L828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496L285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512L195.2 285.696a64 64 0 0 1 0-90.496"/></svg>
        </button>
        <div class="notification-container">
            <div class="notification-content">
                <p id="notificationText"></p>
            </div>
        </div>
    </section>
    <nav class="relative">
        <?php include_once BASE_PATH . "/layouts/navbar.html"; ?>
    </nav>
    <section class="pricing section-container">
        <div class="pricing-container">
            <div class="pricing-table">
                <div class="pricing-card">
                    <div class="pricing-card-container">
                        <div class="pricing-title">
                            <h3>Fire 2.0</h3>
                            <p>It will help you improve yourself in the beginning.</p>
                        </div>
                        <div class="pricing-start">
                            <span>$25</span>
                        </div>
                        <div class="pricing-details">
                            <ul class="pricing-list">
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Individualized Health</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Planning for Drug Interactions and Side Effects</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Disease Diagnosis and Diagnosis</p></li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a href="../contact/" class="main-btn"><span>Start Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-container">
                        <div class="pricing-title">
                            <h3>Fire 2.5</h3>
                            <p>This is your best opportunity to strengthen your knowledge.</p>
                        </div>
                        <div class="pricing-start">
                            <span>$100</span>
                        </div>
                        <div class="pricing-details">
                            <ul class="pricing-list">
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Individualized Health</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Planning for Drug Interactions and Side Effects</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Disease Diagnosis and Diagnosis</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Patient Monitoring and Recovery Prediction</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Health Education and Consultancy</p></li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a href="../contact/" class="main-btn"><span>Start Now</span></a>
                        </div>
                    </div>
                </div>
                <div class="pricing-card">
                    <div class="pricing-card-container">
                        <div class="pricing-title">
                            <h3>Fire Big 3.0</h3>
                            <p>Expand your research and deliver definitive results to your patients.</p>
                        </div>
                        <div class="pricing-start">
                            <span>$200</span>
                        </div>
                        <div class="pricing-details">
                            <ul class="pricing-list">
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Individualized Health</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Planning for Drug Interactions and Side Effects</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Disease Diagnosis and Diagnosis</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Patient Monitoring and Recovery Prediction</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Health Education and Consultancy</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Data Analysis and Forecasting</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Improving Health Services</p></li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" d="m5 14l4 3l9-11"/></svg><p>Privacy and Security</p></li>
                            </ul>
                        </div>
                        <div class="pricing-link">
                            <a href="../contact/" class="main-btn"><span>Start Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space"></div>
    <?php include_once BASE_PATH . "/layouts/footer.html"; ?>
    <script src="../scripts/main.js"></script>
    <script src="../scripts/faq.js"></script>
    <script src="../scripts/products.js"></script>
</body>
</html>