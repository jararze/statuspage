{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                @if (session('status'))--}}
{{--                    <div class="alert alert-success" role="alert">--}}
{{--                        {{ session('status') }}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if($errors->any())--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$errors->first()}}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">Verify your phone</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <p>Thanks for registering with our platform. We will call you to verify your phone number in a jiffy. Provide the code below.</p>--}}

{{--                        <div class="d-flex justify-content-center">--}}
{{--                            <div class="col-8">--}}
{{--                                --}}{{--                                <form method="post" action="{{ route('phoneverification.verify') }}">--}}
{{--                                <form method="post" action="">--}}
{{--                                    @csrf--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="code">Verification Code</label>--}}
{{--                                        <input id="code" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" type="text" placeholder="Verification Code" required autofocus>--}}
{{--                                        @if ($errors->has('code'))--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                                    <strong>{{ $errors->first('code') }}</strong>--}}
{{--                                                </span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <button class="btn btn-primary">Verify Phone</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

<x-guest-layout>

    <h2 class="mb-4 text-xl text-gray-600 dark:text-gray-400">{{ __('Verify your phone.') }}</h2>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Thanks for registering with our platform. We will call you to verify your phone number in a jiffy. Provide the code below.') }}
    </div>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert" style="--border-opacity: 1!important; border-color: #fc8181!important; border-color: rgba(252,129,129,1)!important; color:rgba(197,48,48,1)!important;background-color: rgba(255,245,245,1)!important;">
            <strong class="font-bold">{{$errors->first()}}</strong>
        </div>
    @endif
    <form method="POST" action=""{{ route('phoneverify.show') }}"">
    @csrf

        <div>
            <x-input-label for="verify" :value="__('Verification Code')" />
            <x-text-input id="verify" class="block mt-1 w-full" type="text" name="verify" :value="old('verify')" required autofocus autocomplete="Verify" />
            <x-input-error :messages="$errors->get('verify')" class="mt-2" />
        </div>
        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Verify') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>

