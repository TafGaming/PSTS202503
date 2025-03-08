<div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6">Edit Murid</h2>

    <form action="/students/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Nama</label>
            <input type="text" name="name" value="{{ old('name', $student->name) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Gender</label>
            <select name="gender" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="male" {{ old('gender', $student->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ old('gender', $student->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Email</label>
            <input type="email" name="email" value="{{ old('email', $student->email) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Phone</label>
            <input type="number" name="phone" value="{{ old('phone', $student->phone) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Grade</label>
            <input type="text" name="grade" value="{{ old('grade', $student->grade) }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
        <a href="/students" class="ml-2 text-gray-500 hover:underline">Batal</a>
    </form>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
