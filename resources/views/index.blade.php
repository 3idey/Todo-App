@php
    use App\Models\User;
    use Illuminate\Support\Facades\Auth;
@endphp

@auth
    @php
        $user = Auth::user();
        $name = $user->name;
    @endphp
@endauth


<x-layout>
    <h1 class="text-4xl font-bold text-center mb-10">👋 Hello! {{ auth()->check() ? $name : '' }} 😊</h1>

</x-layout>
