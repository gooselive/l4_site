@include('site::_partials/header')
<?php use \Michelf\Markdown; ?>
<article>
  <h3>{{ $entry->title }}</h3>
  <h5>Published at {{ $entry->created_at }} &bull; by {{ $entry->author->first_name }}</h5>
  {{ Markdown::defaultTransform($entry->body) }}

<hr>

@if ($entry->image)
        <figure><img src="{{ Image::resize($entry->image, 800, 600) }}" alt=""></figure>
        <hr>
    @endif

<a href="{{ URL::route('article.list') }}">&laquo; Back to articles</a>
</article>
 
@include('site::_partials/footer')