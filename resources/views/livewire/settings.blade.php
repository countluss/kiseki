<div class="text-center remHeight w-full pb-1.5 px-2 sm:px-4 md:px-6 sm:pb-3 sm:pt-1 md:pb-4 md:pt-2 
lg:pt-2 lg:pb-4"
 x-data="{
    
    @if (session('settingsCurrentTab'))
        current: '{{session('settingsCurrentTab')}}',
    @else
        current: 'Profile',
    @endif

}">
    <x-gradient-box wClass="w-full" hClass="h-full" radiusClass="rounded-(--gradientBoxRadius)"
    addClass="flex flex-col items-center px-3 py-3 gap-y-2
    mbm:p-3 mbl:p-4
    sm:p-6 md:p-10
    lg:p-4 xl:p-6 2x:p-8
    lg:flex-row lg:p-4 lg:items-start lg:gap-x-4">

        {{-- First Box containing Profile, Sync, Log out --}}

        <x-gradient-inner-box wClass="w-full" hClass="h-[96px]" radiusClass="rounded-(--gradientBoxInnerRadius)"
        addClass="flex justify-center items-center gap-x-2 mbm:gap-x-3 mbl:gap-x-4 sm:gap-x-6 md:gap-x-8 text-sm mbm:text-base
        lg:flex-col lg:w-[300px] lg:gap-y-2 lg:py-4  lg:px-4 lg:h-[180px]
        xl:w-[400px] xl:h-[220px] shrink-0
        "
        >

            {{-- Profile --}}

            <button
                class="h-[40px] w-[72px] mbm:h-[48px] mbm:w-[90px] rounded-(--settingsButtonsRadius) 
                lg:h-full lg:w-full"
                :class = "current === 'Profile' ? 'bg-color1' : 'bg-color3/30 hover:bg-color3/40' "

                @click = "current = 'Profile';"
            >Profile</button>

            <button
                class="h-[40px] w-[72px] mbm:h-[48px] mbm:w-[90px] rounded-(--settingsButtonsRadius)
                lg:h-full lg:w-full"
                :class = "current === 'Sync' ? 'bg-color1' : 'bg-color3/30 hover:bg-color3/40' "

                @click = "current = 'Sync';"
            >Sync</button>

            <button
                class="h-[40px] w-[72px] mbm:h-[48px] mbm:w-[90px] rounded-(--settingsButtonsRadius) bg-color2/50 hover:bg-color2
                lg:h-full lg:w-full"
                
                wire:click="logout"
            >Log out</button>

        </x-gradient-inner-box>

        
        
        
        <x-gradient-inner-box wClass="w-full" hClass="" radiusClass="rounded-(--gradientBoxInnerRadius)"
        addClass="grow flex flex-col items-center justify-start
        p-2 mbm:p-4
        lg:h-full
        overflow-auto">

            {{-- Buttons on Profile settings page --}}

            <div class="flex flex-col w-full
            gap-y-2 mbm:gap-y-4"
            x-show="current === 'Profile' ">

                <button class="bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md">Change Profile Picture</button>

                <button class="bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md">Change Background</button>

                <button class="bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md">Change colors</button>

            </div>

            {{-- Buttons on Sync settings page --}}

            <div class="flex flex-col w-full
            gap-y-2 mbm:gap-y-4"
            x-show="current === 'Sync' "
            x-data="{syncWithSteamClicked: false}">

                <div id="statusDiv" class="h-[76px] flex flex-col items-center justify-center">

                    <p>Current Status: <span>Not Synced</span></p>

                </div>

                <button class="bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md"
                @click="syncWithSteamClicked= !syncWithSteamClicked;">Sync with Steam</button>

                <x-new-gradient-inner-box class="h-[200px] flex flex-col gap-y-2 items-center justify-center py-2
                 mbm:px-2 mbl:px-4"
                x-show="syncWithSteamClicked">

                    <a class="flex flex-row justify-center items-center gap-x-2 bg-[#3f5e2d] h-[40px] px-2
                    rounded-(--signInSteamBtnRadius) hover:shadow-sm cursor-pointer"
                    href="{{ route('attemptLink') }}"
                    >
                        <svg class="size-[24px]" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-steam" viewBox="0 0 16 16">
                            <path d="M.329 10.333A8.01 8.01 0 0 0 7.99 16C12.414 16 16 12.418 16 8s-3.586-8-8.009-8A8.006 8.006 0 0 0 0 7.468l.003.006 4.304 1.769A2.2 2.2 0 0 1 5.62 8.88l1.96-2.844-.001-.04a3.046 3.046 0 0 1 3.042-3.043 3.046 3.046 0 0 1 3.042 3.043 3.047 3.047 0 0 1-3.111 3.044l-2.804 2a2.223 2.223 0 0 1-3.075 2.11 2.22 2.22 0 0 1-1.312-1.568L.33 10.333Z"/>
                            <path d="M4.868 12.683a1.715 1.715 0 0 0 1.318-3.165 1.7 1.7 0 0 0-1.263-.02l1.023.424a1.261 1.261 0 1 1-.97 2.33l-.99-.41a1.7 1.7 0 0 0 .882.84Zm3.726-6.687a2.03 2.03 0 0 0 2.027 2.029 2.03 2.03 0 0 0 2.027-2.029 2.03 2.03 0 0 0-2.027-2.027 2.03 2.03 0 0 0-2.027 2.027m2.03-1.527a1.524 1.524 0 1 1-.002 3.048 1.524 1.524 0 0 1 .002-3.048"/>
                        </svg>
                        
                        <p>Sign in through Steam</p>
                    </a>

                    <p>Your steam account should be set to public to be able to sync data.</p>

                    <p>Current Status: Not Linked</p>
                </x-new-gradient-inner-box>

                <button class="bg-color1 h-[56px] w-full rounded-(--settingsButtonsRadius) hover:shadow-md">Refresh</button>

            </div>


            </x-gradient-inner-box>


    </x-gradient-box>

</div>