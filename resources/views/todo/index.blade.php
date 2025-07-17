<x-layout>

    @section('title')
        Home
    @endsection


<section class="bg-white p-10 ">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          MySpace
          <strong class="font-extrabold text-blue-700 sm:block"> Increase Productivity. </strong>
        </h1>

        <p class="mt-4 sm:text-xl/relaxed">
          Simple Todo app to become productive, the best  in the world !
          <strong class="font-extrabold text-green-700 sm:block"> source : trust me bro </strong>
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a
            class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow blue:bg-red-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
            href=" {{route('todo.create') }} "
          >
            Start Creating
          </a>


        </div>
      </div>
  </section>

    <div class="mx-auto max-w-xl text-center pt-10">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Latest ToDos
      </h1>
    </div>

    @forelse ($todos as $todo )
    @foreach ($todos as $todo )
    <article class="overflow-hidden rounded-lg shadow-lg w-2/3 mx-auto transition hover:shadow-xl">
        <div class="bg-white p-6">
          <time datetime="2022-10-10" class="block text-xs text-gray-500 mb-2">{{ $todo->created_at->format('Y-m-d') }}</time>

          <a href="{{ route('todo.show' , $todo) }}" >
            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $todo->title }}</h3>
          </a>

          <p class="text-sm text-gray-500">
         {{ $todo->body }}
          </p>
        </div>
        <hr>

      </article>

      @endforeach
    @empty
        <p class="font-bold p-10 align-middle pl-16 ">No Task for now :(</p>
    @endforelse



</x-layout>
