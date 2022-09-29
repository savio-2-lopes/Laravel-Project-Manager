@extends('auth')
@section('titulo', 'Login')
@section('conteudo')
    <main class="bg-soft container-fluid">
        <section class="row">
            <div class="vh-100 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                    <div class="p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3 d-flex">
                                <a href="{{ route('auth.login') }}">
                                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                Realizar Login
                            </h1>
                        </div>
                        <form action="{{ route('authentication.login') }}" method="POST">
                            @csrf
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="email">Seu e-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="email" name="email" class="form-control" placeholder="example@company.com"
                                        id="email" autofocus required>
                                </div>
                            </div>

                            <!-- End of Form -->
                            <div class="form-group">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="password">Sua Senha</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="password" name="password" placeholder="Senha" class="form-control" id="password"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Sign in</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <span class="fw-normal">
                                Não possui registro?
                                <a href="{{ route('auth.register') }}" class="fw-bold">Criar uma conta</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-custom-image-login"></div>
        </section>
    </main>
@endsection
