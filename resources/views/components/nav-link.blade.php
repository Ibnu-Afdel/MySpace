@props(['active' => false ])
 
<a  class = "{{ $active ? 'text-sky-600 bg-sky-100 ': 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' 
 }} shrink-0 rounded-lg p-2 text-sm font-medium " {{ $attributes }}> {{ $slot }} </a>


{{-- 
<a
href="#"
class="shrink-0 rounded-lg p-2 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700"
>
Archive
</a>


shrink-0 rounded-lg p-2 text-sm font-medium

not active -> text-gray-500 hover:bg-gray-50 hover:text-gray-700

active -> text-sky-600


<a
href="#"
class="shrink-0 rounded-lg bg-sky-100 p-2 text-sm font-medium text-sky-600"
aria-current="page"
>
Notifications
</a> --}}