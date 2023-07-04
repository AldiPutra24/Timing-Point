@extends('dashbroad.layout.main')

@section('container')
        <div class="content_harian">
            <h1>Let's Make Your Plan</h1>
            <main class="grid">
                <article>
                    <img src="{{ asset('assets/img harian/image11.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/monday.html">Monday</a></h2>
                    </div>
                </article>
                <article>
                    <img src="{{ asset('assets/img harian/image22.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/tuesday.html">Tuesday</a></h2>
                    </div>
                </article>
                <article>
                    <img src="{{ asset('assets/img harian/image33.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="/harian-lanjut">Wednesday</a></h2>
                    </div>
                    </article>
                <article>
                    <img src="{{ asset('assets/img harian/image44.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/thursday.html">Thursday</a></h2>
                    </div>
                    </article>
                <article>
                    <img src="{{ asset('assets/img harian/image55.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/friday.html">Friday</a></h2>
                    </div>
                    </article>
                <article>
                    <img src="{{ asset('assets/img harian/image6.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/saturday.html">Saturday</a></h2>
                    </div>
                    </article>
                <article>
                    <img src="{{ asset('assets/img harian/image77.png') }}" width="200px" height="225px">
                    <div class="content">
                        <h2 class="btnn"><a href="../gabungan/sunday.html">Sunday</a></h2>
                        </div>
                    </article>
                <article>
                    <img src="{{ asset('assets/img harian/image.jpg') }}" width="200px" height="200px">
                    <div class="content2">
                        <h2>Do it for your future self. FIGHTING!</h2>
                    </div>
                    </article>
                </main>
            </div>
@endsection


