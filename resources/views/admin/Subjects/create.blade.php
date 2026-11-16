
<div id="create-subject-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">

    <div class="relative p-4 w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Subject
                </h3>

                <button type="button"
                    data-modal-hide="create-subject-modal"
                    class="text-gray-400 hover:text-gray-900">
                    ✕
                </button>
            </div>

            <form action="{{ route('subjects.store') }}" method="POST" class="p-4">
                @csrf

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Subject
                    </label>

                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white"
                        placeholder="Masukkan nama subject" required>

                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Teacher
                    </label>

                    <select name="teacher_id"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white"
                        required>

                        <option value="">Pilih Teacher</option>

                        @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                {{ $teacher->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('teacher_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end gap-2">
                    <button type="button"
                        data-modal-hide="create-subject-modal"
                        class="px-4 py-2 text-sm bg-gray-200 rounded-lg">
                        Batal
                    </button>

                    <button type="submit"
                        class="px-4 py-2 text-sm text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
