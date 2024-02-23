@props(['type','text'])
<div class="alert alert-{{$type}}"  role="alert">
     {{--apel component
        utilise slot por faire text un balise <stron>--}}
    {{$slot}}
</div>