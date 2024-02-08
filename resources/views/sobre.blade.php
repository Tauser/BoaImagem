<x-app-layout>
    <center class="container">
        <h1>Nossa História</h1>
        <subtitlePrincipal>Breve resumo e terminar falando quem são os <br> rastos que fazem isso tudo acontecer
        </subtitlePrincipal>
    </center>

    <blueArea>
        <center class="container">
            <h3>2009</h3>
            <h2>Nan sodales ligula id diam sodales gravida. Curabitur aliquet quam sem, a pretium nibh mollis eget</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, eros ac mattis egestas, odio felis
                mattis ligula, at congue ligula nisl ut sapien. Donec id efficitur turpis. Vivamus ex sapien</p>
        </center>
    </blueArea>

    <blackArea>
        <center class="container">
            <h3>2012</h3>
            <h2>Nan sodales ligula id diam sodales gravida. Curabitur aliquet quam sem, a pretium nibh mollis eget</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, eros ac mattis egestas, odio felis
                mattis ligula, at congue ligula nisl ut sapien. Donec id efficitur turpis. Vivamus ex sapien</p>
        </center>
    </blackArea>

    <lista>
        <center class="container">
            <ul class="row align-items-center equipe">
                @foreach ($members as $member)
                    <li class="col-3">
                        <img src="{{$member->avatar}}">
                        <h4>{{$member->name}}</h4>
                        <subtitle>
                            {{$member->role}}
                        </subtitle>
                        <socialsLinks>
                            <a href="#">{{$member->social1}}</a>
                            <a href="#">{{$member->social2}}</a>
                            <a href="#">{{$member->social3}}</a>
                        </socialsLinks>
                    </li>
                @endforeach
            </ul>


        </center>
    </lista>


</x-app-layout>
