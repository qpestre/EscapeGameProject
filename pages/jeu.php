<div class="container">
    <section class="row containerAccueil">

        <!-- PRESENTATION -->
        <article class="col-8-xs col-8-sm col-8-md artAccueil">
            <p>
                <img href="sources/images/indice01.jpg" alt="indice 01" title="indice 01" />
                <!-- A automatiser en php -->
            </p>
            
        </article>


        <!-- BANNIERE DROITE -->
        <aside class="col-4-xs col-4-sm col-4-md asideJeu">
            <p>
                <h2>Action :</h2>
                <h3>Enigme 01</h3> <!-- A automatiser en php -->
                Description de l'indice 01
                <!-- Charger description de l'indice en php -->
                
                <br/>
                <hr/>
                <br/>

                <h2>Réponse :</h2>
                <form>
                    <input type="textbox" name="reponse" />
                    <p><br/></p>
                    <input type="submit" class="btn btn-lg" value="ENVOYER"/>
                </form>
                <!-- Charger le type de reponse attendue en fonction de typeReponse en $_URL['typeReponse'] -->
                <br/>
                <hr/>
                <br/>
            </p>

            <p>
                <br/>
                <a href="#" class="btn btn-lg btn-warning">Demander un indice</a>
                <a href="#" class="btn btn-lg btn-danger">Abandonner</a>
            </p>

            <p>
                <br/>
                <br/>
                <br/>
            </p>
        </aside>

    </section>
</div>
