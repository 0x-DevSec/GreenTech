<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | GreenTech Market</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
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
            background: linear-gradient(180deg, #020617, #020617);
            padding: 28px;
            border-right: 1px solid #1f2933;
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
            padding: 14px 26px;
            border-radius: 14px;
            border: none;
            text-decoration: none;
            font-weight: 600;
        }

        /* Stats */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 22px;
            margin-bottom: 36px;
        }

        .stat-card {
            background: var(--bg-card);
            border-radius: 20px;
            padding: 26px;
            border: 1px solid #1f2937;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 13px;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .stat-value {
            font-size: 34px;
            font-weight: 700;
            color: var(--accent);
        }

        /* Table */
        .table-container {
            background: var(--bg-card);
            border-radius: 22px;
            padding: 28px;
            border: 1px solid #1f2937;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .search-input {
            background: #020617;
            border: 1px solid #1f2937;
            color: var(--text-main);
            padding: 10px 16px;
            border-radius: 12px;
            width: 300px;
        }

        table {
            width: 100%;
        }

        th {
            font-size: 12px;
            color: var(--text-muted);
            text-transform: uppercase;
            padding: 14px;
        }

        td {
            padding: 18px 14px;
            border-bottom: 1px solid #1f2937;
            vertical-align: middle;
        }

        .price {
            font-weight: 700;
            color: var(--accent);
        }

        /* Image */
        .product-img {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            object-fit: cover;
            border: 1px solid #1f2937;
            background: #020617;
        }

        /* Actions */
        .btn-action {
            background: none;
            border: none;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-edit {
            color: #38bdf8;
            margin-right: 12px;
        }

        .btn-delete {
            color: var(--danger);
        }

        /* Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 28px;
            gap: 10px;
        }

        .pagination-btn {
            padding: 10px 16px;
            border-radius: 10px;
            background: #020617;
            border: 1px solid #1f2937;
            color: var(--text-main);
        }

        .pagination-btn.active {
            background: var(--accent);
            color: #052e16;
            border-color: var(--accent);
            font-weight: 600;
        }
    </style>
</head>

<body>

<aside class="sidebar">
    <div class="logo">Green<span>Tech</span> Admin</div>
    <a class="nav-link active">Tableau de bord</a>
    <a class="nav-link">Produits</a>
</aside>

<main class="main-content">

    <div class="page-header">
        <h1 class="page-title">Gestion des produits</h1>
        <a href="/add" class="btn-add">Ajouter un produit</a>

    </div>

    {{-- {{ $listOfproduct }} --}}

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-label">Total produits</div>
            <div class="stat-value">20</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Plantes</div>
            <div class="stat-value">8</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Graines</div>
            <div class="stat-value">7</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Outils</div>
            <div class="stat-value">5</div>
        </div>
    </div>

    <div class="table-container">
        <div class="table-header">
            <h2>Liste des produits</h2>
            <input class="search-input" placeholder="Rechercher un produit">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Produit</th>
                    <th>Catégorie</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $listOfproduct as $data )
                <tr>
                    <td>
                        <img src="{{ $data->image_url }}"
                             class="product-img" alt="Aloe Vera">
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->category->name ?? 'Non définie' }}</td>
                    <td class="price">{{$data->price}} MAD</td>
                    <td>{{ $data->stock }}</td>
                    <td>
                        <!-- Edit button linking to the product's edit page -->
                        <a href="{{ route('products.edit', $data->id) }}" class="btn-action btn-edit">Modifier</a>

                        <!-- Delete button (you can add a form later for actual delete) -->
                         <a href="{{ route('products.destroy', $data->id) }}" class="btn-action btn-delete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

                @if ($listOfproduct->lastPage() > 1)
                <div class="pagination-container">

                    
                    @if ($listOfproduct->onFirstPage())
                        <button class="pagination-btn" disabled>Précédent</button>
                    @else
                        <a href="{{ $listOfproduct->previousPageUrl() }}">
                            <button class="pagination-btn">Précédent</button>
                        </a>
                    @endif

                    
                    @for ($i = 1; $i <= $listOfproduct->lastPage(); $i++)
                        <a href="{{ $listOfproduct->url($i) }}">
                            <button class="pagination-btn {{ $listOfproduct->currentPage() == $i ? 'active' : '' }}">
                                {{ $i }}
                            </button>
                        </a>
                    @endfor

                    
                    @if ($listOfproduct->hasMorePages())
                        <a href="{{ $listOfproduct->nextPageUrl() }}">
                            <button class="pagination-btn">Suivant</button>
                        </a>
                    @else
                        <button class="pagination-btn" disabled>Suivant</button>
                    @endif

                </div>
                @endif

        
    </div>

</main>

</body>
</html>
