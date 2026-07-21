<?php
$pageTitle = 'Jewellery Collections Gurgaon | Bridal and Designer Rental';
$metaDescription = 'Explore bridal sets, bridesmaids jewellery, kids and Indo-Western jewellery collections on rent in Gurgaon.';
$metaKeywords = 'bridal sets Gurgaon, bridesmaids jewellery rent Gurgaon, kids jewellery rental Gurgaon';
$canonicalPath = '/jewellery-collections.php';
$ogImage = 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=1200&q=80';
$breadcrumbItems = [
  ['name' => 'Home', 'url' => '/index.php'],
  ['name' => 'Jewellery Collections', 'url' => '/jewellery-collections.php'],
];
include __DIR__ . '/includes/header.php';
?>
<!-- Breadcrumb -->
<section class="breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/index.php">Home</a></li>
<li><span class="current">Jewellery Collections</span></li>
    </ol>
  </div>
</section>
<main>
  <section class="section">
    <div class="container">
      <h1 class="section-title reveal">Jewellery Collections</h1>
      <p class="section-subtitle reveal">Luxury curation for every wedding and fashion event.</p>
      <div class="grid grid-2">
        <article class="card reveal"><img src="https://images.unsplash.com/photo-1611652022419-a9419f74343d?auto=format&fit=crop&w=900&q=80" alt="Bridal Sets" loading="lazy" /><div class="card-body"><h3>Bridal Sets</h3><p class="muted">Complete statement combinations for bridal looks.</p><a class="btn btn-gold" href="/bridal-sets.php">Explore</a></div></article>
        <article class="card reveal"><img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?auto=format&fit=crop&w=900&q=80" alt="Bridesmaids Jewellery" loading="lazy" /><div class="card-body"><h3>Bridesmaids Jewellery</h3><p class="muted">Coordinated elegance for your wedding squad.</p><a class="btn btn-gold" href="/bridesmaids-jewellery.php">Explore</a></div></article>
        <article class="card reveal"><img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?auto=format&fit=crop&w=900&q=80" alt="Kids Jewellery" loading="lazy" /><div class="card-body"><h3>Kids Jewellery</h3><p class="muted">Comfort-first luxury styles for children.</p><a class="btn btn-gold" href="/kids-jewellery.php">Explore</a></div></article>
        <article class="card reveal"><img src="https://images.unsplash.com/photo-1626178793926-22b28830aa30?auto=format&fit=crop&w=900&q=80" alt="Indo-Western Jewellery" loading="lazy" /><div class="card-body"><h3>Indo-Western Jewellery</h3><p class="muted">Contemporary glamour with cultural roots.</p><a class="btn btn-gold" href="/indo-western-jewellery.php">Explore</a></div></article>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
