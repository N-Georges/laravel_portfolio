<!-- FEATURES -->
<section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume">
    <div class="container">
        <h2 class="mb-4 text-center">My Skills</h2>
        <div class="row">
            <div class="col-lg-6 col-12">
                @foreach ($skill as $item)
                @if ($loop->iteration<=4)

                <div class="timeline">
                    <div class="timeline-wrapper">
                        <div class="timeline-yr">
                            <span><img class="w-50 " src="{{ asset("images/svg/" . $item->logo) }}"
                                    alt=""></span>
                        </div>
                        <div class="timeline-info">
                            <h3>
                                <span>{{ $item->title }}</span>
                                {{-- <small>Best Studio</small> --}}
                            </h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>



                </div>
                @endif

                @endforeach
            </div>

            <div class="col-lg-6 col-12">
                @foreach ($skill as $item)
                @if ($loop->iteration>4)

                <div class="timeline">
                    <div class="timeline-wrapper">
                        <div class="timeline-yr">
                            <span><img class="w-50 " src="{{ asset("images/svg/" . $item->logo) }}"
                                    alt=""></span>
                        </div>
                        <div class="timeline-info">
                            <h3>
                                <span>{{ $item->title }}</span>
                                {{-- <small>Best Studio</small> --}}
                            </h3>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>



                </div>
                @endif

                @endforeach
            </div>

        </div>
    </div>
</section>
