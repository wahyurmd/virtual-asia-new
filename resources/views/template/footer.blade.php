<!-- footer section -->
<section class="container-fluid footer_section">
    <p>
        @php
            use Carbon\Carbon;

            $currentYear = Carbon::now()->year;
        @endphp
      &copy; {{ $currentYear }} Virtual Asia - All Rights Reserved</a>
    </p>
</section>
<!-- footer section -->
