<?php include('includes/header.php')?>

<body class="bg-gray-50">
  <div class="container mx-auto px-4 py-12">
    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl font-bold text-gray-800 mb-4">Contact Us</h1>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Reach out for support, partnerships, or just to say hello!
      </p>
    </div>

    <!-- Grid: Map + Contact Form -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Google Map Embed -->
      <!-- Google Map -->
                <div class="bg-white p-4 rounded-xl shadow-md">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Find Our Store</h3>
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0139082838576!2d104.8808949153638!3d11.550859791798579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPhnom%20Penh%2C%20Cambodia!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                            width="100%" 
                            height="300" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                        ></iframe>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <div>
                            <p class="text-gray-600">123 Shopping Street</p>
                            <p class="text-gray-600">Phnom Penh, Cambodia</p>
                        </div>
                        <a href="https://maps.google.com" target="_blank" class="text-primary hover:underline flex items-center">
                            Get Directions
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

      <!-- Contact Form -->
      <div class="bg-white p-8 rounded-xl shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Send a Message</h2>
        <form>
          <div class="mb-4">
            <label for="name" class="block text-gray-700 mb-2">Name</label>
            <input
              type="text"
              id="name"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
              placeholder="Your Name"
            />
          </div>
          <div class="mb-4">
            <label for="email" class="block text-gray-700 mb-2">Email</label>
            <input
              type="email"
              id="email"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
              placeholder="your.email@example.com"
            />
          </div>
          <div class="mb-4">
            <label for="message" class="block text-gray-700 mb-2">Message</label>
            <textarea
              id="message"
              rows="4"
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
              placeholder="Your message..."
            ></textarea>
          </div>
          <button
            type="submit"
            class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition font-medium"
          >
            Send Message
          </button>
        </form>
      </div>
    </div>

    <!-- Contact Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
      <!-- Address -->
      <div class="bg-white p-6 rounded-xl shadow-md flex items-start">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-gray-800 mb-1">Address</h3>
          <p class="text-gray-600">123 Tech Street, Phnom Penh, Cambodia</p>
        </div>
      </div>

      <!-- Email -->
      <div class="bg-white p-6 rounded-xl shadow-md flex items-start">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
          <p class="text-gray-600">mrounit83@gmail.com</p>
        </div>
      </div>

      <!-- Phone -->
      <div class="bg-white p-6 rounded-xl shadow-md flex items-start">
        <div class="bg-blue-100 p-3 rounded-full mr-4">
          <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
        </div>
        <div>
          <h3 class="font-semibold text-gray-800 mb-1">Phone</h3>
          <p class="text-gray-600">+855 963 904 112</p>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include('includes/footer.php')?>