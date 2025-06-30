<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
<x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
<x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
<x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
