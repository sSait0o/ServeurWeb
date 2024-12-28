<h1>Bienvenue sur notre site</h1>
<h2>Produits récents</h2>
<ul>
  <?php foreach ($recentProducts as $product): ?>
    <li>
      <a href="/catalogue/produit/<?= $product['id'] ?>">
        <?= htmlspecialchars($product['name']) ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>