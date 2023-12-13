//formulari on es veure lo que volguem //responsive
 //col= la mida dels pixels
 //from action hem de posar la direccio on guardarem per exemple /mp/store store es la funcio per guardar el model
<from action="/mascota/create" method="post" class="col-11 col-sm 9 col-md-7 col-lg-5 mx-auto border bg-light">
    <h2>New Mascota</h2>
    <div class="mb-3">
        <label for="nom_mascota" class="form-label">Nom Mascota</label>
        <input
            type="text"
            class="form-control"
            name="nom_mascota"
            id="nom_mascota"
            aria-describedby="helpId"
            placeholder="Nom de la Mascota"
        />
    </div>

    <div class="mb-3">
    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    </div>
</from>
//llista estatica
<div class="llista">
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nom Mascota</th>
            <th scope="col">Nom Client</th>
            <th scope="col">Data</th>
            <th scope="col">Hora</th>
            <th scope="col">Tipus</th>
            <th scope="col">Motiu</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($params["llista"] as $mp){
            echo "<tr>";
            echo "<td>".$mp["id_mascota"]."</td>";
            echo "<td>".$mp["nom_mascota"]."</td>";
            echo "<td>".$mp["nom_client"]."</td>";
            echo "<td>".$mp["data"]."</td>";
            echo "<td>".$mp["hora"]."</td>";
            echo "<td>".$mp["tipus"]."</td>";
            echo "<td>".$mp["motiu"]."</td>";
            echo "</tr>";
        }


?>
       //mp/inedx.vire
    </tbody>
</table>
</div>