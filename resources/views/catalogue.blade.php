<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Boutique | GreenTech Market</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
body {
    background: radial-gradient(circle at top, #0f3d2e, #061c16);
    color: #ffffff;
    font-family: 'Inter', sans-serif;
    min-height: 100vh;
    padding: 40px 0;
}

.container {
    max-width: 1280px;
}

/* Header */
.page-header {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
}

.btn-back-home {
    position: absolute;
    left: 0;
    top: 0;
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(183,255,90,0.4);
    color: #b7ff5a;
    padding: 10px 18px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.btn-back-home:hover {
    background: rgba(183,255,90,0.15);
    color: #fff;
}

/* Filters Section */
.filters-section {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 30px;
}

.search-input {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(183,255,90,0.4);
    border-radius: 12px;
    padding: 12px 18px;
    color: white;
    width: 100%;
}

.search-input::placeholder {
    color: rgba(255,255,255,0.6);
}

/* Custom select (dark mode) */
.category-select {
    background-color: #0b2b1e;
    border: 1px solid #5a9b42;
    border-radius: 12px;
    color: #b7ff5a;
    padding: 12px 18px;
    width: 100%;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: 0.3s;
}

.category-select option {
    background-color: #0b2b1e;
    color: #b7ff5a;
}

.category-select:focus {
    outline: none;
    border-color: #b7ff5a;
    background-color: rgba(183,255,90,0.05);
}

/* Add arrow for select */
.category-select-wrapper {
    position: relative;
}

.category-select-wrapper::after {
    content: "▼";
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
    color: #b7ff5a;
    font-size: 12px;
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 per row */
    gap: 24px;
}

/* Responsive Grid */
@media (max-width: 1200px) {
    .products-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 992px) {
    .products-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .products-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .products-grid {
        grid-template-columns: 1fr;
    }
    .btn-back-home {
        position: static;
        display: inline-block;
        margin-bottom: 15px;
    }
}

/* Product Card */
.product-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 18px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
}

.product-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.35);
    border-color: rgba(183,255,90,0.6);
}

.product-image {
    background: #fff;
    height: 220px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    transition: transform 0.3s;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-image img {
    max-height: 180px;
    max-width: 100%;
    object-fit: contain;
}

.product-info {
    padding: 18px;
    text-align: center;
}

.product-category {
    font-size: 12px;
    text-transform: uppercase;
    color: rgba(183,255,90,0.8);
}

.product-name {
    font-size: 16px;
    font-weight: 600;
    margin: 8px 0;
    min-height: 42px;
}

.product-price {
    font-size: 20px;
    font-weight: 700;
    color: #b7ff5a;
    margin-bottom: 14px;
}

.btn-view {
    background: #b7ff5a;
    color: #062e21;
    border-radius: 10px;
    padding: 10px 16px;
    font-weight: 600;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
}

.btn-view:hover {
    background: #a6f94a;
}

/* Pagination */
.pagination-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 40px;
    gap: 10px; /* <-- adds space between buttons */
}


.page-link {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(183,255,90,0.3);
    color: white;
    border-radius: 10px;
    padding: 10px 16px;
    transition: 0.3s;
}

.page-item.active .page-link {
    background: #b7ff5a;
    color: #062e21;
    font-weight: 700;
}

.page-link:hover {
    background: rgba(183,255,90,0.15);
}
</style>
</head>

<body>
<div class="container">

    <!-- Header -->
    <div class="page-header">
        <a href="/" class="btn-back-home">← Retour à l’accueil</a>
        <h1>🌿 Boutique Écologique</h1>
        <p>Produits durables & respectueux de l’environnement</p>
    </div>

    <!-- Filters -->
    <div class="filters-section">
        <div class="row g-3">
            <div class="col-md-8">
                <input class="search-input" placeholder="🔍 Rechercher un produit...">
            </div>
            <div class="col-md-4 category-select-wrapper">
                <select class="category-select">
                    <option>Toutes les catégories</option>
                    <option>Plantes</option>
                    <option>Graines</option>
                    <option>Outils</option>
                </select>
            </div>
        </div>
    </div>

 <div class="products-grid">
    @foreach ($myproduct as $myproduct)
        <div class="product-card">
            <div class="product-image">
                <img src="{{ $myproduct->image_url }}" alt="{{ $myproduct->name }}">
            </div>
            <div class="product-info">
                <div class="product-category">{{ $myproduct->category->name ?? 'Non définie' }}</div>
                <div class="product-name">{{ $myproduct->name }}</div>
                <div class="product-price">{{ $myproduct->price }} MAD</div>
                <a href="{{ route('product.show', $myproduct->id) }}" class="btn-view">Voir le produit</a>
            </div>
        </div>
    @endforeach
</div>


    </div>
</body>
</html>
