<?php
$siteName = 'Rent My Jewellery Gurgaon';
$siteTagline = 'Luxury Jewellery on Rent for Every Occasion';
$baseUrl = 'https://rentmyjewellerygurgaon.com';
$currentPath = $canonicalPath ?? '/';
$currentUrl = rtrim($baseUrl, '/') . $currentPath;
$pageTitle = $pageTitle ?? $siteName;
$metaDescription = $metaDescription ?? 'Premium artificial bridal jewellery on rent in Gurgaon for weddings and special occasions.';
$metaKeywords = $metaKeywords ?? 'Jewellery rental Gurgaon, Bridal jewellery on rent';
$ogImage = $ogImage ?? 'https://images.unsplash.com/photo-1617038260897-41a1f14a8ca0?auto=format&fit=crop&w=1200&q=80';
$breadcrumbItems = $breadcrumbItems ?? [
  ['name' => 'Home', 'url' => '/'],
  ['name' => $pageTitle, 'url' => $currentPath]
];

$breadcrumbList = [];
foreach ($breadcrumbItems as $index => $item) {
  $breadcrumbList[] = [
    '@type' => 'ListItem',
    'position' => $index + 1,
    'name' => $item['name'],
    'item' => rtrim($baseUrl, '/') . $item['url']
  ];
}

$schemas = [
  [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => $siteName,
    'description' => $siteTagline,
    'url' => $baseUrl,
    'telephone' => '+91-8447859331',
    'address' => [
      '@type' => 'PostalAddress',
      'streetAddress' => 'O141-B, Smart World Gems',
      'addressLocality' => 'Gurgaon',
      'addressCountry' => 'IN'
    ],
    'sameAs' => [
      'https://www.instagram.com',
      'https://www.facebook.com'
    ]
  ],
  [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => $siteName,
    'url' => $baseUrl,
    'logo' => $baseUrl . '/assets/icons/logo.svg'
  ],
  [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => $siteName,
    'url' => $baseUrl
  ],
  [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $breadcrumbList
  ]
];
?>
<title><?= htmlspecialchars($pageTitle) ?></title>
<meta name="description" content="<?= htmlspecialchars($metaDescription) ?>" />
<meta name="keywords" content="<?= htmlspecialchars($metaKeywords) ?>" />
<link rel="canonical" href="<?= htmlspecialchars($currentUrl) ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= htmlspecialchars($siteName) ?>" />
<meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>" />
<meta property="og:description" content="<?= htmlspecialchars($metaDescription) ?>" />
<meta property="og:url" content="<?= htmlspecialchars($currentUrl) ?>" />
<meta property="og:image" content="<?= htmlspecialchars($ogImage) ?>" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>" />
<meta name="twitter:description" content="<?= htmlspecialchars($metaDescription) ?>" />
<meta name="twitter:image" content="<?= htmlspecialchars($ogImage) ?>" />
<meta name="theme-color" content="#C9A227" />
<script type="application/ld+json"><?= json_encode($schemas, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
