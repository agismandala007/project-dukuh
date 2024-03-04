<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    @include('components.header')

    <div class="flex flex-col lg:flex-row min-h-[800px] p-5">
        <div class="bg-white p-5 ring-1 shadow rounded-md mx-auto my-auto w-full lg:w-2/6">
            <span class="font-semibold text-[#232301] text-2xl mb-5">Login</span>
            <form class="text-[#232301]" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium">Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email') is-invalid @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium">Your
                        password</label>
                    <input type="password" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password') is-invalid @enderror"
                        value="{{ old('password') }}">
                    @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit"
                    class="bg-[#0088cc] text-white hover:bg-[#006DAE] font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>


    </div>

    @include('components.footer')

</body>

</html>