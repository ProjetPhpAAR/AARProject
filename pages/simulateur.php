<!DOCTYPE html>
<!-- 
     Auteur : Alexis vedrenne
-->
<html  lang="fr-FR                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ">
    <?php 
        include('../include/head.inc.php');
        include('../include/header.inc.php');
        include('../include/footer.inc.php');
    ?>
    <body>
        <section id="formulaire">
            <h1>Simulateur de calcul pour la force de vente :</h1>
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="resultats">
                    <legend>Vos résultats : </legend>
                    <p><label for="num_ancien">Nombre d'années d'ancienneté :</label> <input type="number" name="num_ancien" id="num_ancien" min="0" max="50" value="0"></p>
                    <p><label for="num_s20">Nombre de S 20 vendus :</label> <input type="number" name="num_s20" id="num_s20" min="0" max="9999" value="0"></p>
                    <p><label for="num_xs">Nombre de X-Spirit vendus :</label> <input type="number" name="num_xs" id="num_xs" min="0" max="9999" value="0"></p>
                    <p><label for="num_multi">Nombre de Multitec vendus :</label> <input type="number" name="num_multi" id="num_multi" min="0" max="9999" value="0"></p>
                    <p><label for="num_km">Distance parcourue :</label> <input type="number" name="num_km" id="num_km" min="0" max="9999" value="0"></p>

                    <h2 id="remuneration"></h2>
                </fieldset>
                <p id="controles"><input type="reset" name="rst_annuler" id="btn_annuler" value="Effacer les données"></p>
            </form>
        </section>
    </body>
</html>

