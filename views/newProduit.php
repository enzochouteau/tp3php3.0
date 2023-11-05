<div class="container mt-4">
    <h2>Ajouter un nouveau produit</h2>
    <form action="/chemin/vers/le/script/traitant/le/formulaire" method="post">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="prix">Prix :</label>
            <input type="number" step="0.01" class="form-control" id="prix" name="prix" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
