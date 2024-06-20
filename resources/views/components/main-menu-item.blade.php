
@if (count($list_menu_sub)==0)
    <li class="nav-item">
        <a class="nav-link "href="{{url($menu->link)}}"><strong>{{$menu->name}}</strong></a>
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <strong>{{$menu->name}}</strong>
        </a>
        <ul class="dropdown-menu">
            @foreach ($list_menu_sub as $row_menu_sub)
            <li><a class="dropdown-item" href="{{url($row_menu_sub->link)}}">{{$row_menu_sub->name}}</a></li>
            @endforeach
            
            <li><a class="dropdown-item" href="#">Nữ</a></li>
        </ul>
    </li>
@endif