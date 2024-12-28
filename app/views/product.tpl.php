<h1>Product numero <?= $viewData['productId'] ?></h1>
<section class="hero">
  <div class="container">
    <!-- Breadcrumbs -->
    <ol class="breadcrumb justify-content-center">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Détente</li>
    </ol>
  </div>
</section>

<section class="products-grid">
  <div class="container-fluid">

    <div class="row">
      <!-- product-->
      <div class="col-lg-6 col-sm-12">
        <div class="product-image">
          <a href="detail.html" class="product-hover-overlay-link">
            <img src="<?= $absoluteURL . '/' . $viewData['product']->getPicture() ?>" alt="product" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="mb-3">
          <h3 class="h3 text-uppercase mb-1"><?= $viewData['product']->getName() ?></h3>
          <div class="text-muted">by <em>BOOTstrap</em></div>
          <div>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
        </div>
        <div class="my-2">
          <div class="text-muted"><span class="h4"><?= $viewData['product']->getPrice() ?> €</span> TTC</div>
        </div>
        <div class="product-action-buttons">
          <form action="cart.html" method="post">
            <input type="hidden" name="product_id" value="1">
            <button class="btn btn-dark btn-buy"><i class="fa fa-shopping-cart"></i><span class="btn-buy-label ml-2">Ajouter au panier</span></button>
          </form>
        </div>
        <div class="mt-5">
          <p>
            <?= $viewData['product']->getDescription() ?>
          </p>
        </div>
      </div>
      <h1>Catégorie: <?= $viewData['category']->getName() ?></h1>
      <ul>
        <?php foreach ($viewData['products'] as $product): ?>
          <li><?= $product->getName() ?> - <?= $product->getPrice() ?> €</li>
        <?php endforeach; ?>
      </ul>
      <!-- /product-->
    </div>

  </div>
</section>

<h1>Liste des Produits</h1>
<ul>
  <?php foreach ($products as $product): ?>
    <li>
      <a href="/catalogue/produit/<?= htmlspecialchars($product['id']) ?>">
        <?= htmlspecialchars($product['name']) ?>
      </a>
      - Prix : <?= htmlspecialchars($product['price']) ?> €
    </li>
  <?php endforeach; ?>
</ul>