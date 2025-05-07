<div>
    <div class="max-w-4xl mx-auto bg-gray-800 rounded-2xl shadow-xl overflow-hidden w-full">
        <div class="p-8">
            <form action="{{ route('profile.password.update') }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="flex flex-col gap-4">
                    <label for="current_password" class="text-white">Current Password</label>
                    <input type="password" name="current_password" id="current_password"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>

                    <label for="new_password" class="text-white">New Password</label>
                    <input type="password" name="new_password" id="new_password"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>

                    <label for="new_password_confirmation" class="text-white">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="bg-gray-700 text-white rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-500"
                        required>

                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
