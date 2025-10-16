<div>
    
    {{-- Navbar wrapper --}}
    <div class="min-w-screen flex flex-row justify-center mb-2">

        {{-- Navbar (Logged Out) --}}
        <div class="h-[48px]
        w-[290px] mbm:w-[330px] mbl:w-[370px] sm:w-[410px] md:w-[450px]
        flex flex-row 
        gap-x-2 mbm:gap-x-3 mbl:gap-x-4 sm:gap-x-5 md:gap-x-6
        
        text-(length:--topBarFontSize)

        lg:w-[900px]
        lg:justify-between
        ">
                {{-- First component in Navbar --}}
                
                <a class="bg-color2 w-1/3 flex flex-row justify-center content-center items-center rounded-(--topBarDivBorderRadius)
                lg:w-(--topBarDivWidthDesktop)
                text-[20px]
                "
                href="/home" wire:navigate>
                    <p class="">kiseki</p>
                </a>

                {{-- Middle of Navbar --}}

                <div class="bg-color2 w-1/3 flex flex-row justify-center content-center items-center rounded-(--topBarDivBorderRadius) p-0.5
                lg:w-[500px]">
                    <div class="bg-color1/30 w-full h-full rounded-(--topBarInnerRadius) flex flex-row justify-center items-center">
                    
                        {{-- Home, Search, Login / Signup --}}

                        <a class="w-1/2 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)
                        lg:w-1/3

                        {{-- From Home,Login icons to Home,Search,Login texts on resizing --}}
                        {{-- Highlight icon if current page --}}

                        {{-- @if ($current === "Home")
                            bg-color1
                        @endif --}}

                        "
                        wire:current="bg-color1"
                        
                        href="/home" wire:navigate
                        >
                            
                            <svg class="size-[16px] lg:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                            </svg>

                            <p class="hidden lg:block">Home</p>

                        </a>

                        <button class="hidden w-1/3 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)
                        lg:flex                        
                        
                        {{-- @if ($current === "Search")
                            bg-color1
                        @endif --}}
                        
                        "
                        >
                            <p>Search</p>
                        </button>


                        <a class="w-1/2 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)
                        lg:w-1/3
                        
                        {{-- @if ($current === "LoginSignup")
                            bg-color1
                        @endif --}}

                        {{-- To check for login too --}}
                        "

                        wire:current="bg-color1"
                        href="/signup" wire:navigate
                        >
                            
                            <svg class="size-[16px] lg:hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        
                            <p class="hidden lg:block">Login / Signup</p>
                        </a>
                    
                    </div>
                </div>

                {{-- 3rd part of navbar --}}

                <div class="bg-color2 w-1/3 flex flex-row justify-center content-center items-center rounded-(--topBarDivBorderRadius) p-0.5
                lg:w-(--topBarDivWidthDesktop)">
                    <div class="bg-color1/30 w-full h-full rounded-(--topBarInnerRadius) flex flex-row justify-center items-center">

                        <button class="w-1/3 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)
                        
                        {{-- @if ($current === "Search")
                            bg-color1
                        @endif --}}
                        
                        ">
                            <svg class="size-(--topBarAboutIconSize)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </button>

                        <a class="w-1/3 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)">
                            <svg class="size-(--topBarAboutIconSize)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                            </svg>
                        </a>

                        <a class="w-1/3 h-full flex flex-row items-center justify-center rounded-(--topBarInnerRadius)">
                            <svg class="size-(--topBarAboutIconSize)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                            </svg>
                        </a>
                    </div>
                </div>

        </div>
    </div>

    
</div>