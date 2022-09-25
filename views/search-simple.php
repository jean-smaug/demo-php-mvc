<form action="/search-simple" method="get">
    <div class="col">
        <input type="text" class="form-control" name="search">
    </div>
    <button type="submit" class="btn btn-outline-primary">Rechercher</button>
</form>

<div>
    <?= $_GET["search"] ?? "" ?>
</div>
