<?php
    $lesP = $clients->lesProduits(); // Recupération des produits du client
    $lesA = $clients->lesAdresses(); // Récupération des adresse du client


?>




<div class="bloc fiche">
    <h2>Client / <?=$clients->getPrenom()?> <?=$clients->getNom()?> / Informations</h2>
    
</div>

<div class="bloc fiche">
<h2>Informations générales</h2>
    <div class="flex-info">
        <div class="info"><h2>Nom</h2><p><?=$clients->getNom()?></p></div>
        <div class="info"><h2>Prénom</h2><p><?=$clients->getPrenom()?></p></div>
        <div class="info"><h2>Téléphone</h2><p><?=$clients->getTelephone()?></p></div>
        <div class="info"><h2>Email</h3><p><?=$clients->getEmail()?></p></div>
    </div>
</div>

<div class="bloc fiche">
    <h2>Les produits</h2>

</div>

<div class="bloc fiche">
<table class="prodC">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th class="desc">Description</th>
                <th>Prix</th>
                <th><button id="addProd" class="greenBtn"><i class="fa-solid fa-plus"></i> Produit</button></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($lesP as $produit){
                echo("<tr>
                    <td>".$produit->getID()."</td>
                    <td>".$produit->getNom()."</td>
                    <td class='desc'>".$produit->getDescription()."</td>
                    <td>".$produit->getPrix()."</td>
                    <td></td>
                    </tr>");
            }
        ?>
        </tbody>
        </table>
</div>

<div class="bloc fiche">
    <h2>Les adresses</h2>
</div>

<div class="bloc fiche">
<table class="prodC">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Rue</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th><button class="greenBtn"><i class="fa-solid fa-plus"></i> adresse</button></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($lesA as $adresse){
                echo("<tr>
                    <td>".$adresse->getNom()."</td>
                    <td>".$adresse->getRue()."</td>
                    <td>".$adresse->getCodePostal()."</td>
                    <td>".$adresse->getVille()."</td>
                    <td></td>
                    </tr>");
            }
        ?>
        </tbody>
        </table>
</div>


<div id="modAddProd" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>