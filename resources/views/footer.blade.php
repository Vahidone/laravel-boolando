@php
    $footer_menu_info = config('menues.footer_menu_info');
    $footer_menu_socials = config('menues.footer_menu_socials');
@endphp

<footer>
    <div class="container-csm">
      <div class="box-left">
        <div class="boolando">Boolando s.r.l</div>
        <div class="info">
          <ul>
            @foreach ($footer_menu_info as $info )

            <li><a href="{{route($info['name'])}}">{{$info['text']}}</a></li>

            @endforeach


          </ul>
        </div>
      </div>

      <!-- RIGHT BOX  -->

      <div class="box-right">
        <div class="trovaci">Trovaci anche su</div>
        <div class="social">
          <ul>
            <li>
                @foreach ($footer_menu_socials as $social)

                <a href="{{ route($social['name'])}}"><i class="{{$social['text']}}"></i></a>

                @endforeach


            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
