<div class="bloc flex">
        <form action="/liste/" method="get">
            <input type="submit" value="🔎">
            <input type="search" name="search" id="" class="search" placeholder="Rechercher un client">
        </form>
</div>
<div class="bloc">
    <h1>Clients</h1>
</div>

<div class="bloc flex">

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th><button class="greenBtn"><i class="fa-solid fa-plus"></i> Créer un client</button></th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($clients as $client){
            echo("<tr>
                <td>".$client->getID()."</td>
                <td>".$client->getNom() . $client->getPrenom()."</td>
                <td>".$client->getTelephone()."</td>
                <td>".$client->getEmail()."</td>
                <td><a href='/client/".$client->getID()."'><i class='fa-solid fa-chevron-right'></i></td>
                </tr>");
        }
    ?>
    </tbody>
    </table>


    <div> 
        <?php 
        if($search!=""){$search = "?search=".$search;}
        if($page>0){
            echo("<a class=arrowPage href=/liste/". $page-1 . $search."><i class='fa-solid fa-chevron-left'></i></a>");
        }
        
        echo("<a class=arrowPage href=/liste/". $page+1 . $search."><i class='fa-solid fa-chevron-right'></i></a>");
        ?>
    </div>
</div>

