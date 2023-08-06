@extends('layouts.front.main')

@section('content')
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-9">
                <h1>Judul</h1>
                <p>deskripsi</p>
                <article>
                    <img src="{{ asset('images/dummy_600x400.png') }}" width="100%" alt="">
                    <p class="pt-2" style="text-align: justify; text-justify: inter-word">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, saepe? Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Minus pariatur ducimus, nihil voluptatum numquam,
                        debitis nobis commodi itaque natus exercitationem sit blanditiis. Voluptatum maiores dolorum
                        tempora est ducimus voluptate quasi.</p>
                    <p class="pt-2" style="text-align: justify; text-justify: inter-word">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui labore rerum inventore
                        aspernatur laborum accusantium harum quos iure exercitationem tenetur excepturi temporibus sit
                        minima dolores, ipsum accusamus! Vitae vel numquam quas autem excepturi porro ratione est eum
                        placeat veniam atque voluptas, dicta ea consequatur nihil perspiciatis deserunt facere illum
                        non.</p>
                    <p class="pt-2" style="text-align: justify; text-justify: inter-word">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui labore rerum inventore
                        aspernatur laborum accusantium harum quos iure exercitationem tenetur excepturi temporibus sit
                        minima dolores, ipsum accusamus! Vitae vel numquam quas autem excepturi porro ratione est eum
                        placeat veniam atque voluptas, dicta ea consequatur nihil perspiciatis deserunt facere illum
                        non.</p>
                </article>
            </div>
            <div class="col-3">
                <h2>Menu</h2>
                @include('front.partials.sidebar')
            </div>
        </div>
    </div>
</main>
@endsection