
<?php include('includes/header.php'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="animate-slide">  Welcome to <span>EnuguHomes</span></h1>
       <p class="animate-fade">
      
Your all-in-one real estate platform for Enugu.
All listings are carefully added by our admin to ensure authenticity and trust.
Browse properties, view details, and contact the admin to connect with sellers.
Finding your next home or investment property has never been easier. 🏡
        </p>

        <form action="/real-estate/listings/market.php" method="GET" class="search-bar animate-up">
            <input type="text" name="search" placeholder="Discover Properties...">
            <button type="submit">Discover</button>
        </form>

        <a href="auth/register.php" class="cta-btn animate-fade">View All Properties</a>
    </div>
</section>

<?php
require_once 'includes/db.php'; // adjust path
$previewStmt = $pdo->query("SELECT * FROM items ORDER BY created_at DESC LIMIT 8");
$previewItems = $previewStmt->fetchAll(PDO::FETCH_ASSOC);
?>


<section class="homepage-market-preview">
  <h2 class="section-title">🏠 Fresh on EnuguHomes</h2>
  <p class="section-subtitle">Check out the newest properties in town.
Log in to explore more and reach out to the admin to connect with sellers.</p>

  <div class="items-grid">
    <?php foreach ($previewItems as $item): ?>
      <div class="market-card preview">
        <img src="assets/images/upload/<?php echo htmlspecialchars($item['image']); ?>" alt="Item image">
        <h3><?php echo htmlspecialchars($item['title']); ?></h3>
        <p class="price">₦<?php echo number_format($item['price']); ?></p>
        <p class="meta"><?php echo htmlspecialchars($item['category']); ?> | 📍 <?php echo htmlspecialchars($item['location']); ?></p>
        <p class="desc"><?php echo substr(htmlspecialchars($item['description']), 0, 60); ?>...</p>

      </div>
    <?php endforeach; ?>
  </div>
</section>


<?php include('includes/footer.php'); ?>

