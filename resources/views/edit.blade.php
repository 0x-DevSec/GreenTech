<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Produit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0f172a;
            --bg-card: #111827;
            --bg-soft: #020617;
            --text-main: #e5e7eb;
            --text-muted: #9ca3af;
            --accent: #22c55e;
            --danger: #ef4444;
        }

        body {
            background: var(--bg-main);
            font-family: 'DM Sans', sans-serif;
            color: var(--text-main);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: var(--bg-card);
            padding: 30px;
            border-radius: 20px;
            border: 1px solid #1f2937;
        }

        h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 24px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text-main);
        }

        input, select, textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 12px;
            border: 1px solid #1f2937;
            background: #020617;
            color: var(--text-main);
        }

        .product-img-preview {
            width: 120px;
            height: 120px;
            border-radius: 14px;
            object-fit: cover;
            border: 1px solid #1f2937;
            background: #020617;
            display: block;
            margin: 0 auto 12px auto;
        }

        .btn-save {
            background: var(--accent);
            color: #052e16;
            padding: 12px 24px;
            border-radius: 12px;
            border: none;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-back {
            background: none;
            color: var(--text-muted);
            padding: 12px 24px;
            border-radius: 12px;
            border: 1px solid var(--text-muted);
            font-weight: 600;
            cursor: pointer;
            margin-left: 12px;
        }

        .btn-group {
            text-align: center;
            margin-top: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Modifier le produit</h1>

    <!-- Image -->
    <img src="{{ $product->image_url ?? 'https://via.placeholder.com/120' }}" alt="Image Produit" class="product-img-preview">

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        <!-- Optional if using PUT method -->
        @method('POST') <!-- You can change to PUT if using resourceful route -->

        <div class="form-group">
            <label for="name">Nom du produit</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label for="category">Catégorie</label>
            <select id="category" name="category_id">
                <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Plantes</option>
                <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Graines</option>
                <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Outils</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Prix (MAD)</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}">
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ $product->stock }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4">{{ $product->description }}</textarea>
        </div>

        <div class="btn-group">
            <button type="submit" class="btn-save">Enregistrer</button>
            <a href="{{ route('admin') }}" class="btn-back">Retour à la liste</a>
        </div>
    </form>
</div>

</body>
</html>
