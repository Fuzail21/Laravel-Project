@include('layouts.header')

@push('title')
<title>
    About
</title>
@endpush
<div class="container">
    @yield('main-section')
</div>


<div class="about">
    <h1 class="text-center" style="padding-bottom: 5px; font-weight: bold;">About Us</h1>
    <p style="font-size: 21px;">Welcome to our website! We are a team of passionate individuals dedicated to providing high-quality products and exceptional services.</p>
    <p style="font-size: 21px;">At our company, we strive to exceed customer expectations by offering innovative solutions and delivering outstanding customer support. With years of experience in the industry, we have built a strong reputation for reliability and professionalism.</p>
    <p style="font-size: 21px;">Our mission is to make a positive impact on our customers' lives and contribute to their success. We believe in building long-lasting relationships based on trust and mutual growth.</p>
    <p style="font-size: 21px;">Feel free to explore our website and learn more about our products and services. If you have any questions or inquiries, please don't hesitate to contact us. We would be delighted to assist you.</p>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@include('layouts.footer')
