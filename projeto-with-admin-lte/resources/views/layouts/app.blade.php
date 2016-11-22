<!DOCTYPE html>

<html lang="br">

    @section('htmlheader')
    @include('layouts.partials.htmlheader')
    @show

    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            @include('layouts.partials.mainheader')

            @include('layouts.partials.sidebar')


            <div class="content-wrapper">
                @include('layouts.partials.contentheader')

                <div class="form-group col-md-12">
                    <div class="col-md-6 pull-right">
                        @include('partials.message')
                    </div>
                </div>

                <section class="content">
                    @yield('conteudo')
                </section>
            </div>

            @include('layouts.partials.controlsidebar')

            @include('layouts.partials.footer')

        </div>

        @section('scripts')
        @include('layouts.partials.scripts')
        @show

    </body>
</html>
