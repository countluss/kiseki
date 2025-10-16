{{-- /signup --}}

{{-- <div class="text-center remHeight pb-1.5 px-2 sm:px-4 md:px-8">
    <x-gradient-box wClass="w-full" hClass="h-full" radiusClass="rounded-(--gradientBoxRadius)"
    addClass="flex justify-center items-center px-2 overflow-auto
    mbm:px-3 mbl:px-4
    sm:px-6 md:px-10
    lg:justify-between lg:px-4 xl:px-6 2x:px-8">

        <div class="grow">

            <div class="hidden flex flex-col w-[270px] h-[198px] bg-color1/50 rounded-[30px] shadow-md text-color3/30
            items-center justify-center
            border-1 border-color3/20 mx-auto
            lg:flex
            xl:w-[338px] xl:h-[248px]">

                <svg class="size-[92px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
                    <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1z"/>
                    <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729q.211.136.373.297c.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466s.34 1.78.364 2.606c.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527s-2.496.723-3.224 1.527c-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.3 2.3 0 0 1 .433-.335l-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a14 14 0 0 0-.748 2.295 12.4 12.4 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.4 12.4 0 0 0-.339-2.406 14 14 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27s-2.063.091-2.913.27"/>
                </svg>


                <p class="text-[54px]">kiseki</p>

            </div>

        </div> --}}

        {{-- <div class="flex flex-col bg-color1/50 rounded-[30px] w-full px-3 shadow-md
        border-1 border-color3/20
        lg:w-4/10 "> --}}

        <x-login-signup-page>

            <div class="w-full my-3">
            <p class="text-2xl mx-auto font-bold text-color3/80">Sign up</p>
            </div>

            <form x-data="{passVisible: false, confPassVisible: false}" class="w-full flex flex-col gap-y-2 mb-2" 
            
            {{-- @submit.prevent="
            passVisible = false; confPassVisible = false; $el.submit()" --}}
            wire:submit="signup">

            

            {{-- Each div is Username, Email, Password, Confirm Password --}}

                <div class="w-full flex flex-col">
                    <label for="username" class="text-start text-xs px-2 py-1">Sign up</label>
                    <input type="text" id="username" name="username" placeholder="Username"
                        class="text-base bg-color1 rounded-[12px] p-2
                        border-1 border-color3/20 hover:border-color3/40" 
                        wire:model="username"/>
                </div>

                <div class="w-full flex flex-col">
                    <label for="email" class="text-start text-xs px-2 py-1">Email address</label>
                    <input type="email" id="email" name="email" placeholder="Email address"
                        class="text-base bg-color1 rounded-[12px] p-2
                        border-1 border-color3/20 hover:border-color3/40" 
                        wire:model="email"/>
                </div>

                <div class="w-full flex flex-col">
                    <label for="password" class="text-start text-xs px-2 py-1">Password</label>

                    <div class="w-full relative">
                        <input x-bind:type="!passVisible ? 'password' : 'text'" id="password" name="password" placeholder="Enter password"
                            class="w-full text-base bg-color1 rounded-[12px] p-2
                            border-1 border-color3/20 hover:border-color3/40" 
                            wire:model="password"/>

                        {{-- Eye, password visibility --}}
                        <button type="button" class="absolute right-4 top-0 bottom-0 my-auto text-color3/75"
                        @click="passVisible = !passVisible"
                        tabindex="-1">
                        
                            <svg x-show="!passVisible" class="size-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>

                            <svg x-show="passVisible" class="size-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                            </svg>

                        </button>
                    </div>
                </div>

                <div class="w-full flex flex-col">
                    <label for="confirmPassword" class="text-start text-xs px-2 py-1">Confirm password</label>

                    <div class="w-full relative">
                        <input x-bind:type="!confPassVisible ? 'password' : 'text' " id="confirmPassword" name="confirmPassword" placeholder="Enter password again"
                            class="w-full text-base bg-color1 rounded-[12px] p-2
                            border-1 border-color3/20 hover:border-color3/40" 
                            wire:model="confPassword"/>

                        <button type="button" class="absolute right-4 top-0 bottom-0 my-auto text-color3/75"
                        @click="confPassVisible = !confPassVisible"
                        tabindex="-1">
                        
                            <svg x-show="!confPassVisible" class="size-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                            </svg>

                            <svg x-show="confPassVisible" class="size-[16px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                                <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/>
                                <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/>
                                <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/>
                            </svg>

                        </button>

                    </div>
                    
                </div>

                <button type="submit" class="bg-color1 rounded-[12px] my-3 py-2 text-base shadow-xs
                border-1 border-color3/30 hover:border-color3/40">Sign up</button>

            </form>

            <div class="border-1 border-color3/20 mb-3"></div>

            <p class="text-sm my-2">Already have an account? <a href="/login" class="underline" wire:navigate>Log in</a></p>

        </x-login-signup-page>
        
        {{-- </div> --}}









    {{-- </x-gradient-box>
</div> --}}
