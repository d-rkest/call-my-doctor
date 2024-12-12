<?php
require_once 'inc/header.php';
require_once '../Controllers/ProductController.php';

$controller = new ProductController();
$products = $controller->getAllProducts();
?>

    <div class="pagetitle">
        <div class="row">
            <div class="col-10">
                <h1>Buy Perscription</h1>
                <nav>
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Buy perscription</li>
                    </ol>
                </nav>
            </div>
            <div class="col-2 align-right text-right">
                <button class="btn btn-outline-primary position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <i class="bi bi-cart"></i> Cart
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                        0
                    </span>
                </button>
            </div>
        </div>
    </div><!-- End Page Title -->
    

    <div class="container py-5">
        
        <div class="mb-4">
            <div class="btn-group" role="group">
                <a href="?category=all" class="btn btn-outline-primary <?php echo (!isset($_GET['category']) || $_GET['category'] === 'all') ? 'active' : ''; ?>">
                    All
                </a>
                <a href="?category=prescription" class="btn btn-outline-primary <?php echo (isset($_GET['category']) && $_GET['category'] === 'prescription') ? 'active' : ''; ?>">
                    Diclofenac
                </a>
                <a href="?category=otc" class="btn btn-outline-primary <?php echo (isset($_GET['category']) && $_GET['category'] === 'otc') ? 'active' : ''; ?>">
                    Over the Counter
                </a>
                <a href="?category=firstaid" class="btn btn-outline-primary <?php echo (isset($_GET['category']) && $_GET['category'] === 'firstaid') ? 'active' : ''; ?>">
                    First Aid
                </a>
                <a href="?category=vitamins" class="btn btn-outline-primary <?php echo (isset($_GET['category']) && $_GET['category'] === 'vitamins') ? 'active' : ''; ?>">
                    Vitamins
                </a>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($products as $product): ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($product['description']); ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="h5 mb-0">₦<?php echo number_format($product['price'], 2); ?></span>
                                <button class="btn btn-primary add-to-cart" 
                                        data-id="<?php echo $product['id']; ?>"
                                        <?php echo $product['in_stock'] ? '' : 'disabled'; ?>>
                                    <?php echo $product['in_stock'] ? 'Add to Cart' : 'Out of Stock'; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="modal fade" id="cartModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Shopping Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div id="cart-items" class="mb-3">
                        <!-- Cart items will be dynamically inserted here -->
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5>Total:</h5>
                        <h5 id="cart-total">$0.00</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'inc/footer.php'; ?>