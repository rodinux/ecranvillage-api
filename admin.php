<?php
if ( class_exists('EcranVillage_Shortcode') ) {
	$app_url = untrailingslashit(EcranVillage_Shortcode::$app_url);
} else {
	$app_url = '';
?>
    <div class="notice notice-error">
        <p>Class EcranVillage_Shortcode missing! Please contact the administrator.</p>
    </div>
<?php
}
?>

<div class="wrap">
	<h1>Plannings</h1>

	<h2>Export / Import</h2>
	<p>Pour importer les nouveaux films, il suffit d'aller sur cette page <a href="<?php echo $app_url . '/ecranvillage'; ?>" class="button button-primary" target="plannings">Import ecranvillage</a></p>
	<p>Avec cette méthode les films importés ont bien le même id que leur page Wordpress et les liens marchent bien !</p>
	<p>Si c'est un film qui existait déjà dans les archives, il suffit de le remettre dans la catégorie 'à venir' (même provisoirement) et d'attendre un peu pour qu'il soit pris en compte, puis de recommencer la procédure. Cette façon de faire est la même si on clique sur le bouton 'Importer les nouveaux films' dans la page Films de l'application Plannings.</p>
	<p>Vérifiez aussi si le film n'existe pas déjà dans l'application Plannings <a href="<?php echo $app_url . '/admin/film'; ?>" class="button button-primary" target="plannings">ici</a>. Si c'est le cas, cliquez sur 'Voir dans l'application' puis 'Modifier' et éditer les champs 'created_at' et 'updated_at' à la date d'aujourd'hui de façon à retrouver ensuite le film dans les films à venir et dans l'édition des séances.</p>
	<p>Pour éditer les séances, tout ce passe dans la page <a href="<?php echo $app_url . '/films'; ?>" class="button button-primary" target="plannings">Films</a> de l'application</p>
	<p>Ensuite pour relier les séances au vues du site Wordpress, suivez les indications du shortcode <strong>[seances]</strong> en dessous.</p>

	<h2><?php _e('Shortcode'); ?> [seances]</h2>
	<p>Utilise le shortcode <strong>[seances]</strong> dans les articles WordPress pour montrer un tableau des séances. Par défaut, le shortcode cherche le film du même titre. Il faut que les titres du film et de l'article correspondent exactement. Au cas où le bon film n'est pas trouvé automatiquement, il y a deux méthodes pour faire montrer les bonnes séances:</p>
	<ol>
		<li><strong>Associer l'article au bon film.</strong>
			<ul>
				<li>- Ouvre la page <a href="<?php echo $app_url . '/admin/film'; ?>" target="plannings">Listing des Films</a> dans l'application Plannings et note le chiffre de l'<strong>Id</strong> du film souhaité.</li>
				<li>- Reviens sur l'article WordPress pour modifier et trouve le bloc "Champs personnalisés" en dessous le bloc du texte principal. Si il n'y est pas visible, ouvre l'onglet "Options de l'écran" à droite en haut de la page et coche la case "Champs personnalisés."</li>
				<li>- Dans le bloc "Champs personnalisés" sélectionne "film_id" sous "Nom" et entre le chiffre de l'Id du film souhaité sous "Valeur". Si il y a déjà un champ "film_id" existant, modifie ou supprime le. Il faut pas y avoir plusieurs champs avec le même nom "film_id".</li>
			</ul>
		</li>
		<li><strong>Associer le shortcode [seances] au bon film.</strong><br>
			Ajoute au shortcode un des paramètres disponible pour forcer l'association à un film dans l'application de Plannings. Par exemple <strong>[seances id="1"]</strong> ou <strong>[seances titrefilm="COURT ECOLE ST JEAN"]</strong> montre les séances du film "COURT ECOLE ST JEAN" même si le titre je l'article ne corresponds pas au titre du film.</li>
	</ol>
	<p><strong>Paramètres</strong></p>
	<dl>
		<dt><strong>id</strong></dt>
		<dd>Le <strong>Id</strong> du film pour les séances seront affiché. Peut contenir plusieurs Id's pour afficher les séances de plusieurs films ensemble.</dd>
		<dt><strong>film / titre / titrefilm</strong></dt>
		<dd>Si il n'y a pas d'Id, le film peut être trouvé par titre. Il faut correspondre exactement (attention aux minuscules/majuscules, espaces et caractères spéciaux!) au titre utilisé dans l'application Plannings.</dd>
		<dt><strong>format</strong></dt>
		<dd>Le format d'affichage. Peut être "tableau" pour afficher en format de tableau (défaut) ou "simple" pour afficher une liste simple.</dd>
		<dt><strong>align</strong></dt>
		<dd>Alignement des textes en format "simple". Peut être "left", "center", "right" ou "justify".</dd>
	</dl>
	<p>Astuce: Il n'y a pas de limite au nombre de shortcodes, avec différentes paramètres si besoin, sur une seul page. </p>

	<h2><?php _e('Tools'); ?></h2>
	<p>Bientôt des boutons pour [vider le cache des films], [vider le cache des lieux] et [vider tous les caches des séances] ici...</p>
</div>