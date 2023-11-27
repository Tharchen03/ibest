<div class="flex flex-col bg-indigo-900 w-full h-screen" x-data="{
    showSubscribe: @entangle('showSubscribe'),
    showSuccess: @entangle('showSuccess'),
}">
    <nav class="flex pt-5 justify-between container mx-auto text-indigo-200">
        <a class="text-3xl font-semibold" href="/">
            <x-application-logo class="w-16 h--16 fill-current ">

            </x-application-logo>
        </a>

        <div class="flex justify-end ">
            @auth
                <a href="{{ route('dashboard') }}">
                    Dashboard</a>
            @else
                <a href="{{ route('login') }}">
                    login
                </a>
            @endauth
        </div>
    </nav>

    <div class="flex container mx-auto items-center h-full">
        <div class="flex flex-col w-1/3 items-start ">
            <h1 class="text-white font-bold text-5xl leading-tight md-4">
                Simple Generic landing page to Subscribe
            </h1>

            <p class="text-indgo-200 text-xl md-10">
                We r Just Doing some random .Mind
                <span class="font-bold underline">
                    suscribing la ?? </span>
            </p>

            <x-primary-button class="py-3 px-8 bg-red-500 hover:bg-red-700" x-on:click="showSubscribe = true">
                Suscribe
            </x-primary-button>
        </div>
    </div>

    <x-try trigger="showSubscribe">
        <p class="text-white text-5xl font-extrabold text-center">
            lets do it
        </p>

        <form action="" class ="flex flex-col items-center p-24" wire:submit.prevent="subscribe">
            <x-text-input class="px-5 py-3 w-88 border border-blue-500" type='email' name="email"
                placeholder="Email Adress" wire:model="email">

            </x-text-input>
            {{-- @error('email') --}}
            {{-- {{ $message }} --}}
            {{-- @enderror --}}
            <span class="text-grey-100 text-xs">
                {{-- ternariy condition --}}
                {{ $errors->has('email') ? $errors->first('email') :
                 'We will Sent You a confirmation Email !!!' }}


            </span>


            <x-primary-button class="px-5 py-3 mt-5 w-80 bg-blue-500 justify-center">
                Get In
            </x-primary-button>

        </form>

    </x-try>



    <x-try class="bg-amber-200" trigger="showSuccess">

        <p class="animate-pulse text-white text-9xl font-extrabold text-center">
            &check;
        </p>

        <p class=" text-white text-5xl font-extrabold text-center mt-16">
            Great!!
        </p>
        <p class="text-white text-3xl text-center">
            See You in Your Inbox
        </p>

    </x-try>

</div>
