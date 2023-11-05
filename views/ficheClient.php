<div class="container mt-4">
    <p>Données Général</p>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $clients->getNom(); ?></td>
                <td><?php echo $clients->getPrenom(); ?></td>
                <td><?php echo $clients->getTelephone(); ?></td>
                <td><?php echo $clients->getEmail(); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container mt-4">
    <p>Les Produits</p>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produits as $produit): ?>
                <tr>
                    <td><?php echo $produit->getId(); ?></td>
                    <td><?php echo $produit->getNom(); ?></td>
                    <td><?php echo $produit->getDescription(); ?></td>
                    <td><?php echo $produit->getPrix(); ?> €</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="container mt-4">
    <p>Les Adresses</p>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NOM</th>
                <th>RUE</th>
                <th>CODEPOSTAL</th>
                <th>VILLE</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($adresses as $adresse): ?>
                <tr>
                    <td><?php echo $adresse->getNom(); ?></td>
                    <td><?php echo $adresse->getRue(); ?></td>
                    <td><?php echo $adresse->getCodePostal(); ?></td>
                    <td><?php echo $adresse->getVille(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
