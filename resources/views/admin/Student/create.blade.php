<!-- Main modal -->
<!-- Main modal -->
<div id="create-student-modal" tabindex="-1" aria-hidden="true"
    class="{{ $errors->any() ? 'flex' : 'hidden' }} overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">

    <div class="relative p-4 w-full max-w-2xl max-h-full">

        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">

                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Data Siswa
                </h3>

                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="create-student-modal">

                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">

                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd">
                        </path>
                    </svg>

                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <form action="{{ route('students.store') }}" method="POST">

                @csrf

                <div class="grid gap-4 mb-4 sm:grid-cols-2">

                    <!-- Nama Siswa -->
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Siswa
                        </label>

                        <input type="text" name="name" id="name" value="{{ old('name') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Masukkan nama siswa" required>
                    </div>

                    <!-- NIS -->

                    <div>
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            NIS <span class="text-red-600">*</span>
                        </label>

                        <input type="text" name="nis" id="nis" value="{{ old('nis') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Masukkan NIS" required>

                        @error('nis')
                            <p class="mt-2 text-sm font-medium text-red-600 dark:text-red-400">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>



                    <!-- Classroom -->
                    <div>
                        <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Classroom
                        </label>

                        <select name="classroom_id" id="classroom_id" required
                            class="w-full p-2.5 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg focus:ring-primary-600 focus:border-primary-600 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            <option value="">-- Pilih Kelas --</option>

                            @foreach ($classrooms as $classroom)
                                <option value="{{ $classroom->id }}"
                                    {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                                    {{ $classroom->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    <!-- Address -->
                    <div class="sm:col-span-2">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Address
                        </label>

                        <textarea name="address" id="address" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Masukkan alamat siswa" required>{{ old('address') }}</textarea>
                    </div>

                </div>

                <!-- Button submit -->
                <button type="submit"
                    class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-6 py-2.5 text-sm font-semibold text-white shadow-sm transition duration-200 hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">

                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>

                    Simpan Data Siswa
                </button>

            </form>
        </div>
    </div>
</div>
x
