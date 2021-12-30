<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank init | Formulaire</title>
    <link rel="stylesheet" href="../assets/styles/bootstrap.css">
    <link rel="stylesheet" href="../assets/styles/main.css">
</head>
<body>
<body>
   <main class="container m-auto mt-3">       
        <form class="needs-validation border row" action="../models/traitement.php">
            <div class="row m-0">
                <h1 class="title">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label" for="responsable">Responsable</label>
                        <select class="form-select form-check"  id="responsable" required>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                            <option value="3">Agent 3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="datepret">Date du prêt</label>
                    <input type="date" class="form-control " id="datepret" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="modeRemboursement">Mode de remboursement</label>
                        <select class="form-select" id="modeRemboursement"required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                            <option>semestriel</option>
                            <option>annuel</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label" for="commentaire">Commentaire</label>
                    <textarea type="text" class="form-control" id="commentaire" rows="7"></textarea>
                <label class="form-label" for="commentaire" id="note">Ajouter votre note ici</label>
                </div>
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label" for="montant">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant">Ar</span>
                            </div>
                            <input type="number" name="montant"  class="form-control" id="montant" min="0" step="3000000"placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label" for="pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="number" class="form-control" id="pourcentage" placeholder="0%" max="100" min="1" required> 
                        </div> 
                   </div>
               </div>
               <div class="form-group">
                    <label class="form-label" for="dateduremboursement">Date de remboursement:</label>
                    <input type="date" class="form-control" id="dateduremboursement" required>  
               </div>
               <div class="form-group">
                    <label class="form-label" for="modePayement">Mode de payement:</label>
                    <select class="form-select" id="modePayement" required>
                        <option>Mvola</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                        <option>Banque</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" value="Enregistrer" class="btn btn-primary my-3">
            </div>
        </form>


        <script src="../assets/js/bootstrap.js"></script>
        <script src="../assets//js/bootstrap.bundle.js"></script>
</body>
</html>