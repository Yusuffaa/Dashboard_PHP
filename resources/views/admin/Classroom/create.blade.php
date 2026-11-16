
<div id="create-classroom-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">

    <div class="relative p-4 w-full max-w-lg max-h-full">

        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

            <div class="flex justify-between items-center pb-4 mb-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Classroom
                </h3>

                <button type="button"
                    data-modal-hide="create-classroom-modal"
                    class="text-gray-400 hover:text-gray-900">
                    ✕
                </button>
            </div>

            <form action="{{ route('classroom.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Kelas
                    </label>

                    <input type="text" name="name" id="name"
                        value="{{ old('name') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                        placeholder="Contoh: XI PPLG 1" required>
                </div>

                <div class="mb-4">
                    <label for="major" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Jurusan
                    </label>

                    <select name="major" id="major"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                        required>

                        <option value="">Pilih Jurusan</option>

                        <option value="PPLG" {{ old('major') == 'PPLG' ? 'selected' : '' }}>
                            PPLG
                        </option>

                        <option value="DKV" {{ old('major') == 'DKV' ? 'selected' : '' }}>
                            DKV
                        </option>

                        <option value="TKJ" {{ old('major') == 'TKJ' ? 'selected' : '' }}>
                            TKJ
                        </option>

                    </select>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
                    Simpan Classroom
                </button>
            </form>

        </div>
    </div>
</div>
