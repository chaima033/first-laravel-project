<h1>Nos Articles</h1>

@foreach ($articles as $article)

<div class="article">
    <h3>{{ $article['titre'] }}</h3>
    <p>{{ $article['contenu'] }}</p>
</div>

@endforeach
