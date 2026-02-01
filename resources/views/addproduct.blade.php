<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GreenTech Admin | Ajouter un produit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-main: #0f172a;
            --bg-card: #111827;
            --bg-soft: #020617;
            --text-main: #e5e7eb;
            --text-muted: #9ca3af;
            --accent: #22c55e;
            --accent-soft: #16a34a;
            --danger: #ef4444;
        }

        body {
            background: var(--bg-main);
            font-family: 'DM Sans', sans-serif;
            color: var(--text-main);
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            width: 260px;
            height: 100vh;
            background: var(--bg-soft);
            padding: 28px;
            border-right: 1px solid #1f2937;
        }

        .logo {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 48px;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-link {
            display: block;
            padding: 14px 18px;
            border-radius: 12px;
            color: var(--text-muted);
            text-decoration: none;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .nav-link.active,
        .nav-link:hover {
            background: rgba(34,197,94,.12);
            color: var(--accent);
        }

        /* Main */
        .main-content {
            margin-left: 260px;
            padding: 36px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 36px;
        }

        .page-title {
            font-size: 30px;
            font-weight: 700;
        }

        .btn-add {
            background: var(--accent);
            color: #052e16;
            border: none;
            padding: 14px 26px;
            border-radius: 14px;
            font-weight: 600;
        }

        /* Form Card */
        .form-card {
            background: var(--bg-card);
            border-radius: 24px;
            padding: 42px;
            border: 1px solid #1f2937;
            max-width: 920px;
        }

        .form-section {
            margin-bottom: 40px;
        }

        .form-section-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 6px;
            color: var(--text-main);
        }

        .form-control,
        .form-select {
            background: var(--bg-soft);
            border-radius: 14px;
            padding: 14px 16px;
            border: 1px solid #1f2937;
            color: var(--text-main);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(34,197,94,.25);
            background: var(--bg-soft);
            color: var(--text-main);
        }

        .form-hint {
            font-size: 13px;
            color: var(--text-muted);
            margin-top: 6px;
        }

        /* Upload */
        .upload-box {
            border: 2px dashed #1f2937;
            border-radius: 18px;
            padding: 34px;
            text-align: center;
            transition: .2s;
            background: var(--bg-soft);
        }

        .upload-box:hover {
            border-color: var(--accent);
            background: rgba(34,197,94,.05);
        }

        /* Actions */
        .actions-bar {
            display: flex;
            justify-content: flex-end;
            gap: 16px;
            margin-top: 40px;
        }

        .btn-outline-secondary {
            border-radius: 14px;
            color: var(--text-muted);
            border-color: #1f2937;
        }

        .btn-outline-secondary:hover {
            background: #1f2937;
            color: var(--text-main);
        }
    </style>
</head>

<body>

<!-- Sidebar -->
<aside class="sidebar">
    <div class="logo">Green<span>Tech</span> Admin</div>
    <a class="nav-link">Tableau de bord</a>
    <a class="nav-link active">Produits</a>
</aside>

<!-- Main -->
<main class="main-content">

    <!-- Header -->
    <div class="page-header">
        <h1 class="page-title">Ajouter un produit</h1>
        <a href="/admin" class="btn btn-outline-secondary">Retour à la liste</a>
    </div>

    <!-- Form -->
    <div class="form-card">

        <form method="POST" action="/add" enctype="multipart/form-data">@csrf

            <!-- General -->
            <div class="form-section">
                <div class="form-section-title">Informations générales</div>

                <div class="mb-4">
                    <label class="form-label" for="product_name">Nom du produit</label>
                    <input type="text" id="product_name" name="name" class="form-control"
                           placeholder="Aloe Vera Naturelle" required>
                </div>

                <div class="mb-4">
                    <label class="form-label" for="category">Catégorie</label>
                    <select id="category" name="category_id" class="form-select" required>
                        <option disabled selected>Choisir une catégorie</option>
                        <option value="1">Plantes</option>
                        <option value="2">Graines</option>
                        <option value="3">Outils</option>
                    </select>
                </div>
            </div>

            <!-- Price & Stock -->
            <div class="form-section">
                <div class="form-section-title">Prix et stock</div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="price">Prix (MAD)</label>
                        <input type="number" id="price" name="price" class="form-control"
                               placeholder="120" required step="0.01">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label" for="stock">Stock disponible</label>
                        <input type="number" id="stock" name="stock" class="form-control"
                               placeholder="25" required>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="form-section">
                <div class="form-section-title">Description</div>
                <textarea id="description" name="description" class="form-control" rows="4"
                          placeholder="Décrivez le produit, ses avantages et son utilisation..." required></textarea>
                <div class="form-hint">
                    Une bonne description améliore la visibilité du produit.
                </div>
            </div>

                    <!-- Image URL -->
                <div class="form-section">
                    <div class="form-section-title">Image du produit</div>

                    <div class="upload-box">
                        <input 
                            type="url" 
                            id="image_url" 
                            name="image_url" 
                            class="form-control" 
                            placeholder="https://example.com/image.jpg"
                            required
                        >
                        <div class="form-hint">
                            Entrez l’URL complète de l’image (JPG, PNG, WebP...)
                        </div>
                    </div>
                </div>


            <!-- Actions -->
            <div class="actions-bar">
                <button type="reset" class="btn btn-outline-secondary" href="admin">
                    Annuler
                </button>
                <button type="submit" class="btn-add">
                    Enregistrer le produit
                </button>
            </div>

        </form>

    </div>

</main>

</body>
</html>
