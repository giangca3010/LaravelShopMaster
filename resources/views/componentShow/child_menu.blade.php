@if($categoryParent->categoryChildren->count())
    <ul role="menu" class="sub-menu">
        @foreach($categoryParent->categoryChildren as $categoryChil)
            <li><a href="{{ route('categoryShow.product', ['slug'=>$categoryChil->slug, 'id'=>$categoryChil->id]) }}">{{ $categoryChil->name }}</a>
                @if($categoryChil->categoryChildren ->count())
                    @include('componentShow.child_menu', ['categoryParent'=>$categoryChil])
                @endif
            </li>
        @endforeach
    </ul>
@endif
