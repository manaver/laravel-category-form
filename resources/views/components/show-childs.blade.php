<div style="margin: 5px">
    @foreach ($categories as $category)
        @if ($category->childrens->isNotEmpty())
            <details style="margin: 5px">
                <summary>
                    {{ $category->name }}
                </summary>
                @include('components.show-childs', [
                    'categories' => $category->childrens,
                ])
            </details>
        @else
            <p>{{ $category->name }}</p>
        @endif
    @endforeach
</div>
