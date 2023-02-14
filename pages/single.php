<?php
use app\App;
use app\tables\Article;

$post = Article::find($_GET['id']);
App::setTitle($post->title);
?>
<h2><?php echo $post->title ?></h2>
<p><em><?php echo $post->categorie ?></em></p>
<p><?php echo $post->content ?></p>

