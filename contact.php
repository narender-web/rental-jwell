<?php
$pageTitle = 'Contact Rent My Jewellery Gurgaon | Book Luxury Jewellery';
$metaDescription = 'Contact Anusha at Rent My Jewellery Gurgaon for bridal jewellery rentals, WhatsApp booking, and location details.';
$metaKeywords = 'contact jewellery rental Gurgaon, call bridal jewellery Gurgaon, WhatsApp jewellery booking';
$canonicalPath = '/contact.php';
$ogImage = 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=1200&q=80';
$breadcrumbItems = [
  ['name' => 'Home', 'url' => '/index.php'],
  ['name' => 'Contact', 'url' => '/contact.php'],
];
include __DIR__ . '/includes/header.php';
?>
<!-- Breadcrumb -->
<section class="breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/index.php">Home</a></li>
<li><span class="current">Contact</span></li>
    </ol>
  </div>
</section>
<main>
  <!-- Contact Information Section -->
  <section class="section">
    <div class="container grid grid-2">
      <div class="banner reveal-left">
        <h1>Contact Rent My Jewellery Gurgaon</h1>
        <p><strong>Contact Person:</strong> Anusha</p>
        <p><strong>Phone:</strong> <a href="tel:8447859331">8447859331</a></p>
        <p><strong>Address:</strong> O141-B, Smart World Gems, Gurgaon</p>
        <div class="btn-group">
          <a class="btn btn-gold" href="tel:8447859331">Call Now</a>
          <a class="btn btn-outline" href="https://wa.me/918447859331" target="_blank" rel="noopener">WhatsApp</a>
        </div>
      </div>

      <div class="card reveal-right">
        <div class="card-body">
          <h2>Send Booking Enquiry</h2>
          <form class="form-grid" action="#" method="post">
            <input class="form-control" type="text" name="name" placeholder="Name" required />
            <input class="form-control" type="tel" name="phone" placeholder="Phone" required />
            <input class="form-control" type="text" name="occasion" placeholder="Occasion" required />
            <input class="form-control" type="date" name="date" required />
            <textarea class="form-control" name="message" placeholder="Message"></textarea>
            <button class="btn btn-gold btn-block" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="section">
    <div class="container reveal">
      <h2 class="section-title">Google Map Location</h2>
      <iframe class="map-frame" title="Rent My Jewellery Gurgaon Location" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Gurgaon&output=embed"></iframe>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
