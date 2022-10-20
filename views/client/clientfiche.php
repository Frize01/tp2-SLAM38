<?php
    $lesP = $clients->lesProduits(); // Recupération des produits du client
    $lesA = $clients->lesAdresses(); // Récupération des adresse du client


?>




<div class="bloc fiche">
    <h2>Client / <?=$clients->getPrenom()?> <?=$clients->getNom()?> / Informations</h2>
    <?php 
        if(isset($_SESSION["erreur"])){
            echo("<h2 class='red'>".$_SESSION['erreur']."</h2>");
            unset($_SESSION["erreur"]);
        }
    ?>
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
                <th><button id="addAdresse" class="greenBtn"><i class="fa-solid fa-plus"></i> adresse</button></th>
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
    <span class="close close-prod">&times;</span>
    <form action="/<?=$clients->getId()?>/add-prod">
        <h2>Ajouter un Produit</h2> <br>
        <label for="prod">Produits : </label> <select name="selectProd" id="prod">
            <option value="0">Selectionner une valeur</option>
            <?php foreach($produits as $produit){?>
            <option value="<?=$produit->id?>"><?=$produit->nom?></option>
            <?php }?>
        </select>
        <input type="submit" class="modalBtn" value="Ajouter un produit">

    </form>
  </div>

</div>

<div id="modAddAdresse" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close close-add">&times;</span>
    address
    <p>Some text in the Modal..</p>
  </div>

</div>


<script src="..\public\js\ficheClient.js"></script>