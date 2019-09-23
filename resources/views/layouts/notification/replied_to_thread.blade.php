<router-link to="/chat">
 <strong>{{$notifications->data['user']['name']}}
 </strong>

    <p class="text-sm" style="color: black">{{$notifications->data['request']}}</p>
    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> {{$notifications->created_at}}</p>
    <div class="dropdown-divider"></div>

</router-link>
