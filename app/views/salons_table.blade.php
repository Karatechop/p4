
{{ucwords($salon->name)}} 
is from {{ucwords($salon->city);}} city. 
Their address is {{ucwords($salon->address)}}. 
They are open from {{$salon->open_h}}:{{$salon->open_m}} 
till {{$salon->close_h}}:{{$salon->close_m}}. 
{{$salon->int_code}}{{$salon->coun_code}}{{$salon->net_code}}{{$salon->phone}} 
or visit their webpage: {{strtolower ($salon->url)}} 
<br>


