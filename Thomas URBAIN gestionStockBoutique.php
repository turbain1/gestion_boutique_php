<?php

$articles=['Chaussettes','T-shirts','Chaussures','Casquettes','Chemises'];

$ventesTotales = [0,0,0,0,0];



// Initialisation du stock
for ($i=0; $i<count($articles); $i++){
    echo $articles[$i] ." ";
}
echo PHP_EOL;
echo PHP_EOL;

foreach($articles as $article){
    echo $article ." ";
}

echo PHP_EOL;
echo PHP_EOL;




//Gestion des Stocks
$qteArticles=[10,5,8,3,12];
for ($i=0; $i<count($articles); $i++){
    echo "L'article " .$articles[$i] ." est disponible en " .$qteArticles[$i] ." exemplaires \n";
}

echo PHP_EOL;




//Réalisation d'une Vente

$indexArticle = readline("Choississez un article à vendre par son index : ");
$qteVendue = readline("Indiquez la qantité vendue : ");
if ($qteArticles[$indexArticle]>=$qteVendue){
    $qteArticles[$indexArticle]-=$qteVendue;
    echo "La vente a bien été effectuée \n";
    $ventesTotales[$indexArticle]+=$qteVendue;
} else {
    echo "Le stock est insuffisant \n";
}
echo PHP_EOL;




//Réapprovisionnement du Stock

$indexArticle = readline("Choississez un article à ajouter par son index : ");
$qteAjouter = readline("Indiquez une quantité à ajouter : ");
$qteArticles[$indexArticle]+=$qteAjouter;
echo PHP_EOL;
echo "Le produit " .$articles[$indexArticle] ." est maintenant disponible en " .$qteArticles[$indexArticle] ." exemplaires \n";
echo PHP_EOL;



//Synthèse et Affichage du Stock

for ($i=0; $i<count($articles); $i++){
    if ($qteArticles[$i] == 0){
        echo "L'article " .$articles[$i] ." est en rupture de stock \n";
    } else {
        echo "L'article " .$articles[$i] ." est disponible en " .$qteArticles[$i] ." exemplaires \n";
    }
}

echo PHP_EOL;




//Suivi des Ventes Totales par Article

//initialisation du tableau ligne 5 et mise à jour du tableau ligne 44
for ($i=0; $i<count($articles); $i++){
    if ($ventesTotales[$i] != 0){
        echo "L'article " .$articles[$i] ." a été vendu " .$ventesTotales[$i] ." fois \n";
    }
}

echo PHP_EOL;




//Suppression d'un Article

$article = readline("Entrez un article à supprimer par son index : ");
echo PHP_EOL;

array_splice($articles, $article, 1);
array_splice($qteArticles, $article, 1);
array_splice($ventesTotales, $article, 1);

for ($i=0; $i<count($articles); $i++){
    if ($qteArticles[$i] == 0){
        echo "L'article " .$articles[$i] ." est en rupture de stock \n";
    } else {
        echo "L'article " .$articles[$i] ." est disponible en " .$qteArticles[$i] ." exemplaires \n";
    }
}