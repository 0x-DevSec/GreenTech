<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $product->name }} | GreenTech Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #0f3d2e, #061c16);
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            padding: 40px 0;
        }

        .container { max-width: 1200px; }

        .back-link {
            color: rgba(183,255,90,0.9);
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 20px;
            display: inline-block;
        }
        .back-link:hover { text-decoration: underline; }

        .product-wrapper {
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 20px;
            padding: 30px;
        }

        .product-image {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            height: 380px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .product-image img {
            max-height: 330px;
            max-width: 100%;
            object-fit: contain;
        }

        .product-category { font-size: 12px; text-transform: uppercase; color: rgba(183,255,90,0.8); margin-bottom: 8px; }
        .product-title { font-size: 28px; font-weight: 700; margin-bottom: 12px; }
        .product-price { font-size: 28px; font-weight: 700; color: #b7ff5a; margin-bottom: 20px; }
        .product-description { color: rgba(255,255,255,0.8); line-height: 1.7; margin-bottom: 30px; }

        .btn-primary-eco {
            background: #b7ff5a;
            color: #062e21;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-weight: 600;
            width: 100%;
            margin-bottom: 12px;
        }
        .btn-primary-eco:hover { background: #a6f94a; }

        .btn-secondary-eco {
            background: transparent;
            border: 1px solid rgba(183,255,90,0.5);
            color: #b7ff5a;
            border-radius: 12px;
            padding: 12px;
            width: 100%;
        }

        .info-section { margin-top: 25px; }
        .info-section h6 { font-weight: 600; margin-bottom: 10px; }
        .info-section ul { padding-left: 18px; margin: 0; color: rgba(255,255,255,0.8); }
        .info-section li { margin-bottom: 6px; }

        @media (max-width: 768px) {
            .product-image { height: 260px; }
        }
    </style>
</head>

<body>
<div class="container">

    <a href="{{ route('mylist') }}" class="back-link">Retour à la boutique</a>

    <div class="product-wrapper">
        <div class="row g-4">

            <!-- Product Image -->
            <div class="col-md-6">
                <div class="product-image">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}">
                </div>
            </div>

            <!-- Product Info -->
            <div class="col-md-6">
                <div class="product-category">{{ $product->category->name ?? 'Non définie' }}</div>
                <h1 class="product-title">{{ $product->name }}</h1>
                <div class="product-price">{{ $product->price }} MAD</div>
                <p class="product-description">{{ $product->description }}</p>

                <button class="btn-primary-eco">Ajouter au panier</button>
                <button class="btn-secondary-eco">Ajouter à la liste de souhaits</button>

                <div class="info-section">
                    <h6>Caractéristiques du produit</h6>
                    <ul>
                        <li>Plante naturelle sélectionnée</li>
                        <li>Entretien simple</li>
                        <li>Usage intérieur</li>
                        <li>Pot écologique inclus</li>
                    </ul>
                </div>

                <div class="info-section">
                    <h6>Livraison et retours</h6>
                    <ul>
                        <li>Livraison disponible partout au Maroc</li>
                        <li>Expédition sous 24 à 48 heures</li>
                        <li>Retour possible sous 7 jours</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>

</div>
</body>
</html>
