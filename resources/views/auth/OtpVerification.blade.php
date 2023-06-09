<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div
            class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-12"
        >
            <div
                class="relative bg-white px-6 pt-10 pb-9 shadow-2xl mx-auto w-full max-w-lg rounded-2xl"
            >
                <div class="mx-auto flex w-full max-w-md flex-col space-y-16">
                    <div
                        class="flex flex-col items-center justify-center text-center space-y-2"
                    >
                        <div class="font-semibold text-3xl">
                            <p>Email Verification</p>
                        </div>
                        <div
                            class="flex flex-row text-sm font-medium text-gray-400"
                        >
                            @if (session('success'))
                            <div class="text-green-500">
                                {{session('success')}}
                            </div>
                            @endif @if (session('error'))
                            <div class="text-rose-500">
                                {{session('error')}}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div>
                        <form
                            action="{{ route('otp.generate') }}"
                            method="POST"
                        >
                            @csrf
                            <input
                                value="{{ $user_id }}"
                                name="user_id"
                                type="hidden"
                            />
                            <div class="flex flex-col space-y-16">
                                <div
                                    class="flex flex-row items-center justify-between mx-auto w-full max-w-xs"
                                >
                                    <div class="w-16 h-16">
                                        <input required 
                                        value="{{ old('otp') }}"
                                        maxlength="1"
                                        class="w-full h-full flex flex-col
                                        items-center justify-center text-center
                                        px-5 outline-none rounded-xl border
                                        border-rose-500 text-lg bg-white
                                        focus:bg-gray-50 focus:ring-1
                                        ring-rose-600" type="text" name="otp"
                                        id="" />
                                    </div>
                                    <div class="w-16 h-16">
                                        <input required 
                                        value="{{ old('otp') }}"
                                        maxlength="1"
                                        class="w-full h-full flex flex-col
                                        items-center justify-center text-center
                                        px-5 outline-none rounded-xl border
                                        border-rose-500 text-lg bg-white
                                        focus:bg-gray-50 focus:ring-1
                                        ring-rose-600" type="text" name="otp"
                                        id="" />
                                    </div>
                                    <div class="w-16 h-16">
                                        <input required 
                                        value="{{ old('otp') }}"
                                        maxlength="1"
                                        class="w-full h-full flex flex-col
                                        items-center justify-center text-center
                                        px-5 outline-none rounded-xl border
                                        border-rose-500 text-lg bg-white
                                        focus:bg-gray-50 focus:ring-1
                                        ring-rose-600" type="text" name="otp"
                                        id="" />
                                    </div>
                                    <div class="w-16 h-16">
                                        <input required value="{{ old('otp') }}"
                                        maxlength="1"
                                        class="w-full h-full flex flex-col
                                        items-center justify-center text-center
                                        px-5 outline-none rounded-xl border
                                        border-rose-500 text-lg bg-white
                                        focus:bg-gray-50 focus:ring-1
                                        ring-rose-600" type="text" name="otp"
                                        id="" />
                                    </div>
                                </div>

                                <div class="flex flex-col space-y-5">
                                    <div>
                                        <button
                                            type="submit"
                                            class="flex flex-row items-center justify-center text-center w-full border rounded-xl outline-none py-5 bg-rose-500 border-none text-white text-sm shadow-sm"
                                        >
                                            Verify Account
                                        </button>
                                    </div>

                                    @error('otp')
                                    <span class="text-rose-500 font-bold"
                                        >{{message}}</span
                                    >
                                    @enderror

                                    <div
                                        class="flex flex-row items-center justify-center text-center text-sm font-medium space-x-1 text-gray-500"
                                    >
                                        <p>Didn't recieve code?</p>
                                        <a
                                            class="flex flex-row items-center text-blue-600"
                                            href="http://"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            >Resend</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
