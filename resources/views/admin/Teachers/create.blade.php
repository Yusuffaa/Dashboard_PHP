<!-- Create Teacher Modal -->
<div id="create-teacher-modal" tabindex="-1" aria-hidden="true"
    class="{{ $errors->any() ? 'flex' : 'hidden' }} overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">

    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800">

            <div class="flex justify-between items-center pb-4 mb-4 border-b">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Teacher
                </h3>

                <button type="button" data-modal-hide="create-teacher-modal" class="text-gray-400 hover:text-gray-900">
                    ✕
                </button>
            </div>

            <form action="{{ route('teachers.store') }}" method="POST">
                @csrf

                <div class="grid gap-4 mb-4">

                    <div>
                        <label class="block mb-2 text-sm font-medium">
                            Nama Teacher
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full p-2.5 border rounded-lg" placeholder="Masukkan nama teacher" required>
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            NIY
                        </label>

                        <input type="number" name="niy" value="{{ old('niy') }}"
                            class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white
                                 @error('niy') border-red-500 @enderror"
                            placeholder="Masukkan NIY" required>

                        @error('niy')
                            <p class="mt-1 text-sm text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 text-sm font-medium">
                            Start Date
                        </label>
                        <input type="date" name="start_date" value="{{ old('start_date') }}"
                            class="w-full p-2.5 border rounded-lg" required>
                    </div>

                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                    Simpan Teacher
                </button>
            </form>

        </div>
    </div>
</div>
