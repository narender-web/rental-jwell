<?php
$pageTitle = 'Customer Testimonials | Rent My Jewellery Gurgaon';
$metaDescription = 'Read real customer reviews for premium bridal jewellery rental service in Gurgaon.';
$metaKeywords = 'jewellery rental testimonials Gurgaon, bridal jewellery reviews Gurgaon';
$canonicalPath = '/testimonials.php';
$ogImage = 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=1200&q=80';
$breadcrumbItems = [
  ['name' => 'Home', 'url' => '/index.php'],
  ['name' => 'Testimonials', 'url' => '/testimonials.php'],
];
include __DIR__ . '/includes/header.php';
?>
<!-- Breadcrumb -->
<section class="breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/index.php">Home</a></li>
<li><span class="current">Testimonials</span></li>
    </ol>
  </div>
</section>
<main>
  <section class="section">
    <div class="container">
      <h1 class="section-title reveal">Client Testimonials</h1>
      <div class="grid grid-3">
        <article class="card glass reveal-left"><img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=700&q=80" alt="Customer Riya" loading="lazy" /><div class="card-body"><h3>Riya S.</h3><p>"The bridal set looked luxurious and exactly matched my lehenga."</p><p class="muted">★★★★★</p></div></article>
        <article class="card glass reveal"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=700&q=80" alt="Customer Mehak" loading="lazy" /><div class="card-body"><h3>Mehak A.</h3><p>"Affordable, elegant and super easy booking over WhatsApp."</p><p class="muted">★★★★★</p></div></article>
        <article class="card glass reveal-right"><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=700&q=80" alt="Customer Tanya" loading="lazy" /><div class="card-body"><h3>Tanya G.</h3><p>"Clean jewellery and beautiful finishing. Service was very professional."</p><p class="muted">★★★★★</p></div></article>
      </div>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
