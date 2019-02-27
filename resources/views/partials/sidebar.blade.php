        <div class="sidebar-module sidebar-module-inset">  
             <ul class="list-unstyled">
                @foreach ($teams as $team)
                    <li>
                       <a href = "/news/team/{{$team->id}}">{{$team->name}} </a>
                    </li>
                 @endforeach
            </ul>
        </div>

