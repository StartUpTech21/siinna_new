@if(Request()->User()->level1 == 'superadmin')
    @include('template.sidebar.sidebar_superadmin')
@elseif(Request()->User()->level1 == 'admin' )
    @include('template.sidebar.sidebar_admin')
@elseif(Request()->User()->level1 == 'cs' )
    @include('template.sidebar.sidebar_cs')
@elseif(Request()->User()->level1 == 'teller' )
    @include('template.sidebar.sidebar_teller')
@endif