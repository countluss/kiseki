{{-- /login --}}

<x-login-signup-page>

    <div class="w-full my-3">
            <p class="text-2xl mx-auto font-bold text-color3/80">Login</p>
            </div>

            <form x-data="{passVisible: false}" class="w-full flex flex-col gap-y-2 mb-2" 
            
            {{-- @submit.prevent="
            passVisible = false; confPassVisible = false; $el.submit()" --}}

            wire:submit="login"
            
            >

            {{-- Each div is Username, Email, Password, Confirm Password --}}

                <div class="w-full flex flex-col">
                    <label for="username" class="text-start text-xs px-2 py-1">Log in</label>
                    <input type="text" id="username" name="username" placeholder="Username"
                        class="text-base bg-color1 rounded-[12px] p-2
                        border-1 border-color3/20 hover:border-color3/40" 
                        wire:model="username"/>
                </div>

                {{-- <div class="w-full flex flex-col">
                    <label for="email" class="text-start text-xs px-2 py-1">Email address</label>
                    <input type="email" id="email" name="email" placeholder="Email address"
                        class="text-base bg-color1 rounded-[12px] p-2
                        border-1 border-color3/20 hover:border-color3/40" />
                </div> --}}

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

                {{-- <div class="w-full flex flex-col">
                    <label for="confirmPassword" class="text-start text-xs px-2 py-1">Confirm password</label>

                    <div class="w-full relative">
                        <input x-bind:type="!confPassVisible ? 'password' : 'text' " id="confirmPassword" name="confirmPassword" placeholder="Enter password again"
                            class="w-full text-base bg-color1 rounded-[12px] p-2
                            border-1 border-color3/20 hover:border-color3/40" />

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
                    
                </div> --}}

                <button type="submit" class="bg-color1 rounded-[12px] my-3 py-2 text-base shadow-xs
                border-1 border-color3/30 hover:border-color3/40">Log in</button>

            </form>

            <div class="border-1 border-color3/20 mb-3"></div>

            <p class="text-sm my-2">Don't have an account? <a href="/signup" class="underline" wire:navigate>Sign up</a></p>

</x-login-signup-page>
