@extends('layouts.front.main') @section('content')
<main>
    <div class="container pt-5">
        <h1>Judul</h1>
        <p>Deskripsi</p>
        <img
            src="{{ asset('images/informasi-pengujian/tarik/thumbnail.png') }}"
            class="w-100"
            alt=""
        />
        <p class="py-2" style="text-align: justify; text-justify: inter-word">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
            sapiente debitis voluptatem eos aperiam? Numquam tenetur saepe harum
            explicabo? Cupiditate laudantium quia eum deserunt dicta ut ratione
            perspiciatis provident ullam consequatur beatae, nobis deleniti
            atque dolorem harum nisi, ab labore, quam repudiandae laborum
            adipisci. Laborum animi ipsa eos error praesentium!
        </p>
        <!-- sub judul 1 -->
        <div class="row">
            <div class="col">
                <h2>Sub-judul</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (1).JPG') }}" width="100%" alt="" />
            </div>
            <div class="col-8">
                <p
                    class=""
                    style="text-align: justify; text-justify: inter-word"
                >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Facere sapiente debitis voluptatem eos aperiam? Numquam
                    tenetur saepe harum explicabo? Cupiditate laudantium quia
                    eum deserunt dicta ut ratione perspiciatis provident ullam
                    consequatur beatae, nobis deleniti atque dolorem harum nisi,
                    ab labore, quam repudiandae laborum adipisci. Laborum animi
                    ipsa eos error praesentium!
                </p>
            </div>
        </div>
        <!-- sub judul 2 -->
        <div class="row">
            <div class="col">
                <h2>Sub-judul</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (2).JPG') }}" width="100%" alt="" />
            </div>
            <div class="col-8">
                <p
                    class=""
                    style="text-align: justify; text-justify: inter-word"
                >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Facere sapiente debitis voluptatem eos aperiam? Numquam
                    tenetur saepe harum explicabo? Cupiditate laudantium quia
                    eum deserunt dicta ut ratione perspiciatis provident ullam
                    consequatur beatae, nobis deleniti atque dolorem harum nisi,
                    ab labore, quam repudiandae laborum adipisci. Laborum animi
                    ipsa eos error praesentium!
                </p>
            </div>
        </div>
        <!-- sub judul 3 -->
        <div class="row">
            <div class="col">
                <h2>Sub-judul</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (10).JPG') }}" width="100%" alt="" />
            </div>
            <div class="col-8">
                <p
                    class=""
                    style="text-align: justify; text-justify: inter-word"
                >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Facere sapiente debitis voluptatem eos aperiam? Numquam
                    tenetur saepe harum explicabo? Cupiditate laudantium quia
                    eum deserunt dicta ut ratione perspiciatis provident ullam
                    consequatur beatae, nobis deleniti atque dolorem harum nisi,
                    ab labore, quam repudiandae laborum adipisci. Laborum animi
                    ipsa eos error praesentium!
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-3">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (4).JPG') }}" width="100%" alt="">
            </div>
            <div class="col-3">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (5).JPG') }}" width="100%" alt="">
            </div>
            <div class="col-3">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (6).JPG') }}" width="100%" alt="">
            </div>
            <div class="col-3">
                <img src="{{ asset('images/informasi-pengujian/tarik/img (7).JPG') }}" width="100%" alt="">
            </div>
        </div>
    </div>
</main>
@endsection
