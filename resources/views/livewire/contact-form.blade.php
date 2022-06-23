<div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Basic Contact Form</h3>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form wire:submit.prevent="SubmitForm" action="/contact" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 sm:col-span-3">
                  <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                  <input wire:model="name" type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                  <input wire:model="email" type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                  <input wire:model="phone" type="text" name="phone" id="phone" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                  <input wire:model="message" type="text" name="message" id="message" autocomplete="message" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

