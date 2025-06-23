@extends('theme')
@section('title') Админ-панель @endsection
@section('style')admin-index-style.css @endsection

@section('admin')
        <div class="table">
            <main class="dflex table">
                <nav class="sidebar">
                    <ul class="menu">
                        <li class="menu-item"><a href="/admin/staff">Сотрудники</a></li>
                        <li class="menu-item"><a href="/admin/services">Услуги</a></li>
                        <li class="menu-item"><a href="/admin/users">Пользователи</a></li>
                        <li class="menu-item"><a href="/admin/orders">Записи</a></li>
                    </ul>
                </nav>
                <div class="cont">
                    <section class="sect">
                        <h1 class="name-sect">Добро пожаловать, админ!</h1>
                        
                        <div class="container">
                            <a href="/admin/staff">
                                <div class="card-container">
                                    <div class="card">
                                        <h4>Сотрудники</h4>
                                        <span class = "chev">&rsaquo;</span>
                                    </div>
                                </div>                                    
                            </a>

                            <a href="/admin/services">
                                <div class="card-container">
                                    <div class="card">
                                        <h4>Услуги</h4>
                                        <span class = "chev">&rsaquo;</span>
                                    </div>
                                </div>
                            </a>
                            
                            <a href="/admin/users">
                                <div class="card-container">
                                    <div class="card">
                                        <h4>Пользователи</h4>
                                        <span class = "chev">&rsaquo;</span>
                                    </div>
                                </div>
                            </a>

                            <a href="/admin/orders">
                                <div class="card-container">
                                    <div class="card">
                                        <h4>Записи</h4>
                                        <span class = "chev">&rsaquo;</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
            </main>
            
        </div>
@endsection
