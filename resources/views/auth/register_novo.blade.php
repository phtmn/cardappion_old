@extends('layouts.site')

@section('conteudo_principal')
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url('{{asset('vendor/site/assets/img/login.jpg')}}')"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form class="form" method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    {{--<img src="{{asset('vendor/site/assets/img/now-logo.png')}}" alt="">--}}
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                    </div>
                                    <input type="name" class="form-control" placeholder="Como se chama?" name="name">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons users_circle-08"></i>
                                        </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Seu Email" name="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons text_caps-small"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="Digite uma senha" name="password" class="form-control" />
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="now-ui-icons text_caps-small"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="Confirme sua senha" name="password_confirmation" class="form-control" />
                                    @if ($errors->has('password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Entrar</button>
                                <div class="pull-left">
                                    <h6>
                                        <a href="{{route('login')}}" class="link text-white">Já possuo conta</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="#pablo" class="link text-white">Precisa de Ajuda?</a>
                                    </h6>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            CardapiON
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Sobre nós
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by
                <a href="#" target="_blank">Quem ama Tecnologia</a>. Coded by
                <a href="#" target="_blank">Laravel 5.8</a>.
            </div>
        </div>
    </footer>
@endsection


