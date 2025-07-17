<x-layout>



    <div class="flex justify-center items-center py-10 bg-white">
        <div class="w-full max-w-md p-6 bg-gray-100 rounded-lg shadow-md">
            <form method="POST" action="{{ route('todo.update', $todo) }}">
                @csrf
                @method('PATCH')
                <input type="hidden" value="PATCH" name="_method">
            <div class="mb-4">
              <label
                for="title"
                name="title"
                class="relative block overflow-hidden border-b border-gray-200 bg-transparent pt-3 focus-within:border-blue-600"
              >
                <input
                  type="text"
                  value="{{ $todo->title }} "
                  id="title"
                  name="title"
                  placeholder="Title"
                  class="peer h-8 w-full border-none bg-transparent p-0 placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0 sm:text-sm"
                />
                <span
                  class="absolute start-0 top-2 -translate-y-1/2 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-2 peer-focus:text-xs"
                >
                  Title
                </span>
              </label>
              <x-error name="title" />
            </div>

            <div class="mb-6">
              <label for="body" name="body" class="sr-only">Body</label>
              <div
                class="overflow-hidden rounded-lg border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600"
              >

                <textarea
                  id="body"
                  name="body"
                  class="w-full resize-none border-none align-top focus:ring-0 sm:text-sm px-3 py-2 "
                  rows="4"

                  placeholder="Enter any additional order notes..."
                >{{ $todo->body }}</textarea>
              </div>
              <x-error name="body" />
            </div>

            <div class="flex justify-between">
              <a href=" {{ route('todo.show', $todo) }} "
                type="button"
                class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
              >
                Back
              </a>
              <button
                type="submit"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                Create
              </button>
            </div>
          </form>
        </div>
      </div>

    </x-layout>
