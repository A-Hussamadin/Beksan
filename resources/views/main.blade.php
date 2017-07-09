@include('shared.header')

            <!-- sidebar menu -->
            @include('shared.sidebar')
            <!-- /sidebar menu -->

            

        <!-- top navigation -->
        @include('shared.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('section')
        </div>
        <!-- /page content -->

      @include('shared.footer')