<?php
$pageTitle = 'Jewellery Rental FAQ Gurgaon | Rent My Jewellery';
$metaDescription = 'Frequently asked questions about jewellery rental process, security deposit, delivery and duration in Gurgaon.';
$metaKeywords = 'jewellery rental faq Gurgaon, bridal rent process Gurgaon';
$canonicalPath = '/faq.php';
$ogImage = 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=1200&q=80';
$breadcrumbItems = [
  ['name' => 'Home', 'url' => '/index.php'],
  ['name' => 'FAQ', 'url' => '/faq.php'],
];
include __DIR__ . '/includes/header.php';
?>
<!-- Breadcrumb -->
<section class="breadcrumb">
  <div class="container">
    <ol class="breadcrumb-list">
      <li><a href="/index.php">Home</a></li>
<li><span class="current">FAQ</span></li>
    </ol>
  </div>
</section>
<main>
  <section class="section">
    <div class="container">
      <h1 class="section-title reveal">Frequently Asked Questions</h1>
      <details class="faq-item reveal"><summary>How does Jewellery Rental Work?</summary><p>Choose your jewellery, share event date, confirm booking, and return after your function.</p></details>
      <details class="faq-item reveal"><summary>What Documents are Required?</summary><p>Valid government ID and active phone number are required for verification.</p></details>
      <details class="faq-item reveal"><summary>Do you provide Home Delivery?</summary><p>Yes, home delivery is available in Gurgaon on selected slots.</p></details>
      <details class="faq-item reveal"><summary>Security Deposit?</summary><p>Select pieces require a refundable security deposit based on rental value.</p></details>
      <details class="faq-item reveal"><summary>Rental Duration?</summary><p>Standard duration is shared at booking and can be extended based on availability.</p></details>
      <details class="faq-item reveal"><summary>Cleaning Process?</summary><p>All jewellery is sanitized and inspected before handover for hygiene and shine.</p></details>
    </div>
  </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>
