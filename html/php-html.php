<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       foreach ($students as $student){
           echo "<li>$student</li>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form method="get" action="php-html.php">

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day">
           <?php
           for ($i=1 ; $i <= 31 ; $i++){
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="month">Month</label>
       <select  name="month" id="month">
           <?php
           for ($i=1 ; $i <= 12 ; $i++){
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
       <label for="year">Year</label>
       <select  name="year" id="year">
           <?php
           for ($i=1900 ; $i <= 2021 ; $i++){
               echo "<option value='$i'>$i</option>";
           }
           ?>
       </select>
         <hr>
         <label for="sex">Votre Genre</label>
         <select  name="sex" id="sex">
             <option value="1">Masculin</option>
             <option value="2">Féminin</option>
             <option value="3">Indéfini</option>
         </select>
         <hr>
         <input type="submit">
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
    <?php
        if (isset($_GET['sex'])){
            switch ($_GET['sex']){
                case "1" :
                    echo "<p>Je suis un garçon</p>";
                    break;
                case "2":
                    echo"<p> Je suis une fille</p>";
                    break;
                default:
                    echo "<p>Je suis indéfini </p>";
                    break;
            }
        }

     //<!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->

     //<!-- TODO Instruction : Afficher ce bloc dans les autres cas -->

     ?>
  </body>
</html>
