<x-app-layout>
    <div class="content-wrapper">
        <section class="top">
            {{-- <img src="{{asset('images/bg-header.jpg')}}" style="visibility: hidden" alt=""> --}}
            <div class="logo-aniba">
                <a class="px-2 text-decoration-none text-white" style="font-size: small">Culinary Journey</a>
                <img src="{{asset('images/aniba.png')}}" alt="">
                <a class="px-2 text-decoration-none text-white" style="font-size: small">By Meir Adoni</a>
            </div>
            <img class="position-absolute mb-3" style="bottom: 0;left: 0" src="{{asset('images/foragers.png')}}" alt="">
            
            {{-- <small>Scroll down. Menu appears to the right upon entering Section 1, and automatically highlights the
                current section .<br>Clicking a menu item will auto scroll the screen to that section.</small> --}}
        </section>
        <section class="section1 text-white">
            <a class="navJump" name="section2" id="section2"></a>
            <div class="container">
                <div class="" style="padding: 200px 0">
                    <p>Our Story</p>
                </div>
            </div>
            <h1></h1>
        </section>
        <section class="section3" style="background:#fff;">
            <a class="navJump" style="height:100px;" name="section3" id="section3"></a>
            <h1>Section 3</h1>
        </section>
        <section class="section4" style="background:#000;">
            <a class="navJump" style="height:100px;" name="section4" id="section4"></a>
            <h1>Section 4</h1>
        </section>
        <section class="section5" style="background:#fff;">
            <a class="navJump" style="height:100px;" name="section5" id="section5"></a>
            <h1>Section 5</h1>
        </section>
    </div>
</x-app-layout>