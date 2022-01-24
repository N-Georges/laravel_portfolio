 <!-- FEATURES -->
 <section class="resume py-5 mt-12 d-lg-flex justify-content-center align-items-center" id="about">
     <div class="container">

         <div class="row">

             <div class="col-lg-6 col-12 mt-auto">
                <img class="w-100" src="{{ asset("images/svg/" . $about->image) }}">
             </div>

             <div class="col-lg-6 col-12 mt-auto tracking-widest leading-loose">
                 <h2 class="mb-4 mobile-mt-2 ">About me</h2>
                 <p>
                     {{$about->text_1}}
                 </p>
                 <p>
                    {{ $about->text_2 }}
                 </p>
                 <p>
                    {{ $about->text_3 }}
                 </p>


             </div>

         </div>
     </div>
 </section>
