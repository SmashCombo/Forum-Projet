<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Document sans titre</title>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--></head>

<body>

<div class="container">
  <header>
    <a href="#"><img src="" alt="Insérer le logo ici" width="180" height="90" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a>
  </header>
  <div class="sidebar1">
    <ul class="nav">
        <li><a href="#">Lien un</a></li>
        <li><a href="#">Lien deux</a></li>
        <li><a href="#">Lien trois</a></li>
        <li><a href="#">Lien quatre</a></li>
    </ul>
    <aside>
      <p>  Les liens ci-dessus illustrent une structure de navigation de base à l'aide d'une liste simple dont le style est défini par CSS. Vous pouvez l'utiliser comme point de départ et modifier les propriétés afin de définir l'apparence de votre choix. Si vous avez besoin de menus de survol, créez-les à l'aide d'un menu Spry, d'un widget de menu téléchargé sur Adobe Exchange ou de diverses solutions JavaScript ou CSS.</p>
      <p>Si vous souhaitez placer la navigation en haut, déplacez l'élément ul en haut de la page et recréez la mise en forme.</p>
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content">
    <h1>Instructions</h1>
    <section>
     <h2>Comment utiliser ce document</h2>
      <p>Notez que le code CSS de ces mises en forme contient une grande quantité de commentaires. Si vous travaillez principalement en mode Création, jetez un coup d'œil au code afin d'obtenir des conseils sur l'utilisation du code CSS pour les mises en forme fixes. Vous pouvez supprimer ces commentaires avant de lancer votre site. Pour en savoir plus sur les techniques utilisées dans ces mises en forme CSS, consultez l'article suivant sur le Pôle de développement Adobe : <a href="http://www.adobe.com/go/adc_css_layouts_fr">http://www.adobe.com/go/adc_css_layouts_fr</a>.</p>
    </section>
    <section>
      <h2>Méthode d'effacement</h2>
      <p>Comme toutes les colonnes sont flottantes, cette mise en page utilise une déclaration clear:both dans la règle .footer. Cette technique d'effacement force le .container à comprendre où les colonnes se terminent, de façon à afficher les bordures ou les couleurs d'arrière-plan que vous appliquez au .container. Si votre conception exige la suppression de l'élément footer du .container, vous devrez utiliser une méthode d'effacement différente. La plus fiable consiste à ajouter un élément &lt;br class=&quot;clearfloat&quot; /&gt; ou &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; après la dernière colonne flottante (mais avant la fermeture du .container). L'effet d'effacement résultant sera identique. </p>
    </section>
    <section>
      <h2>Remplacement du logo</h2>
      <p>Dans l'en-tête, un espace réservé pour image a été utilisé à l'endroit où vous souhaiterez probablement placer un logo. Il est conseillé de supprimer l'espace réservé et de le remplacer par votre logo lié. </p>
      <p> Notez que si vous utilisez l'inspecteur Propriétés pour accéder à l'image de votre logo à l'aide de la zone SRC (au lieu de supprimer l'espace réservé puis de le remplacer), vous devez veiller à supprimer les propriétés intégrées d'arrière-plan et d'affichage. Ces styles intégrés servent uniquement à permettre l'affichage de l'espace réservé du logo dans des navigateurs à des fins de démonstration. </p>
      <p>Pour supprimer les styles intégrés, assurez-vous que le panneau Styles CSS est bien en mode Actuel. Sélectionnez l'image puis, dans le volet Propriétés du panneau Styles CSS, cliquez à l'aide du bouton droit puis supprimez les propriétés d'affichage et d'arrière-plan. Bien entendu, vous pouvez toujours accéder directement au code et y supprimer les styles intégrés depuis l'image ou l'espace réservé.</p>
    </section>
  <!-- end .content --></article>
  <aside>
    <h4>Arrière-plans</h4>
    <p>Par nature, la couleur d'arrière-plan d'un élément de bloc ne s'affiche que pour la longueur du contenu. Si vous préférez une ligne de séparation plutôt qu'une couleur, placez une bordure sur le côté du bloc .content (uniquement s'il doit toujours contenir davantage de contenu).</p>
  </aside>
  <footer>
    <p>Ce pied de page contient la déclaration position:relative, de façon à attribuer hasLayout à Internet Explorer 6 pour le .footer et forcer son effacement correct. Si la compatibilité avec IE6 n'est pas nécessaire, vous pouvez le supprimer.</p>
    <address>
      Contenu d'adresse
    </address>
  </footer>
  <!-- end .container --></div>
</body>
</html>