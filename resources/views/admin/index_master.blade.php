
        @php
        $id = Auth::user()->id;
        $user = App\Models\User::find($id);
        @endphp
        
        @include('admin.body.header')

        
        @include('admin.body.navbar')


        @include('admin.body.sidebar')

       

        @yield('admin')

        @include('admin.body.footer')
