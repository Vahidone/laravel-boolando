@php
    $header_menu_category = config('menues.header_menu_category');
    $header_menu_login = config('menues.header_menu_login');
@endphp

<header>
    <div class="container-csm">
      <!-- MENU di sinistra del header  -->
      <div class="menu">
        <ul>

            @foreach ($header_menu_category as $category)
            <li> <a class="{{ Route::currentRouteName() == $category['name'] ? 'active' : '' }}" href="{{ route($category['name'])}}">{{ $category['text'] }}</a> </li>

            @endforeach




        </ul>
        <!-- LOGO del header  -->
      </div>
      <div class="logo">
        <img src="/img/boolean-logo.png" alt="" />
      </div>


      <!-- menu LOGIN del header  -->
      <div class="login">
        <ul>
            @foreach($header_menu_login as $item)
            <li>
                <a href="{{ route($item['name']) }}">
                   <i class="{{ $item['text'] }}"></i>
                </a>
           </li>
            @endforeach
        </ul>
      </div>
    </div>
  </header>
